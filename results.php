<?php 
include("includes/config.php");
include("includes/db.php");

if(isset($_GET['search'])){
   $page_title = "\"" . $_GET['search'] . "\" Search Results";
}

include("includes/blog_header.php"); 

  if (isset($_GET['search'])) {
      $keyword = mysqli_real_escape_string($db, $_GET['search']); 
      $query = "SELECT * FROM posts WHERE keywords LIKE '%$keyword%' ";
      $posts = $db->query($query);
  } else {
      echo "<p>No keyword entered!</p>";
  }

?>

		
    <div id="results" class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">

        <br>
        <div class="alert alert-info">Search Results for "<?= @$_GET['search']; ?>":</div>
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
                  <img class="personal" src="images/Chalice_closeUp.png"/><h3 class="profile_title">by <a href="#"><?= $row['author']; ?></a></h3>
                </p>
                <!-- Date/Time -->
                <hr>
                <p class= "blog-post-meta"><span class="glyphicon glyphicon-time"></span>Posted on <?= $row['date']; echo ' ' . $row['time']; ?></p>
                <hr>
                <!-- Post Body -->
                <?= $row['truncated']; ?>
               <br> 
               <a href="single.php?post=<?= $row['id']; ?>"><button class="btn btn-primary center-text">Read Full Article</button></a>
          </div>
        </div><!-- /.blog-post -->
      <?php } } else {
          echo "<div id='lost' class='container-fluid text-center'><p class='lostText'>Hmmm...I think you might have gotten lost along your coding journey.<br>Sorry! No matching posts were found for this keyword.</p></div></div>";
       } ?>
      <?php include("includes/sidebar.php"); ?>
      </div><!-- /.blog-main -->

        
    </div><!-- /.row -->

</div><!-- /.container -->
      <div class="container-fluid">
        <div id="pagebreak" class="jumbotron text-center">
        <p id ="quote">The Greatest Adventure is what Lies Ahead<br> -J.R.R. Tolkien</p>
        </div>
        <?php include("includes/footer.php"); ?>


