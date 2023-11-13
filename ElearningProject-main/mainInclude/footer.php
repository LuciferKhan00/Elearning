 <!-- Start Footer -->
 <footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">Copyright &copy; 2023 || Designed By The DBMS Enchanters ||<a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter"> Admin Login</a> </small>
    </footer>
    <!-- end footer -->



<!-- Start Student Registration Form -->
<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="stuRegModalCenterLabel">Student Registration</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <label for="stuname" class="pl-2 font-weight-bold "style="margin-bottom: 10px;" >Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname" style="margin-bottom: 10px;">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label for="stumail" class="pl-2 font-weight-bold" style="margin-bottom: 10px;">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="stumail" id="stumail">
                        <small class="form-text">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="stupass" class="pl-2 font-weight-bold" style="margin-bottom: 10px;">New Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="addStu()">Sign Up</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Student Registration Form -->

<!-- Start Student LOGIN Form -->
<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="stuLoginModalCenterLabel">Student Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form" id= "stuLoginForm">
                   
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label for="stuLogemail" class="pl-2 font-weight-bold" style="margin-bottom: 10px;">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
                     
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="stuLogpass" class="pl-2 font-weight-bold" style="margin-bottom: 10px;">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- End Student LOGIN Form -->



<!-- Start Admin LOGIN Form -->
  <!-- Admin Login Modal -->
  <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" 
  aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="adminLoginModalCenterLabel">Admin Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
<!-- End Admin LOGIN Form -->









    <!-- jquery and Bootstrap JavaScript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="js/all.min.js"></script>

    <!-- Student Testimonial Slider Js -->
    <!-- <script type="text/javascript" src="js/owl.min.js"></script>
    <script type="text/javascript" src="js/testyslider.js"></script> -->

    <!-- Student Ajax Call JavaScript -->
    <script type="text/javascript" src="js/ajaxrequest.js"></script>   
    <!-- Initialize Swiper -->


</body>

</html>