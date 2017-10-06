<?php 
include_once 'include/header.php';
$id = $_GET['id'];
 // print_r($id);
include 'classes/Superadmin.php';
$obj_sup = new Superadmin();

$statment=$obj_sup->view_single_member_info($id);
$row = $statment->fetch(PDO::FETCH_ASSOC);
        // print_r($row);


?>
<div id="page-wrapper" class="gray-bg dashbard-1">
      <div class="content-main">

            <!--banner-->	
            <div class="banner">
                  <h2>
                        <a href="index.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                        <span>Profile</span>
                 </h2>
          </div>
          
                
         
     <!--//banner-->
     <!--gallery-->
     <div class=" profile">
              <div style="float: right;">
                        <a class="btn btn-primary" href="all_member.php" role="button">Back</a>
                 </div>
           <div class="profile-bottom">
                 <h3><i class="fa fa-user"></i>Profile</h3>
                 <div class="profile-bottom-top">
                       <div class="col-md-4 profile-bottom-img">
                             <img src="<?php echo $row['addImage']; ?>" alt="" height="150px" whide = "150px">
                      </div>
                      <div class="col-md-8 profile-text">
                             <h6>Jack Dorsey</h6>
                             <table>
                                   <td>Designation</td>
                                   <td>:</td>
                                   <td><?php echo $row['jobTitle'];?></td>
                            </tr>
                            <tr>
                                   <td>Email</td>
                                   <td>:</td>
                                   <td><?php echo $row['emailAddress'];?></td>
                            </tr>
                            <tr>
                                   <td>Company Name</td>
                                   <td>:</td>
                                   <td><?php echo $row['companyName'];?></td>
                            </tr>
                            <tr>
                                   <td>Station</td>
                                   <td>:</td>
                                   <td><?php echo $row['station'];?></td>
                            </tr>
                            <tr>
                                   <td>Department</td>
                                   <td>:</td>
                                   <td><?php echo $row['department'];?></td>
                            </tr>
                            <tr>
                                   <td>Employee Type</td>
                                   <td>:</td>
                                   <td><?php echo $row['employeeType'];?></td>
                            </tr>
                            <tr>
                                   <td>Employee Category</td>
                                   <td>:</td>
                                   <td><?php echo $row['employeeCategory'];?></td>
                            </tr>
                            <tr>
                                   <td>Work Shift</td>
                                   <td>:</td>
                                   <td><?php echo $row['workShift'];?></td>
                            </tr>
                            <tr>
                                   <td>Joined</td>
                                   <td>:</td>
                                   <td><?php echo $row['joiningDate'];?></td>
                            </tr>
                            <tr>
                                   <td>National ID</td>
                                   <td>:</td>
                                   <td><?php echo $row['nationalId'];?></td>
                            </tr>
                            <tr>
                                   <td>Gender</td>
                                   <td>:</td>
                                   <td><?php echo $row['gender'];?></td>
                            </tr>
                            <tr>
                                   <td>Date of Birth</td>
                                   <td>:</td>
                                   <td><?php echo $row['dateOfBirth'];?></td>
                            </tr>
                            <tr>
                                   <td>Address</td>
                                   <td>:</td>
                                   <td><?php echo $row['address'];?></td>
                            </tr>
                            <tr>
                                   <td>Mobile Number</td>
                                   <td>:</td>
                                   <td><?php echo $row['mobileNumber'];?></td>
                            </tr>
                     </table>
              </div>
              <div class="clearfix"></div>
       </div>
       <div class="profile-bottom-bottom">

          <div class="clearfix"></div>
   </div>



</div>
</div>
<?php include_once 'include/footer.php';?>


