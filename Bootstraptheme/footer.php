<footer class="main-footer bg-dark text-light pt-5 pb-3">
  <div class="container">
    <div class="row">
      <?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
        <?php dynamic_sidebar( 'footer_widgets' ); ?>
      <?php endif; ?>
    </div>
  </div>
</footer>

<div class="copyright pt-3 pb-3 border-top bg-dark">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <p class="small m-0 text-white"> Copyright &copy; <?php echo date('Y') ?> All Rights Reserved to TYS </p>
      </div>
    </div>
  </div>
</div>

<!-- signup modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SignUp to Get Started</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php if ( is_active_sidebar( 'signup_form' ) ) : ?>
          <?php dynamic_sidebar( 'signup_form' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
  </body>
</html>