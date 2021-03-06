
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>JABALPUR BILLS</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style>
    .box{
        width:"50%";
        color: #fff;
        padding: 10px;
        display: none;
        margin-top: 10px;
    }
    .igjy{ background: #ffffff; }
    .dom{ background: #ffffff; }
    .ndom{ background: #ffffff; }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: auto;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<style>
input[type=text], select {
  width: 50%;
  padding: 3px 35px;
  margin: 4px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=button] {
  width: 50%;
  background-color: #f50a2d;
  color: white;
  padding: 3px 35px;
  margin: 4px 0;
  border: "1";
  border-radius: 4px;
  cursor: pointer;
}

</style>
<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  cursor: pointer;
}

.button1 {background-color: #ff0000;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
</style>
<style>
div.ex1 {
  width:450px;
  align: left;
 }
 div.card {
  width:540px;
  background-color: #4a4a4a;
   
 }
 card.table, th, td {
  border: 1px solid white;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<table>
<tr>
<td>
    <div class ="ex1">
        <select>
            <option>Choose Bill Type</option>
            <option value="igjy">IGJY</option>
            <option value="dom">DOM</option>
            <option value="ndom">NDOM</option>
        </select>
    </div>
    </td>
    <td>
    <h1><b><u>JABALPUR BILLPRINTING</u></b></h1>
    </td>
    </tr>
    </table>
    
    <div class="igjy box">
    
  
    <!-- <div class="container"> -->
    <div class="card">
    <!-- <img class="card-img-top" src="IGJY.png" alt="Card image cap"> -->
    <div class="card-body">      
    <h3 class="card-title" align="center"><b>इंदिरा गृह ज्योती योजना</b></h3>
      <hr color="white">
      <h5>Upload Data</h5>
      <form id="upload_file" method="post">
      <div class="file-field input-field">
                <div class="btn btn-success">
                    <span>File</span>
                    <input type="file" name="contact_file">
                </div>
                <div class="file-path-wrapper">
                    <input type="text" class="file-path validate">
                </div>
                <button type="submit" class="btn btn-success" >Click to Upload</button> 
                </div>
            </form>
          
          
<P align="right"><a class="btn btn-success" width="100%" href="igjybills.php" role="button">PRINT IGJY BILLS</a>&nbsp;<a class="btn btn-danger" width="100%" href="deleteigjy.php" onclick="return confirm('Are you sure you want to delete all records ?');" role="button">Delete All Records</a></p>
   
<div class="card bg-info text-white " style="width:500px">
<div class="card-body">

<p>
<table id="new"  align="center" >
<tbody class="border">
    

<?php
    $conn = mysqli_connect("localhost", "root", "", "jabalpurbills");

  // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql1 = "SELECT count(ivrsid) FROM igjy";

    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {

  // output data of each row
    while($row = $result1->fetch_assoc()) {
    echo "Total no. of Records :&nbsp;".$row["count(ivrsid)"];
    
    
    
   
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </p>
   
    </div>
    </div>


  <form id="form" name="form"  method="post" action="">
    <table >
    <tr>
    <th>FROM</th>
    <th>TO</th>
    <th>ACTION</th>
    </tr>
    <tr>
    <td><input type="text" id="from" name="from"></td>
    <td><input type="text" id="to" name="to"></td>
    <td><button id="delete" name="delete" type="button">Delete</button></td>
    </tr>
    </table>
    </form>
    
   
   

   
   
   
   
   </div>
   </div>
   
     
   <!-- <script>
   $(function() {
     $("#refresh").on("click", function() {
        $("#mydiv").load("index.php")
        return false;
    })
  })
</script> -->
    
    

    </div> 
    </div>





    
    <div class="dom box">
    
    <!-- unit start for dom -->
    
    <!-- <div class="container"> -->
    <div class="card">
    <!-- <img class="card-img-top" src="IGJY.png" alt="Card image cap"> -->
    <div class="card-body">      
    <h3 class="card-title" align="center"><b>घरेलू विद्युत देयक</b></h3>
      <hr color="white">
      <h5>Upload Data</h5>
      <form id="upload_file1" method="post">
      <div class="file-field input-field">
                <div class="btn btn-success">
                    <span>File</span>
                    <input type="file" name="contact_file1">
                </div>
                <div class="file-path-wrapper">
                    <input type="text" class="file-path validate">
                </div>
                <button type="submit" class="btn btn-success" >Click to Upload</button> 
                               
                             
            </div>
            </form>
         
          <P align="right"><a class="btn btn-success" width="100%" href="dombills.php" role="button">PRINT DOMBILLS</a>&nbsp;<a class="btn btn-danger" width="100%" href="deletedom.php" onclick="return confirm('Are you sure you want to delete all records ?');" role="button">Delete All Records</a></p>
   
<div class="card bg-info text-white " style="width:500px">
<div class="card-body">

<p>
<table id="new"  align="center" >
<tbody class="border">
    

<?php
    $conn = mysqli_connect("localhost", "root", "", "jabalpurbills");

  // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql1 = "SELECT count(ivrsid) FROM dom";

    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {

  // output data of each row
    while($row = $result1->fetch_assoc()) {
    echo "Total no. of Records : &nbsp;".$row["count(ivrsid)"];
    
    
    
   
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </p>
   
    </div>
    </div>


  <form id="form" name="form"  method="post" action="">
    <table >
    <tr>
    <th>FROM</th>
    <th>TO</th>
    <th>ACTION</th>
    </tr>
    <tr>
    <td><input type="text" id="from" name="from"></td>
    <td><input type="text" id="to" name="to"></td>
    <td><button id="delete" name="delete" type="button">Delete</button></td>
    </tr>
    </table>
    </form>
    
   
   

   
   
   
   
   </div>
   </div>
   
   </div>
    <!-- unit end for dom -->
    
    
    
    
    
    
    </div>
    <!-- ndom box starts -->
    <div class="ndom box">
    
    <div class="card">
    <!-- <img class="card-img-top" src="IGJY.png" alt="Card image cap"> -->
    <div class="card-body">      
    <h3 class="card-title" align="center"><b>गैर घरेलू विद्युत देयक</b></h3>
      <hr color="white">
      <h5>Upload Data</h5>
      <form id="upload_file2" method="post">
      <div class="file-field input-field">
                <div class="btn btn-success">
                    <span>File</span>
                    <input type="file" name="contact_file2">
                </div>
                <div class="file-path-wrapper">
                    <input type="text" class="file-path validate">
                </div>
                <button type="submit" class="btn btn-success" >Click to Upload</button> 
                               
                             
            </div>
            </form>
         
          <P align="right"><a class="btn btn-success" width="100%" href="ndmbills.php" role="button">PRINT DOMBILLS</a>&nbsp;<a class="btn btn-danger" width="100%" href="deletendm.php" onclick="return confirm('Are you sure you want to delete all records ?');" role="button">Delete All Records</a></p>
   
<div class="card bg-info text-white " style="width:500px">
<div class="card-body">

<p>
<table id="new"  align="center" >
<tbody class="border">
    

<?php
    $conn = mysqli_connect("localhost", "root", "", "jabalpurbills");

  // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql1 = "SELECT count(ivrsid) FROM ndm";

    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {

  // output data of each row
    while($row = $result1->fetch_assoc()) {
    echo "Total no. of Records : &nbsp;".$row["count(ivrsid)"];
    
    
    
   
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </p>
   
    </div>
    </div>


  <form id="form" name="form"  method="post" action="">
    <table >
    <tr>
    <th>FROM</th>
    <th>TO</th>
    <th>ACTION</th>
    </tr>
    <tr>
    <td><input type="text" id="from" name="from"></td>
    <td><input type="text" id="to" name="to"></td>
    <td><button id="delete" name="delete" type="button">Delete</button></td>
    </tr>
    </table>
    </form>
    
   
   

   
   
   
   
   </div>
   </div>
   
   </div>
    
    
    </div>
</body>
</html>


<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>

<script type="text/javascript">
      $(document).ready(function(){
        $('#upload_file').on("submit",function(e){
            e.preventDefault();
            $.ajax({
                url:"import.php",
                method:"POST",
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success: function(data){
                    if(data=='Error1'){
                        alert("Invalid File");
                    }else if(data =='Error2'){
                        alert("Please Select file");
                    }
                    else{
                        console.log("Success",data);
                    }
                },
                success: function(data){
                    if(data.success == true){ // if true (1)
                        setTimeout(function(){// wait for 5 secs(2)
                            location.reload(); // then reload the page.(3)
                        }, 5000); 
                    }
                },
                error: function(data){
                    console.log("err:::",data)
                    
                }

            })
        });
      });


  </script>

<script type="text/javascript">
      $(document).ready(function(){
        $('#upload_file1').on("submit",function(e){
            e.preventDefault();
            $.ajax({
                url:"importdom.php",
                method:"POST",
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success: function(data){
                    if(data=='Error1'){
                        alert("Invalid File");
                    }else if(data =='Error2'){
                        alert("Please Select file");
                    }else{
                        console.log("Success",data);
                    }
                },
                error: function(data){
                	console.log("err:::",data)
                }

            })
        });
      });

  </script>

<script type="text/javascript">
      $(document).ready(function(){
        $('#upload_file2').on("submit",function(e){
            e.preventDefault();
            $.ajax({
                url:"importndm.php",
                method:"POST",
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success: function(data){
                    if(data=='Error1'){
                        alert("Invalid File");
                    }else if(data =='Error2'){
                        alert("Please Select file");
                    }else{
                        console.log("Success",data);
                    }
                },
                error: function(data){
                	console.log("err:::",data)
                }

            })
        });
      });

  </script>