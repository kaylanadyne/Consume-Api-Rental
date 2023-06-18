<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Rental - page</title>
  <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/flat-icon/flaticon.css">
  <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
  <div class="main-wrapper">
    <header class="header header--bg">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#">RENTAL</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav pull-right">
             
            </ul>
          </div>
        </nav>
        <div class="header__content text-center">
          <h1 class="header__content__title">RENTAL Bogor</h1>
          <p class="header__content__paragraph">Ready to accomplish your trip! Over 100 cars, we provide the best for you and your family</p>
          <a class="button button--margin-right button--hover" href="/howto">LEARN MORE</a>
          <a class="button button--hover" href="/rental" >PURCHASE</a>
        </div>
      </div>
    </header>
    
    <section class="service">
      <div class="container">
        <div class="page-section text-center">
          <h2 class="page-section__title">SERVICES WE OFFER</h2>
          <p class="page-section__paragraph">we offer various facilities </p>
          <div class="row gutters-40">
          <div class="col-md-4">
              <div class="thumbnail">
                <i class="material-icons">local_cafe</i>
                <h4 class="service__title">Save energy</h4>
                <p class="service__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                <i class="material-icons">access_time</i>
                <h4 class="service__title">Save Time</h4>
                <p class="service__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                <i class="material-icons">group</i>
                <h4 class="service__title">Family-save</h4>
                <p class="service__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="contact contact--bg">
      <div class="container">
        <div class="page-section text-center">
          <h2 class="page-section__title--white">We're here for you</h2>
          <p class="page-section__paragraph--white">If you like our works and have a project,contact us now</p>
          <a class="button button--hover" href="/add">CONTACT US</a>
        </div>
      </div>
    </section>
  </div>
    
    
  

  <script src="assets/jquery/jquery-3.2.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function() {

      var $videoSrc = $("#video").attr("src");

      $('#myModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src',$videoSrc); 
      });



    });
  </script>
</body>
</html>





