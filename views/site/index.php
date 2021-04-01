<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Inventaris';
?>
<div class="site-index">

     <div class="jumbotron"> 
         <center><h1>Selamat Datang di Sistem Pencarian Pelayanan Kesehatan <br> Kabupaten Pasaman</h1> </center> 
 

     </div> 

</div>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
