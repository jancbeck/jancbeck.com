<button id="toggle-nav">Menu</button>

<!--Navigation-->
<nav role="navigation" id="navigation">

	<ul class="nav">
		<?php foreach($pages->visible() AS $p): ?>
		<li><a href="<?php echo $p->url() ?>" class="nav"><?php echo html($p->title()) ?></a></li>
		<?php endforeach ?>
	</ul>

</nav>