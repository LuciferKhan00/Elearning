<!--start footer-->
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright &copy:2023 || Designed BY
    NOOR || <a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter"> Admin Login</a>
  </small>
</footer>
<!--start student registration modal-->

<div class="modal fade" id="stuRegModalCenter" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!--start student registration form-->
        <?php include('studentRegistration.php'); ?>
        <!--end student registration form-->
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--end student registration modal-->

<!--start admin login modal-->

<div class="modal fade" id="adminLoginModalCenter" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">AdminLogin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--start admin login form-->
        <form id="adminLoginForm">
          <div class="form-group">
            <i class="fas fa-envelope"></i>
            <label for="adminLogemail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i>
            <label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
          </div>
        </form>
      </div> <!--end admin login form-->
      <div class="modal-footer">
     
        <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!--start student login modal-->

<div class="modal fade" id="stuLoginModalCenter" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--start student login form-->
        <form id="stuLoginForm">
          <div class="form-group">
            <i class="fas fa-envelope"></i>
            <label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i>
            <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
          </div>
        </form>
      </div> <!--end student login form-->
      <div class="modal-footer">
        <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--student ajax call javascript -->
<script type="text/javascript" src="js/ajaxrequest.js"></script>

<!--admin ajax call javascript -->
<script type="text/javascript" src="js/adminajaxrequest.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




<script>
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: true,
    smartSpees: 1000,
    center: true,
    dots: true,
    responsive: {
      // navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 3
      }
    }
  })
</script>



</body>

</html>