<?php $this->layout('layouts::website');?>

<div class="blogBG2">
    <h1 class="blogTitel">
        <?php echo $blog_post['title']; ?>
    </h1>

    <p class="blogContent">
        <?php echo $blog_post['description']; ?>
    </p>

    <p class="blogDatum">
        <strong>Gemaakt op:</strong><?php echo $blog_post['created_at']; ?>
    </p>

    <p class="blogUser">
        <strong>Gemaakt door:</strong><?php echo $blog_post['user_id']; ?>
    </p>
</div>