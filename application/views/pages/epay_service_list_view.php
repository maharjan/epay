<?php $this -> load -> view('includes/header'); ?>

<div id="innerMainContainer">
	<div id=inner_panel>

		<h1>Choose ePay service !!!</h1>
		<?php echo form_open('main/redirect')?>
		<p>
			<?php echo form_label('ePay Services :', 'epay_service');
			
			// $options = array(
			// ''=>'-Select-',
			// '1'=>'Localhost New Api | (localhost:8081/epay/service)',
			// '2'=>'Localhost New Api : Verification | (localhost:8081/epay/verify)',
			// '3'=> 'Incubator New Api | (esewaincubator.f1soft.com.np/epay/service)',
			// '4'=>'Incubator New Api : Verification | (esewaincubator.f1soft.com.np/epay/verify)',
// 		
			// 'http://localhost:8081/epay/main'=>'Localhost Old Api | (localhost:8081/epay/main)',
			// 'http://localhost:8081/epay/transrec'=>'Localhost Old Api : Verification | (localhost:8081/epay/transrec)',
			// 'http://esewaincubator.f1soft.com.np/epay/main'=>'Incubator Old Api | (esewaincubator.f1soft.com.np/epay/main)',
			// 'http://esewaincubator.f1soft.com.np/epay/transrec'=>'Incubator New Api : Verification | (esewaincubator.f1soft.com.np/epay/transrec)');
			
			echo form_dropdown('urls', $variables, '-Select-'); 
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