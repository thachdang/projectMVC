<div class="row">
	<div class="col-lg-8 col-xs-8" style="margin-left: 16.66666667%">
	    <div class="box box-primary box-solid">
	        <div class="box-header with-border">Add User</div>
        	<div class="box-body">
				<form method="post" action="<?php echo URL;?>user/create" class="form-horizontal padding-top20">
				    <div class="form-group">
				        <div class="form-group">
				            <label class="col-md-2 col-md-offset-1"  style="text-align: left;    width: 135px;" for="member_name">Login</label>
				            <div class="col-md-8">
				                <input type="text" name="login" />
				            </div>
				        </div>
				        <div class="form-group">
				            <label class="col-md-2 col-md-offset-1"  style="text-align: left;    width: 135px;" for="member_name">Password</label>
				            <div class="col-md-8">
				                <input type="text" name="password" />
				            </div>
				        </div>
				       	<div class="form-group">
				            <label class="col-md-2 col-md-offset-1"  style="text-align: left;    width: 135px;" for="member_name">Role</label>
				            <div class="col-md-8">
				                <select name="role">
						            <option value="default">Default</option>
						            <option value="admin">Admin</option>
						        </select>
				            </div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-2 col-md-offset-1">
				            	<input type="submit" id="send" name="send" class="btn btn-md btn-primary btn-md" value="Add Member">
				            </div>
				        </div>
				     </div>
				</form>
			</div>
		</div>
	</div>
</div>

