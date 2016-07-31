<?php include("includes/header.php"); 

    if (isset($_GET['post'])) {
      $id = mysqli_real_escape_string($db, $_GET['post']); 
      $query = "SELECT * FROM posts WHERE id= '$id' ";
    } 

    //execute query on the database object and save results in $posts variable
    $posts = $db->query($query);

    if(isset($_POST['post_comment'])) {
        $name = mysqli_real_escape_string($db , $_POST['name']);
        $comment = mysqli_real_escape_string($db , $_POST['comment']);


        $post_query = "INSERT INTO comments (name, comment, post, website) VALUES('$name','$comment','$id','$website')";

        if($db->query($post_query)){
            echo "<script>alert('Comment Inserted!')</script>";
        } else {
            echo "<script>alert('Comment NOT Inserted!')</script>";
        }
    } 
?>
          <blockquote>2 Comments</blockquote>

                <!-- Comments Form -->
                <div class="well">
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
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

                