<?php $this->layout('layouts::website');?>

<?php $this->start('sidebar')?>
<!-- Door sections toe te voegen aan je layout kun je deze per pagina aanpassen -->

<?php $this->stop()?>

<h1>Welkom</h1>
    <h2>Life sucks <span id="sometimes">sometimes.</span> </h2>
    <p>Maar je staat er niet alleen voor <br>
    De Transformers Community is er voor jongeren die <br>zelfverzekerd willen zijn en tegenslagen omzetten in kracht. 
    <br> We doen dit samen: zo leren we meer en helpen we elkaar om te groeien.</p>

<h1>Foto slider</h1>
<script>
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
    </div>


<?php $this->start('footer')?>

<?php $this->stop()?>


<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>



