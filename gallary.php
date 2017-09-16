<html>
<head>
<link href="css/style.css" rel="stylesheet">
<script src="drop.js"></script>
<style>
div .di{
	margin-top:30px;
	display:inline;
	
}
marquee{
	margin-top:10px;
}

</style>
<script>
function change(obj){
	var a = document.getElementById("myimg");
	a.src = obj.src;
}
</script>
</head>
<body>
<?php include('include/header.html'); ?>
<div style="width:100%;">
<center>
<img src="image/2.jpg" id="myimg" height="300px" width="700px">
</center>
</div>


<div style="width:100%; height:auto;">
<marquee behavior="alternate">

<div class="di">
<img src="Image/2.jpg" width="100px" height="100px" onMouseOver="change(this);">
</div>
<div class="di">
<img src="Image/3.jpg" width="100px" height="100px" onMouseOver="change(this)">
</div>
<div class="di">
<img src="Image/4.jpg" width="100px" height="100px" onMouseOver="change(this)">
</div>
<div class="di">
<img src="Image/5.jpg" width="100px" height="100px" onMouseOver="change(this)">
</div>
<div class="di">
<img src="Image/6.jpg" width="100px" height="100px" onMouseOver="change(this)">
</div>
<div class="di">
<img src="Image/11.jpg" width="100px" height="100px" onMouseOver="change(this)">
</div>

<div class="di">
<img src="Image/13.jpg" width="100px" height="100px" onMouseOver="change(this)">
</div>
</marquee>
</div>
<footer>
<?php include('include/footer.html'); ?>
</footer>
</body>
</html>