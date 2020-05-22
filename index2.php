<?php


// if(isset($_POST['submit'])){
// 	//connect to the database
// 	$mysqli = NEW MySQLi("localhost", "root", "", "igjy");

	
	
	//Query the database
	// $resultSet = $connect->query("SELECT * FROM contact_data WHERE asset_num = '$search'");

// }

?> 





<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BILL PRINTING APP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  

  </head>

<style>
body{
  background-image:url("backcover1.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  }
</style>



<style>
#yogesh {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#yogesh td, #yogesh th {
  border: 1px solid #ddd;
  padding: 2px;
}

#yogesh tr:nth-child(even){background-color: #f2f2f2;}

#yogesh tr:hover {background-color: #ddd;}

#yogesh th {
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
  background-color: #2C8299;
  color: white;
}
</style>




  <body>
    <div class="container">
    <br>
    <h2 align="right"><b>मध्यप्रदेश पुर्व क्षेत्र विदयुत वितरण कंपनी लिमिटेड : विदयुत देयक छपाई </b></h2>
    <br>
        <h5>Upload Your Bills Data Here</h5>
        <form id="upload_file">
            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file" name="contact_file">
                </div>
                <div class="file-path-wrapper">
                    <input type="text" class="file-path validate">
                </div>
                <input type="submit" style="margin:5px;" class="btn" value="Click to Upload"> 
                               
            </div>
                <!-- <div>
                <input type="text" name="contact"><input type="submit" name="search" value="Search">
                </div> -->
        </form>
    </div>
    <br>
    <br>
   <hr size="30" color="042E29">
   <a class="btn btn-success" align="center" width="100% " href="mpbills.php" role="button">PRINT IGJY SCHEME BILLS</a>
   <hr size="30" color="042E29">

   








     




<!-- </div> -->


  <script type="text/javascript">
      $(document).ready(function(){
        $('#upload_file').on("submit",function(e){
            e.preventDefault();
            $.ajax({
                url:"imporyigjy.php",
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
</body>
</html> 







