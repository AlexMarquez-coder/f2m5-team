<?php $this->layout('layouts::website');?>


<h1>Overzicht Topics</h1>

<?php foreach($topics as $topic):?>
    <?php echo $topic['title'];?> <a href="">Edit</a><br>
<?php endforeach; ?>

<hr>
<p>
    <a href="<?php echo url('topics.new')?>">Topic toevoegen</a>
</p>
