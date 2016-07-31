<?php 
include("includes/config.php");
include("includes/db.php");

if(isset($_GET['post'])){
   $post = mysqli_real_escape_string($db , $_GET['post']);

   $results = $db->query("SELECT * FROM posts WHERE id='$post'"); 
   $p = $results->fetch_assoc();
   $page_title = $p['title'];

}

include("includes/blog_header.php"); 

    date_default_timezone_set('America/Denver');    

    if (isset($_GET['post'])) {
      $id = mysqli_real_escape_string($db, $_GET['post']); 
      $query = "SELECT * FROM posts WHERE id= '$id' ";
    } 

    //execute query on the database object and save results in $posts variable
    $posts = $db->query($query);

    if(isset($_POST['post_comment'])) {
        $name = mysqli_real_escape_string($db , $_POST['name']);
        $comment = mysqli_real_escape_string($db , $_POST['comment']);

        $post_query = "INSERT INTO comments (name, comment, timestamp, post) VALUES('$name','$comment', now(), '$id')";

        $db->query($post_query);

        header("Location:single.php?post=$id/success");
        exit();
    } 

    $comment_query = "SELECT * FROM comments WHERE post='$id' AND status= '1' ";

    $comments = $db->query($comment_query);
  
?>
    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
          <div class="blog-header">
            <?php   
            if (strpos($_SERVER['REQUEST_URI'], "success") !== false){
              $message = "Thank you for your comment! Your comment is awaiting approval, and will be displayed as soon as it has been approved.";
              echo "<div class='alert alert-success'>$message</div>";
            }  ?>
            <h1 id="cursive">Chalice's</h1>
            <span class="glyphicon glyphicon-chevron-down"></span><h1 class="blog-title">Adventures in Code</h1>
          </div>
          <!-- check property num_rows on mySQL results object to see if there are any posts returned from database-->
          <!-- loop through result set and return next row using fetch_assoc() method -->
        <!-- start .blog-post -->  
        <?php if($posts->num_rows > 0) : 
          while($row = $posts->fetch_assoc()) :
          ?>
         
          <div class="blog-post">
            <h2><?= $row['title']; ?></h2>
            <h4><a href="#"><?= $row['subtitle']; ?></a></h4>
              <!-- Author -->
                <p class="lead">
                  <img class="personal" src="images/Chalice_closeUp.png"/><h3 class="profile_title">by <a href="about.php"><?= $row['author']; ?></a></h3>
                </p>
                <!-- Date/Time -->
                <hr>
                <p class= "blog-post-meta"><span class="glyphicon glyphicon-time"></span>Posted on <?= $row['date'] . " " . $row['time']; ?></p>
                <hr>
                <!-- Post Body -->
                <?= $row['body']; ?>
               <br> <br>
               <h4>Wishing You All The Best in Your Coding Adventures,</h4>
               <h2 id="signature">Chalice</h2>
               <br>
            
            <blockquote class="sans"><?= $comments->num_rows; ?> Comments</blockquote>
                <!-- Comments Form -->
                <div id="comment" class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" method="post">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name_input" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="comment" class="form-control" placeholder="Comment" rows="3"></textarea>
                        </div>
                        <button type="submit" name="post_comment" class="btn btn-primary">Post Comment</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <?php while($comment = $comments->fetch_assoc()) : 

                    $oDate = new DateTime($comment['timestamp']); $formatedDate = $oDate->format("F j, Y, g:i a");

                ?>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?= $comment['name']; ?>
                        <?php if($comment['is_admin'] != 0) {
                              echo "<button class='btn btn-info btn-xs'>Admin</button>";
                        } ?>
                            <small><?= $formatedDate ?></small>
                        </h4>
                        <?= $comment['comment']; ?>
                    </div>
                </div>
                <?php endwhile;  ?>

          </div>
        </div><!-- /.blog-post -->
      <?php endwhile; ?>
    <?php endif; ?>
      <?php include("includes/sidebar.php"); ?>

      </div><!-- /.blog-main -->

       
    </div><!-- /.row -->

</div><!-- /.container -->
      <div class="container-fluid">
        <div id="pagebreak" class="jumbotron text-center">
        <p id ="quote">The Greatest Adventure is what Lies Ahead<br> -J.R.R. Tolkien</p>
        </div>
        <?php include("includes/footer.php"); ?>