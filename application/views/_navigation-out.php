<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">Game-Book.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ">
            <li class="nav-item <?php if(isset($isHome)){ echo "active";} ?>">
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item <?php if(isset($isLearn)){ echo "active";} ?>">
              <a class="nav-link" href="<?php echo site_url('/learn'); ?>">Learn</a>
            </li>
            <li class="nav-item <?php if(isset($isGames)){ echo "active";} ?>">
              <a class="nav-link" href="<?php echo site_url('/games'); ?>">Games</a>
            </li>
            <li class="nav-item <?php if(isset($isContact)){ echo "active";} ?>">
              <a class="nav-link" href="<?php echo site_url('/contact'); ?>">Contact</a>
            </li>
          </ul>
          <hr>
          <?php if(!$isLogScreen): ?>
          <div class="member">
            <ul class="navbar-nav ml-auto">
              <li>ARE YOU A MEMBER?</li>
              <li class="nav-item">
                <a class="nav-link logo-red" href="<?php echo site_url("/login"); ?> ">REGISTER / LOGIN</a>
              </li>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </nav>