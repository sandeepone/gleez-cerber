<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<div class="container">
	<div class="row">
		<div class="span12">
			<div class="row">
				<div class="span8 offset2">
					<!-- ########## Messages start ########## -->
					<div id="messages" class="messages span8">
						<?php echo $messages ?>
					</div>
					<!-- ########## Messages end ########## -->
				</div>
			</div>
		</div>

		<div class="span12 dashboard-wrapper">
			<div class="row">
				<div class="span9">
					<!-- ########## Header and tabs start ########## -->
					<div class="page-header<?php echo ($tabs ? ' with-tabs' : ''); ?>">
						<?php if ($title): ?>
							<h1 class="default-title"><?php echo $title;?></h1>
						<?php endif; ?>
						<?php if ($tabs): ?>
							<?php echo $tabs; ?>
						<?php endif; ?>
					</div>
					<!-- ########## Header and tabs end ########## -->
					<div id="content"><?php echo $content; ?></div>
				</div>
				<div class="span3">
					<!-- ########## Sidebar right start ########## -->
                    <div id="right">
					    <?php echo $sidebar_right; ?>
                    </div>
					<!-- ########## Sidebar right end ########## -->
				</div>
			</div>
		</div>
	</div>
</div>