<?php $this -> load -> view('includes/header'); ?>

<div id="innerMainContainer">
	<div id=inner_panel>
		<h1>ePay checkout to <strong><em><?php echo $form_action; ?></strong></em></h1>

		<?php echo form_open($form_action)
		?>
		<p>
			<?php
			echo form_label("Amount :", 'amount');

			$amount = array('name' => 'amount', 'id' => 'amount', 'type' => 'text', 'maxlength' => '10', 'placeholder' => '100', 'value' => '80', 'required'=>'required');
			echo form_input($amount);
			echo form_error('amount', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Tax Amount :", 'taxAmount');

			$tax_amount = array('name' => 'taxAmount', 'id' => 'taxAmount', 'type' => 'text', 'maxlength' => '10', 'placeholder' => '10', 'value' => '10', 'required'=>'required');
			echo form_input($tax_amount);
			echo form_error('taxAmount', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Product Service Charge :", 'serviceCharge');

			$service_charge = array('name' => 'serviceCharge', 'id' => 'serviceCharge', 'type' => 'text', 'maxlength' => '10', 'placeholder' => '5', 'value' => '5', 'required'=>'required');
			echo form_input($service_charge);
			echo form_error('serviceCharge', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Product Delivery Charge :", 'deliveryCharge');

			$delivery_charge = array('name' => 'deliveryCharge', 'id' => 'deliveryCharge', 'type' => 'text', 'maxlength' => '32', 'placeholder' => '5', 'value' => '5', 'required'=>'required');
			echo form_input($delivery_charge);
			echo form_error('deliveryCharge', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Total Amount :", 'totalAmount');

			$total_amount = array('name' => 'totalAmount', 'id' => 'totalAmount', 'type' => 'text', 'maxlength' => '10', 'placeholder' => '170', 'value' => '100', 'required'=>'required');
			echo form_input($total_amount);
			echo form_error('totalAmount', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Product ID :", 'productId');

			$product_id = array('name' => 'productId', 'id' => 'productId', 'type' => 'text', 'maxlength' => '50', 'placeholder' => 'ABC-123-XYZ', 'value' => '2012-10-04-PID-ABC', 'required'=>'required');
			echo form_input($product_id);
			echo form_error('productId', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Merchant Code :", 'identifier');

			$identifier= array('name' => 'identifier', 'id' => 'identifier', 'type' => 'text', 'maxlength' => '50', 'placeholder' => 'merchantcode', 'value' => 'QFXEPAY', 'required'=>'required');
			echo form_input($identifier);
			echo form_error('identifier', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Success URL :", 'successURL');

			$success_url= array('name' => 'successURL', 'id' => 'successURL', 'type' => 'text', 'maxlength' => '32', 'placeholder' => 'http://mysite.com?q=su', 'value' => 'http://www.google.com?q=su', 'required'=>'required');
			echo form_input($success_url);
			echo form_error('successURL', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Failure URL :", 'failureURL');

			$failure_url= array('name' => 'failureURL', 'id' => 'failureURL', 'type' => 'text', 'maxlength' => '32', 'placeholder' => 'http://mysite.com?q=fu', 'value' => 'http://www.hotmail.com?q=fu', 'required'=>'required');
			echo form_input($failure_url);
			echo form_error('failureURL', '<div class="error">', '</div>');
			?>
		</p>		
		<p>
			<label></label>
		</p>
		<p>
			<?php echo form_submit('submit', 'Checkout'); ?>
		</p>
		<?php echo form_close(); ?>
	</div>
</div>

<?php $this -> load -> view('includes/footer'); ?>