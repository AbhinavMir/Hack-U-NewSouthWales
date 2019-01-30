<html>
<head>
<title>Add New Report</title>
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat');

body{
  background-image: url('https://images.pexels.com/photos/571169/pexels-photo-571169.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
font-family: 'Montserrat';
background-size:cover;
background-repeat:no-repeat;
background-position: center center;
}

input[type=file]{
  border-radius: 0px;
  background-color: transparent;
  border-style:solid;
  border-color: #222222;
  padding: 10px;

}

input[type=text]{
  border-radius: 10px;
  border-style: solid;
}

.bg{
  padding:40px;
}

input[type=submit]{
  color: rgba(255,255,255,1);
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	-o-transition: all 0.5s;
	transition: all 0.5s;
	position: relative;
	border: 1px solid rgba(255,255,255,0.5);
	overflow: hidden;
  padding:40px;
  background-color: transparent;
  color:black;
  border-color: black;
}

input[type=submit]:hover{
  opacity: 0.5;
	-webkit-transform: (50px,0px);
	transform: translate(50px,0px);
  padding:40px;
  background-color: transparent;
  cursor:pointer;
  color:black;
  border-color: black;
}
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<div class="bg">
<form action="addat.php" method="post">
<div class="bg">
<b>Add a new report</b><br><br>

<div class="row">
<div class="input-field col s6">


<p>Case ID<br>
<input type="text" name="cid" value="" />
</p>

<p>Gender<br>
<input type="text" name="gender" value="" />
</p>

<p>History of TB in family<br>
<input type="text" name="history" value="" />
</p>

<p>Duration of Coughing<br>
<input type="text" name="dur" value="" />
</p>

<p>Type of coughing<br>
<input type="text" name="toc" value="" />
</p>

<p>Medication (presently or otherwise)<br>
<input type="text" name="med" value="" />
</p>

<p>Effects of Medication<br>
<input type="text" name="effectmed" value="" />
</p>

<p>Chest Pain<br>
<input type="text" name="cpain" value="" />
</p>

<p>Breathlessness<br>
<input type="text" name="breathlessness" value="" />
</p>
<!--
<p>Sputum Test<br>
<input type="text" name="sputum" value="" />
</p>
-->
<p>Tubercline Test  result<br>
<input type="text" name="tcline" value="" />
</p>
<a href="next2.php">Upload Your Chest X-Ray</a>
<!--
<p>Chest X-Ray<br>
<input type="text" name="xray" value="" />
</p>
-->
<p><br>
<input type="submit" name="submit" value="Send" />
</p><br>
</div>
</form>
</body>
</html>
