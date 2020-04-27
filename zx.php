<?php
///////////////////////////////////////////
///////CREATED BY ZEX WAZAOWSKY////////
//////www.facebook.com/zxgans.tld///////
/////zxgans.tld@gmail.com//////
///////////////////////////////////////

include 'Tri_jancok.php';

$tri = new tri();
$imei = "868880043302499";
echo "Masukkan No Telepon Lu GoBlOk : ";
$msisdn = trim(fgets(STDIN));
$otp = $tri->request_otp($msisdn,$imei);
echo $otp[1] . "\r\n";
echo "Masukkan OTP nYa jUgA anjing : ";
$otp = trim(fgets(STDIN));
$login = $tri->login($msisdn,$otp);
$login = json_decode($login,true);
$bearer = $login['access_token'];
$id = $tri->trans($bearer);
$id = json_decode($id,true);
$id = $id['data'][0]['rewardTransactionId'];
for($id1 = 1500; $id1 < 1600;$id1++)
{
  $gas = $tri->claim($bearer,$id,$id1);
  echo $gas . "\r\n";
  sleep(2);
}


?>
figlet kontol
