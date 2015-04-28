<section id="projects">
	<h2><?php echo $data->title()->html() ?></h2>

	<?php foreach($data->children()->visible() as $project): 
		$thumb = thumb( $project->images()->first(), array('width' => 500, 'grayscale' => true));
	?>
		<figure>
			<a href="<?php echo $project->link()->html() ?>"><img src="<?php echo $project->images()->first()->url() ?>" srcset="<?php echo $thumb->url() ?> <?php echo $thumb->width() ?>w, <?php echo $project->images()->first()->url() ?> <?php echo $project->images()->first()->width() ?>w" alt="<?php echo $project->title()->html() ?>"></a>
		</figure>
		<h3><?php echo $project->title()->html() ?></h3>
		<p><?php echo $project->text()->html() ?></p>
		<footer>
			<a class="button" href="<?php echo $project->link()->html() ?>">Website link <span class="icon-external"></span></a>
		</footer>
	<?php endforeach ?>
</section>