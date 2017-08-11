<style>
th{
	text-align:center;
}
</style>
	<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg12">
		<div><h2> Agent Details</h2> </div>

		<div style="margin-top:50px;">
			<table id="table" class="display" cellspacing="0" width="100%" align='center' style="text-align:center !important;">
				<thead>
					<tr>
						<th>Agent ID</th>
						<th>Agent Type</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Last Name</th>
						<th>Consultancy Name</th>
						<th>City</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				</tbody>

				<tfoot>
					<tr>
						<th>Agent ID</th>
						<th>Agent Type</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Last Name</th>
						<th>Consultancy Name</th>
						<th>City</th>
						<th>Action</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg12">
	<div class="box" >
            <div class="box-header">
              <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"><h3 class="box-title">Agent Details</h3></div>
			  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><button type="button" class="btn btn-primary"><a href="javascript:add_edit_agent();">Add Agent</a></button></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped" style="text-align:center;">
                <thead>
                <tr style="background-color: #222d32;color:#ffffff;">
                  <th>Sr.No.</th>
                  <th>Agent ID</th>
                  <th>Agent Name</th>
                  <th>Consultancy Name</th>
                  <th>City</th>
				  <th>Email</th>
				  <th>Mobile</th>
				  <th>Status</th>
				  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
				<?php $srNo = 1; foreach($data as $key=>$value){?>
					<tr >
					  <td><?php echo $srNo;?></td>
					  <td><?php echo $value['agent_id'];?></td>
					  <td><?php echo $value['first_name']." ".$value['middle_name']." ".$value['last_name'];?></td>
					  <td><?php echo $value['consultancy_name'];?></td>
					  <td><?php echo $value['city'];?></td>
					  <td><?php echo $value['email'];?></td>
					  <td><?php echo $value['mobile'];?></td>
					  <td><?php if($value['status'] == 1){?><span class="label label-success">Active</span>
					  <?php }else if($value['status'] == 0){?><span class="label label-danger">Deactive</span><?php} else {?><span class="label label-warning">Pending</span><?php }?>
					  </td>
					  <td><i class="fa fa-fw fa-edit" data="<?php echo $value['id'];?>" style="cursor:pointer;"></i>&nbsp;&nbsp;<i class="fa fa-fw fa-trash" data="<?php echo $value['id'];?>" style="cursor:pointer;"></i>&nbsp;&nbsp;<i class="fa fa-fw fa-eye" data="<?php echo $value['id'];?>" style="cursor:pointer;"></i></td>
					</tr>
				<?php $srNo = $srNo + 1;}?>
                
                </tbody>
                <tfoot>
                <tr style="background-color: #222d32;color:#ffffff;">
                  <th>Sr.No.</th>
                  <th>Agent ID</th>
                  <th>Agent Name</th>
                  <th>Consultancy Name</th>
                  <th>City</th>
				  <th>Email</th>
				  <th>Mobile</th>
				  <th>Status</th>
				  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="agentDetDiv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Edit Agent Details</h4>

            </div>
            <div class="modal-body"><div class="te" id="editContentDiv"></div></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
