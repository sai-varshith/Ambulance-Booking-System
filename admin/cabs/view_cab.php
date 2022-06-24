<?php
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT c.*, cc.name as category from `cab_list` c inner join category_list cc on c.category_id = cc.id where c.id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=stripslashes($v);
        }
    }
}
?>
<style>
    .cab-img{
        width:15vw;
        height:20vh;
        object-fit:scale-down;
        object-position:center center;
    }
</style>
<div class="content py-3">
    <div class="card card-outline rounded-0 card-purple shadow">
        <div class="card-header">
            <h4 class="card-title">Cab Details</h4>
            <div class="card-tools">
                <a class="btn btn-primary btn-sm btn-flat" href="./?page=cabs/manage_cab&id=<?= isset($id) ? $id : "" ?>"><i class="fa fa-edit"></i> Edit</a>
                <a class="btn btn-danger btn-sm btn-flat" href="javascript:void(0)>" id="delete_data"><i class="fa fa-trash"></i> Delete</a>
                <a class="btn btn-default border btn-sm btn-flat" href="./?page=cabs"><i class="fa fa-angle-left"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="<?= validate_image(isset($image_path) ? $image_path : "") ?>" alt="cab Image <?= isset($name) ? $name : "" ?>" class="img-thumbnail cab-img">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <small class="mx-2 text-muted">Registeration Code</small>
                        <div class="pl-4"><?= isset($reg_code) ? $reg_code : '' ?></div>
                    </div>
                    <div class="col-md-6">
                        <small class="mx-2 text-muted">Category</small>
                        <div class="pl-4"><?= isset($category) ? $category : '' ?></div>
                    </div>
                </div>
                <fieldset>
                    <legend class="h4 text-muted"><b>Cab Details</b></legend>
                    <div class="row">
                        <div class="col-md-6">
                            <small class="mx-2 text-muted">Vehicle Registration No</small>
                            <div class="pl-4"><?= isset($cab_reg_no) ? $cab_reg_no : '' ?></div>
                        </div>
                        <div class="col-md-6">
                            <small class="mx-2 text-muted">Model</small>
                            <div class="pl-4"><?= isset($cab_model) ? $cab_model : '' ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small class="mx-2 text-muted">Body No.</small>
                            <div class="pl-4"><?= isset($body_no) ? $body_no : '' ?></div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend class="h4 text-muted"><b>Driver Details</b></legend>
                    <div class="row">
                        <div class="col-md-6">
                            <small class="mx-2 text-muted">Name</small>
                            <div class="pl-4"><?= isset($cab_driver) ? $cab_driver : '' ?></div>
                        </div>
                        <div class="col-md-6">
                            <small class="mx-2 text-muted">Contact #</small>
                            <div class="pl-4"><?= isset($driver_contact) ? $driver_contact : '' ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small class="mx-2 text-muted">Address</small>
                            <div class="pl-4"><?= isset($driver_address) ? $driver_address : '' ?></div>
                        </div>
                    </div>
                </fieldset>
                <div class="row">
                    <div class="col-md-12">
                        <small class="mx-2 text-muted">Status</small>
                        <div class="pl-4">
                            <?php if(isset($status)): ?>
                                <?php if($status == 1): ?>
                                    <span class="badge badge-success px-3 rounded-pill">Active</span>
                                <?php else: ?>
                                    <span class="badge badge-danger px-3 rounded-pill">Inactive</span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
		$('#delete_data').click(function(){
			_conf("Are you sure to delete this cab permanently?","delete_cab",[])
		})
    })
    function delete_cab($id = '<?= isset($id) ? $id : "" ?>'){
		start_loader();
		$.ajax({
			url:_base_url_+"classes/Master.php?f=delete_cab",
			method:"POST",
			data:{id: $id},
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("An error occured.",'error');
				end_loader();
			},
			success:function(resp){
				if(typeof resp== 'object' && resp.status == 'success'){
					location.href= './?page=cabs';
				}else{
					alert_toast("An error occured.",'error');
					end_loader();
				}
			}
		})
	}
</script>