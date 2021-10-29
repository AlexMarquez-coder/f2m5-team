<?php $this->layout('layouts::website');?>

<?php $this->start('sidebar')?>
<!-- Door sections toe te voegen aan je layout kun je deze per pagina aanpassen -->

<?php $this->stop()?>


</head>

<body>
<div id="MainHome">
  <div>
  <div class="item">
        <h2 class="homeTitel ">Life sucks <span id="sometimes" class="item">sometimes.</span> </h2>
      <p class="homeTekst ">Maar je staat er niet alleen voor <br>
      De Transformers Community is er voor jongeren die <br>zelfverzekerd willen zijn en tegenslagen omzetten in kracht. 
      <br> We doen dit samen: zo leren we meer en helpen we elkaar om te groeien.</p>
    
    

    <div class="slideshow-container " style="float: right;"  >

      <div class="mySlides fade item">
        <img src="/images/elwin.png" style="width:50%">
      </div>

      <div class="mySlides fade item">
        <img src="/images/Lisa.png" style="width:50%">
      </div>

      <div class="mySlides fade item">
        <img src="/images/yasmine.png" style="width:50%">
      </div>

      </div>
      <br>

      <div class="item" style="text-align:center">
        <span class="dot item"></span> 
        <span class="dot item"></span> 
        <span class="dot item"></span> 
    </div>
      
  </div>
    <button class="item button" >Naar Community</button>
    <div class="tekstHome_2">
      <h2 class="homeTitel">Praat over dingen die je eerder nergens kwijt kon.</h2>
      <p class="homeTekst"> In onze online community kan je binnen een veilige omgeving (anoniem) jouw ervaringen en gevoelens delen. <br> 
        Hier helpen en steunen we elkaar. <br>
        Ook worden er wekelijks praktische tips gedeeld die jou helpen om zelfverzekerd te zijn en om te gaan met moeilijke situaties.</p>
    
    </div>
    <!-- <div class="item" >
      <h3 class="homeTitle">Wij zijn een groeiende beweging van jongeren die zich inzet voor mentale gezondheid.</h3>
      <p>We leven in een samenleving waar onvoldoende ruimte is voor onze mentale gezondheid. Daar willen wij samen verandering in brengen! We zijn een community van jongeren die ervaringen en tips uitwisselt op het gebied van mentale gezondheid en persoonlijke ontwikkeling. Zo creëren we meer openheid en helpen we elkaar om te groeien.</p>
    </div> -->
  </div>
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



