
<section class="content">
<div class="row">
	<div class="col-lg-8 col-xs-8" style="margin-left: 16.66666667%">
        <?php if (!empty($content['message'])) : ?>
            <div class="alert alert-<?php echo $content['message']['type'];  ?> alert-dismissable" >
                <?php
                	for($i = 0 ; $i < count($content['message']['content']) ; $i++){
                		echo $content['message']['content'][$i];
                		echo "</br>";
                	}
                  ?>
            </div>
        <?php endif; ?>
	    <div class="box box-primary box-solid">
	        <div class="box-header with-border">Edit Member</div>
        	<div class="box-body">
				<form method="post" action="<?php echo URL;?>user/editSave/<?php echo $this->user[0]['userid']; ?>" class="form-horizontal padding-top20">
				    <div class="form-group">
				        <div class="form-group">
				            <label class="col-lg-4 col-md-4 control-common-label text-right">Username</label>
	                        <div class="col-lg-4 col-md-4">
	                            <input type="text" id="username" name="username" value="<?php echo $this->user[0]['username']; ?>" class="form-control" >
	                        </div>
				        </div>
				        <div class="form-group">
	                        <label class="col-lg-4 col-md-4 control-common-label text-right">Password</label>
	                        <div class="col-lg-4 col-md-4">
	                            <input type="password" id="password" name="password" class="form-control" >
	                        </div>
				        </div>
				       	<div class="form-group">
				            <label class="col-lg-4 col-md-4 control-common-label text-right">Role</label>
				            <div class="col-lg-4 col-md-4">
				                <select name="role">
						            <option value="default" <?php if($this->user[0]['role'] == 'default') echo 'selected'; ?>>Default</option>
						            <option value="admin" <?php if($this->user[0]['role'] == 'admin') echo 'selected'; ?> >Admin</option>
						        </select>
				            </div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-2 col-md-offset-4">
				            	<input type="submit" id="send" name="send" class="btn btn-md btn-primary btn-md" value="Edit Member">
				            </div>
				        </div>
				     </div>
				</form>
			</div>
		</div>
	</div>
</div>
</section>
