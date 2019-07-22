<section id="projects">
	<h2><?php echo $data->title()->html() ?></h2>

	<?php foreach($data->children()->visible() as $project): 
		$srcset = kirby_get_srcset( $project->images()->first() );
		$sizes = kirby_get_sizes( $project->images()->first() );
	?>
		<h3><?php echo $project->title()->html() ?></h3>
		<figure>
			<a href="<?php echo $project->link()->html() ?>"><img src="<?php echo $project->images()->first()->url() ?>" srcset="<?php echo $srcset ?>" sizes="<?php echo $sizes ?>" alt="<?php echo $project->title()->html() ?>"></a>
		</figure>
		<p><?php echo $project->text()->html() ?></p>
		<footer>
			<a class="button" href="<?php echo $project->link()->html() ?>">Website link <span class="icon-external"></span></a>
		</footer>
	<?php endforeach ?>
</section>