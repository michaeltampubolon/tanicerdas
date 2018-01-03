<div class="row-fluid">
    <div class="span4">
        <div class="page-header">
            <h3 style="text-align:center;">Login</h3>
        </div>
        
        <?php if (isset($error_login)): ?>
        <div class="alert alert-error">
            <a class="close" data-dismiss="alert" href="#">&times;</a>
            <h4 class="alert-heading"><?php echo $error_login['login']; ?></h4>
        </div>
        <?php endif; ?>
        <form class="well" action="" method="post" style="margin: 5px 10px;">
        <label>Username</label>
        <input type="text" name="row[username]" class="span12" placeholder="">
        <label>Password</label>
        <input type="password" name="row[password]" class="span12" placeholder="">
        <input type="submit" style="margin-top:15px;font-weight: bold;" name="btn-login" class="btn btn-primary btn-large" value="Login"/>
        </form>
        <span class="pull-left"><a href="<?php echo base_url();?>index.php/login" class="flip-link btn btn-info" id="to-recover">Login Petani</a></span>
    </div>
    
    <div class="span1">
        
    </div>
</div>