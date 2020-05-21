<?php
$connect = mysqli_connect("192.168.0.38:9000", "Axis@123", "root", "CONTACTS");
echo $connect;
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
	echo "failed";
}else{
	echo "working:::".$connect;
}
$output = '';
// just to check echo isset($_POST["import"]);
if(isset($_POST["import"]))
{
  echo "success";

 $extension = end(explode(".", $_FILES["excel"]["name"]));
  // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  echo "success1";
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  echo $file;
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  echo "INCLUDED";



//   include './config.php';
//       require '../../PHPExcel_1.8/Classes/PHPExcel.php';
//       require_once '../../PHPExcel_1.8/Classes/PHPExcel/IOFactory.php';
//       $target_dir = './uploads/';
// $target_file = $target_dir . basename($_FILES["excel"]["name"]);
// $objPHPExcel = PHPExcel_IOFactory::load($target_file);


// $fileType = 'Excel5';
// $fileName = 'abc.xls';
// $objReader = PHPExcel_IOFactory::createReader($fileType);
// $objPHPExcel = $objReader->load($fileName);



$objPHPExcel = PHPExcel_IOFactory::load($this->$file); // create object of PHPExcel library by using load() method and in load method define path of selected file
  echo "entered";


  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";

  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
    echo "inner";
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";

    $SrNo = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
		$Category = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $Person_Name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
		$Designation = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
		$Company_Name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
		$Address = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $Building_Name_No = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
		$Street_Name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
		$Area = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
		$City = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
    $Contact_No = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
		$Emial_ID = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(11, $row)->getValue());
		$Confirmed_By = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(12, $row)->getValue());
		$On_Date = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(13, $row)->getValue());
    $Disposition = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(14, $row)->getValue());
		$Remarks = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(15, $row)->getValue());
		$Caller_Name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(16, $row)->getValue());

echo $objPHPExcel;
// $query = "INSERT INTO contact_data(SrNo, Category, Person_Name, Designation, Company_Name, Address, Building_Name_No, Street_Name, Area, City, Contact_No, Emial_ID, Confirmed_By, On_Date, Disposition, Remarks, Caller_Name)VALUES($SrNo, $Category, $Person_Name, $Designation, $Company_Name, $Address, $Building_Name_No, $Street_Name, $Area, $City, $Contact_No, $Emial_ID, $Confirmed_By, $On_Date,  $Disposition, $Remarks, $Caller_Name)";



$query = "INSERT INTO contact_data(SrNo, Category, Person_Name, Designation, Company_Name, Address, Building_Name_No, Street_Name, Area, City, Contact_No, Emial_ID, Confirmed_By, On_Date, Disposition, Remarks, Caller_Name)VALUES ('".$SrNo."', '".$Category."' ,  '".$Person_Name."' , '".$Designation."' , '".$Company_Name."' , '".$Address."' , '".$Building_Name_No."' , '".$Street_Name."' , '".$Area."' , '".$City."' , '".$Contact_No."' , '".$Emial_ID."' , '".$Confirmed_By."' , '".$On_Date."' , '".$Disposition."' , '".$Remarks."' , '".$Caller_Name."')";

    mysqli_query($connect, $query);

    $output .= '<td>'.$SrNo.'</td>';
    $output .= '<td>'.$Category.'</td>';
		$output .= '<td>'.$Person_Name.'</td>';
    $output .= '<td>'.$Designation.'</td>';
		$output .= '<td>'.$Company_Name.'</td>';
    $output .= '<td>'.$Address.'</td>';
		$output .= '<td>'.$Building_Name_No.'</td>';
    $output .= '<td>'.$Street_Name.'</td>';
		$output .= '<td>'.$Area.'</td>';
    $output .= '<td>'.$City.'</td>';
		$output .= '<td>'.$Contact_No.'</td>';
    $output .= '<td>'.$Emial_ID.'</td>';
		$output .= '<td>'.$Confirmed_By.'</td>';
    $output .= '<td>'.$On_Date.'</td>';
		$output .= '<td>'.$Disposition.'</td>';
    $output .= '<td>'.$Remarks.'</td>';
		$output .= '<td>'.$Caller_Name.'</td>';
    $output .= '</tr>';
   }
  }
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>

<html>
 <head>
<center><h1>Contact Details Page<h1></center>
<hr>
<title>Import Excel File</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#fff1f1;
  }
  .box
  {
   width:700px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
   margin-top:100px;
  }

  </style>
 </head>
 <body>
  <div class="container box">
   <h3 align="center">Import Excel File</h3><br />
   <form method="post" enctype="multipart/form-data">
    <label>Select Excel File</label>
    <input type="file" name="excel" />
    <br />
    <input type="submit" name="import" class="btn btn-info" value="Import" />
   </form>
   <br />
   <br />
   <?php
   echo $output;
   ?>
  </div>
 </body>
</html>
