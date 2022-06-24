<?php
require_once('./config.php');
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT * from `booking_list` where id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }
}
?>
<div class="container-fluid">
    <form action="" id="booking-form">
        <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
        <input type="hidden" name="cab_id" value="<?= isset($_GET['cid']) ? $_GET['cid'] : (isset($cab_id) ? $cab_id : "") ?>">
        <div class="form-group">
            <label for="pickup_zone" class="control-label">Pickup Location</label>
            <textarea name="pickup_zone" id="pickup_zone" rows="2" class="form-control form-control-sm rounded-0" required></textarea>
        </div>
        <div class="form-group">
            <label for="drop_zone" class="control-label">Drop-off Location</label>
            <textarea name="drop_zone" id="drop_zone" rows="2" class="form-control form-control-sm rounded-0" required></textarea>
        </div>
    </form>
</div>

<script>
	$(document).ready(function(){
		$('#booking-form').submit(function(e){
			e.preventDefault();
            var _this = $(this)
			 $('.err-msg').remove();
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Master.php?f=save_booking",
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
						location.href = './?p=booking_list';
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
	})
</script>