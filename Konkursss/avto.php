<?php
$login=@$_GET['login'];
$pass=@$_GET['pass'];
if (!empty($login)) {
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $login.'&password='.$pass);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
$res = curl_exec($curl);
if(!$res) {
echo '<script language="javascript"> window.location="https://webvm.ru:1500/ispmgr?&func=auth&username='.$login.'&password='.$pass.'";</script>';
}
else {
$doc = new SimpleXMLElement($res);
foreach ($doc->auth as $id) {
echo '<script language="javascript"> window.location="https://webvm.ru:1500/ispmgr?auth='.$id['id'].'";</script>';
}
foreach ($doc->error as $type) {
echo '<script language="javascript"> window.location="https://webvm.ru:1500/ispmgr?&func=auth&username='.$login.'&password='.$pass.'";</script>';
}
}
curl_close($curl);
}
?>
