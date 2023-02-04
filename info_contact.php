<?php
if(isset($_POST['Valider'])
echo $_POST['email'];
echo $_POST['lastname'];
echo $_POST['firstname'];
echo $_POST['sexe'];
echo $_POST['textarea'];
print $_POST['email'];
print $_POST['lastname'];
print $_POST['firstname'];
print $_POST['sexe'];
print $_POST['textarea'];
$email = htmlspecialchars($_POST['email']);
$lastname  = htmlspecialchars($_POST['lastname']);

echo  $email, ' ', $to;
?>