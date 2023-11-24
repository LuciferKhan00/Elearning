<!-- start header-->
<?php
include('./mainInclude/header.php');
?>
<!-- end header-->
<!--start course page banner-->
<div class="container-fluid bg-dark">
<div class="row">
<img src="./image/depositphotos.jpg" alt="courses" style="height: 500px; width:100% ; object-fit:cover;box-shadow:10px;">
</div>
</div>

<!--end course page banner-->

<!--start main contact-->
<div class="container">
<h2 class="text-center my-4">Payment Status</h2>
<form method="post" action="">
<div class="form-group row">
<label class="offset-sm-3 col-form-label">Order ID: </label>
<div>
<input type="text" class="form-control mx-3">
</div>
<div>
<input type="submit" class="btn btn-primary mx-4" value="View">
</div>
</div>
</form>
</div>
<!--end main contact-->

<!--start contact us-->
<?php
include('./contact.php');
?>

<!--end contact us-->


<!-- start footer-->
<?php
  include('./mainInclude/footer.php');
  ?>
  <!-- end footer-->