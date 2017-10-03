<div class="content-games">
        <div class="games">
          <h1 class="text-center"><?php echo $title; ?></h1>
          <p> <?php echo $subtitle; ?> </p>
          <?php if($title == "Success!"): ?>
            <a href="<?php echo site_url('/login'); ?>">Go to login</a>
          <?php else: ?>
            <a href="<?php echo site_url('/register'); ?>">Go back to registration</a>
          <?php endif; ?>
        </div><!-- end of games -->

    </div><!-- end of content -->
    <hr>