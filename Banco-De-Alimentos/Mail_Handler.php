<?php
if(isset($_POST['submit'])){
	$PersonalEmail = "junicavigamer@gmail.com";
	$From = $_POST['Email'];
	$First_Name = $_POST['FirstName'];
	$Last_Name = $_POST['LastName'];
	$Subject = "Cotacto - Control Time - Banco de Alimentos";
	$Message = $First_Name . " " . $Last_Name . " Envió:" . "\n\n" . $_POST['Message'];
	$Headers = "From:" .$From;
	mail($PersonalEmail, $Subject, $Message, $Headers);
	echo "Gracias por comunicarte con nostros " .$First_Name;
}
?>