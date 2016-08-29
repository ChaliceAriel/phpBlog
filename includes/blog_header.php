<?php ob_start(); ?>
<?php

  $query = "SELECT * FROM categories";

  $categories = $db->query($query);

 ?>


<?php

   $activePage = basename($_SERVER['PHP_SELF'], ".php");

   if ($activePage == "index") {
   $page_title = "Chalice.Tech | Blog Home";
   } 


?>

<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8" />
    <meta name="ChaliceAriel" content="ChaliceStevensHomepage" />
    <title><?= $page_title?></title>
    <link rel="icon" type="image/png" href="images/favicon.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- *** CSS styles *** -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/blog5.css" rel="stylesheet" type="text/css"/>


    <link rel="stylesheet" type="text/css" href="hexButtons/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="hexButtons/css/hexagons.css"> 
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

  </head>

  <body>

  <!-- *** Nav Panel *** -->
    <nav class="navbar navbar-inverse">
    <a href="index.php"><img id="logo" src="images/myLogo.png"/></a>
        <div class="navbar-nav navbar-right">  
          <ul>
            <a href="https://www.facebook.com/chalice.tech/" target="_blank"><span class="hb hb-sm"><i class="fa fa-fbook"></i></span></a>
            <a href="https://twitter.com/ChaliceAriel" target="_blank"><span class="hb hb-sm"><i class="fa fa-witter"></i></span></a>
            <a href="https://github.com/ChaliceAriel" target="_blank"><span class="hb hb-sm"><i class="fa fa-github-square"></i></span></a>
            <a href="https://www.linkedin.com/in/chalice-stevens-000239112" target="_blank"><span class="hb hb-sm"><i class="fa fa-lin-square"></i></span></a>
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

      <div class="jumbotron text-center">
        <h1 id="blog-title">Adventures in Code</h1>
        <p>Lessons and Discoveries Along My Coding Journey.</p>
      </div>
    <div class="blog-masthead">
      <div class="container nav-container">
        <nav class="blog-nav">
    <!--     If there is a category listed inside the url, remove active class from the link. -->
        <?php if(isset($_GET['category']) || strpos($_SERVER['REQUEST_URI'], "index.php") === false ){ ?>
          <a class="blog-nav-item" href="index.php">Home</a>
        <?php } else { ?>
          <a class="blog-nav-item active" href="index.php">Home</a>
        <?php } ?>

          <?php if($categories->num_rows > 0): ?>
            <?php while ($row = $categories->fetch_assoc()): 
                /*check for category var inside url, & if value of variable is equal to id of the row */
                /*return link with row title and set class to "active"*/
                /*otherwise, return link and do not set as active*/
                if (isset($_GET['category']) && $row['id'] == $_GET['category'] ) { ?>
                  <a class="blog-nav-item active" href="index.php?category=<?= $row['id']; ?>"/><?= $row['title']; ?></a>
                <?php } else echo "<a class='blog-nav-item' href='index.php?category=$row[id]'>$row[title]</a>"; ?>

            <?php endwhile; ?>
          <?php endif; ?>
        </nav>
      </div>
    </div>
