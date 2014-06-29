<?php
// Load a Dribbble object for the user 's_albrecht'
// containing 3 shots and 3 likes.
$dribbble   = dribbble('jancbeck', 4);
$shots      = $dribbble->shots();
$player     = $dribbble->player();
$likes      = $dribbble->likes();

if ($shots) : ?>

<figure>
<ul class="shots">

<?php foreach ($shots as $shot): ?>

<li>
    <a href="<?php echo $shot->url ?>">
        <img src="<?php echo $shot->image ?>" />
    </a>
</li>

<?php endforeach ?>

</ul></figure>

<?php endif; ?>