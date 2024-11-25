<?php 
	include('config/db_connect.php');

	if(isset($_POST['delete'])){
		$id_to_be_deleted = mysqli_real_escape_string($conn, $_POST['id_to_be_deleted']);

		//make a query
		$sql = "DELETE FROM pizzas WHERE id=$id_to_be_deleted";

		//get the query result
		if(mysqli_query($conn, $sql)){
			//success
			header('Location: index.php');
		}{
			//failure
			echo 'query error: ' . mysqli_error($conn);
		}
	}

	if(isset($_GET['id'])){
		 $id = mysqli_real_escape_string($conn, $_GET['id']);

		 //make a query
		 $sql = "SELECT * FROM pizzas WHERE id=$id";

		 //get the query result
		 $result = mysqli_query($conn, $sql);

		 //fetch the result in array format
		 $pizza = mysqli_fetch_assoc($result);

		 //free result from memory because we don't need it any more
		mysqli_free_result($result);

		//close the connection
		mysqli_close($conn);

		//print_r($pizza);
	}

 ?>

<!DOCTYPE html>
<html>
	<?php include('templates/header.php'); ?>
	<h2 class="text-center white-text">Order Details</h2>
	<div class="container center grey-text square-container">
		<?php if($pizza): ?>
			<h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
			<p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
			<p>Created at: <?php echo date($pizza['created_at']); ?></p>
			
			
			<h5>Ingredients:</h5>
			<ul class="list-group container w-50">
				<?php foreach(explode(',', $pizza['ingredients'])  as $ing): ?>
					<li href="#" class="list-group-item list-group-item-action "><?php echo htmlspecialchars($ing); ?></li>
				<?php endforeach; ?>
			</ul>
			<form action="detailes.php" method="POST">
				<input type="hidden" name="id_to_be_deleted" value="<?php echo $pizza['id']; ?>">
				<input onclick="myFunction()" type="submit" name="delete" value="Delete Order" class="btn brand z-depth-0">
			</form>

		<?php else: ?>
			<h5>No such a Pizza exist!!!</h5>
		<?php endif; ?>
	</div>	

	<script>
		function myFunction(){
			window.alert("Are You Sure?");	
		}
		

	</script>

	<?php include('templates/footer.php'); ?>
</html>