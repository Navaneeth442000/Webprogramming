<html>
<body>
<?php
$name = "";
$email = "";
$phone = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{ 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$valid = true;
if(empty($name)) {
echo "<script>alert('Please enter valid name.')</script>";
$valid = false;
}
if (empty($email))
{
echo "<script>alert('Please enter valid email.')</script>";
$valid = false;
}
if (empty($phone))
{
echo "<script>alert('Please enter valid phone no.')</script>";$valid = false;
}
if($valid){
$name = "";
$email = "";
$phone = "";
echo "<script>alert('Submission successful!')</script>";
}
}
?>
<h1>Registration Form</h1>
<form method="post" action="#">
Name: <input type="text" name="name" value="<?php echo 
$name; ?>"><br>
email-Id: <input type="email" name="email" value="<?php echo 
$email; ?>"><br>
phone : <input type="number" name="phone" value="<?php echo 
$phone; ?>"><br><br>
<input type="submit">
</form>
</body>
</html>