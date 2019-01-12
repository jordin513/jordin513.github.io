<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr="";
$name = $email = $comment = $website = "";
$incorrect=false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $incorrect=true;
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $incorrect=true;
      $nameErr = "Only letters and spaces allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $incorrect=true;
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $incorrect=true;
      $emailErr = "Invalid email format"; 
    }
  }
    
  

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Company/Website: <input type="text" name="website" value="<?php echo $website;?>">
  
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>



<?php
$myfile = fopen("survey_log.txt", "a") or die("Unable to open file!");
$space= ", ";
$end="\n \n";

if($incorrect==false){
  fwrite($myfile, date("l") . ", " . date("Y-m-d"));
  fwrite($myfile, $space);
  fwrite($myfile, $name);
  fwrite($myfile, $space);
  fwrite($myfile, $email);
  fwrite($myfile, $space);
  fwrite($myfile, $website);
  fwrite($myfile, $space);
  fwrite($myfile, $comment);
  fwrite($myfile, $end);
  fclose($myfile);
}
else{
  echo "incorrect form submission";
  fwrite($myfile, date("l") . ", " . date("Y-m-d"));
  fwrite($myfile, $space);
  fwrite($myfile,$nameErr);
  fwrite($myfile, $space);
  fwrite($myfile,$emailErr);
  fwrite($myfile, $space);
  fwrite($myfile, $name);
  fwrite($myfile, $space);
  fwrite($myfile, $email);
  fwrite($myfile, $space);
  fwrite($myfile, $website);
  fwrite($myfile, $space);
  fwrite($myfile, $comment);
  fwrite($myfile, $end);
  fclose($myfile);
}

  ?>

</body>
</html>