<?php $this -> load -> view('includes/header'); ?>

<div id="innerMainContainer">
	<div id=inner_panel>

		<h1>Choose ePay service !!!</h1>
		<?php echo form_open('main/redirect')?>
		<p>
			<?php echo form_label('ePay Services :', 'epay_service');
		
			echo form_dropdown('urls', $variables, '-- Select --'); 
			echo form_error('urls', '<div class="error">', '</div>'); ?>
		</p>
		<p>
			<label></label>
		</p>
		<p>
			<?php echo form_submit('submit', 'Proceed ?'); ?>
		</p>
		<?php echo form_close(); ?>
	</div>
</div>

<?php $this -> load -> view('includes/footer'); ?>