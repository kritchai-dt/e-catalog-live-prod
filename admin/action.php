
<?php


  //  $host = "localhost";
  //  $dbname = "coway_e-catalogue";
  //  $username = "root";
  //  $password = "";
 
  $host = '203.170.129.7';
  $dbname = 'pichayaa_e-catalog';
  $username = 'pichayaa_arm';
  $password = '6Xb0kXoa';

$connect = new PDO("mysql:host=$host;dbname=$dbname", "$username", "$password");
$conn = new mysqli( $host , $username , $password , $dbname );
$received_data = json_decode(file_get_contents("php://input"));
$data = array();
$dataContent = array();


 



if($received_data->action == 'fetchall')
{
 $query = "SELECT * FROM tbl_home ORDER BY  display_flag DESC, case when category = 'water' then 1 when category = 'air' then 2 when category = 'bidet' then 3 end ASC ;";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}

if($received_data->action == 'fetchallContent')
{
 $query = "SELECT * FROM tbl_productcontent ORDER BY display_flag DESC;";
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
 $query = "SELECT * FROM tbl_video ORDER BY display_flag DESC;";
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
 $query = "SELECT * FROM tbl_brochure ORDER BY  display_flag DESC, case when category = 'water' then 1 when category = 'air' then 2 when category = 'bidet' then 3 end ASC ;";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $dataContent[] = $row;
 }
 echo json_encode($dataContent);
}
if($received_data->action == 'fetchallProductsheet')
{
 $query = "SELECT * FROM tbl_productsheet ORDER BY  display_flag DESC, case when category = 'water' then 1 when category = 'air' then 2 when category = 'bidet' then 3 end ASC ;";
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
 $query = "SELECT * FROM tbl_document ORDER BY display_flag DESC;";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $dataContent[] = $row;
 }
 echo json_encode($dataContent);
}






if($received_data->action == 'search')
{

  $category = $received_data->categorySearch;
  $display = $received_data->displayFlagSearch;

  if($received_data->hiddenSearch == 'PS'){
    $tbl = "tbl_productsheet";
  }
  else if($received_data->hiddenSearch == 'D'){
    $tbl = "tbl_document";
    $category = "No";
  }
  else if($received_data->hiddenSearch == 'H'){
    $tbl = "tbl_home";
  }
  else if($received_data->hiddenSearch == 'B'){
    $tbl = "tbl_brochure";
  }
  else if($received_data->hiddenSearch == 'C'){
    $tbl = "tbl_productcontent";
    $category = "No";
  }
  else if($received_data->hiddenSearch == 'V'){
    $tbl = "tbl_video";
    $category = "No";
  }

  if($display != '' or $display != 'all'){
    $queryDisplay = "WHERE display_flag = '$display'";
  }
  if( $display == 'all' or $display == ''){
    $queryDisplay = "WHERE display_flag IN ('Y', 'N')";
  }

  if($category != '' or $category != 'all'){
    $queryCategory = " AND category = '$category' ";
  }
  if( $category == 'all' or $category == '' ){
    $queryCategory = " AND category IN ('water', 'air' , 'bidet')";
  }

  $query = "SELECT * FROM  $tbl $queryDisplay $queryCategory ORDER BY display_flag DESC;  ";


 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}

if($received_data->action == 'search2')
{

  $display = $received_data->displayFlagSearch;

  
  if($received_data->hiddenSearch == 'C'){
    $tbl = "tbl_productcontent";
  }
  else if($received_data->hiddenSearch == 'V'){
    $tbl = "tbl_video";
  }
  else if($received_data->hiddenSearch == 'D'){
    $tbl = "tbl_document";
  }

  if($display != '' or $display != 'all'){
    $queryDisplay = "WHERE display_flag = '$display'";
  }
  if( $display == 'all' or $display == ''){
    $queryDisplay = "WHERE display_flag IN ('Y', 'N')";
  }


  $query = "SELECT * FROM  $tbl $queryDisplay ORDER BY display_flag DESC;";


 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}








if($received_data->action == 'insert')
{
 $data = array(
  ':product_name' => $received_data->ProductName,
  ':img_src' => $received_data->Image,
  ':category' => $received_data->Category,
  ':display_flag' => $received_data->DisplayFlag
 );

 $query = "INSERT INTO tbl_home (product_name, img_src, category , display_flag ) VALUES (:product_name, :img_src, :category ,:display_flag)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 $output = array(
  'message' => 'Data Inserted'
 );
 echo json_encode($output);
}

if($received_data->action == 'insertContent')
{
 $data = array(
  ':content_name' => $received_data->ContentName,
  ':img_src' => $received_data->Image,
  ':display_flag' => $received_data->DisplayFlag
 );
 $query = "INSERT INTO tbl_productcontent ( content_name, img_src , display_flag ) VALUES (:content_name , :img_src , :display_flag)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 $output = array(
  'message' => 'Data Inserted'
 );
 echo json_encode($output);
}

if($received_data->action == 'insertVideo')
{
 $data = array(
  ':url_yt' => $received_data->url_yt,
  ':code_yt' => $received_data->code_yt,
  ':display_flag' => $received_data->DisplayFlag
 );
 $query = "INSERT INTO tbl_video ( url_yt, code_yt , display_flag ) VALUES (:url_yt, :code_yt,:display_flag)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 $output = array(
  'message' => 'Data Inserted'
 );
 echo json_encode($output);
}
if($received_data->action == 'insertBrochure')
{
 $data = array(
  ':product_name' => $received_data->ProductName,
  ':product_code' => $received_data->ProductCode,
  ':img_src' => $received_data->Image,
  ':file_src' => $received_data->FileSrc,
  ':category' => $received_data->Category,
  ':display_flag' => $received_data->DisplayFlag
 );
 $query = "INSERT INTO tbl_brochure (product_name, product_code, img_src, file_src, category, display_flag ) VALUES (:product_name, :product_code, :img_src, :file_src, :category, :display_flag)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 $output = array(
  'message' => 'Data Inserted'
 );
 echo json_encode($output);
}
if($received_data->action == 'insertProductsheet')
{
 $data = array(
  ':product_name' => $received_data->ProductName,
  ':product_code' => $received_data->ProductCode,
  ':file_src_en' => $received_data->FileSrcEN,
  ':file_src_th' => $received_data->FileSrcTH,
  ':category' => $received_data->Category,
  ':display_flag' => $received_data->DisplayFlag
 );
 $query = "INSERT INTO tbl_productsheet (product_name, product_code, file_src_th, file_src_en, category, display_flag ) VALUES (:product_name, :product_code, :file_src_th, :file_src_en, :category, :display_flag)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 $output = array(
  'message' => 'Data Inserted'
 );
 echo json_encode($output);
}

if($received_data->action == 'insertDocument')
{
 $data = array(
  ':description_name' => $received_data->DescriptionName,
  ':file_src' => $received_data->FileTH,
  ':display_flag' => $received_data->DisplayFlag
 );
 $query = "INSERT INTO tbl_document ( description_name, file_src, display_flag ) VALUES (:description_name, :file_src, :display_flag)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 $output = array(
  'message' => 'Data Inserted'
 );
 echo json_encode($output);
}













if($received_data->action == 'fetchSingle')
{
 $query = " SELECT * FROM tbl_home WHERE id = '".$received_data->id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $data['id'] = $row['id'];
  $data['product_name'] = $row['product_name'];
  $data['img_src'] = $row['img_src'];
  $data['category'] = $row['category'];
  $data['display_flag'] = $row['display_flag'];
 }
 echo json_encode($data);
}
if($received_data->action == 'fetchSingleContent')
{
 $query = " SELECT * FROM tbl_productcontent WHERE id = '".$received_data->id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $data['id'] = $row['id'];
  $data['content_name'] = $row['content_name'];
  $data['img_src'] = $row['img_src'];
  $data['display_flag'] = $row['display_flag'];
 }
 echo json_encode($data);
}
if($received_data->action == 'fetchSingleVideo')
{
 $query = " SELECT * FROM tbl_video WHERE id = '".$received_data->id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $data['id'] = $row['id'];
  $data['url_yt'] = $row['url_yt'];
  $data['code_yt'] = $row['code_yt'];
  $data['display_flag'] = $row['display_flag'];
 }
 echo json_encode($data);
}
if($received_data->action == 'fetchSingleBrochure')
{
 $query = " SELECT * FROM tbl_brochure WHERE id = '".$received_data->id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $data['id'] = $row['id'];
  $data['img_src'] = $row['img_src'];
  $data['file_src'] = $row['file_src'];
  $data['product_name'] = $row['product_name'];
  $data['product_code'] = $row['product_code'];
  $data['category'] = $row['category'];
  $data['display_flag'] = $row['display_flag'];
 }
 echo json_encode($data);
}
if($received_data->action == 'fetchSingleProductsheet')
{
 $query = " SELECT * FROM tbl_productsheet WHERE id = '".$received_data->id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $data['id'] = $row['id'];
  $data['file_src_en'] = $row['file_src_en'];
  $data['file_src_th'] = $row['file_src_th'];
  $data['product_name'] = $row['product_name'];
  $data['product_code'] = $row['product_code'];
  $data['category'] = $row['category'];
  $data['display_flag'] = $row['display_flag'];
 }
 echo json_encode($data);
}
if($received_data->action == 'fetchSingleDocument')
{
 $query = " SELECT * FROM tbl_document WHERE id = '".$received_data->id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $data['id'] = $row['id'];
  $data['description_name'] = $row['description_name'];
  $data['file_src'] = $row['file_src'];
  $data['display_flag'] = $row['display_flag'];
 }
 echo json_encode($data);
}











if($received_data->action == 'update')
{
 $data = array(
  ':product_name' => $received_data->ProductName,
  ':img_src' => $received_data->Image,
  ':category' => $received_data->Category,
  ':display_flag' => $received_data->DisplayFlag,
  ':id'   => $received_data->hiddenId
 );
 $query = " UPDATE tbl_home SET product_name = :product_name, img_src = :img_src, category = :category, display_flag = :display_flag WHERE id = :id";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 $output = array(
  'message' => 'Data Updated'
 );
 echo json_encode($output);
}
if($received_data->action == 'updateContent')
{
 $data = array(
  ':content_name' => $received_data->ContentName,
  ':img_src' => $received_data->Image,
  ':display_flag' => $received_data->DisplayFlag,
  ':id'   => $received_data->hiddenId
 );
 $query = " UPDATE tbl_productcontent SET  content_name = :content_name,  img_src = :img_src,  display_flag = :display_flag WHERE id = :id";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 $output = array(
  'message' => 'Data Updated'
 );
 echo json_encode($output);
}
if($received_data->action == 'updateVideo')
{
 $data = array(
  ':url_yt' => $received_data->url_yt,
  ':code_yt' => $received_data->code_yt,
  ':display_flag' => $received_data->DisplayFlag,
  ':id'   => $received_data->hiddenId
 );
 $query = " UPDATE tbl_video SET url_yt = :url_yt, code_yt = :code_yt,  display_flag = :display_flag WHERE id = :id";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 $output = array(
  'message' => 'Data Updated'
 );
 echo json_encode($output);
}
if($received_data->action == 'updateBrochure')
{
 $data = array(
  ':product_name' => $received_data->ProductName,
  ':product_code' => $received_data->ProductCode,
  ':img_src' => $received_data->Image,
  ':file_src' => $received_data->FileSrc,
  ':category' => $received_data->Category,
  ':display_flag' => $received_data->DisplayFlag,
  ':id'   => $received_data->hiddenId
 );
 $query = " UPDATE tbl_brochure SET product_code = :product_code, product_name = :product_name, img_src = :img_src, file_src = :file_src, category = :category, display_flag = :display_flag WHERE id = :id";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 $output = array(
  'message' => 'Data Updated'
 );
 echo json_encode($output);
}
if($received_data->action == 'updateProductsheet')
{
 $data = array(
  ':product_name' => $received_data->ProductName,
  ':product_code' => $received_data->ProductCode,
  ':file_src_en' => $received_data->FileSrcEN,
  ':file_src_th' => $received_data->FileSrcTH,
  ':category' => $received_data->Category,
  ':display_flag' => $received_data->DisplayFlag,
  ':id'   => $received_data->hiddenId
 );
 $query = " UPDATE tbl_productsheet SET product_code = :product_code, product_name = :product_name, file_src_en = :file_src_en, file_src_th = :file_src_th, category = :category, display_flag = :display_flag WHERE id = :id";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 $output = array(
  'message' => 'Data Updated'
 );
 echo json_encode($output);
}

if($received_data->action == 'updateDocument')
{
 $data = array(
  ':description_name' => $received_data->DescriptionName,
  ':file_src' => $received_data->FileSrc,
  ':display_flag' => $received_data->DisplayFlag,
  ':id'   => $received_data->hiddenId
 );
 $query = " UPDATE tbl_document SET description_name = :description_name, file_src = :file_src, display_flag = :display_flag WHERE id = :id";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 $output = array(
  'message' => 'Data Updated'
 );
 echo json_encode($output);
}







 



if($received_data->action == 'delete')
{
 $query = " DELETE FROM tbl_home  WHERE id = '".$received_data->id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $output = array(
  'message' => 'Data Deleted'
 );
 echo json_encode($output);
}
if($received_data->action == 'deleteContent')
{
 $query = " DELETE FROM tbl_productcontent  WHERE id = '".$received_data->id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $output = array(
  'message' => 'Data Deleted'
 );
 echo json_encode($output);
}
if($received_data->action == 'deleteVideo')
{
 $query = " DELETE FROM tbl_video  WHERE id = '".$received_data->id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $output = array(
  'message' => 'Data Deleted'
 );
 echo json_encode($output);
}
if($received_data->action == 'deleteBrochure')
{
 $query = " DELETE FROM tbl_brochure  WHERE id = '".$received_data->id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $output = array(
  'message' => 'Data Deleted'
 );
 echo json_encode($output);
}
if($received_data->action == 'deleteProductsheet')
{
 $query = " DELETE FROM tbl_productsheet  WHERE id = '".$received_data->id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $output = array(
  'message' => 'Data Deleted'
 );
 echo json_encode($output);
}
if($received_data->action == 'deleteDocument')
{
 $query = " DELETE FROM tbl_document  WHERE id = '".$received_data->id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $output = array(
  'message' => 'Data Deleted'
 );
 echo json_encode($output);
}





?>
