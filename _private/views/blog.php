<?php $this->layout('layouts::website');?>

<h1>Blog posts</h1>

<?php foreach($blog as $post):?>

    <h3><?php echo $post['titel']?></h3>
    <a href="<?php echo url('blog.detail',['slug' => $post['slug']] );?>">Meer info</a>

<?php endforeach;?>