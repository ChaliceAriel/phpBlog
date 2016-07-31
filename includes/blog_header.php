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
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- *** CSS styles *** -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/blog.css" rel="stylesheet" type="text/css"/>


    <link rel="stylesheet" type="text/css" href="hexButtons/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="hexButtons/css/hexagons.css"> 
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

  </head>

  <body>

<?php include("includes/nav.php"); ?>

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
