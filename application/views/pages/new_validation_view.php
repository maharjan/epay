<?php $this -> load -> view('includes/header'); ?>

<div id="innerMainContainer">
	<div id=inner_panel>
		<h1>ePay verificaion to <?php echo $form_action; ?></h1>
		
		<?php echo form_open($form_action); ?>
		
		<p>
			<?php
			echo form_label("Amount :", 'amount');

			$amount = array('name' => 'amount', 'id' => 'amount', 'type' => 'text', 'maxlength' => '10', 'placeholder' => '150', 'value' => '150', 'required'=>'required');
			echo form_input($amount);
			echo form_error('amount', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Product ID :", 'productId');

			$product_id = array('name' => 'productId', 'id' => 'productId', 'type' => 'text', 'maxlength' => '20', 'placeholder' => 'ABC-123-XYZ', 'value' => '2012-10-4-ABC-CO','required'=>'required');
			echo form_input($product_id);
			echo form_error('productId', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Reference ID :", 'referenceId');

			$ref_id = array('name' => 'referenceId', 'id' => 'referenceId', 'type' => 'text', 'maxlength' => '20', 'placeholder' => '123-123-123', 'value' => '20-20-11','required'=>'required');
			echo form_input($ref_id);
			echo form_error('referenceId', '<div class="error">', '</div>');
			?>
		</p>
			<p>
			<?php
			echo form_label("Merchant Code :", 'identifier');

			$merchant = array('name' => 'identifier', 'id' => 'identifier', 'type' => 'text', 'maxlength' => '20', 'placeholder' => 'testmerchant', 'value' => 'QFXEPAY','required'=>'required');
			echo form_input($merchant);
			echo form_error('identifier', '<div class="error">', '</div>');
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