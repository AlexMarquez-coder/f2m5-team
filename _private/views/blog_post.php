<?php $this->layout('layouts::website');?>

<h1>
    <?php echo $blog_post['titel']; ?>
</h1>

<p>
    <?php echo $blog_post['content']; ?>
</p>

<p>
    <strong>Gemaakt op:</strong><?php echo $blog_post['created_at']; ?>
</p>

<p>
    <strong>Gemaakt door:</strong><?php echo $blog_post['user_id']; ?>
</p>