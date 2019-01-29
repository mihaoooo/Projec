
<!DOCTYPE html>


<html>
<title> :VG Bombers: </title>
<link rel="icon" href="title.png">
<meta charset="UTF-8">
<meta name="vievport" content="width=device-width, initial-scale=1.0">


<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  .mySlides {display:none;}
  </style>
  <link href="galerija.css" rel="stylesheet" type="text/css">







<div class="categories">

  <nav>
   <ul class="nav">
     <li><a href="index.php">Novosti</a></li>
     <li><a href="galerija.php">Galerija</a></li>
     <li><a href="slijedi.php">Tablica Lige</a></li>

   </ul>
  </nav>
</div>




</head>
<hr width="100%"/>


<body>

<h2 class="w3-center">Galerija</h2>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="disposal.jpg" style="width:100%">
  <img class="mySlides" src="essendon1.jpg" style="width:100%">
  <img class="mySlides" src="essendon.jpg" style="width:100%">
  <img class="mySlides" src="essendon3.jpg" style="width:100%">
  <img class="mySlides" src="kick.jpg" style="width:100%">
  <img class="mySlides" src="klokani.jpg" style="width:100%">
  <img class="mySlides" src="zlatoBdivizija.jpg" style="width:100%">


  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>

</body>
</html>

   </body>

  <footer>

 </footer>

</html>
