<html>
<head>
<title>Add Student</title>
</head>
<body><center><br><br>
<?php

if(isset($_POST['submit'])){

    $data_missing = array();

    if(empty($_POST['cid'])){

        // Adds name to array
        $data_missing[] = 'Case ID';

    } else {

        // Trim white space from the name and store the name
        $cid = trim($_POST['cid']);

    }

    if(empty($_POST['gender'])){

        // Adds name to array
        $data_missing[] = 'Gender';

    } else {

        // Trim white space from the name and store the name
        $gender = trim($_POST['gender']);

    }

    if(empty($_POST['history'])){

        // Adds name to array
        $data_missing[] = 'History of Tuberclosis in family';

    } else{

        // Trim white space from the name and store the name
        $hist = trim($_POST['history']);

    }

    if(empty($_POST['dur'])){

        // Adds name to array
        $data_missing[] = 'Duration of coughing';

    } else {

        // Trim white space from the name and store the name
        $dur = trim($_POST['dur']);

    }

    if(empty($_POST['toc'])){

        // Adds name to array
        $data_missing[] = 'Type of Coughing';

    } else {

        // Trim white space from the name and store the name
        $toc = trim($_POST['toc']);

    }

    if(empty($_POST['med'])){

        // Adds name to array
        $data_missing[] = 'Medications';

    } else {

        // Trim white space from the name and store the name
        $med = trim($_POST['med']);

    }

    if(empty($_POST['effectmed'])){

        // Adds name to array
        $data_missing[] = 'Effects of Medication';

    } else {

        // Trim white space from the name and store the name
        $emed = trim($_POST['effectmed']);

    }

    if(empty($_POST['cpain'])){

        // Adds name to array
        $data_missing[] = 'Chest Pain';

    } else {

        // Trim white space from the name and store the name
        $cpain = trim($_POST['cpain']);

    }

    if(empty($_POST['breathlessness'])){

        // Adds name to array
        $data_missing[] = 'Breathlessness';

    } else {

        // Trim white space from the name and store the name
        $bless = trim($_POST['breathlessness']);

    }

    if(empty($_POST['sputum'])){

        // Adds name to array
        $data_missing[] = 'Sputum';

    } else {

        // Trim white space from the name and store the name
        $sputum = trim($_POST['sputum']);

    }

    if(empty($_POST['tcline'])){

        // Adds name to array
        $data_missing[] = 'Tubercline test result';

    } else {

        // Trim white space from the name and store the name
        $tcline = trim($_POST['tcline']);

    }

    if(empty($_POST['xray'])){

        // Adds name to array
        $data_missing[] = 'X-Ray results';

    } else {

        // Trim white space from the name and store the name
        $xray = trim($_POST['xray']);

    }

    if(empty($data_missing)){

        require_once('mysqli_connect.php');

        $query = "INSERT INTO tbdb (gender,history,typeofcough,med,effectmed,chestpain,breathlessness,sputum,tubercline,xray,dur) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = mysqli_prepare($dbc, $query);


        mysqli_stmt_bind_param($stmt,"issssssssisi",$cid,$gender,$hist,$dur,$toc,$med,$emed,$cpain,$bless,$sputum,$tcline,$xray);
        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);

        if($affected_rows == 1){

            echo 'Student Entered';

            mysqli_stmt_close($stmt);

            mysqli_close($dbc);

        } else {

            echo 'Error Occurred<br />';
            echo mysqli_error();

            mysqli_stmt_close($stmt);

            mysqli_close($dbc);

        }

    } else {

        echo 'You need to enter the following data<br />';

        foreach($data_missing as $missing){

            echo "$missing<br />";

        }

    }

}
?><html></center>
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
<br>
<p>Upload Your Chest X-Ray<br><br>
<input type="file" name="myimage">
</p>
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
