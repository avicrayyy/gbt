<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url("/welcome") ?>">Game-Book.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ">
            <li class="nav-item <?php if(isset($isHome)){ echo "active"; } ?> ">
              <a class="nav-link" href="<?php echo site_url("/welcome") ?>">Play
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item <?php if(isset($isBet)){ echo "active"; } ?>">
              <a class="nav-link" href="<?php echo site_url("/bet") ?>">Bet</a>
            </li>
            <li class="nav-item <?php if(isset($isWatch)){ echo "active"; } ?>">
              <a class="nav-link" href="<?php echo site_url("/watch") ?>">Watch</a>
            </li>
          </ul>
          <hr>
          <div class="member">
            <ul class="navbar-nav ml-auto">
                <li><?php echo $userName; ?></li>
              <li class="nav-item">
                   <a class="nav-link logo-red" href="<?php echo site_url("/login/destroy") ?>">LOGOUT</a>
              </li>
            </ul>
            </div>
        </div>
      </div>
    </nav>