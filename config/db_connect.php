	<?php 
	//connect to database
	$conn = mysqli_connect('localhost', 'mohamed', '********', 'mido_pizza');

	//check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
	//echo 'Connection established correctly <hr>'; 

?>