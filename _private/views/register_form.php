<?php $this->layout('layouts::website');?>
<div id="fullForm">
<h3 id="sometimes">Aanmelden</h3>

<p style="text-align: center;">Meld u snel in op de website om gebruik te maken van alle fantastische features.</p>

<form action="<?php echo url("register.handle")?>" method="POST" >
    <div class="form-group">
        <!-- <label for="email" class="form_titel">Email</label> -->
        <input type="email" name="email" value="" class="form-control" id="email" aria-describedby="email" placeholder="Email">
        <small id="emailHelp" class="fotm-text text-muted">We delen uw e-mail adres met niemand, uw gegevens zijn veilig.</small>
    </div>
    <div class="form-group">
        <!-- <label for="wachtwoord" class="form_titel">Wachtwoord</label> -->
        <input type="password" name="wachtwoord" class="form-control" id="wachtwoord" placeholder="Wachtwoord">
    </div>
    <button type="submit" class="btn-btn-primary">Registreren</button>
</div>
</form>
</html>