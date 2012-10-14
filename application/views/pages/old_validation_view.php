<?php $this -> load -> view('includes/header'); ?>

<div id="innerMainContainer">
	<div id=inner_panel>
		<h1>ePay verificaion to <?php echo $form_action; ?></h1>
		
		<?php $hidden =array('name'=>'m','id'=>'m','value'=>'ver');?>
		<?php echo form_open($form_action, $hidden); ?>
		
		<p>
			<?php
			echo form_label("Amount :", 'amt');

			$amount = array('name' => 'amt', 'id' => 'amount', 'type' => 'text', 'maxlength' => '10', 'placeholder' => '150', 'value' => '150', 'required'=>'required');
			echo form_input($amount);
			echo form_error('amt', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Product ID :", 'pid');

			$product_id = array('name' => 'pid', 'id' => 'pid', 'type' => 'text', 'maxlength' => '20', 'placeholder' => 'ABC-123-XYZ', 'value' => '2012-10-4-ABC-CO','required'=>'required');
			echo form_input($product_id);
			echo form_error('pid', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Reference ID :", 'refId');

			$ref_id = array('name' => 'refId', 'id' => 'refId', 'type' => 'text', 'maxlength' => '20', 'placeholder' => '123-123-123', 'value' => '20-20-11','required'=>'required');
			echo form_input($ref_id);
			echo form_error('refId', '<div class="error">', '</div>');
			?>
		</p>
			<p>
			<?php
			echo form_label("Merchant Code :", 'scd');

			$merchant = array('name' => 'scd', 'id' => 'scd', 'type' => 'text', 'maxlength' => '20', 'placeholder' => '123-123-123', 'value' => 'testmerchant','required'=>'required');
			echo form_input($merchant);
			echo form_error('scd', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<label></label>
		</p>
		<p>
			<?php echo form_submit('submit', 'Verify'); ?>
		</p>
		<?php echo form_close(); ?>
</div>
</div>

<?php $this -> load -> view('includes/footer'); ?>