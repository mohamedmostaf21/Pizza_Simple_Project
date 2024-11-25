<head>
	
	<title>Mido Pizza</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	 <link rel="icon" type="image/x-icon" href="imges/pizza_icon.ico">
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	 <style type="text/css">
	 	.brand{
	 		background: #cbb09c !important;
	 	}
	 	.brand-text{
	 		color: #cbb09c !important;
	 	}
	 	form{
	 		margin: 20px auto;
	 		max-width: 460px;
	 		padding: 20px;
	 	}
	 	.square-container {
	        width: 400px; /* Adjust to your desired size */
	        height: 500px;
	        border: 2px solid #333;
	        display: flex;
	        background: antiquewhite;
	        flex-direction: column;
	        justify-content: center;
	        align-items: center;
	        overflow: auto; /* To handle overflow content gracefully */
	        margin: 0 auto; /* Centers the div horizontally */
    	}
    	.pizza{
    		width: 100px;
    		margin: 40px auto -30px;
    		position: relative;
    		display: block;
    		top: -80px;

    	}
	 </style>
</head>
<body class="grey lighten-4" style="background-image: url('imges/background.png'); background-size: cover; background-position: center;">
	<nav class="white z-depth-0 bg-dark">
		<div class="contaniner">
			<a href="index.php" class="brand-logo brand-text center">Mido Pizza</a>
			<ul id="nav-mobile" class="right ">
				<li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
			</ul>
			
		</div>
	</nav>