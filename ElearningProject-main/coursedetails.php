<!-- header start -->
<?php
include('./mainInclude/header.php');
?>
<!-- header End -->

<!-- Start Course Page Banner -->
<div class="container-fluid bg-dark">
<div class="row">
<img src="./image/coursebanner1.jpg" alt="courses" style="height: 500px; width:100% ; object-fit:cover;box-shadow:10px;">
</div>
</div>
<!-- End Course Page Banner -->

<!-- start main content -->
<div class="container mt-5">
    <div class="class">
        <div class="col-md-4">
         <img src="./image/guitar.jpg" class="card-img-top" alt="Guitar" />
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: Learn Guitar</h5>
                <p class="card-text">
                    Description: Lorem, ipsum dolor sit amet consectetur adipisicing elit
                </p>
                <p class="card-text">Duration: 10 Days</p>
                <form action="" method="post">
                    <p class="card-text d-incline"> Price: <small><del>& #8377 2000</del></small>
                            <span class="font-weight-bolder">
                                &#8377 200
                            </span>
                        </p>
                        <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="Buy">Buy Now</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-hover">
                <thread>
                    <tr>
                        <th scope="col">Lesson No.</th>
                        <th scope="col">Lesson Name</th>
                    </tr>
                </thread>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Introduction</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end main content -->


<!-- Footer start -->
<?php
include('./mainInclude/footer.php');
?>
<!-- Footer End -->