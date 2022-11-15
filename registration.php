<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>
		body {
			background-color:#ECF1F9;
		}
	
		#submit-btn {
			width: 300px;
			margin-top: 15px;
		}
		
		.contact {
			width: 300;
			height: 400;
			margin: auto;
			margin-top: 30px;
		}
		
	</style>
</head>
<body>
<form action="index4.php" method="post">
    <div class="contact">
        <div class="form-group">
            <label for="fname">First Name:</label>
            <input class="form-control" type="fname" id="fname" name="fname" />
            <label for="lname">Last Name:</label>
            <input class="form-control" type="lname" id="lname" name="lname" />
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" id="email" name="email" />
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input class="form-control" type="phone" id="phone" name="phone" />
        </div>
		<div class="form-group">
			<label for="birthday">Birthday:</label>
			<input class="form-control" type="date" id="birthday" name="birthday">		
		</div>
        <div class="form-group">
            <label for="information">Additional information:</label>
            <input class="form-control" type="information" id="information" name="information" />
        </div>

		<div class="form-group">
		  <input required type="checkbox" id="privacy" name="privacy" value="privacy">
		  <label for="privacy">I Agree to Privacy Policy</label><br>
		  <input type="checkbox" id="notification" name="notification" value="notification">
		  <label for="vehicle2">I'd like to receive notification</label><br>
		  <p id="agree" class="text-danger">You can not continue without agreement with policy</p>
		</div>
		<button type="submit" class="btn btn-outline-dark" id="submit-btn">Submit</button>
    </div>
    
</form>
</body>
