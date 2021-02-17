<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Home Page</title>
</head>
<body style="background-color: #E7BDB3;">
	<div style="background-color: #3B3638;"> 
		<div class="d-flex justify-content-center p-4">
			<h2 style="color: #F9F7F7;">. . .Voice Sample Collection. . .</h2>
		</div>
	</div>
	<div class="container jumbotron mt-5" style="background-color: #C9A4A0;">
		<div class="row justify-content-center">
			<form class="form" id="form" method="POST" action="/playcurrent">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Enter your Name" style="margin-left: 7%;">
				</div>
				<p id="demo"></p>
				<div class="btn-group" role="group" aria-label="Basic example">
					<button type="button" onclick="mo()" class="ml-5 btn" style="background-color: #3B3638;color: #F9F7F7;">Start Recording</button>
			</form>
			<form class="form" method="POST" action="/move">
					<button type="submit" class="btn" style="background-color: #3B3638;color: #F9F7F7;">View Recordings</button>
				</div>
			</form>
			<h3 id="demo" style="color: #3B3638;font-weight: bold;text-align: center;"></h3>
		</div>
	</div>
  </body>
  <script type="text/javascript">
  	function mo(){
  		document.getElementById("demo").innerHTML="* * Recording * *";
  		document.getElementById("form").submit();
  	}
  </script>
</html>
