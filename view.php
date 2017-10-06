
 <?php 
 include_once 'include/header.php';
  $id = $_GET['id'];
 // print_r($id);
    include 'classes/Superadmin.php';
    $obj_sup = new Superadmin();
 
    $statment=$obj_sup->view_single_member_info($id);
    $row = $statment->fetch(PDO::FETCH_ASSOC);


 ?>
    <!-- header-starts -->
    
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <h3 class="title1">Member</h3>
        <div class="blank-page widget-shadow scroll" id="style-2 div1">
           

          <div class="form-group row">
    <div class="col-sm-4 text-center">
      <img class="img-circle" src="<?php echo $row['addImage']; ?>" alt="" >
      <br>
      <h3><?php echo $row['firstName']; echo ' '; echo $row['lastName']; ?></h3>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-8 text-center">
      <table class="table">
        <tbody style="text-align: left;">
          <tr>
            <td>Designation</td>
            <td>:</td>
            <td>Software Engineer</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td>mahmudur665@gmail.com</td>
          </tr>
          <tr>
            <td>Company Name</td>
            <td>:</td>
            <td>WebHR</td>
          </tr>
          <tr>
            <td>Station</td>
            <td>:</td>
            <td>Head Office</td>
          </tr>
          <tr>
            <td>Department</td>
            <td>:</td>
            <td>Information Technology</td>
          </tr>
          <tr>
            <td>Employee Type</td>
            <td>:</td>
            <td>Regular</td>
          </tr>
          <tr>
            <td>Employee Category</td>
            <td>:</td>
            <td>Technical</td>
          </tr>
          <tr>
            <td>Work Shift</td>
            <td>:</td>
            <td>Regular Work Hours</td>
          </tr>
          <tr>
            <td>Joined</td>
            <td>:</td>
            <td>12/23/2016</td>
          </tr>
          <tr>
            <td>National ID</td>
            <td>:</td>
            <td>12541555445847</td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>:</td>
            <td>Male</td>
          </tr>
          <tr>
            <td>Date of Birth</td>
            <td>:</td>
            <td>10/10/1990</td>
          </tr>
          <tr>
            <td>Address</td>
            <td>:</td>
            <td>Mirpur 10</td>
          </tr>
          <tr>
            <td>Mobile Number</td>
            <td>:</td>
            <td>01676084665</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
           
        </div>
      </div>
    </div>
    <!--footer-->
   <?php include_once 'include/footer.php'; ?>