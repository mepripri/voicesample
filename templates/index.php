<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
	<link href="https://fonts.googleapis.com/css2?family=Capriola&family=Dancing+Script:wght@600&family=Luckiest+Guy&family=Parisienne&family=Poppins:wght@600&family=Sofia&display=swap" rel="stylesheet">
    <style type="text/css">
    	.row-header {
		  margin: 0px auto;
		  padding: 0px 0px; }

		.row-content {
		  margin: 0px auto;
		  padding: 50px 0px;
		  border-bottom: 1px ridge;
		  min-height: 400px; }

		.footer {
		  background-color: #D1C4E9;
		  margin: 0px auto;
		  padding: 20px 0px; }

		.jumbotron {
		  background: white; }

		address {
		  font-size: 80%;
		  margin: 0px;
		  color: #0f0f0f; }

		body {
		  padding: 50px 0px 0px 0px;
		  z-index: 0; }

		.navbar-dark {
			background-color: #C9A4A0;
		}

		.tab-content {
		  border-left: 1px solid #ddd;
		  border-right: 1px solid #ddd;
		  border-bottom: 1px solid #ddd;
		  padding: 10px; }

		.carousel {
		  background: #512DA8; }
		  .carousel .carousel-item {
		    height: 300px; }
		    .carousel .carousel-item img {
		      position: absolute;
		      top: 0;
		      left: 0;
		      min-height: 300px; }

		#carouselButton {
		  right: 0px;
		  position: absolute;
		  bottom: 0px;
		  z-index: 1; }

		.modal-header {
		  background: #512DA8;
		  color: floralwhite; }
		  .modal-header .close {
		    color: floralwhite; }

		.modal-body {
		  background: #D1C4E9;
		  color: black; }
    </style>
	<title>Home Page</title>
</head>
<body>
  <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mr-auto" href="{{ url_for('home')}}"><img src="static/images/reco1.png" class="img-fluid" height="30" width="41"></a>
      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" style="color: black;font-family: 'Poppins', sans-serif;" href="{{ url_for('home')}}"><span class="fa fa-info fa-lg"></span> Record</a></li>
          <li class="nav-item"><a class="nav-link" style="color: black;font-family: 'Poppins', sans-serif;" href="{{ url_for('move')}}"><span class="fa fa-list fa-lg"></span> View</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <hr>
  <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1 style="font-family: 'Luckiest Guy', cursive;">Voice Sample Collection</h1>
                    <p style="font-family: 'Parisienne', cursive;font-size: 24px;font-weight: bold;">Record your voice and other audio using a microphone. You can then hear the audio as a wav file in the browser. Click the button below to start your audio recording. No account required.</p>
                </div>
                <div class="col-12 col-sm-6 align-self-center">
                    <img src="static/images/reco.png" width="500" height="300" class="img-fluid" style="margin-top: -20%;">
                </div>
            </div>
        </div>
   </header>
   <hr>
   <div class="col-sm">
      <div class="card">
        <h3 class="card-header text-center" style="background-color: #C9A4A0;font-family: 'Capriola', sans-serif;">Start Recording</h3>
        <div class="row justify-content-center" style="padding: 45px;">
			<form class="form" id="form" method="POST" action="/playcurrent">
				<div class="form-group">
					<input type="text" name="name" class="form-control justify-content-center" placeholder="Enter your Name">
				</div>
				<div class="btn-group" style="margin-left: -7%;" role="group" aria-label="Basic example">
					<button type="button" onclick="mo()" class="ml-5 btn" style="background-color: #3B3638;color: #F9F7F7;font-family: 'Poppins', sans-serif;">Start Recording</button>
			</form>
			<form class="form" method="POST" action="/move">
					<button type="submit" class="btn" style="background-color: #3B3638;color: #F9F7F7;font-family: 'Poppins', sans-serif;">View Recordings</button>
				</div>
			</form>
		</div>
		<h5 id="demo" style="color: #3B3638;font-weight: bold;text-align: center;display:none;">* * Recording * *</h5>
      </div>
    </div>
    <hr>
    <footer class="footer" style="background-color: #C9A4A0">
        <div class="container">
            <div class="row">
            	<p style="font-family: 'Sofia', cursive;font-size: 24px;font-weight: bold;" class="
            	text-center">I think recording at home feels more organic, and injects some more personality into the music.</p>
            </div>    
        </div>
    </footer>
  </body>
  <script type="text/javascript">
  	function mo(){
  		document.getElementById("demo").style.display="block";
  		setTimeout(function(){ document.getElementById("form").submit(); }, 2000);
  	}
  </script>
</html>
