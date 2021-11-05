<?php $this->layout('layouts::website'); ?>

<?php $this->start('sidebar') ?>
<!-- Door sections toe te voegen aan je layout kun je deze per pagina aanpassen -->

<?php $this->stop() ?>


</head>

<body>
  <div id="MainHome">
    <div>
      <div class="item">
        <div style="padding: 2rem;">
          <h2 class="homeTitel">Life sucks <span id="sometimes" class="item">sometimes.</span> </h2>
          <p class="homeTekst">Maar je staat er niet alleen voor <br>
          De Transformers Community is er voor jongeren die <br>zelfverzekerd willen zijn en tegenslagen omzetten in kracht.
          <br> We doen dit samen: zo leren we meer en helpen we elkaar om te groeien.

          </p>
        </div>



        <div class="slideshow-container " style="float: right;">

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
       <button class=" button">Naar Community</button>
        <div class="tekstHome_2">
        <h2 class="homeTitel">Praat over dingen die je eerder nergens kwijt kon.</h2>
        <p class="homeTekst"> De Transformers Community is er voor jongeren die zelfverzekerd willen zijn en tegenslagen omzetten in kracht.<br>
          We doen dit samen: zo leren we meer en helpen we elkaar om te groeien.<br></p>


      </div>
      <div style="color: white;" id="tekst_3">
        <h2 class="homeTitel">Wij zijn een groeiende beweging van jongeren die zich inzet voor mentale gezondheid.</h3>
          <p class="homeTekst">We leven in een samenleving waar onvoldoende ruimte is voor onze mentale gezondheid.<br> Daar willen wij samen verandering in brengen! We zijn een community van jongeren die ervaringen en tips uitwisselt op het gebied van mentale gezondheid en persoonlijke ontwikkeling. <br>
            Zo creëren we meer openheid en helpen we elkaar om te groeien.</p>
      </div>

      <div>
        <button class="button ">Naar Community</button>
      </div>

      <div>
        <h2 class="homeTitel">Praat over dingen die je eerder nergens kwijt kon.</h2>
        <p class="homeTekst">In onze online community kan je binnen een veilige omgeving (anoniem) jouw ervaringen en gevoelens delen. Hier helpen en steunen we elkaar.<br>
          Ook worden er wekelijks praktische tips gedeeld die jou helpen om zelfverzekerd te zijn en om te gaan met moeilijke situaties.</p>
      </div>
      <div>
        <h2 class="homeTitel">We helpen elkaar met onderwerpen als:</h2>
        <ul>

          <li>
          </li>
          <li>
          </li>
          <li>
          </li>
          <li>
          </li>
        </ul>

      </div>

      <div>
        <h2 class="homeTitel center">Wil je impact maken?</h2>
        <p class="homeTekst center">Het is onze missie om kennis over mentale gezondheid mainstream te maken en jongeren te empoweren om mentaal gezond te zijn. En daar hebben wij jou bij nodig!
          Wil jij je ook inzetten voor een samenleving waarin onze mentale gezondheid centraal staat?<br>
          Meld je dan aan als vrijwilliger!</p>
      </div>

      <div>
        <h2 class="homeTitel center">Geen tijd, maar wel bijdragen? Doneer!</h2>
        <button class="button">Temp Button</button>
      </div>
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
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>
</body>

</html>



<?php $this->start('footer') ?>

<?php $this->stop() ?>


<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>