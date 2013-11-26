<div id="content-container">

	<div class="row">

		<div class="col-md-3 col-sm-4">
		<?php include Kohana::find_file('views', 'user/edit_link'); ?>
		</div> <!-- /.col -->
		
		<div class="col-md-9 col-sm-8">
			
			<?php echo Form::open(Route::get('user')->uri(array('id' => $user->id, 'action' => 'photo')), array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
			<div class="tab-content stacked-content">
			
				<?php include Kohana::find_file('views', 'errors/partial'); ?>
			
					<div class="form-group <?php echo isset($errors['picture']) ? 'has-error': ''; ?>">
						<?php echo Form::label('photo', __('Photo'), array('class' => 'control-label')) ?>
						<div class="controls col-md-12">
							<?php echo Form::file('picture', array('class' => 'form-control')); ?>
						</div>
					</div>
				
					<blockquote>
						<small class="muted">
							<?php echo __('Your picture will be changed proportionally to the size of :w&times;:h', array(':w' => 210, ':h' => 210)); ?>
						</small>
						<small class="muted">
							<?php echo __('Allowed image formats: :formats', array(':formats' => '<strong>'.implode('</strong>, <strong>', $allowed_types).'</strong>')); ?>
						</small>
					</blockquote>
			
				<?php echo Form::submit('user_edit', __('Upload'), array('class' => 'btn btn-success')); ?>
			</div>
		</div>
			
			<?php echo Form::close(); ?>
	</div>
</div>