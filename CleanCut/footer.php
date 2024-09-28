
<section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2><?php echo get_theme_mod('banner_heading','Follow Us On Social Media:') ?></h2>
                </div>
                <div class="col-lg-6 animate__fadeInRight">
                    <ul class="list-inline banner-social-buttons">
                        <?php if(get_theme_mod('facebook_url', 'http://facebook.com') != '') : ?>
                           <li class="list-inline-item"><a class="btn btn-light btn-lg" href="<?php echo get_theme_mod('facebook_url','http://facebook.com'); ?>" target="_blank"><i class="fa fa-facebook fa-fw"></i> Facebook</a></li>
                        <?php endif; ?>
                        <?php if(get_theme_mod('twitter_url', 'http://twitter.com') != '') : ?>
                         <li class="list-inline-item"><a class="btn btn-light btn-lg" href="<?php echo get_theme_mod('twitter_url','http://twitter.com'); ?>" target="_blank"><i class="fa fa-twitter fa-fw"></i> Twitter</a></li>   
                        <?php endif; ?>

                        <?php if(get_theme_mod('linkedin_url', 'http://linkedin.com') != '') : ?>
                        <li class="list-inline-item"><a class="btn btn-light btn-lg" href="<?php echo get_theme_mod('facebook_url','http://linkedin.com'); ?>" target="_blank"><i class="fa fa-linkedin fa-fw"></i> Linkedin</a></li>   
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
</section>

<footer >
<div class="copyright pt-3 pb-3 border-top bg-dark">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#">Home</a>
                </li>
                <li class="list-inline-item">
                    <a href="#about">About</a>
                </li>
                <li class="list-inline-item">
                    <a href="#services">Services</a>
                </li>
                <li class="list-inline-item">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
      <div class="col-lg-12">
        <p class="small m-0 text-white"> Copyright &copy; <?php echo date('Y') ?> All Rights Reserved to TYS </p>
      </div>
    </div>
  </div>
</div>
</footer>

<?php wp_footer(); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>