<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>
<?php
$nameerr=$emailerr=$dderr=$mmerr=$yyyyerr=$gendererr=$degreeerr=$blooderr="";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
		$nameerr="* Name requirment error!";
	}
	else
	{	
		$name=$_POST["name"];	
	}
	if(empty($_POST["email"]))
	{
		$emailerr="* Email requirment error!";
	}
	else
	{	
		$email=$_POST["email"];	
	}
	if(empty($_POST["dd"]))
	{
		$dderr="* Day requirment error!";
	}
	else
	{	
		$dd=$_POST["dd"];	
	}
	if(empty($_POST["mm"]))
	{
		$mmerr="* Month requirment error!";
	}
	else
	{	
		$mm=$_POST["mm"];	
	}
	if(empty($_POST["yyyy"]))
	{
		$yyyyerr="* Year requirment error!";
	}
	else
	{	
		$yyyy=$_POST["yyyy"];	
	}
	if(empty($_POST["gender"]))
	{
		$gendererr="* Gender requirment error!";
	}
	else
	{	
		$gender=$_POST["gender"];	
	}
	if(empty($_POST["degree"]))
	{
		$degreeerr="* Degree requirment error!";
	}
	else
	{	
		$degree=$_POST["degree"];	
	}
	if(empty($_POST["blood"]))
	{
		$blooderr="* Blood requirment error!";
	}
	else
	{	
		$blood=$_POST["blood"];	
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
	
	<b>Date of Birth:</b>
	<input type="number" name="dd">
	<span style="color:black"><?php echo $dderr; ?></span>
	<b>/</b>
	<input type="number" name="mm">
	<span style="color:black"><?php echo $mmerr; ?></span>
	<b>/</b>
	<input type="number" name="yyyy">
	<span style="color:black"><?php echo $yyyyerr; ?></span>
	<br><br>
	
	<b>Gender</b>
	<input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female
	<input type="radio" name="gender" value="Other">Other
	<span style="color:black"><?php echo $gendererr; ?></span>
	<br><br>
	<b>Degree</b>
	<input type="checkbox" name="degree" value="SSC">SSC
	<input type="checkbox" name="degree" value="HSC">HSC
	<input type="checkbox" name="degree" value="BSc">BSc
	<input type="checkbox" name="degree" value="MSc">MSc
	<span style="color:black"><?php echo $degree; ?></span>
	<br><br>
	<b>Blood Group</b>
	<label for="blood">Choose Blood Group:</label>

	<select id="blood">
	  <option value="A+">A+</option>
	  <option value="A-">A-</option>
	  <option value="B+">B+</option>
	  <option value="B-">B-</option>
	  <option value="O+">O+</option>
	  <option value="O-">O-</option>
	  <option value="AB+">AB+</option>
	  <option value="AB-">AB-</option>
	</select>
	<span style="color:black"><?php echo $blooderr; ?></span>
	<br><br>
	

	<input type="submit" value="submit">
	
</form>




</body>
</html>