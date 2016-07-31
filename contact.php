
<?php include("includes/header.php"); ?>  
  <body>

    <!-- *** Nav Panel *** -->
<?php include("includes/nav.php"); ?>

    <!-- *** Contact Section 1 *** -->
    
    <div id="contact">



      <div id="overlayContact" class="text-vcenter">

        <h3>info@<span class="largeText">chalice.tech</span></h3>
<!--           <div class="container-fluid"> -->
            <div id="emailForm" class="container-fluid">
              <form class="form-horizontal" role="form" method="post" action="contactForm.php">
                <div class="form-group">
                  <div class="col-sm-12">
                  <label for="name" class="control-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                  <label for="email" class="control-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your_Email@domain.com" value="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                  <label for="message" class="control-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" name="message"></textarea>
<!--                   </div> -->
                </div>
              <!--   <div class="form-group">
                  <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                  </div> -->
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input id="submit" name="submit" type="submit" value="Send Email" class="btn btn-primary">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                    <! Will be used to display an alert to the user>
                  </div>
                  <div class="col-sm-1"></div>
                </div>
              </form>
              </div>

            <div id="contact-li">
              <a href="https://www.linkedin.com/in/chalice-stevens-000239112" target="_blank"><span class="hb hb-md"><i class="fa fa-lin-square"></i></span></a> 
            </div>

          </div>

        </div>    
      </div>
    </div>

    <!-- *** Footer *** -->
<?php include("includes/footer.php"); ?>