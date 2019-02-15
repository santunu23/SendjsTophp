<?php
	if(isset($_POST['name'])){
		echo 'Find it';
	}
	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test cookies</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
    <button class="btn btn-primary" id="mybtn">Click</button>
	</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script>
		var name="Joy Sen";
		$(document).ready(function(){
  		$("#mybtn").click(function(){
   		  $.ajax({
                url:"test.php",
                type:"post",
                data:{name:name},
                cache:false,
                success:function(){
                 console.log('Send to the server');
                 },
      		    	error: function (xhr, ajaxOptions, thrownError) {
            				alert(xhr.status);
            				alert(thrownError);
        				}
	                    }); 
               			});
					});
	</script>

</body>
</html>
