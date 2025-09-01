
<?php


$host = '203.170.129.7';
$dbname = 'pichayaa_e-catalog';
$username = 'pichayaa_guest';
$password = 'AMWJm8OC';


$connect = new PDO("mysql:host=$host;dbname=$dbname", "$username", "$password");
$received_data = json_decode(file_get_contents("php://input"));
$data = array();
$dataContent = array();


if($received_data->action == 'fetchallHomeWater')
{
 $query = "SELECT * FROM tbl_home WHERE category = 'water' AND display_flag = 'Y'  ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $dataContent[] = $row;
 }
 echo json_encode($dataContent);
}
if($received_data->action == 'fetchallHomeAir')
{
 $query = "SELECT * FROM tbl_home WHERE category = 'air' AND display_flag = 'Y'  ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $dataContent[] = $row;
 }
 echo json_encode($dataContent);
}
if($received_data->action == 'fetchallHomeBidet')
{
 $query = "SELECT * FROM tbl_home WHERE category = 'bidet' AND display_flag = 'Y'  ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $dataContent[] = $row;
 }
 echo json_encode($dataContent);
}

if($received_data->action == 'fetchallProductSheet')
{
 $query = "SELECT * FROM tbl_productsheet WHERE display_flag = 'Y' ORDER BY  display_flag DESC, case when category = 'water' then 1 when category = 'air' then 2 when category = 'bidet' then 3 end ASC ;";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $dataContent[] = $row;
 }
 echo json_encode($dataContent);
}
if($received_data->action == 'fetchallBrochure')
{
 $query = "SELECT * FROM tbl_brochure WHERE display_flag = 'Y' ORDER BY  display_flag DESC, case when category = 'water' then 1 when category = 'air' then 2 when category = 'bidet' then 3 end ASC ; ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $dataContent[] = $row;
 }
 echo json_encode($dataContent);
}
if($received_data->action == 'fetchallVideo')
{
 $query = "SELECT * FROM tbl_video WHERE display_flag = 'Y' ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $dataContent[] = $row;
 }
 echo json_encode($dataContent);
}
if($received_data->action == 'fetchallContent')
{
 $query = "SELECT * FROM tbl_productcontent WHERE display_flag = 'Y' ORDER BY id DESC  ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $dataContent[] = $row;
 }
 echo json_encode($dataContent);
}
if($received_data->action == 'fetchallDocument')
{
 $query = "SELECT * FROM tbl_document WHERE display_flag = 'Y'  ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $dataContent[] = $row;
 }
 echo json_encode($dataContent);
}




if($received_data->action == 'searchDataBrochure')
{
  $search = $received_data->SearchPD;
  $query = "SELECT * FROM  tbl_brochure WHERE  product_code LIKE '%$search%' OR product_name LIKE '%$search%' and display_flag = 'Y' ";
 
  $statement = $connect->prepare($query);
  $statement->execute();
  while($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $data[] = $row;
  }
  echo json_encode($data);
}


if($received_data->action == 'searchDataHome')
{
  $search = $received_data->SearchPD;
  $query = "SELECT * FROM  tbl_home WHERE product_name LIKE '%$search%'and display_flag = 'Y' ";

  $statement = $connect->prepare($query);
  $statement->execute();
  while($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $data[] = $row;
  }
  echo json_encode($data);
}

if($received_data->action == 'searchDataProductSheet')
{
  $search = $received_data->SearchPD;
  $query = "SELECT * FROM  tbl_productsheet WHERE  product_code LIKE '%$search%' OR product_name LIKE '%$search%' and display_flag = 'Y' ";

  $statement = $connect->prepare($query);
  $statement->execute();
  while($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $data[] = $row;
  }
  echo json_encode($data);
}

if($received_data->action == 'searchDataContent')
{
  $search = $received_data->SearchPD;
  $query = "SELECT * FROM  tbl_productcontent WHERE  content_name LIKE '%$search%' and display_flag = 'Y' ";

  $statement = $connect->prepare($query);
  $statement->execute();
  while($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $data[] = $row;
  }
  echo json_encode($data);
}


if($received_data->action == 'searchDataDocument')
{
  $search = $received_data->SearchPD;
  $query = "SELECT * FROM  tbl_document WHERE  description_name LIKE '%$search%' and display_flag = 'Y' ";

  $statement = $connect->prepare($query);
  $statement->execute();
  while($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $data[] = $row;
  }
  echo json_encode($data);
}







?>
