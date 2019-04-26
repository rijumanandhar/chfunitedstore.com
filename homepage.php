<!DOCTYPE html>
<html>
<head>
  <title>Trader Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="../css/foundation.css" rel="stylesheet" type="text/css" />
  <link href="../css/foundation-icons/foundation-icons.css" rel="stylesheet"/>
  <link href="../foundation-icons/foundation-icons.css" rel="stylesheet"/>
</head>
<body>
  <div class="app-dashboard shrink-medium">
    <div class="grid-x  app-dashboard-top-nav-bar">
      <div class="columns medium-2">
      <button data-toggle="app-dashboard-sidebar" class="menu-icon hide-for-medium"></button>
      <a class="app-dashboard-logo">Foundation</a>
    </div>
    </div>

    <div class="app-dashboard-body off-canvas-wrapper">
      <div id="app-dashboard-sidebar" class="app-dashboard-sidebar position-left off-canvas off-canvas-absolute reveal-for-medium" data-off-canvas>
        <div class="app-dashboard-sidebar-title-area">
          <div class="app-dashboard-close-sidebar">
            <h3 class="app-dashboard-sidebar-block-title">Items</h3>
            <!-- Close button -->
            <button id="close-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-sidebar-close-button show-for-medium" aria-label="Close menu" type="button">
              <span aria-hidden="true"><a href="#"> <i class="large fi-arrow-left"></i></a></span>
            </button>
          </div>
          <div class="app-dashboard-open-sidebar">
            <button id="open-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-open-sidebar-button show-for-medium" aria-label="open menu" type="button">
              <span aria-hidden="true"><a href="#"> <i class="large fi-arrow-right"> </i> </a></span>
            </button>
          </div>
        </div>
        <div class="app-dashboard-sidebar-inner">
          <ul class="menu vertical">
            <li><a href="#" class="is-active">
              <i class="large fi-plus"></i><span class="app-dashboard-sidebar-text">Add Products</span>
            </a></li>
            <li><a>
              <i class="large fa fa-hourglass"></i><span class="app-dashboard-sidebar-text">Time</span>
            </a></li>
            <li><a>
              <i class="large fa fa-industry"></i><span class="app-dashboard-sidebar-text">Industry</span>
            </a></li>
          </ul>
        </div>
      </div>

      <div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content>
        <div class="grid-x">
            <div class="cell small-6 medium-4 large-3">
              <img class="thumbnail" src="https://placehold.it/550x550">
              <h5>Product</h5>
            </div>
            <div class="cell small-6 medium-4 large-3">
              <img class="thumbnail" src="https://placehold.it/550x550">
              <h5>Product</h5>
            </div>
            <div class="cell small-6 medium-4 large-3">
              <img class="thumbnail" src="https://placehold.it/550x550">
              <h5>Product</h5>
            </div>
            <div class="cell small-6 medium-4 large-3">
              <img class="thumbnail" src="https://placehold.it/550x550">
              <h5>Product</h5>
            </div>
            <div class="cell small-6 medium-4 large-3">
              <img class="thumbnail" src="https://placehold.it/550x550">
              <h5>Product</h5>
            </div>
        </div>
      </div>
    </div>
  </div>
</body>
<!--Java Scripts-->
    <script src="../js/vendor/jquery.js"></script>
  <script src="../js/vendor/what-input.js"></script>
  <script src="../js/vendor/foundation.js"></script>
  <script src="../js/app.js"></script>
<script type="text/javascript">
  $('[data-app-dashboard-toggle-shrink]').on('click', function(e) {
    e.preventDefault();
    $(this).parents('.app-dashboard').toggleClass('shrink-medium').toggleClass('shrink-large');
  });
</script>
</html>