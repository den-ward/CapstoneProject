<!DOCTYPE html>

<html>

<head>

	<title>ONLINE ORDERING SYSTEM</title>
	
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
	
	
	<style>
	
		body {
		background-color: white;
			}
	</style>
	
</head>



	<style>
			.left {
			margin-left: 500px;
	 
		}
			.middle {
			margin-top: 100px;

		}

			.right {
			text-align: right;
			margin-right: 200px;
		}

			.centered {
			width: 100%;
			text-align: center;
		}

			.one {
			color: blue;
			font-family: "Audiowide", sans-serif;
		}

			.two {
			color: red;
			font-family: "Audiowide", sans-serif;
		}
			.three {
			color: blue;
			font-family: "Audiowide", sans-serif;	
		}

			.text {
			font-size: 400%;
		}

			.text1 {
			font-size: 300%;
		}
			.head {
			background-image: url("img/header.jpg");

			background-position: center; 
		}


	</style>



<body>


			<div data-role = "header" class="head">
			
					<div>
						<div class="left font-effect-fire one"><h1 class="text">RESIN</h1></div>
						<div class="middle centered font-effect-neon two"><h1 class="text1"><b>ANIME</b></h1></div>
						<div class="right font-effect-fire three"><h1 class="text">COLLECTIBLES</h1></div>
					
					</div>
			</div>
			
			<p>
				<a href="index.php"><button class="btn btn-info" data-inline="true">Home</button></a>
				<a href="cart.php"><button class="btn-success" data-inline="true">Cart<span id="cart" class="badge badge-danger mx-2"></button></a>
				<a href="add_new_product.php"><button class="btn btn-secondary" data-inline="true">Add New Product</button></a>
			</p>
			
			
			

   <script type="text/javascript">
		$(document).ready(function(){
            
            show_mycart();
           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
                $(".get_cart").html(data.out);
                $("#cart").text(data.da);
              }
           });
           }

           setInterval(show_mycart,1000);

    });
   </script>

</body>
</html>