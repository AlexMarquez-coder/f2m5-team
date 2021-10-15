<?php $this->layout('layouts::website');?>

<?php $this->start('sidebar')?>
<!-- Door sections toe te voegen aan je layout kun je deze per pagina aanpassen -->

<?php $this->stop()?>

<h1>Welkom</h1>
    <h2>Life sucks <span id="sometimes">sometimes.</span> </h2>
    <p>Maar je staat er niet alleen voor <br>
    De Transformers Community is er voor jongeren die <br>zelfverzekerd willen zijn en tegenslagen omzetten in kracht. 
    <br> We doen dit samen: zo leren we meer en helpen we elkaar om te groeien.</p>

    <h2>Praat over dingen die je eerder nergens kwijt kon.</h2>
    <p> In onze online community kan je binnen een veilige omgeving (anoniem) jouw ervaringen en gevoelens delen. <br> 
        Hier helpen en steunen we elkaar. <br>
        Ook worden er wekelijks praktische tips gedeeld die jou helpen om zelfverzekerd te zijn en om te gaan met moeilijke situaties.</p>

<!-- <script>
let fotonummer, fotobreedte, aantalfotos, fotoslider;
        function setupFotoslider() 
        {
            fotonummer = 0;
            fotobreedte = 600;
            fotoslider = Fotoslider;
            let volgendeKnop = volgende;
            let vorigeKnop = vorige;
            aantalfotos = fotoslider.children.length;

            function volgendeFoto() 
            {
                fotonummer += 1;
                if (fotonummer === aantalfotos) { fotonummer = 0; }
                let afstandNaarLinks = -1 * (fotonummer * fotobreedte)
                fotoslider.style.left = afstandNaarLinks + "px";

            }
            function vorigeFoto() {
                fotonummer -= 1;
                if (fotonummer < 0) { fotonummer = aantalfotos - 1; }
                let afstandNaarLinks = -1 * (fotonummer * fotobreedte)
                fotoslider.style.left = afstandNaarLinks + "px";

            }
            //  alert("Ja, het script werkt!");
            volgendeKnop.addEventListener('click', volgendeFoto);
            vorigeKnop.addEventListener('click', vorigeFoto);
        }

        window.addEventListener('DOMContentLoaded', setupFotoslider);

    // alert('test')
    </script>


<body>
    <div id="flexbox">
        <div id="viewport">
            <div id="Fotoslider">
                <div class="foto"><img src="images/Lisa.png" title="Lisa" /></div>
                <div class="foto"><img src="images/elwin.png" title="Elwin" /></div>
                <div class="foto"><img src="images/Yasmine.png" title="Yasmine" /></div>
                
            </div>
            <div id="controls">
            <button id="vorige"><</button>
            <button id="volgende">></button>
        </div>
        </div>
    </div> -->


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



