<?php defined('SYSPATH') OR die('No direct script access.');
	$main_column = 9;
	if ($is_front OR ! $sidebar_right)
	{
		$main_column = 12;
	}
?>

<div class="row-fluid">
	<div class="span12">
		<div class="row">
			<div class="span8 offset2">
				<!-- ########## Messages start ########## -->
				<div id="messages" class="messages span12">
					<?php echo $messages ?>
				</div>
				<!-- ########## Messages end ########## -->
			</div>
		</div>

		<div class="row-fluid">
			<div class="span<?php echo $main_column?>">
				<div id="content">
					<?php echo $content; ?>
				</div>
			</div>
			<?php if ( ! $is_front AND $sidebar_right): ?>
				<div class="span3">
					<!-- ########## Sidebar right start ########## -->
					<div id="right">
						<?php echo $sidebar_right; ?>
					</div>
					<!-- ########## Sidebar right end ########## -->
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>