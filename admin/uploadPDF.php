
<?php

//upload.php

$pdf = ''; 

if(isset($_FILES['file']['name']))
{
 $pdf_name = $_FILES['file']['name'];
 $valid_extensions = array("jpg","jpeg","png" ,"pdf" );
 $extension = pathinfo($pdf_name, PATHINFO_EXTENSION);
 if(in_array($extension, $valid_extensions))
 {
  $upload_path = '../dat/' . $pdf_name;
  if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_path))
  {
   $message = 'PDF Uploaded';
   $pdf = $upload_path;
  }
  else
  {
   $message = 'There is an error while uploading PDF File';
  }
 }
 else
 {
  $message = 'Only File PDF allowed to upload';
 }
}
else
{
 $message = 'Select File';
}

 

$output = array(
 'message'  => $message,
 'image'   => $pdf
);

echo json_encode($output);

 
?>