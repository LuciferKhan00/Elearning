<!--start navigation -->
<?php
include('./mainInclude/header.php');
?>

  <!-- end navigation -->
  <div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
      <video playsinline autoplay muted loop>
        <source src="video/banvid1.mp4">

      </video>
      <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
      <h1 class="my-content">Welcome to iSchool</h1>
      <small class="my-content">Learn and Implement</small><br><br>
      <?php 
      if(!isset($_SESSION['is_login'])){
      
     echo '<a href="#" class="btn btn-danger mt-1" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
      }
      else{
        echo '<a href="#" class="btn btn-primary mt-1">My Profile</a>';
      }
      ?>
    </div>
  </div>

  <!-- start text banner -->
  <div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
      <div class="col-sm">
        <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
      </div>
      <div class="col-sm">
        <h5><i class="fas fa-users mr-3 "></i>Expert Instructions</h5>
      </div>
      <div class="col-sm">
        <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
      </div>
      <div class="col-sm">
        <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Gurantee*</h5>
      </div>
    </div>
  </div><!--end textbanner-->

  <!-- start most popular course-->
  <div class="container mt-5">
    <h1 class="text-center">Popular Course</h1>
    <!--first card-->
    <div class="card-deck mt-4">
      <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
        <div class="card">
          <img src="image/java.png" class="card-img-top" alt="java" />
          <div class="card-body">
            <h5 class="card-title">Learn Java an easy way</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline"> Price: <small><del>&#8377 2000 </del></small>
              <span class="font-weight-bolder">&#8377 200</span>
            </p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>

          </div>
        </div>
      </a>


      <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
        <div class="card">
          <img src="image/java1.jpg" class="card-img-top" alt="java" />
          <div class="card-body">
            <h5 class="card-title">Learn Java an easy way</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline"> Price: <small><del>&#8377 2000 </del></small>
              <span class="font-weight-bolder">&#8377 200</span>
            </p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>

          </div>
        </div>
      </a>


      <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
        <div class="card">
          <img src="image/java.png" class="card-img-top" alt="java" />
          <div class="card-body">
            <h5 class="card-title">Learn Java an easy way</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline"> Price: <small><del>&#8377 2000 </del></small>
              <span class="font-weight-bolder">&#8377 200</span>
            </p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>

          </div>
        </div>
      </a>




    </div>
    <!--2nd card-->

    <div class="card-deck mt-4">
      <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
        <div class="card">
          <img src="image/python.png" class="card-img-top" alt="java" />
          <div class="card-body">
            <h5 class="card-title">Learn Python an easy way</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline"> Price: <small><del>&#8377 3000 </del></small>
              <span class="font-weight-bolder">&#8377 300</span>
            </p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>

          </div>
        </div>
      </a>


      <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
        <div class="card">
          <img src="image/python.png" class="card-img-top" alt="java" />
          <div class="card-body">
            <h5 class="card-title">Learn Python an easy way</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline"> Price: <small><del>&#8377 3000 </del></small>
              <span class="font-weight-bolder">&#8377 300</span>
            </p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>

          </div>
        </div>
      </a>


      <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
        <div class="card">
          <img src="image/python.png" class="card-img-top" alt="java" />
          <div class="card-body">
            <h5 class="card-title">Learn Python an easy way</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline"> Price: <small><del>&#8377 3000 </del></small>
              <span class="font-weight-bolder">&#8377 300</span>
            </p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>

          </div>
        </div>
      </a>


    </div>

    <div class="text-center m-2">
      <a class="btn btn-danger btn-sm" href="#">View All Course</a>
    </div>


  </div>

  <!-- end popular course -->

  <!-- start contact us -->
  <?php
include('./contact.php');
?>
 <!-- end contact us -->

  <!--start student feedback-->
 
  <?php
include('./student feedback.php');
?>
   <!--end student feedback-->

  <!--start social follow-->
  <div class="container-fluid bg-danger">
    <div class="row  text-white text-center p-1">
      <div class="col-sm ">
        <a style="text-decoration: none" class="text-white social-hover" href="#">
          <i class="fab fa-facebook-f" style="margin-right: 4px"></i>Facebook </a>
      </div>
      <div class="col-sm">
        <a style="text-decoration: none" class="text-white social-hover" href="#">
          <i class="fab fa-twitter" style="margin-right: 4px"></i>Twitter </a>
      </div>
      <div class="col-sm ">
        <a style="text-decoration: none" class="text-white social-hover" href="#">
          <i class="fab fa-whatsapp" style="margin-right: 4px"></i>Whatsapp </a>
      </div>

      <div class="col-sm">
        <a style="text-decoration: none" class="text-white social-hover" href="#">
          <i class="fab fa-instagram" style="margin-right: 4px"></i>Instagram</a>
      </div>
    </div>
  </div> <!--end social media-->

  <!--start about section-->
  <div class="container-fluid p-4" style="background-color:#E9ECEF">
    <div class="container" style="background-color:#E9ECEF">
      <div class="row text-center">
        <div class="col-sm">
          <h5>About US</h5>
          <p>iSchool provides universal access to the world's best education
            ,partnering with top universities and organizations to offer courses online.</p>
        </div>
        <div class="col-sm">
          <h5>Category</h5>
          <a class="text-dark" href="#">Web Development</a><br>
          <a class="text-dark" href="#">Web Designing</a><br>
          <a class="text-dark" href="#">Android Development</a><br>
          <a class="text-dark" href="#">IOS Development</a><br>
          <a class="text-dark" href="#">Data Analysis</a><br>
        </div>
        <div class="col-sm">
          <h5>Contact US</h5>
          <p>iSchool Pvt Ltd <br> Near Police Line <br> Mirermoydan,Sylhet <br> Phone: +013642792</p>

        </div>
      </div>
    </div>
  </div><!--end about section-->

  <!-- start footer -->
  <?php
  include('./mainInclude/footer.php');
  ?>
  <!-- end footer -->