<?php include("includes/header.php"); ?>
  <body>
    <!-- *** JavaScripts *** -->
<!--     <script src="js/jquery-2.2.0.js" type="text/javascript" ></script>
    <script src="js/bootstrap.js" type="text/javascript" ></script>
 -->
    <!-- *** Nav *** -->
<?php include("includes/nav.php"); ?>

    <!-- *** Projects Section 1 *** --> 
    <div id="projects" class="projects">
      <div id="overlay" class="text-center">
              <div class="about-spacer">
      </div>
            <div id="TrickAdblock">
              <a href="https://www.facebook.com/chalice.tech/" target="_blank"><span class="hb hb-md"><i class="fa fa-fbook"></i></span></a>
              <a href="https://twitter.com/ChaliceAriel" target="_blank"><span class="hb hb-md"><i class="fa fa-witter"></i></span></a>
              <a href="https://www.linkedin.com/in/chalice-stevens-000239112" target="_blank"><span class="hb hb-md"><i class="fa fa-lin-square"></i></span></a>
            </div> 
      </div>
    </div>
    

    <!-- *** Projects Section 2 *** -->
   
    <div id="services" class="services">
      <div id="servicesC" class="container">
        <div id="servicesText" class="row text-center">

          <div class="col-sm-3 col-xs-12">
            <i class="glyphicon glyphicon-phone"> </i>
            <h4 class='servicesText'>Websites</h4>
            <p class="block">I build custom, responsive websites using Wordpress, Bootstrap and Materialize, PHP, HTML5, CSS3, JavaScript, and jQuery.</p>
          </div>


          <div class="col-sm-3 col-xs-12">
            <i class="glyphicon glyphicon-console"> </i>
            <h4 class='servicesText'>Web Apps</h4>
            <p class="block">I build Full-Stack Javascript apps using React and Angular, Node with Express, and MongoDB.</p>
          </div>

          <div class="col-sm-3 col-xs-12">
            <i class="glyphicon glyphicon-edit"> </i>
            <h4 class='servicesText'>&nbsp;UX&nbsp; Design</h4>
            <p class="block">I design the custom websites and Javascript apps I build, from layout and UI&#8212; to colors and styles.</p>
          </div>

          <div class="col-sm-3 col-xs-12">
            <i class="glyphicon glyphicon-headphones"> </i>
            <h4 class='servicesText'>Sound Design</h4>
            <p class="block">I compose, arrange, and record music for short films and promotional spots for television and radio.</p>
          </div>
        </div>
      </div>
    </div>
    

    <!-- *** Projects Section 3 *** -->
    
    <div id="projects2" class="projects2">
      <div class="text-vcenter">
        <a href="https://github.com/ChaliceAriel" target="_blank"><span class="hb hb-lg"><i class="fa fa-github-square"></i></span></a> 
      </div>
    </div>

    <div id="fullpage">
    </div>

    <!-- *** Home Section 4 *** -->

    <div id="projectMenu">
<!--         <div class="">
          <ul class="nav navbar-nav text-center">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul> -->
    </div>
    

    <!-- *** Section 4 *** -->
    <div id="information">
      <div class="container-fluid">
        <br>
        <div id="projectCarousel" class="carousel slide" data-ride="carousel">
          <!-- *** Indicators *** -->
          <ol class="carousel-indicators">
            <li data-target="#projectCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#projectCarousel" data-slide-to="1"></li>
            <li data-target="#projectCarousel" data-slide-to="2"></li>
            <li data-target="#projectCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

            <div class="item active">
              <div class="carousel-caption">
                <h3><a href="https://fathomless-gritter.herokuapp.com/#/?_k=ncpmbt" target="_blank">Gritter React Single-Page App</a></h3>
                <p>Gritter is a Full-stack ReactJS (MERN) application that queries and pulls tweets from the Twitter Search API and artfully displays them in a draggable, droppable grid <a href="https://github.com/STRML/react-grid-layout" target="_blank">(STRML)</a>.</p>
              </div>
              <img src="images/Gritter.JPG" alt="Coding" />
            </div>

            <div class="item">
              <div class="carousel-caption">
                <h3>"Duval Architecture" Concept Site</h3>
                <p>Need a website that is bold, completely original, but still mobile-friendly? This landing page is an example of the custom websites I can build without using a framework.</p>
              </div>
              <img src="images/Custom.JPG" alt="Dock" />
            </div>

            <div class="item">
              <div class="carousel-caption">
                <h3><a href="http://intermountainopera.org/" target="_blank">Intermountain Opera Website</a></h3>
                <p>In 2015 I worked with IOB Director, Jackie Vick, and the web team at Townsquare Interactive to facilitate the complete redesign of the company website. I then created and arranged content using the newly-implemented CMS.</p>
              </div>  
              <img src="images/IOB.JPG" alt="Webpage" />
            </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#projectCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#projectCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
      </div>
    </div>

    <!-- *** Footer *** -->
<?php include("includes/footer.php"); ?>