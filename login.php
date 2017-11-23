<html>
<head>
<link href="css/style.css" rel="stylesheet">
<script src="drop.js"></script>
<style>
body
{
margin:0px auto;
background-size:cover;
}
.container
{
height:350px;
width:300px;
margin:0px auto;
background-color:rgba(0,0,0,0.5);
margin-top:120px;
text-align:center;
opacity:0.7;
}
input[type="text"], input[type="password"]
{
height:40px;
width:250px;
margin-top:10px;
padding-left:20px;
border:none;
background:transparent;
border-bottom:1px solid black;
color:white;
outline:none;
}
::placeholder
{
color:lightgray;
font-size:20px;

}
.btn
{
padding:10px;
font-size:15px;
margin-top:10px;

}
.btn:hover
{
background-color:red;
}
</style>
</head>
<body>
<?php include("include/header.php"); ?>
<div class="container">
<img src="slider/user.png" style="height:100px; width:100px;margin-top:-50px;margin-buttom:10px;">

<form method="post" action="control/login.php">
<input type="text" name="user" placeholder="User Id">

<input type="password" name="pwd" placeholder="************">

<input type="submit" value="Login!!" class="btn">
<input type="submit" value="Register" class="btn">
</form>
</div>

<video autoplay="autoplay" loop="loop">
<source src="video/a.mp4">
</video>

<?php include('include/footer.html'); ?>
</body>
</html>
