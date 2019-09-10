<!DOCTYPE html>
<html>
<head>
       <title>PHP form example: POST</title>
</head>
<body>
<form action="exercise2.php" method ="POST">
Name: <input type="text"  name="name" />
Surname: <input type ="text" name="surname" />
<input  type="submit" name="submit"  />
</form>
<?php

if(isset($_POST['submit']))
{
if($_POST["name" ] && $_POST["surname"])
{
echo "Welcome ". $_POST[ 'name'].' '. $_POST['surname'].  "<br/>";
}
if(!$_POST["name"]){
	echo "Please insert a name";
}
if(!$_POST["surname"]){
	echo"Please insert a surname";
}
}
?>
</body>
</html>