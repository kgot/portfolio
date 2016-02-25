<!DOCTYPE html>
<html lang="en" ng-app="portfolio">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>K.G. Portfolio</title>
  <link rel="stylesheet" href="components/bootstrap-css/css/bootstrap.min.css">
  <link rel="stylesheet" href="components/angular-bootstrap/ui-bootstrap-csp.css">
<link rel="stylesheet" href="css/font-awesome-4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
</head>

<body ng-controller="PortfolioCtrl">
  <div class="navbar-wrapper">
    <div class="container">
      <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index">Portfolio</a>
          </div>

          <div id="navbar" class="navbar-collapse collapse" ng-controller="NavBarCtrl">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index">Home</a></li>
              <li><a href="#about" ng-click="gotoAnchor('')">About</a></li>
              <li><a href="#" ng-click="gotoAnchor('footer')">Contact</a></li>
              <li class="dropdown" dropdown on-toggle="toggled(open)" ng-controller="DropdownCtrl">
                <a href="#" class="dropdown-toggle" dropdown-toggle>Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li ng-repeat="choice in sections">
                    <a href>{{choice}}</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </nav>

  </div>
</div>

<!--        <div class="jumbotron jumbotron-index jumbotron-bg">
<div class="container jumbotron-content">
<h1>- Welcome -</h1>
<h2><b>To my personal portfolio!</b></h2>
<a class="btn btn-default-lg" href="#starting-point" role="button">
<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
</a>
</div>
</div>-->

<div ng-controller="ScrollBtnCtrl" >
  <a class="btn btn btn-default grow" id="btn-scroll-top" href="#" role="button" ng-click="scrollToTop()">
    <i class="fa fa-angle-up fa-2x" aria-hidden="true"></i>
  </a>
</div>

<a name="top-anchor" id="top-anchor" class="anchor-link"></a>

<div class="section-top" id="top-section">
  <div class="container section-top-content">
    <div class="col-xs-12">
      <h1>- Welcome -</h1>
      <h2><b>To my personal portfolio!</b></h2>
      <a class="btn btn-default-lg" href="#starting-point" role="button">
        <i class="fa fa-get-pocket" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing main-body">

  <!-- Three columns of text below the carousel -->

  <div class="row" id="badges">
    <div ng-controller="CollapseCtrl">
      <div class="col-lg-4">
        <img class="img-circle" src="images/grad_day_polygon_badge.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
        <h2>Heading</h2>
        <div collapse="isCollapsed">
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        </div>
        <p><a class="btn btn-default" ng-click="isCollapsed = !isCollapsed" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div>
    <div ng-controller="CollapseCtrl">
      <div class="col-lg-4">
        <img class="img-circle" src="images/leukos_pirgos_polygon_badge.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
        <h2>Heading</h2>
        <div collapse="isCollapsed">
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        </div>
        <p><a class="btn btn-default" ng-click="isCollapsed = !isCollapsed" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div>
    <div ng-controller="CollapseCtrl">
      <div class="col-lg-4">
        <img class="img-circle" src="images/jack_dog_polygon_badge.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
        <h2>Heading</h2>
        <div collapse="isCollapsed">
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div>
        <p><a class="btn btn-default" ng-click="isCollapsed = !isCollapsed" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div>
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <a name="starting-point" id="starting-point" class="anchor-link"></a>
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">My interests. <span class="text-muted">It'll blow your mind.</span></h2>
      <p class="lead">I'm so fucking interesting. Period.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive img-circle" src="images/robot_vint.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-5">
      <img class="featurette-image img-responsive img-circle" src="images/baracktocat_vint.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>
    <div class="col-md-7">
      <h2 class="featurette-heading">GitHub Repo. <span class="text-muted">Code code code.</span></h2>
      <p class="lead">I keep some of my code in Github. <a href = "https://github.com/kgot">Check out my Account.</a></p>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Talk about creativity, future. <span class="text-muted">Blah blah.</span></h2>
      <p class="lead">Roses are red, Violets are blue, When god gave us brains, Where the hell were you?</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive img-circle" src="images/lemons_vint.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette noise-one">
    <div class="col-md-5">
      <img class="featurette-image img-responsive img-circle" src="images/planet_vint.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>
    <div class="col-md-7">
      <h2 class="featurette-heading">More of them. <span class="text-muted">Moar moar moar.</span></h2>
      <p class="lead">This is more.</p>
    </div>
  </div>


  <div class="row featurette" id="projects">
    <div class="col-md-12">
      <div id="hex3" class="hexagon-wrapper">
      </div>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row">

    <div class="col-sm-4">
      <card>
        <img class="img-responsive center-block" src="images/vintage-java-beans.png"></img>
      </card>
    </div>

    <div class="col-sm-4">
      <card>
        <img class="img-responsive center-block" src="images/vintage-java-beans.png"></img>
      </card>
    </div>

    <div class="col-sm-4">
      <card>
        <img class="img-responsive center-block" src="images/vintage-java-beans.png"></img>
      </card>
    </div>

  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

  <div class="row">
    <div class="col-sm-4">
      <img class="img-responsive center-block" src="images/bootstrap.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>
    <div class="col-sm-4">
      <img class="img-responsive center-block" src="images/Laravel_logo.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>
    <div class="col-sm-4">
      <img class="img-responsive center-block" src="images/AngularShieldLogo.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>

  </div>

  <hr class="featurette-divider">

</div><!-- /.container -->

<!-- FOOTER -->
<footer class="footer anchor" id="anchor-footer">

  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">

        </div>

        <div class="col-md-4 pull-right">
          <div class="pull-right">
            <div class="row-social-images">
              <div class="col-xs-6 col-sm-6 col-social-images">
                <a href="https://www.facebook.com/kgottis">
                  <img class="img-responsive img-social" src="images/Facebook.png" data-src="holder.js/72%x72" alt="Responsive image">
                </a>
                <a href="https://www.plus.google.com/115895697792816813743">
                  <img class="img-responsive img-social" src="images/Google Plus.png" data-src="holder.js/72%x72" alt="Responsive image">
                </a>
                <a href="https://www.linkedin.com/pub/konstantinos-gottis/86/7/4b8">
                  <img class="img-responsive img-social" src="images/Linkedin.png" data-src="holder.js/72%x72" alt="Responsive image">
                </a>
              </div>
              <div class="col-xs-6 col-sm-6 col-social-images">
                <a href="https://www.pinterest.com/phoinikaskg/">
                  <img class="img-responsive img-social" src="images/Pinterest.png" data-src="holder.js/72%x72" alt="Responsive image">
                </a>
                <a href="https://www.twitter.com/phoinikaskg">
                  <img class="img-responsive img-social" src="images/Twitter.png" data-src="holder.js/72%x72" alt="Responsive image">
                </a>
                <a href="http://kgot.deviantart.com/">
                  <img class="img-responsive img-social" src="images/Deviantart.png" data-src="holder.js/72%x72" alt="Responsive image">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bottom-footer">
    <div class="container">
      <p class="pull-right"><a href="#top-anchor">Back to top</a></p>
      <p><h5><strong>&copy; 2014 K.G. &middot; <a href="#top-anchor">Privacy</a></strong></h5></p>
    </div>
  </div>

</footer>

<script src="js/dist/bundle-e6a827d4fc.js"></script>
<script src="js/dist/all-c0c9b6ed96.js"></script>
</body>
</html>
