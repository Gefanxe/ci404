<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <meta charset="utf-8">
  <title>Eterna - Professional bootstrap site template for corporate business</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="/css/bootstrap.css" rel="stylesheet" />
  <link href="/css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="/css/flexslider.css" rel="stylesheet" />
  <link href="/css/prettyPhoto.css" rel="stylesheet" />
  <link href="/css/camera.css" rel="stylesheet" />
  <link href="/css/jquery.bxslider.css" rel="stylesheet" />
  <link href="/css/style.css" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="/color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="/ico/favicon.png" />

  <?php $this->renderSection('head'); ?>
</head>

<body>
<div id="wrapper">

  <?php echo $this->include('header'); ?>
  <?php echo $this->include('nav'); ?>

  <section id="featured">

    <!-- slideshow start here -->

    <div class="camera_wrap" id="camera-slide">

      <!-- slide 1 here -->
      <div data-src="/img/slides/camera/slide1/img1.jpg">
        <div class="camera_caption fadeFromLeft">
          <div class="container">
            <div class="row">
              <div class="span6">
                <h2 class="animated fadeInDown"><strong>Great template for <span class="colored">multi usage</span></strong></h2>
                <p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi dissentiet cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne, dolores appetere vim ut. Sea no tamquam reprimique.</p>
                <a href="#" class="btn btn-success btn-large animated fadeInUp">
                    <i class="icon-link"></i> Read more
                  </a>
                <a href="#" class="btn btn-theme btn-large animated fadeInUp">
                    <i class="icon-download"></i> Download
                  </a>
              </div>
              <div class="span6">
                <img src="/img/slides/camera/slide1/screen.png" alt="" class="animated bounceInDown delay1" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- slide 2 here -->
      <div data-src="/img/slides/camera/slide2/img1.jpg">
        <div class="camera_caption fadeFromLeft">
          <div class="container">
            <div class="row">
              <div class="span6">
                <img src="/img/slides/camera/slide2/iMac.png" alt="" />
              </div>
              <div class="span6">
                <h2 class="animated fadeInDown"><strong>Put your <span class="colored">Opt in form</span></strong></h2>
                <p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi dissentiet cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne, dolores appetere vim ut. Sea no tamquam reprimique.</p>
                <form>
                  <div class="input-append">
                    <input class="span3 input-large" type="text">
                    <button class="btn btn-theme btn-large" type="submit">Subscribe</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- slide 3 here -->
      <div data-src="/img/slides/camera/slide2/img1.jpg">
        <div class="camera_caption fadeFromLeft">
          <div class="container">
            <div class="row">
              <div class="span12 aligncenter">
                <h2 class="animated fadeInDown"><strong><span class="colored">Responsive</span> and <span class="colored">cross broswer</span> compatibility</strong></h2>
                <p class="animated fadeInUp">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                <img src="/img/slides/camera/slide3/browsers.png" alt="" class="animated bounceInDown delay1" />
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- slideshow end here -->

  </section>

  <section id="works">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h4 class="title">Recent <strong>Works</strong></h4>
            <div class="row">

              <div class="grid cs-style-4">
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="/img/dummies/works/1.jpg" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
								<a href="/img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
								</span>
                          <span>
								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
								</span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="/img/dummies/works/2.jpg" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
								<a href="/img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
								</span>
                          <span>
								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
								</span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="/img/dummies/works/3.jpg" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
								<a href="/img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
								</span>
                          <span>
								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
								</span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="/img/dummies/works/4.jpg" alt="" /></div>
                      <figcaption>
                        <div>
                          <span>
								<a href="/img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
								</span>
                          <span>
								<a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
								</span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

  <?php $this->renderSection('content'); ?>

  <?php echo $this->include('footer'); ?>

</div>
<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/js/jquery.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/bootstrap.js"></script>

  <script src="/js/modernizr.custom.js"></script>
  <script src="/js/toucheffects.js"></script>
  <script src="/js/google-code-prettify/prettify.js"></script>
  <script src="/js/jquery.bxslider.min.js"></script>
  <script src="/js/camera/camera.js"></script>
  <script src="/js/camera/setting.js"></script>

  <script src="/js/jquery.prettyPhoto.js"></script>
  <script src="/js/portfolio/jquery.quicksand.js"></script>
  <script src="/js/portfolio/setting.js"></script>

  <script src="/js/jquery.flexslider.js"></script>
  <script src="/js/animate.js"></script>
  <script src="/js/inview.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="/js/custom.js"></script>
</body>

</html>