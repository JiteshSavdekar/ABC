


<?php
include("cont.php");


if(isset($_POST['submit']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$birthdaydate=$_POST['birthdaydate'];
$mobail=$_POST['mobail'];
$gender=$_POST['gender'];


$res=mysqli_query($mysqli,"INSERT into studan values('','$firstname','$lastname','$email','$birthdaydate','$mobail','$gender')");
if($res){

echo "<script> location.href='wlcome.php'</script>";
}
else{

echo "failld";
}

}

?>