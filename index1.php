<html>
<title>JABALPUR BILLS</title>
<head>
!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<h1 align="center"><u>JABALPUR BILLPRINTING</u></h1>
<hr>
<div class ="container">
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="IGJY.png" alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title" align="center"><b>इंदिरा गृह ज्योती योजना</b></h3>
      <h5>Upload Data</h5>
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
            </form>
          <br>
          <br>
          <br>
<P align="center"><a class="btn btn-success" width="100%" href="igjybills.php" role="button">PRINT IGJY SCHEME BILLS</a></p>
   </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="DOM.png" alt="Card image cap">
    <div class="card-body">
    <h3 class="card-title" align="center"><b>घरेलू विद्युत देयक</b></h3>
    <h5>Upload Data</h5>
      <form id="upload_file1">
      <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file" name="contact_file1">
                </div>
                <div class="file-path-wrapper">
                    <input type="text" class="file-path validate">
                </div>
                <input type="submit" style="margin:5px;" class="btn" value="Click to Upload"> 
                               
            </div>
            </form>
          <br>
          <br>
          <br>
<P align="center"><a class="btn btn-success" width="100%" href="dombills.php" role="button">PRINT DOM SCHEME BILLS</a></p> 
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="NDM.png" alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title" align="center"><b>गैर घरेलू विद्युत देयक</b></h3>
      <h5>Upload Data</h5>
      <form id="upload_file1">
      <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file" name="contact_file1">
                </div>
                <div class="file-path-wrapper">
                    <input type="text" class="file-path validate">
                </div>
                <input type="submit" style="margin:5px;" class="btn" value="Click to Upload"> 
                               
            </div>
            </form>
          <br>
          <br>
          <br>
<P align="center"><a class="btn btn-success" width="100%" href="dombills.php" role="button">PRINT DOM SCHEME BILLS</a></p> 
    </div>
  </div>
</div>
</div>






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
</body>
</html>