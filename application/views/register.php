<div class="content-login">
      <div class="register-spacing">
        </div>
        <div class="row h-100">
            <div class="mx-auto my-auto">
                <div class="logo">
                    <h1><a href="index.php" class="main-logo">Game-Book.</a></h1>
                </div>
                <div class="box">
                    <div class="register-box"><!--register box-->
                        <?php 
                          $attributes = array('class' => 'reg-form');
                          echo form_open('register/submit',$attributes );                        
                        ?>
                          <div class="form-group">
                            <label for="formGroupExampleInput">Username</label>
                            <input type="text" class="form-control needs-validation" name="username" placeholder="Username">
                            <span class='username-message message'></span>
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2">Email</label>
                            <input type="email" class="form-control needs-validation" name="email" required="required" placeholder="Ex. game-book@email.com">
                            <span class='email-message message'></span>
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                          </div>
                          <div class="form-group terms">
                          <label><input type="checkbox" name="conform" value="agree" required="required">I AGREE TO TERMS</label>
                            <p>By checking this box and creating a Game-Book account, I certify that I have read, understand and agree to be bound by the <a href="<?php echo site_url('/docs/user-agreement') ?>" target="_blank">User Agreement</a> and <a href="<?php echo site_url('/docs/privacy') ?>" target="_blank">Privacy Policy</a>.</p>
                          </div>
                          <button type="submit" class="btn btn-red submit-btn">Submit</button>
                          <hr>
                          <div class="not-member">
                            <p>ALREADY A MEMBER?<br><a class="logo-red" href="<?php echo site_url('/login'); ?>">LOGIN HERE</a></p>
                          </div>
                        <?php echo form_close(); ?>
                    </div><!--End of Register Box-->

                </div>
            </div>
        </div>
    </div>