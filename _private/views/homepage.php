<?php $this->layout('layouts::website');?>

<?php $this->start('sidebar')?>
<!-- Door sections toe te voegen aan je layout kun je deze per pagina aanpassen -->

<?php $this->stop()?>

    <h2 class="homeTitel">Life sucks <span id="sometimes">sometimes.</span> </h2>
    <p class="homeTekst">Maar je staat er niet alleen voor <br>
    De Transformers Community is er voor jongeren die <br>zelfverzekerd willen zijn en tegenslagen omzetten in kracht. 
    <br> We doen dit samen: zo leren we meer en helpen we elkaar om te groeien.</p>

    <h2 class="homeTitel">Praat over dingen die je eerder nergens kwijt kon.</h2>
    <p class="homeTekst"> In onze online community kan je binnen een veilige omgeving (anoniem) jouw ervaringen en gevoelens delen. <br> 
        Hier helpen en steunen we elkaar. <br>
        Ook worden er wekelijks praktische tips gedeeld die jou helpen om zelfverzekerd te zijn en om te gaan met moeilijke situaties.</p>

</head>

<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="/images/elwin.png" style="width:50%">
</div>

<div class="mySlides fade">
  <img src="/images/Lisa.png" style="width:50%">
</div>

<div class="mySlides fade">
  <img src="/images/yasmine.png" style="width:50%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html> 



<?php $this->start('footer')?>

<?php $this->stop()?>


<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>



