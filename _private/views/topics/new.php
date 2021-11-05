<?php $this->layout('layouts::website');?>

<div class="blogBG">
    <h1 class="blogPost">Nieuwe blogpost aanmaken</h1><br>
    <form action="<?php echo url('topics.save')?>"  method="POST">
        <div class="form-group">
            <input type="text" name="title" value="<?php echo input ('title')?>" class="form-control" id="email" placeholder="Titel">
            <?php if ( isset( $errors['title'])):?>
                <span class="error"><?php echo $errors['title']?></span>
            <?php endif;?>
        </div><br>

        <div class="form-group">
            <textarea name="desc" class="form-control" id="wachtwoord" placeholder="Beschrijving"><?php echo input('desc')?></textarea>  
            <?php if ( isset( $errors['title'])):?>
                <span class="error"><?php echo $errors['title']?></span>
            <?php endif;?>
            
        </div><br>
            <button id="aanmeldknop" type="submit">Opslaan</button>
    </form>
    <hr>

    <p>
        <a href="<?php echo url('blog')?>">Terug naar overzicht</a>
    </p>
</div>