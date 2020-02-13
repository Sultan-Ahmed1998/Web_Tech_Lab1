<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>

<?php 

class user {
	
	public $name;
	public $email;
	public $gender;
	
	/*function __construct($name, $email, $gender)
	{
		$this -> name = $name;
		$this -> email = $email;
		$this ->  gender = $gender;
	}*/
	function __construct()
	{
		$this -> name = " ";
		$this -> email = " ";
		$this ->  gender = " ";
	}
	
	function set_name($name)
	{
		$this -> name=$name;
	}
	
	function  get_name()
	{
		return $this -> name;
	}
	function set_email($email)
	{
		$this -> email=$email;
	}
	
	function  get_email()
	{
		return $this -> email;
	}
	function set_gender($gender)
	{
		$this -> gender=$gender;
	}
	
	function  get_gender()
	{
		return $this -> gender;
	}
	
}
$user = new User();

?>

<?php
$nameerr=$emailerr=$gendererr="";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
		$nameerr="* Name requirment error!";
	}
	else
	{	
		$user -> set_name($_POST["name"]);	
	}
	if(empty($_POST["email"]))
	{
		$emailerr="* Email requirment error!";
	}
	else
	{	
		$user -> set_email($_POST["email"]);	
	}
	
	if(empty($_POST["gender"]))
	{
		$gendererr="* Gender requirment error!";
	}
	else
	{	
		$user -> set_gender($_POST["gender"]);	
	}
	
}

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	
	<b>Name:</b>
	<input type="text" name="name">
	<span style="color:black"><?php echo $nameerr; ?></span><br><br>
	
	<b>Email:</b>
	<input type="text" name="email">
	<span style="color:black"><?php echo $emailerr; ?></span><br><br>
	
	
	<b>Gender</b>
	<input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female
	<input type="radio" name="gender" value="Other">Other
	<span style="color:black"><?php echo $gendererr; ?></span>
	<br><br>
	
	

	<input type="submit" value="submit">
	
</form>

<?php

echo "Data of User : <br>";
//$user = new  User($name,$email,$gender);
echo $user -> get_name();
echo "<br>";
echo $user -> get_email();
echo "<br>";
echo $user -> get_gender();
echo "<br>";


?>

<?php

$file = fopen("User Info.txt", "w") or die("Unable to open file!");

$data = $user->get_name()."\n";

fwrite($file, $data);

$data = $user->get_email()."\n";

fwrite($file, $data);

$data = $user->get_gender()."\n";

fwrite($file, $data);

fclose($file);


?>
</body>
</html>

<?php

	$dom = new DOMDocument();

		$dom->encoding = 'utf-8';

		$dom->xmlVersion = '1.0';

		$dom->formatOutput = true;

	$xml_file_name = 'user_list.xml';

		$root = $dom->createElement('Users');

		$user_node = $dom->createElement('User');

		$attr_name = new DOMAttr('Name', $user->name);

		$user_node->setAttributeNode($attr_name);

	$child_node_email = $dom->createElement('Email',$user->email);

		$user_node->appendChild($child_node_email);
		
		$child_node_gender = $dom->createElement('Gender',$user->gender);

		$user_node->appendChild($child_node_gender);


		$root->appendChild($user_node);

		$dom->appendChild($root);

	$dom->save($xml_file_name);

?>



