<!DOCTYPE html>
<html>
<head>
	
	<title>Lottery System</title>

	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="./style.css">

</head>
<body>

	<header>
		
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <p class="sr-only">Toggle navigation</p>
        <p class="icon-bar"></p>
        <p class="icon-bar"></p>
        <p class="icon-bar"></p>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <p class="sr-only">(current)</p></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <p class="caret"></p></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
     
    </div> -->

    <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	</header>

	<section>

		<div class="container">
			
			<div class="row">
				
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					
					<div class="left-panel">
						
						<p class="text-center"><button class="btn btn-default">Print</button></p>

					</div>

				</div>

				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					
					<div class="right-panel">
						
						<p>//PO//</p>

						<form action="index.php" method="POST">

							<label><input type="radio" name="khrradio" value="khr">&nbsp;KHR</label>

							<label><input type="radio" name="usdradio" value="usd">&nbsp;USD</label>

							<input type="text" name="txtval" placeholder="txtval">

							<input type="text" name="khr" placeholder="KHR value">

							<input type="text" name="usd" placeholder="USD value">
							
							<input type="submit" name="submit" placeholder="Submit">

						</form>

						<div class="text-center padding-20">	

							<div>

								<p class="p-btn">X</p>
								<p class="p-btn">7</p>
								<p class="p-btn">8</p>
								<p class="p-btn">9</p>
								
							</div>

							<div>
								
								<p class="p-btn" data-toggle="modal" data-target="#myModal">PO</p>
								<p class="p-btn">4</p>
								<p class="p-btn">5</p>
								<p class="p-btn">6</p>

							</div>

							<div>

								<a href="s1.php"><p class="p-btn">S1</p></a>
								<p class="p-btn">1</p>
								<p class="p-btn">2</p>
								<p class="p-btn">3</p>
							
							</div>

							<div>

								<a href="s2.php"><p class="p-btn">S2</p></a>
								<p class="p-btn"><</p>
								<p class="p-btn">0</p>
								<p class="p-btn">></p>
								
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>
		

	</section>

	<!-- Modal -->
	
	<div id="myModal" class="modal fade" role="dialog">
	
		<div class="modal-dialog">

		    <!-- Modal content-->
		 
		    <div class="modal-content">
		 
		      <div class="modal-header">
		 
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		 
		        <h4 class="modal-title">PO Level</h4>
		 
		      </div>
		 
		      <div class="modal-body">
		 
				<div>

					<button class="btn btn-default">A</button>
					<button class="btn btn-default">B</button>
					<button class="btn btn-default">C</button>
					<button class="btn btn-default">D</button>
								
				</div>

				<div>

					<button class="btn btn-default">AB</button>
					<button class="btn btn-default">AC</button>
					<button class="btn btn-default">AD</button>
					<button class="btn btn-default">BC</button>
								
				</div>

				<div>

					<button class="btn btn-default">BD</button>
					<button class="btn btn-default">CD</button>
					<button class="btn btn-default">ABC</button>
					<button class="btn btn-default">ABD</button>
								
				</div>

				<div>

					<button class="btn btn-default">ACD</button>
					<button class="btn btn-default">BCD</button>
					<button class="btn btn-default">LOAB</button>
					<button class="btn btn-default">LO4P</button>
								
				</div>

				<div>

					<button class="btn btn-default">ABCN</button>
					<button class="btn btn-default">AHI</button>
					<button class="btn btn-default">4P</button>
					<button class="btn btn-default">AI</button>
								
				</div>

				<div>

					<button class="btn btn-default">HI</button>
					<button class="btn btn-default">H</button>
					<button class="btn btn-default">N</button>
					<button class="btn btn-default">HN</button>
								
				</div>


				<div>

					<button class="btn btn-default">AH</button>
					<button class="btn btn-default">I</button>
					<button class="btn btn-default">LO20, 25</button>
								
				</div>
		 
		      </div>
		 
		      <div class="modal-footer">
		 
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		 
		      </div>
		 
		    </div>

		</div>
	
	</div>

</body>
</html>
