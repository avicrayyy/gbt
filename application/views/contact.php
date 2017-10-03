<div class="content-contact">
      <div class="banner">
        <h1 class="banner-text"><mark>Contact Us</mark></h1>
        <p><mark>Have any questions or concerns? Get in touch with us!</mark></p>
      </div>
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <?php
                $attributes = array('class' => 'form-horizontal', 'role' => 'form');
                echo form_open('contact/send', $attributes);
            ?>
            <div class="form-group">
              <label for="name" class="control-label">Name</label>
              <div class="">
                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="control-label">Email</label>
              <div class="">
                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="message" class="control-label">Message</label>
              <div class="">
                <textarea class="form-control" rows="4" name="message"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="">
                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-red">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10 offset-sm-2">
              </div>
            </div>
          <?php echo form_close(); ?>
          <hr>
        </div>
      </div>
      <div class="location">
        <div class="address">
          <p>
              <strong>Game-Book.</strong><br>
              Concordia Plaza<br>
              Unit 5-6, 7/F Greenfield Tower<br>
              Tsim Sa Tsui, Kowloon Hong Kong</p>
          <a href="mailto:scstvgames@gmail.com" class="email">contactus@gameplaytv.net</a>
        </div>

        <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1845.682347449478!2d114.17772986188417!3d22.302043147628968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400ef4cdd1275%3A0x1d681cb294fff90!2sConcordia+Plaza+Car+Park!5e0!3m2!1sen!2sus!4v1504782617236"></iframe>
        
    </div>
    <!-- Footer -->
    <hr>