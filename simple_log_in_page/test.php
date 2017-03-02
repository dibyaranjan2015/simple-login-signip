<?php
$upload_errors = array(
   UPLOAD_ERR_OK  => "No errors.",
   UPLOAD_ERR_INI_SIZE => "Larger than upload_max_filesize.",
   UPLOAD_ERR_FORM_SIZE => "Larger than MAX_FILE_SIZE.",
   UPLOAD_ERR_PARTIAL => "Partial upload",
   UPLOAD_ERR_NO_FILE => "No file.",
   UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
   UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
   UPLOAD_ERR_EXTENSION => "File upload stopped by extension."
);
if(isset($_POST['upload'])){
//	$DOCUMENT_ROOT =$_SERVER['DOCUMENT_ROOT'];
//	$upload_dir = $DOCUMENT_ROOT."/uploads";
	
	$tmp_file = $_FILES['file_upload']['tmp_name'];
	$file_name = $_FILES['file_upload']['name'];
	
	if(move_uploaded_file($tmp_file,"images/".$file_name)){
		echo 'file uploaded';
	}else{
		$error = $_FILES['file_upload']['error'];
		echo $upload_errors[$error];
	}
//	print_r ($_FILES['file_upload']);
}
  
?>
<html>
  <head>
    <title>test</title>
  </head>
  <body>
  <form method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" >
    <input type="file" name="file_upload">
	<input type="submit" name="upload" value="Upload">
 </form>	
  </body>
</html>