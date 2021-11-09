<?php $this->layout('layouts::website');?>

<div class="blogBG2">
    <h1 class="blogTitel">
        <?php echo $blog_post['title']; ?>
    </h1><br>

    <p class="blogContent">
        <?php echo $blog_post['description']; ?>
    </p><br><br>

    <p class="blogDatum">
        <strong>Gemaakt op:</strong><?php echo $blog_post['created_at']; ?>
    </p>

    <p class="blogUser">
        <strong>Gemaakt door:</strong><?php echo $blog_post['user_id']; ?>
    </p>
</div>