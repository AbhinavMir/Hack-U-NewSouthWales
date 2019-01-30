<!DOCTYPE html>
<html>
<body>
<head><link rel="stylesheet" type="text/css" href="loc.css"><center>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"></head><div class="background">
  <div class="transbox">
<p>Allow location for accurate analysis?</p>

<button onclick="getLocation()" class="waves-effect waves-light btn">Yes!</button>
<br><br>
<div class="popup" onclick="myFunction()" href="newpage.html">No,I'd prefer not
  <span class="popuptext" id="myPopup">To proceed you must allow location!</span>
</div><br><br><br><br>
<a href="next.php">Go to next page!</a>


<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude;
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>


</body>
</html>
