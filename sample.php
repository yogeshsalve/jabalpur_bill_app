<?php
if(!empty($_POST))
echo "Hello ".$_POST["text"];
?>
<html>
    <head>
        <title> Transfer trial </title>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </head>
<body>
<input type="textbox" id="scatter" name="textScatter">
<button id="inlinesubmit_button" type="button">submit</button>

<script>
$(document).ready(function(){
   function submitMe(selector)
   {
    $.ajax({
    type: "POST",
    url: "",
    data: {text:$(selector).val()},
    success: function(data){
            alert(data);
            $("body").html(data);
        }
    });

   }
   $('#inlinesubmit_button').click(function(){
    submitMe('#scatter');
   });
});
</script>
</body>
</html>