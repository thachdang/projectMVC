<div class="row">
    <div class="col-lg-8 col-lg-offset-2 " style="margin-bottom: 10px;">
        <a class="btn btn-sm btn-primary" href="/login/signup">
            <span>Add Member</span>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
                    <?php if (!empty($content['message'])) : ?>
                    <div class="alert alert-<?php echo $content['message']['type'];  ?> alert-dismissable" >
                        <?php echo $content['message']['content']; ?>
                    </div>
                <?php endif; ?>
            <div class="box-body">
<?php if(isset($this->userList)){ ?>
    <div class="pd-top">
        <table class="table table-hover">
            <tbody>
                <tr class="tbl-header">
                    <th>STT</th>  
                    <th>Username</th>
                    <th>Role</th>
                    <th></th>
                </tr>
                <?php $i=0 ?>  
                <?php foreach($this->userList as $key => $value) 
                { 
                    $i ++;
                ?>   
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td >
                        <?php echo $value['username'] ?>
                    </td>
                    <td >
                        <?php echo $value['role'] ?>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="/user/edit/<?php echo $value['userid'] ?>">
                            <span>Edit Member</span>
                        </a>
                        <a class="btn btn-sm btn-primary" href="/user/delete/<?php echo $value['userid'] ?>">
                            <span>Delete Member</span>
                        </a>
                    </td>
                </tr>
                <?php } ?> 
            </tbody>
        </table>            
    </div>
<?php } ?>
            </div>
    </div>
</div>
