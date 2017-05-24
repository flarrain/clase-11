<?php include('header.php');?>

<div class="row auto-clear">
<?php
$blog = array_map('str_getcsv', file('data/datos.csv'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);
$all = count($blog);
for($n=0; $n < $all; $n++){?>
  <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
  <article>
  <figure>
    <img src="<?php print($blog[$n]["picture"])?>">
    <figcaption>Categoría: <a href="archive.php?url=<?php print($blog[$n]["category"])?>"><?php print($blog[$n]["category"])?></a></figcaption>
  <figure>
  <h3><a href="post.php?url=<?php print($n);?>"><?php print($blog[$n]["title"])?></a></h3>
  <p><?php print($blog[$n]["excerpt"])?>. <a href="post.php?url=<?php print $n;?>">Ver más detalles</a></p>
  </article>
  </div><!--/col-sm-4-->
<?php };?>
</div><!--/row auto-clear-->


<?php include('footer.php');?>
