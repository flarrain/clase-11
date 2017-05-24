<?php include('header.php');?>
<?php

$blog = array_map('str_getcsv', file('data/datos.csv'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);
$all = count($blog);
$id = $_GET['url'];
?>
<div class="row">
<div class="col-sm-12">
<h3><?php print($blog[$id]["title"])?></h3>
<h5>Categoría: <a href="archive.php?url=<?php print($blog[$id]["category"])?>"><?php print($blog[$id]["category"])?></a></h5>
<img src="<?php print($blog[$id]["picture"])?>" class="img-responsive">
<p><?php print($blog[$id]["content"])?>.</p>
</div><!--/col-sm-4-->
</div><!--/row-->


<?php include('footer.php')?>
