<?php 

	include('config/db_connect.php');

	//write a query for all pizzas
	$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

	//make a query an get the result
	$result = mysqli_query($conn,$sql);

	//fetch all resulting rows as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	//free result from memory because we don't need it any more
	mysqli_free_result($result);

	//close the conncetion
	mysqli_close($conn);

	

	//print_R($pizzas);
?>
 <!DOCTYPE html>
 <html>
 	<?php include('templates/header.php'); ?>
 	<h4 class="center grey-text">Pizzas</h4>

 	<div class="container">
 		<div class="row">
 			<?php foreach($pizzas as $pizza) { ?>
 				<div class="col s6 md3 mt-5">
 					<div class="card z-depth-0">
 						<img src="imges/pizza.png" class="pizza">
 						<div class="card-content center">
 							<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
 							<ul  class="list-group">
 							<?php foreach(explode(',', $pizza['ingredients']) as $ing) { ?>
 								<li href="#" class="list-group-item list-group-item-action"><?php echo htmlspecialchars($ing); ?></li>
 							<?php } ?>
 							</ul>
 						</div>
 						<div class="card-action right-align">
 							<a class="brand-text" href="detailes.php?id=<?php echo htmlspecialchars($pizza['id']); ?>">More Info</a>
 						</div>
 						
 					</div>
 				</div>
 			<?php } ?>
 		</div>
 	</div>
 	<?php include('templates/footer.php'); ?>
 </html>