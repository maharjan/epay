<?php $this -> load -> view('includes/header'); ?>

<div id="innerMainContainer">
	<div id=inner_panel>
		<h1>ePay checkout to <?php echo $form_action; ?></h1>

		<?php echo form_open($form_action);
		?>
		<p>
			<?php
			echo form_label("Amount :", 'amt');

			$amount = array('name' => 'amt', 'id' => 'amount', 'type' => 'text', 'maxlength' => '10', 'placeholder' => '150', 'value' => set_value('amt'));
			echo form_input($amount);
			echo form_error('amt', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Tax Amount :", 'txAmt');

			$tax_amount = array('name' => 'txAmt', 'id' => 'txAmt', 'type' => 'text', 'maxlength' => '10', 'placeholder' => '10', 'value' => set_value('txAmt'));
			echo form_input($tax_amount);
			echo form_error('txAmt', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Product Service Charge :", 'psc');

			$service_charge = array('name' => 'psc', 'id' => 'psc', 'type' => 'text', 'maxlength' => '10', 'placeholder' => '5', 'value' => set_value('psc'));
			echo form_input($service_charge);
			echo form_error('psc', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Product Delivery Charge :", 'pdc');

			$delivery_charge = array('name' => 'pdc', 'id' => 'pdc', 'type' => 'text', 'maxlength' => '32', 'placeholder' => '5', 'value' => set_value('pdc'));
			echo form_input($delivery_charge);
			echo form_error('pdc', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Product ID :", 'pid');

			$product_id = array('name' => 'pid', 'id' => 'pid', 'type' => 'text', 'maxlength' => '50', 'placeholder' => 'ABC-123-XYZ', 'value' => set_value('pid'));
			echo form_input($product_id);
			echo form_error('pid', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Total Amount :", 'tAmt');

			$total_amount = array('name' => 'tAmt', 'id' => 'tAmt', 'type' => 'text', 'maxlength' => '10', 'placeholder' => '170', 'value' => set_value('tAmt'));
			echo form_input($total_amount);
			echo form_error('tAmt', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Merchant Code :", 'scd');

			$identifier= array('name' => 'scd', 'id' => 'scd', 'type' => 'text', 'maxlength' => '50', 'placeholder' => 'merchantcode', 'value' => set_value('scd'));
			echo form_input($identifier);
			echo form_error('scd', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Success URL :", 'su');

			$success_url= array('name' => 'su', 'id' => 'su', 'type' => 'text', 'maxlength' => '32', 'placeholder' => 'http://mysite.com?q=su', 'value' => set_value('su'));
			echo form_input($success_url);
			echo form_error('su', '<div class="error">', '</div>');
			?>
		</p>
		<p>
			<?php
			echo form_label("Failure URL :", 'fu');

			$failure_url= array('name' => 'fu', 'id' => 'fu', 'type' => 'text', 'maxlength' => '32', 'placeholder' => 'http://mysite.com?q=fu', 'value' => set_value('fu'));
			echo form_input($failure_url);
			echo form_error('fu', '<div class="error">', '</div>');
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