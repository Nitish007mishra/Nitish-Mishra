<html>
<head><title>EventPlanner</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<script>
function mydrop() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</head>
<body>
<?php include("include/header.html"); ?>
<div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li id="slider" data-slide-to="0" class="active"></li>
		<li id="slider" data-slide-to="1"></li>
		<li id="slider" data-slide-to="2"></li>
		<li id="slider" data-slide-to="3"></li>
		<li id="slider" data-slide-to="4"></li>
		
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<img  src="slider/0.jpg">
		</div>
		<div class="item">
			<img  src="slider/2.png">
		</div>
		
		<div class="item">
			<img  src="slider/1.jpg">
		</div>
		
		<div class="item">
			<img  src="slider/3.jpg">
		</div>
		<div class="item">
			<img  src="slider/9.jpg">
		</div>
		<div class="item">
			<img  src="slider/5.jpg">
		</div>
		<div class="item">
			<img  src="slider/6.jpg">
		</div>
		<div class="item">
			<img  src="slider/7.jpg">
		</div>
		<div class="item">
			<img  src="slider/8.jpg">
		</div>
		
		<div class="item">
			<img  src="slider/10.jpg">
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			
		</a>
	</div>
</div>
</div>


<div>
<table>
<tr>
<td><a href="Corporate.php">Corporate Event</a></td>
<td><a href="wedding.php">Wedding Event</a></td>
<td><a href="Social.php">Social Event</a></td>
</tr>
</table>
</div>

<?php include('include/footer.html'); ?>
</body>
</html>


