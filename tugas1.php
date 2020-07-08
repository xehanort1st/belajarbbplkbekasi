

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <title>Hello, world!</title>
  </head>
<body>
	<?php
	$nomor1="1";
	$nomor2="2";
	$nama1= "sandy";
	$nama2= "jay";
	$email1="123@gmail.com";
	$email2="321@gmail.com";
	$comment1="hello";
	$comment2="everybody";
	?>

	<div class="container">
		<div class="row">
		  	<div class="col-12 border bg-primary text-white" style="height:100px">header
		</div>

		<nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top">
			<div class="collapse navbar-collapse" id="navb">
				<ul class="navbar-nav mr-auto">
				  	<li class="nav-item">
				  		<a class="nav-link active" 
				            		href="JavaScript:void(0)">Data Komentar</a>
				  	</li>
				 </ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" 
				            	   placeholder="search">
				<button class="btn btn-info my-2 my-sm-0" type="button">search</button>  
			</form>
	        </div>
		</nav>
		<div class="col-12 col-md-8 col-lg-10 bg-warning text-dark text-center" style="
				  min-height: 650px">
			<div class="container">
  				<table class="table table-primary table-hover table table-bordered" style="margin-top: 30px">
    				<thead>
      					<tr>
        					<th>nomor</th>
        					<th>nama</th>
        					<th>Email</th>
        					<th>komentar</th>
      					</tr>
    				</thead>
    					<tbody class="bg-light text-dark">
      						<tr>
        						<td><?php echo$nomor1;?></td>
        						<td><?php echo$nama1;?></td>
        						<td><?php echo$email1;?></td>
        						<td><?php echo$comment1;?></td>
      							</tr>
      						<tr>
        						<td><?php echo$nomor2;?></td>
        						<td><?php echo$nama2;?></td>
        						<td><?php echo$email2;?></td>
        						<td><?php echo$comment2;?></td>
      						</tr>
      						
    					</tbody>
  				</table>
			</div>
	    </div>
					<div class="col-12 col-md-4 col-lg-2 bg-danger text-light">
						 banner<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol  class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" 
								data-slide-to="0" class="active">
							</li>
							<li data-target="#carouselExampleIndicators" 
								data-slide-to="1">
							</li>	
						</ol>
						<div class="carousel-inner"><div class="carousel-item 
										active">
      						<img src="assets\images\bbplk-bekasi.jpg" class="d-block w-100" alt="...">
    					</div>
    					<div class="carousel-item">
      						<img src="assets\images\miniindo.jpg" class="d-block w-100" alt="...">
    					</div>
    						<div class="carousel-item">
      						<img src="assets\images\tranningcamp.jpg" class="d-block w-100" alt="...">
    					</div>
    				</div>

    				<a class="carousel-control-prev" href="
    					#carouselExampleIndicators" role="button" data-slide="prev">
    					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    					 <span class="sr-only">Previous</span>
  					</a>
  					<a class="carousel-control-next" href="
  						#carouselExampleIndicators" role="button" data-slide="next">
    					<span class="carousel-control-next-icon" aria-hidden="true"></span>
    					<span class="sr-only">Next
    					</span>
  					</a>
  	</div>
  			</div>
  				<div class="col-12 bg-info text-light">footer
  				</div>
					

  		 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="
  		 			anonymous">
  		 </script>
    	 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo
    	 			" crossorigin="anonymous">
    	 </script>
    	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/
    	 			kR0JKI" crossorigin="anonymous">
    	 </script>
</body>

