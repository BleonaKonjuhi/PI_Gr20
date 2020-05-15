<?php include "MySQL/db.php";?>
<?php include "functions.php";?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="main.css">
   <link rel="stylesheet" type="text/css" href="h.css">
  <script type="text/javascript"  defer src="main.js">

  </script>
  <title>Travel</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-3.4.1.min.js"></script>
</head>

<body>
<?php include'includes/header.php'?>
<i> <p style="text-align:center;font-size:xx-large;text-shadow:1px 1px red;"><?php name(28); ?> </p> </i>

<div class="container" style="align-content: center;">
  <?php insertData(28); ?>
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <?php  insertData1(28); ?>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<h2  style="text-shadow:1px 1px red"> <i> Details </i> <span><hr style="color:rgb(128, 128, 128);"></span>
</h2>
<p> <?php des(28); ?> </p>
<p> <h2  style="text-shadow:1px 1px red"><i>Services </i></h2>
<table style="width:100%">
 <tr>
   <th><i>General Facilities </i><span> <hr> </span> </th>
   <th><i>Rating</i> <span> <hr> </span></th>

 </tr>
 <tr>
   <td>

     <ul>
      <?php facil(28); ?>

     </ul>
   </td>
   <td>

    <?php rate(28); ?>
   </td>

 </tr>
 </table>
 </p>
 <?php include'includes/footer.php'?>
</body>
</html>
