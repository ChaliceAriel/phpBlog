<?php 
include("includes/config.php");
include("includes/db.php");

if(isset($_GET['category'])){
   $category = mysqli_real_escape_string($db , $_GET['category']);

   $results = $db->query("SELECT * FROM categories WHERE id='$category'"); 
   $r = $results->fetch_assoc();
   $page_title = "Chalice.Tech | " . $r['title'];

}

include("includes/blog_header.php"); 
  /*if there is a category inside the url, GET that category and store it inside a variable*/
  if (isset($_GET['category'])) {
      $category = mysqli_real_escape_string($db, $_GET['category']); 
      $query = "SELECT * FROM posts WHERE category= '$category' ORDER BY id";
  } else {
      $query = "SELECT * FROM posts ORDER BY id DESC LIMIT 3";
  }

    //execute query on the database object and save results in $posts variable
    $posts = $db->query($query);

?>
    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
  	      <div class="blog-header">
            <?php   
            if (strpos($_SERVER['REQUEST_URI'], "success") !== false){
              $message = "Thank you for subscribing to Chalice.Tech!";
              echo "<div class='alert alert-success'><strong>Success! </strong>$message</div>";
            }  ?>
            <h1 id="cursive">Chalice's</h1>
            <span class="glyphicon glyphicon-chevron-down"></span><h1 class="blog-title">Adventures in Code</h1>
            </div>
          <!-- check property num_rows on mySQL results object to see if there are any posts returned from database-->
          <!-- loop through result set and return next row using fetch_assoc() method -->
        <!-- start .blog-post -->  
        <?php if($posts->num_rows > 0) { 
          while($row = $posts->fetch_assoc()) {
          ?>
         
          <div class="blog-post">
            <h2><a href="single.php?post=<?= $row['id'] ?>"><?= $row['title']; ?></a></h2>
            <h4><a href="#"><?= $row['subtitle']; ?></a></h4>
              <!-- Author -->
                <p class="lead">
                  <img class="personal" src="images/Chalice_closeUp.png"/><h3 class="profile_title">by <a href="about.php"><?= $row['author']; ?></a></h3>
                </p>
                <!-- Date/Time -->
                <hr>
                <p class= "blog-post-meta"><span class="glyphicon glyphicon-time"></span>Posted on <?= $row['date']; echo ' ' . $row['time']; ?></p>
                <hr>
                <!-- Post Body -->
                <?= $row['truncated']; ?>
               <br> 
            <a href="single.php?post=<?= $row['id']; ?>"><button class="btn btn-primary center-text btn-article">Full Article</button></a>
            <hr class="blue-line">
          </div>
                  <?php } } else {
          echo "<div class='alert alert-warning'><p>Sorry! No matching posts were found.</p></div>";
       } ?>
        </div><!-- /.blog-post -->
      <?php include("includes/sidebar.php"); ?>
      </div><!-- /.blog-main -->

        
    </div><!-- /.row -->

</div><!-- /.container -->
      <div class="container-fluid">
        <div id="pagebreak" class="jumbotron text-center">
        <p id ="quote">The Greatest Adventure is what Lies Ahead<br> -J.R.R. Tolkien</p>
        </div>
        <?php include("includes/footer.php"); ?>


