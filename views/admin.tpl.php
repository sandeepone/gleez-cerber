<div class="content row">
	<?php if ($sidebar_left || $sidebar_right): ?>
		<!-- ########## Sidebar start ########## -->
		<div class="sidebar col-sm-3 col-md-3 col-lg-2 navbar-inverse">
			<?php echo $sidebar_left; ?>
			<?php echo $sidebar_right; ?>
		</div>
		<!-- ########## Sidebar end ########## -->
	<?php endif; ?>
	<!-- ########## Content start ############# -->
	<div class="main-content col-sm-9 col-md-9 col-lg-10">
		<?php if ($title): ?>
			<div class="page-header">
				<h1><?php echo $title;?></h1>
			</div>
		<?php endif; ?>

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
		<?php endif;?>
		<div id="content" class="<?php echo $tabs ? 'with-tabs' : 'without-tabs'?>">
			<?php echo $content; ?>
		</div>

		<div id="push"></div>
		<!-- ########## Footer start ########## -->
		<footer class="footer">
			<div class="text-muted">
				<div class="row">
					<div class="col-xs-6 col-md-6">
						<p class="pull-left"><?php echo __('&copy; :year :site', array(':year' => date('Y'), ':site' => HTML::anchor(URL::site(false, true), $site_name)));?></p>
					</div>
					<div class="col-xs-6 col-md-6">
						<p class="pull-right"><?php echo __(':powerdby v{gleez_version}', array(':powerdby' => HTML::anchor('http://gleezcms.org/', 'Gleez CMS')))?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center" id="footer-system-info">
						<small><?php echo __('Rendered in {execution_time}, using {memory_usage} of memory.')?></small>
					</div>
				</div>
			</div>
		</footer>
		<!-- ########## Footer end ########## -->
	</div>

</div>