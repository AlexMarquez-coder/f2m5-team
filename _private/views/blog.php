<?php $this->layout('layouts::website');?>

<div class="blogBG">

    <h1 class="blogPost">Blog posts</h1><br>

    <?php foreach($blog as $post):?>

        <h3 class="blogHomeTitel"><?php echo $post['titel']?></h3>
        <a href="<?php echo url('blog.detail',['slug' => $post['slug']] );?>">Bekijk post</a><hr>

    <?php endforeach;?>

</div>