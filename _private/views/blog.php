<?php $this->layout('layouts::website');?>

<div class="blogBG">

    <h1 class="blogPost">Blog posts</h1><br>

    <?php foreach($blog as $post):?>
        <div class="blogTest">
            <h3 class="blogHomeTitel"><?php echo $post['title']?></h3>
            <a class="bekijkPost" href="<?php echo url('blog.detail',['slug' => $post['slug']] );?>">Bekijk post</a><br>
        </div><br>
    <?php endforeach;?>
    
    <hr>

        <a href="<?php echo url('topics.new')?>">Blog post toevoegen</a>
</div>  
