<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<form action = "register_check.php" method = "POST">
<?php
// define variables and set to empty values
$nameErr = $emailErr =  $nricErr = $passwordErr = $VpasswordErr = "";
$name = $email = $nric = $state = $password  = $Vpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["nric"])) {
    $nricErr = "NRIC is required";
  } else {
    $nric = test_input($_POST["nric"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["state"])) {
    $state = "";
  } else {
    $state = test_input($_POST["state"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["Vpassword"])) {
    $VpasswordErr = "Verify Password is required";
  } else {
    $Vpassword = test_input($_POST["Vpassword"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Registration Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  NRIC: <input type="text" name="nric">
  <span class="error">* <?php echo $nricErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  State:<select name="states" id="states" required>
    <option value="Johor">Johor</option>
    <option value="Kedah">Kedah</option>
    <option value="Kelantan">Kelantan</option>
    <option value="Melaka">Melaka</option>
    <option value="Negeri Sembilan">Negeri Sembilan</option>
    <option value="Pulau Pinang">Pulau Pinang</option>
    <option value="Pahang">Pahang</option>
    <option value="Perak">Perak</option>
    <option value="Perlis">Perlis</option>
    <option value="Selangor">Selangor</option>
    <option value="Terengganu">Terengganu</option>
  </select>
  <br><br>
  Password: <input type="password" id="password">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  Verify Password: <input type="password" id="vpassword">
  <span class="error">* <?php echo $VpasswordErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <INPUT TYPE = "RESET" NAME = "RESET" VALUE = "Reset">
</form>
</body>
</html>