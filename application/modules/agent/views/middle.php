<?phpa
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo validation_errors(); ?>
 
<?php echo form_open('agent/edit/'.$data['id'], "class='form-horizontal'"); ?>
	<div class="form-group">
		<div class="col-sm-4">
			<label class="control-label no-padding-right" for="form-field-1">First Name </label>
			<input type="text" id="form-field-1" placeholder="First Name" name="f_name" class="col-xs-10 col-sm-5" value="<?php echo $data['first_name']; ?>">
		</div>
		<div class="col-sm-4">
			<label class="control-label no-padding-right" for="form-field-1">Middle Name </label>
			<input type="text" id="form-field-1" placeholder="Middle Name" name="m_name" class="col-xs-10 col-sm-5" value="<?php echo $data['middle_name']; ?>">
		</div>
		<div class="col-sm-4">
			<label class="control-label no-padding-right" for="form-field-1">Last Name </label>
			<input type="text" id="form-field-1" placeholder="Last Name" name="l_name" class="col-xs-10 col-sm-5" value="<?php echo $data['last_name']; ?>">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-6">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Agent Type</label>
			<input type="text" id="form-field-2" placeholder="Agent Type" class="col-xs-10 col-sm-5" name="agent_type" value="<?php echo $data['agent_type_id']; ?>">
		</div>
		<div class="col-sm-6">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Consultancy Name </label>
			<input type="text" id="form-field-2" placeholder="Consultancy Name" class="col-xs-10 col-sm-5" name="consultancy_name" value="<?php echo $data['consultancy_name']; ?>">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-6">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-3">Contact Number</label>
			<input type="number" id="form-field-3" placeholder="Contact Number" class="col-xs-10 col-sm-5" name="contact_number" value="<?php echo $data['mobile']; ?>">
		</div>
		<div class="col-sm-6">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-3">Email</label>
			<input type="number" id="form-field-3" placeholder="Email" class="col-xs-10 col-sm-5" name="Email" value="<?php echo $data['email']; ?>">
		</div>
		
	</div>
	<div class="form-group">
		<div class="col-sm-4">
				<label class="control-label no-padding-right" for="form-field-1">Select Campus</label>
				<input type="text" id="form-field-1" placeholder="Select Campus" name="campus" class="col-xs-10 col-sm-5" value="<?php echo $data['campus_id']; ?>">
			</div>
		<div class="col-sm-4">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-3">Address</label>
				<textarea id="form-field-3" class="col-xs-10 col-sm-5" name="address" ><?php echo $data['address']; ?></textarea>
		</div>
		<div class="col-sm-4">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-3">City</label>
				<input type="number" id="form-field-3" placeholder="City" class="col-xs-10 col-sm-5" name="city" value="<?php echo $data['city']; ?>">
		</div>
	</div>
	<div class="form-group">
			<div class="col-sm-4">
				<label class="control-label no-padding-right" for="form-field-1">Select Commission Slot</label>
				<input type="text" id="form-field-1" placeholder="Select Commission Slot" name="m_name" class="col-xs-10 col-sm-5" value="<?php echo $data['comm_slot_id']; ?>">
			</div>
			<div class="col-sm-4">
				<input type="file" id="form-field-1" placeholder="Upload MOU" name="upload_mou" class="col-xs-10 col-sm-5" value="<?php echo $data['mou_doc']; ?>">
			</div>
			<div class="col-sm-4">
				<label class="control-label no-padding-right" for="form-field-1">Select Status</label>
				<input type="text" id="form-field-1" placeholder="Select Campus" name="status" class="col-xs-10 col-sm-5" value="<?php echo $data['status']; ?>">
			</div>
	</div>	
	<div class="space-4"></div>
	<div class="clearfix form-actions">
		<div class="col-md-offset-3 col-md-9">
			<button class="btn btn-info" type="submit">
				<i class="ace-icon fa fa-check bigger-110"></i>
				Submit
			</button>

			&nbsp; &nbsp; &nbsp;
			<button class="btn" type="reset">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Reset
			</button>
		</div>
	</div>
</form>