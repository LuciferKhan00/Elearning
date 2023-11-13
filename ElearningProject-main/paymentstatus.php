<!-- header start -->
<?php
include('./mainInclude/header.php');
?>
<!-- header End -->

<!-- Start Course Page Banner -->
<div class="container-fluid bg-dark">
<div class="row">
<img src="./image/depositphotos.jpg" alt="courses" style="height: 500px; width:100% ; object-fit:cover;box-shadow:10px;">
</div>
</div>
<!-- End Course Page Banner -->

<!-- start main content -->
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form method="post" action=""style="justify-item:center; align-items-center">
        <div class="form-group row align-items-center">
            <label for="orderID" class="offset-sm-3 col-sm-1 col-form-label text-sm-end">Order ID: </label>
            <div class="col-sm-6 d-flex align-items-center">
                <input id="orderID" type="text" class="form-control form-control-lg" style="width: 250px;">
                <input type="submit" class="btn btn-primary ms-3" value="View">
            </div>
        </div>
    </form>
</div>
<!-- end main content -->
<!-- start contact us -->
<?php
include('./contact.php');
?>
<!-- end content us -->



<!-- Footer start -->
<?php
include('./mainInclude/footer.php');
?>
<!-- Footer End -->