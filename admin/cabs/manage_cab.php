<?php
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT * from `cab_list` where id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=stripslashes($v);
        }
    }
}
?>
<style>
	#cimg{
		width: 15vw;
		height: 20vh;
		object-fit:scale-down;
		object-position:center center;
	}
</style>
<div class="card card-outline card-purple rounded-0">
	<div class="card-header">
		<h3 class="card-title"><?php echo isset($id) ? "Update ": "Create New " ?> Cab</h3>
	</div>
	<div class="card-body">
		<form action="" id="cab-form">
			<input type="hidden" name ="id" value="<?php echo isset($id) ? $id : '' ?>">
            <div class="form-group">
				<label for="category_id" class="control-label">Category</label>
                <select name="category_id" id="category_id" class="custom-select select2">
                    <option value="" <?= !isset($category_id) ? "selected" : "" ?> disabled></option>
                    <?php 
                    $categorys = $conn->query("SELECT * FROM category_list where delete_flag = 0 ".(isset($category_id) ? " or id = '{$category_id}'" : "")." order by `name` asc ");
                    while($row= $categorys->fetch_assoc()):
                    ?>
                    <option value="<?= $row['id'] ?>" <?= isset($category_id) && $category_id == $row['id'] ? "selected" : "" ?>><?= $row['name'] ?> <?= $row['delete_flag'] == 1 ? "<small>Deleted</small>" : "" ?></option>
                    <?php endwhile; ?>
                </select>
			</div>
			<div class="form-group">
				<label for="cab_reg_no" class="control-label">Plate #/Vehicle Reg #</label>
                <input name="cab_reg_no" id="cab_reg_no" type="text" class="form-control rounded-0" value="<?php echo isset($cab_reg_no) ? $cab_reg_no : ''; ?>" required>
			</div>
			<div class="form-group">
				<label for="cab_model" class="control-label">Vehicle Model</label>
                <input name="cab_model" id="cab_model" type="text" class="form-control rounded-0" value="<?php echo isset($cab_model) ? $cab_model : ''; ?>" required>
			</div>
			<div class="form-group">
				<label for="body_no" class="control-label">Cab's Body #</label>
                <input name="body_no" id="body_no" type="text" class="form-control rounded-0" value="<?php echo isset($body_no) ? $body_no : ''; ?>" required>
			</div>
            <div class="form-group">
				<label for="cab_driver" class="control-label">Driver Name</label>
                <input name="cab_driver" id="cab_driver" type="text" class="form-control rounded-0" value="<?php echo isset($cab_driver) ? $cab_driver : ''; ?>" required>
			</div>
			<div class="form-group">
				<label for="driver_contact" class="control-label">Driver's Contact #</label>
                <input name="driver_contact" id="driver_contact" type="text" class="form-control rounded-0" value="<?php echo isset($driver_contact) ? $driver_contact : ''; ?>" required>
			</div>
			<div class="form-group">
				<label for="driver_address" class="control-label">Driver's Address</label>
                <textarea name="driver_address" id="driver_address" type="text" class="form-control rounded-0" required><?php echo isset($driver_address) ? $driver_address : ''; ?></textarea>
			</div>
			<div class="form-group">
				<label for="password" class="control-label">Driver's Account Password</label>
				<div class="input-group">
                	<input name="password" id="password" type="password" class="form-control rounded-0" <?php echo !isset($password) ? 'required' : ''; ?>>
					<div class="input-group-append">
						<button class="btn btn-outline-default pass_view" type="button"><i class="fa fa-eye-slash"></i></button>
					</div>
				</div>
				<small class="text-muted"><i>Leave this field blank if you don't wish to update the driver's account password.</i></small>
			</div>
			<div class="form-group col-md-6">
				<label for="" class="control-label">Driver's Image</label>
				<div class="custom-file">
	              <input type="file" class="custom-file-input rounded-circle" id="customFile" name="img" onchange="displayImg(this,$(this))">
	              <label class="custom-file-label" for="customFile">Choose file</label>
	            </div>
			</div>
			<div class="form-group col-md-6 d-flex justify-content-center">
				<img src="<?php echo validate_image(isset($image_path) ? $image_path : "") ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
			</div>
            <div class="form-group">
				<label for="status" class="control-label">Status</label>
                <select name="status" id="status" class="custom-select selevt">
                <option value="1" <?php echo isset($status) && $status == 1 ? 'selected' : '' ?>>Active</option>
                <option value="0" <?php echo isset($status) && $status == 0 ? 'selected' : '' ?>>Inactive</option>
                </select>
			</div>
		</form>
	</div>
	<div class="card-footer">
		<button class="btn btn-flat btn-success" form="cab-form">Save</button>
		<a class="btn btn-flat btn-danger" href="?page=cabs">Cancel</a>
	</div>
</div>
<script>
	window.displayImg = function(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        	_this.siblings('.custom-file-label').html(input.files[0].name)
	        }

	        reader.readAsDataURL(input.files[0]);
	    }else{
            $('#cimg').attr('src', "<?php echo validate_image(isset($image_path) ? $image_path : "") ?>");
            _this.siblings('.custom-file-label').html("Choose file")
        }
	}
	$(document).ready(function(){
		$('.select2').select2({
			width:'100%',
			placeholder:"Please Select Here"
		})
		$('.pass_view').click(function(){
			var group = $(this).closest('.input-group');
			var type = group.find('input').attr('type')
			if(type == 'password'){
				group.find('input').attr('type','text').focus()
				$(this).html('<i class="fa fa-eye"></i>')
			}else{
				group.find('input').attr('type','password').focus()
				$(this).html('<i class="fa fa-eye-slash"></i>')
			}
		})
		$('#cab-form').submit(function(e){
			e.preventDefault();
            var _this = $(this)
			 $('.err-msg').remove();
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Master.php?f=save_cab",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
				success:function(resp){
					if(typeof resp =='object' && resp.status == 'success'){
						location.href = "./?page=cabs/view_cab&id="+resp.id;
					}else if(resp.status == 'failed' && !!resp.msg){
                        var el = $('<div>')
                            el.addClass("alert alert-danger err-msg").text(resp.msg)
                            _this.prepend(el)
                            el.show('slow')
                            $("html, body").animate({ scrollTop: _this.closest('.card').offset().top }, "fast");
                            end_loader()
                    }else{
						alert_toast("An error occured",'error');
						end_loader();
                        console.log(resp)
					}
				}
			})
		})

        $('.summernote').summernote({
		        height: 200,
		        toolbar: [
		            [ 'style', [ 'style' ] ],
		            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
		            [ 'fontname', [ 'fontname' ] ],
		            [ 'fontsize', [ 'fontsize' ] ],
		            [ 'color', [ 'color' ] ],
		            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
		            [ 'table', [ 'table' ] ],
		            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
		        ]
		    })
	})
</script>