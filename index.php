<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Light IT Test</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">

	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>

	<script src="/assets/js/scripts.js"></script>
</head>
<body>
	<div id="page">
		<header>
		    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
	      		<div class="container">
		        	<span class="navbar-brand">LightIT Test</span>
		        	<div class="author text-light text-right">
						Alexey Gorban
					</div>
	    		</div>
			</nav>
	    </header>
	    <main>
			<div class="container">
				<div class="errors"></div>
				<form>
					<div class="form-group">
						<textarea class="form-control" id="first" rows="8" placeholder="Input"></textarea>
					</div>
					<div class="form-group text-center">
						<button id="submit-btn" type="button" class="btn btn-dark btn-block">Convert</button>
					</div>
					<div class="form-group">
						<textarea class="form-control" id="output" rows="8" placeholder="Output" readonly></textarea>
					</div>
				</form>	
			</div>
	    </main>
	</div>
</body>
</html>