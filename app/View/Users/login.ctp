<div id="login-page">
    <div class="container">
    
          <?php echo $this->Form->create('',array('class' => 'form-login')); ?>
            <h2 class="form-login-heading">sign in now</h2>
            <?php echo $this->Session->flash('user'); ?>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="User ID" name="login" autofocus>
                <br>
                <input type="password" class="form-control" placeholder="Password" name="password">
                <br />
                <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
    
            </div>
    
            <?php echo $this->Form->end(); ?>      

    </div>
</div>