<?php defined('SYSPATH') OR die('No direct script access allowed.'); ?>

<div class="Photo">
	<?php
		echo $avatar
			? HTML::resize($avatar, array('alt' => $nick, 'height' => 210, 'width' => 210, 'type' => 'resize', 'itemprop' => 'image'))
			: HTML::resize('media/images/avatar-user-400.png', array('alt' => $nick, 'height' => 210, 'width' => 210, 'type' => 'resize'));
	?>
</div>