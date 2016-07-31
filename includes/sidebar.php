        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">

     <!-- Blog Search Well -->


                <div id="searchWell" class="sidebar-module well">
                    <h4>Search</h4>
                    <form method="get" action="results.php">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" class="form-control">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                </div>

          <div id="about" class="sidebar-module sidebar-module-well">
            <h4> About</h4>
            <p>Interested in teaching yourself how to code? Me too! This site was built to connect with others in the coder community, to share what I've learned and created, and to talk about what I am learning right now. Thank you for visiting! <span class="glyphicon glyphicon-heart-empty"></span></p>
          </div>

          <div class="sidebar-module">
            <h4>Subscribe Below</h4>
            <hr>
            
            <?php if(isset($_POST['subscribe'])) {

                $name = mysqli_real_escape_string($db , $_POST['name']);
                $email = mysqli_real_escape_string($db , $_POST['email']);
  
                $query = "INSERT INTO subscribers (name,email) VALUES('$name','$email')";
                
                $db->query($query);
                echo "<script type='text/javascript'>window.location = 'index.php?success';</script>";
            } ?>
                <form method="post">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <button type="submit" name="subscribe" class="btn btn-primary">Subscribe</button>
                </form>
                <br>
                <p><blockquote>Subscribers, you will receive no more than one email per week, which is about how often I add a new post.</blockquote></p>
			  </div>

          <div id="wellPad" class="sidebar-module well">
            <h4 class="left-pad">Categories</h4>
            <div class="row">
                <div class="col-lg-12">
                    <?php $q = "SELECT * FROM categories"; 
                        $categories = $db->query($q);
                    ?>
                    <ul class="list-unstyled">
                      <?php while($category = $categories->fetch_assoc()): ?>
                        <li><a class="green" href="index.php?category=<?= $category['id']; ?>"><?= $category['title']; ?></a></li>
                      <?php endwhile; ?>
                    </ul>
                </div>
            </div>
          </div>

         <div class="sidebar-module well">
            <h4 class="left-pad">Recent Posts</h4>
            <div class="row">
                <div class="col-lg-12">
                    <?php $q = "SELECT title, date, id FROM posts ORDER BY date DESC LIMIT 5"; 
                        $recent = $db->query($q);
                    ?>
                    <ul class="list-unstyled">
                      <?php while($post = $recent->fetch_assoc()): ?>
                        <li><a class="green" href="single.php?post=<?= $post['id'] ?>" ><?= $post['title']; ?></a></li>
                        <li><small><span class="glyphicon glyphicon-calendar"></span><?= $post['date']; ?></small></li>
                      <?php endwhile; ?>
                    </ul>
                </div>
            </div>            
        </div>

        <div id="wellPad" class="sidebar-module well">
            <h4 class="left-pad">Links to Great Sites</h4>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled">
                      <li><a href="http://www.w3schools.com/" target="_blank">W3 Schools</a></li>
                      <li><a href="http://stackoverflow.com/" target="_blank">Stack Overflow</a></li>
                    </ul>
                </div>
            </div>
          </div>

<!--   <span class="sm">PM</span> -->  