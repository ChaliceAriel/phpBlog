
<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
  <!-- *** Footer *** -->
<div id="footer" >
  <div class="container-fluid">
  <h4 class="top"><a href="#">Back to Top</a></h4>
    <div class="row" id="footerPad">
    </div>
    <div class="row">
      <div id="footerSearch" class="col-xs-4">
        <div>
            <h4 class='searchText'><span class="glyphicon glyphicon-search"></span> Search</h4>
            <form id="searchBar" method="get" action="results.php">
            <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="">
            </div>
            </form>
        </div>
      </div>
      <div id="footerSM" class="col-xs-4 text-center">
        <a href="https://www.facebook.com/chalice.ariel/" target="_blank"><span class="hb hb-xs"><i class="fa fa-fbook"></i></span></a>
        <a href="https://twitter.com/ChaliceAriel" target="_blank"><span class="hb hb-xs"><i class="fa fa-witter"></i></span></a>
        <a href="https://github.com/ChaliceAriel" target="_blank"><span class="hb hb-xs"><i class="fa fa-github-square"></i></span></a>
        <a href="https://www.linkedin.com/in/chalice-stevens-000239112" target="_blank"><span class="hb hb-xs"><i class="fa fa-lin-square"></i></span></a>
      </div>
      <div id="footerNav" class="navbar-nav col-xs-4">
        <ul>
          <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>
          <li class="<?= ($activePage == 'projects') ? 'active':''; ?>"><a href="projects.php">Projects</a></li>
          <li class="<?= ($activePage == 'about') ? 'active':''; ?>"><a href="about.php">About</a></li>
          <li class="<?= ($activePage == 'contact') ? 'active':''; ?>"><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
    <p id="copyright" class="text-center">Copyright &copy; Chalice Stevens 2016</p>
  </div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </div>
  </body>
</html>
<?php ob_flush(); ?>