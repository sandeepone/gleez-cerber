<div class="container-fluid">
	<div class="content row">
		<?php if ($sidebar_left || $sidebar_right): ?>
			<!-- ########## Sidebar start ########## -->
			<div class="col-sm-3 col-md-2 sidebar">
				<?php echo $sidebar_left; ?>
				<?php echo $sidebar_right; ?>
			</div>
			<!-- ########## Sidebar end ########## -->
		<?php endif; ?>
		<!-- ########## Content start ############# -->
		<div class="col-sm-9 col-md-10 main-content">
			<div class="wrapper">
				<?php if ($title): ?>
					<div class="page-header">
						<h1> <i class="fa fa-info-circle"></i> <?php echo $title;?></h1>
					</div>
				<?php endif; ?>
				<div class="content-wrapper">
					<?php if ($messages): ?>
						<!-- ########## Messages start ########## -->
						<div id="messages" class="messages">
							<?php echo $messages ?>
						</div>
						<!-- ########## Messages end ########## -->
					<?php endif; ?>

					<?php if ($tabs): ?>
						<div id="tabs-actions">
							<div id="tabs"><?php echo $tabs; ?></div>
						</div>
					<?php endif; ?>

					<div id="content-body" class="<?php echo $tabs ? 'with-tabs' : 'without-tabs'?>">
						<?php echo $content; ?>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>