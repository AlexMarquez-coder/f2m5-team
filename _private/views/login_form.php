<?php $this->layout('layouts::website');?>
<div id="fullForm">
<h3 id="partners">Inloggen</h3>

<p style="text-align: center;">Hier kunt u inloggen</p>

<form action="<?php echo url('login.handle')?>" method="POST">
    <div class="form-group">
        <!-- <label for="email">Email</label> -->
        <input type="email" name="email" value="<?php echo input('email')?>" class="form-control" id="email" aria-describedby="email" placeholder="Email">
        <small id="emailHelp" class="fotm-text text-muted">We delen uw e-mail adres met niemand, uw gegevens zijn veilig.</small>
        <?php if ( isset ( $errors['email'] ) ): ?>
            <?php echo $errors['email'] ?>
        <?php endif;?>
    </div>
    <div class="form-group">
        <!-- <label for="wachtwoord">Wachtwoord</label> -->
        <input type="password" name="wachtwoord" class="form-control" id="wachtwoord" placeholder="Wachtwoord">
        <?php if ( isset ( $errors['wachtwoord'] ) ): ?>
            <?php echo $errors['wachtwoord'] ?>
        <?php endif;?>
    </div>
    <button type="submit" class="btn-btn-primary">Inloggen</button>
        </div>
</form>
