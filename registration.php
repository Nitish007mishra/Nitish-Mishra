<head>
<link href="css/style.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
<script src="drop.js"></script>
</head>
<body>
<?php include('include/header.php'); ?>
<div class="container" style="margin-top:100px;">
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8">

<form class="form-horizontal" method="POST" action="control/reg.php">
				<div class="form-group">
					<label class="control-label col-sm-2" for="name"></label>
					<div class="col-sm-10">
					<input type="name" class="form-control" name="uname" placeholder="Name" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email"></label>
					<div class="col-sm-10">
					<input type="email" class="form-control" name="email" placeholder="E-mail" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="Event-Date"></label>
					<div class="col-sm-10">
					<input type="date" class="form-control" name="date" placeholder="Select Event-Date" required>
					</div>
				</div>
				<!--
				<div class="form-group">
					<label class="control-label col-sm-2" for="gender">Gender:</label>
					<div class="col-sm-10">
						<input type="radio" class="form-control" name="gender" placeholder="">Male
						<input type="radio" class="form-control" name="gender" placeholder="">Female
					
					</div>
				</div>
				-->
				<div class="form-group">
					<label class="control-label col-sm-2" for="Event-Type"></label>
					<div class="col-sm-10">
					<select class="form-control" required name="event">
					<option>Please Select Event-Type</option>
					<option>Corporate Event</option>
					<option>Wedding Event</option>
					<option>Social Event</option>
					</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="mob"></label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="name" name="mob" placeholder="Mobile" required maxlength="10">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd"></label>
					<div class="col-sm-10">
					<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd"></label>
					<div class="col-sm-10">
					<input type="password" class="form-control" id="pwd" name="pass" placeholder="Confirm-Password" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" name="addr"for="addr"></label>
					<div class="col-sm-10">
						<textarea name="addr" class="form-control" name="addr" placeholder="Address" required></textarea>
					</div>
				</div>
				<div class="form-group" style="padding-left:0px;">
					<div class="col-sm-offset-2 col-sm-10">
					<div class="row" style="margin-left:180px;">
					<input type="submit" class="btn btn-primary col-sm-3" value="Register"/>&nbsp;&nbsp;<input type="button" class="btn btn-success col-sm-3" onclick="location.href='login.php'" value="Login"/>
					</div>
					</div>
				</div>
				</form>

			</div>
			<div class="col-sm-2">
</div>
			</div>
			</div>
			<video autoplay="autoplay" loop="loop">
<source src="video/d.mp4">
</video>

			<?php include('include/footer.html'); ?>
</body>
