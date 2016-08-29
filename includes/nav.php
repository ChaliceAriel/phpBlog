
<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
  <!-- *** Nav Panel *** -->
    <nav class="navbar navbar-inverse">
    <a href="index.php"><img id="logo" src="images/myLogo.png"/></a>
        <div class="navbar-nav navbar-right">  
          <ul>
            <a href="https://www.facebook.com/chalice.tech/" target="_blank"><span class="hb hb-xs"><i class="fa fa-fbook"></i></span></a>
            <a href="https://twitter.com/ChaliceAriel" target="_blank"><span class="hb hb-xs"><i class="fa fa-witter"></i></span></a>
            <a href="https://github.com/ChaliceAriel" target="_blank"><span class="hb hb-xs"><i class="fa fa-github-square"></i></span></a>
            <a href="https://www.linkedin.com/in/chalice-stevens-000239112" target="_blank"><span class="hb hb-xs"><i class="fa fa-lin-square"></i></span></a>
          </div>
          </ul>
        </div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
      <div id="navbar" class="container-fluid text-center">
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="nav navbar-nav">
          <li class="<?= ($activePage == 'index' || $activePage == 'single' || $activePage == 'results') ? 'active':''; ?>"><a href="index.php">Home</a></li>
          <li class="<?= ($activePage == 'projects') ? 'active':''; ?>"><a href="projects.php">Projects</a></li>
          <li class="<?= ($activePage == 'about') ? 'active':''; ?>"><a href="about.php">About</a></li>
          <li class="<?= ($activePage == 'contact') ? 'active':''; ?>"><a href="contact.php">Contact</a></li>
          </ul>
      </div>
    </nav>