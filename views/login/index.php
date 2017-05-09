
<section class="content">
    <div class="row">
        <div class="col-lg-6 col-md-6 box-layout">
                <?php if (!empty($content['message'])) : ?>
                    <div class="alert alert-<?php echo $content['message']['type'];  ?> alert-dismissable" >
                        <?php echo $content['message']['content']; ?>
                    </div>
                <?php endif; ?>
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <span>
                        <i class="fa fa-user"></i>
                    </span>
                    Login
                </div>
                <form action="<?php echo URL ?>login/run" class="form-horizontal padding-top20" id="loginform" method="post">
                    <div class="form-group">
                        <label class="col-lg-4 col-md-4 control-common-label text-right">Username</label>
                        <div class="col-lg-4 col-md-4">
                            <input type="text" id="username" name="username" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-md-4 control-common-label text-right">Password</label>
                        <div class="col-lg-4 col-md-4">
                            <input type="password" id="password" name="password" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4 control-common-label text-right"></label>
                        <div class="col-xs-2">
                            <a class="btn btn-md btn-primary"  href="javascript:$('#loginform').submit();">
                                <i class="fa fa-lock"></i>
                                <span>Login</span>
                            </a>
                        </div>
                        <div class="col-xs-2">
                            <a class="btn btn-md btn-primary" style="margin-left: 30%" href="<?php echo URL; ?>login/signup">
                                <i class="fa fa-lock"></i>
                                <span>Sign</span>
                            </a>
                        </div>
                    </div>
                </form>         
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->