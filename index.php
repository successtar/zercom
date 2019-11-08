<!DOCTYPE html>
<html>
<head>
	<title>GUI for the API</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid">


	<nav class="navbar navbar-light bg-light">
	 <h1>
	 	Zircom Test
	 </h1>
	</nav>

	<ul class="nav nav-fill">
	  <li class="nav-item">
	    <a class="nav-link active" href="#" id="all">All Students</a>
	  </li>
	  <li class="nav-item dropdown">
	    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
	    <div class="dropdown-menu" id="mycat">
	      <a class="dropdown-item" href="#" data-cat="Science" >Science</a>
	      <a class="dropdown-item" href="#" data-cat="Art">Art</a>
	      <a class="dropdown-item" href="#" data-cat="Commercial">Commercial</a>
	    </div>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="#" id="stat">Statistics</a>
	  </li>
	</ul>

	<section class="m-5">
        <div class="text-center pt-5 mt-5 loading">
          <p class="spinner-border  text-secondary p-4 mt-5" role="loading"></p>
          <p class="h5 text-primary pt-4 feedback" ></p>
        </div>
		

	</section>


	</div>

<script src="js/jquery.js" ></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js" ></script>
<script src="js/main.js" ></script>


</body>
</html>