<?php 
$name = $_POST['name'];
$nric = $_POST['nric'];
$email = $_POST['email'];
$state = $_POST['states'];


function check_number($number){
    if($number % 2 == 0){
        $number_ktrgn = "Even"; 
    }
    else{
        $number_ktrgn = "Odd";
    }

    return $number_ktrgn;
}


function state($nric) {

$kod_negeri = substr($nric, 6,2);
$kod_jantina = substr($nric,11);
$tarikh_lahir = substr($nric,0,6); 

if (in_array($kod_negeri,array(01,21,22,23,24))) {
	$negeri = "Johor";
} elseif (in_array($kod_negeri,array(02,25,26,27))) {
	$negeri = "Kedah";
} elseif (in_array($kod_negeri,array(03,28,29))) {
	$negeri = "Kelantan";
} elseif (in_array($kod_negeri,array(04,30))) {
	$negeri = "Melaka";
} elseif (in_array($kod_negeri,array(05,31,59))) {
	$negeri = "Negeri Sembilan";
} elseif (in_array($kod_negeri,array(07,34,35))) {
    $negeri = "Pulau Pinang";
} elseif (in_array($kod_negeri,array(06,32,33))) {
    $negeri = "Pahang";
} elseif (in_array($kod_negeri,array('0008',36,37,38,39))) {
    $negeri ="Perak";
} elseif (in_array($kod_negeri,array('0009',40))) {
    $negeri = "Perlis";
} elseif (in_array($kod_negeri,array(10,41,42,43,44))) {
    $negeri = "Selangor";
} elseif (in_array($kod_negeri,array(11,45,46))) {
    $negeri = "Terengganu";
} else {
	$negeri = "Invalid";
}

return $negeri;
}



function get_jantina($nric) {

$kod_jantina = substr($nric,-1,1); 

 if($kod_jantina % 2 == 0){
        $ktrgn_jantina = "Female"; 
    }
    else{
         $ktrgn_jantina = "Male";
    }

return $ktrgn_jantina;
}

function get_dob($nric) {

	$tahun = substr($nric, 0, 2);
	$bulan = substr($nric, 2, 2);
	$hari = substr($nric, 4, 2);

	$dob = $tahun . "-" . $bulan . "-" . $hari;

// echo date("d-M-Y", strtotime($dob));

return $dob;

}

echo $name;
echo "<br>";
echo $nric;
echo "<br>";
echo $email;
echo "<br>";
echo state($nric);
echo "<br>";
echo date("d-M-Y", strtotime(get_dob($nric)));
echo "<br>";
echo get_jantina($nric);
echo "<br>";
?>