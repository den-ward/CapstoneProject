<?php 

	include("../connection.php");

	if (isset($_POST['page'])) {
		$page = $_POST['page'];
	}else{
		$page = 1;
	}

	$pagination = "";


		$limit = 8;
		$start = ($page - 1)* $page;

	$pages = mysqli_query($connect,"SELECT count(id) AS id FROM cart");

	while ($row = mysqli_fetch_array($pages)) {
		$total = $row['id'];
		$count = ceil($total / $limit);

	for ($i=1; $i <=$count ; $i++) { 
   	
	$pagination .= "

	<ul class='pagination mx-4'>
    
             <a id='".$i."' href='' class='page-link '>".$i."</a>
          
     </div>
    
";
   }

}




	$query = "SELECT * FROM cart LIMIT $start, $limit";
			$res = mysqli_query($connect,$query);
	
			$output = "";
	if (mysqli_num_rows($res) < 1) {
			$output .= "<h1 class='text-center'>NO AVAILABLE DATA</h1>";
		}else{

		while ($row = mysqli_fetch_array($res)) {
		 
		 $output .= "
             <div class='col-md-3 shadow-sm rounded bg-dark d-flex justify-content-center'>
				<form method='post'>
					<img src='img/".$row['image']."' class='col-md-12' height='500px'>
					<h3 class='mx-3 text-center text-white'>".$row['name']."</h3>
					<h3 class='mx-3 text-center text-white'>$".$row['price']."</h3>

					<input type='hidden' name='id' value='".$row['id']."' id='".$row['id']."'>
					<input type='hidden' name='name' value='".$row['name']."' id='name".$row['id']."'>
					<input type='hidden' name='price' value='".$row['price']."' id='price".$row['id']."'>
					<input type='hidden' name='quantity' value='1' id='quantity".$row['id']."'>
					<input type='submit' name='add' id='".$row['id']."' class='btn btn-primary my-2 add_cart' value='Add To Cart' style='margin-left: 130px;'>
				</form>
				</div>

		 ";
	}
}




	$data['output'] = $output;
	$data['pagination'] = $pagination;


	echo json_encode($data);


 ?>