     <div class="content-login">
        <div class="row h-100">
            <div class="mx-auto my-auto">
                <div class="logo">
                    <h1><a href="index.php" class="main-logo">Game-Book.</a></h1>
                    <?php if($err): ?>
                        <span><?php echo $err ?></span>
                    <?php endif; ?>
                </div>            
                <div class="box">
                    <div class="login-box">
                      <?php echo form_open('login/check'); ?>
                          <div class="form-group">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="Password" class="form-control" name="password" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-red">Login</button>
                          <hr>
                          <div class="not-member">
                            <p>NOT YET A MEMBER?<br><a class="logo-red" href="<?php echo site_url('/register'); ?>">REGISTER NOW!</a></p>
                          </div>
                      <?php echo form_close(); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>