<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/app.js" ></script>
  </head>
  <body>
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
              <a class="navbar-brand" href="#">Portfolio</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index">Home</a></li>
                <li><a href="#about">About</a></li>
                <li class="active"><a href="contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Projects <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

    <div class="container marketing main-body">
      <div class="jumbotron" id="socialMedia">
      <h1>Get in touch</h1>
	  <hr class="featurette-divider">
	    <div class="row">
		   <div class="col-lg-2">
		     <a href="https://www.plus.google.com/115895697792816813743">
             <img class="img-responsive" src="images/Google Plus.png" data-src="holder.js/100%x180" alt="Responsive image">
			 </a>
		   </div><!-- /.col-lg-4 -->
		   <div class="col-lg-2">
		     <a href="https://www.facebook.com/kgottis">
             <img class="img-responsive" src="images/Facebook.png" data-src="holder.js/100%x180" alt="Responsive image">
		     </a>
		   </div><!-- /.col-lg-4 -->
		   <div class="col-lg-2">
		     <a href="https://www.linkedin.com/pub/konstantinos-gottis/86/7/4b8">
             <img class="img-responsive" src="images/Linkedin.png" data-src="holder.js/100%x180" alt="Responsive image">
		     </a>
		   </div><!-- /.col-lg-4 -->
		   <div class="col-lg-2">
		     <a href="https://www.twitter.com/phoinikaskg">
             <img class="img-responsive" src="images/Twitter.png" data-src="holder.js/100%x180" alt="Responsive image">
			 </a>
		   </div><!-- /.col-lg-4 -->
		   <div class="col-lg-2">
		     <a href="https://www.pinterest.com/phoinikaskg/">
             <img class="img-responsive" src="images/Pinterest.png" data-src="holder.js/100%x180" alt="Responsive image">
			 </a>
		   </div><!-- /.col-lg-4 -->
		   <div class="col-lg-2">
		     <a href="http://kgot.deviantart.com/">
             <img class="img-responsive" src="images/Deviantart.png" data-src="holder.js/100%x180" alt="Responsive image">
			 </a>
		   </div><!-- /.col-lg-4 -->
          </div>
		  <hr class="featurette-divider">
          <p>Please feel free to contact me!</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-email="konstantinos.gottis@gmail.com">Send email</button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="exampleModalLabel">New message</h4>
		  </div>
		  <div class="modal-body">
			<form role="form">
			  <div class="form-group">
				<label for="recipient-name" class="control-label">Recipient:</label>
				<input type="text" class="form-control" id="recipient-name">
			  </div>
			  <div class="form-group">
				<label for="message-text" class="control-label">Message:</label>
				<textarea class="form-control" id="message-text"></textarea>
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Send message</button>
		  </div>
		</div>
	  </div>
	</div>

      <!-- FOOTER -->
      <footer class="footer">
        <p class="pull-right"><a href="#top-anchor">Back to top</a></p>
        <p>&copy; 2014 K.G. &middot; <a href="#top-anchor">Privacy</a></p>
      </footer>

    </div><!-- /.container -->
  </body>
</html>
