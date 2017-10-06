
 <?php 
include_once 'include/header.php';
 include 'classes/Superadmin.php';
    $obj_sup = new Superadmin();
 if (isset($_POST['btn'])) {
        $message=$obj_sup->save_member_info($_POST, $_FILES);
      }


 ?>
    <!-- header-starts -->
    
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <h3 class="title1">Add Member</h3>
        <div class="blank-page widget-shadow scroll" id="style-2 div1">
           
           <div class="form-group row">
              <div class="col-sm-4"></div>
              <div class="col-sm-4">

                <h2 style="color:green"><?php
                      if(isset($message)){
                          echo $message;
                          unset($message);
                      }
                  ?></h2>
                <h3>Employee basic Information</h3>
              </div>
              <div class="col-sm-4 text-right">
                <a class="btn btn-primary" href="onbording.php" role="button">Back</a>
              </div>
            </div>
            

            <div class="container">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <label for="Cname" class="col-sm-2 col-form-label">Company Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="Cname" name="companyName" placeholder="Company Name">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Station</label>
                  <div class="col-sm-4">
                    <select class="form-control" name="station">
                      <option selected>Select Station</option>
                      <option value="WebHR Head Office">WebHR Head Office</option>
                      <option value="WebHR Regional Office">WebHR Regional Office</option>
                      <option value="Others">Others</option>    
                    </select>
                  </div>

                </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Department</label>
                  <div class="col-sm-4">
                    <select class="form-control" name="department">
                      <option selected>Select Department</option>
                      <option value="Accounts & Finance">Accounts & Finance</option>
                      <option value="Administration">Administration</option>
                      <option value="Graphics & Multimedia">Graphics & Multimedia</option>
                      <option value="Human Resource">Human Resource</option>
                      <option value="Information Technology">Information Technology</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Type</label>
                  <div class="col-sm-4">
                    <select class="form-control" name="employeeType">
                      <option selected>Select Employee Type</option>
                      <option value="Regular Employees">Regular Employees</option>
                      <option value="Project Employees">Project Employees</option>
                      <option value="Support Employees">Support Employees</option> 
                    </select>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Category</label>
                  <div class="col-sm-4">
                    <select class="form-control" name="employeeCategory">
                      <option selected>Select Employee Category</option>
                      <option value="Management">Management</option>
                      <option value="Professional">Professional</option>
                      <option value="Auxiliary">Auxiliary</option> 
                      <option value="Technical">Technical</option> 
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Designation/Job Title</label>
                  <div class="col-sm-4">
                    <select class="form-control" name="jobTitle">
                      <option selected>Select Job Title</option>
                      <option value="Administrator">Administrator</option>
                      <option value="HR Manager">HR Manager</option>
                      <option value="Finance Manager">Finance Manager</option> 
                      <option value="Graphics Designer">Graphics Designer</option> 
                      <option value="Software Engineer">Software Engineer</option> 
                      <option value="Learning Manager">Learning Manager</option> 
                      <option value="IT Manager">IT Manager</option> 
                      <option value="Intern">Intern</option> 
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Work Shift</label>
                  <div class="col-sm-4">
                    <select class="form-control" name="workShift">
                      <option selected>Select Work Shift</option>
                      <option value="Regular Work Hours">Regular Work Hours</option>
                      <option value="Part Time">Part Time</option> 
                    </select>
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4">
                    <h3>Personal Information</h3>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="Fname" class="col-sm-2 col-form-label">Full Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="Fname" name="fullName" placeholder="Full Name">
                  </div>
                </div>

                 

                <div class="form-group row">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-4">
                    <input type="email" class="form-control" id="email" name="emailAddress" placeholder="Email">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="Jdate" class="col-sm-2 col-form-label">Joining Date</label>
                  <div class="col-sm-4">
                    <input type="Date" class="form-control" id="Jdate" name="joiningDate">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="Nid" class="col-sm-2 col-form-label">National ID</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" id="Nid" name="nationalId" placeholder="National ID">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Gender</label>
                  <div class="col-sm-4">
                    <select class="form-control" name="gender">
                      <option selected>Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option> 
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="Dob" class="col-sm-2 col-form-label">Date of Birth</label>
                  <div class="col-sm-4">
                    <input type="Date" class="form-control" id="Dob" name="dateOfBirth">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="Address" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-4">
                    <textarea cols="45" rows="2 " name="address" placeholder="Permanent Address"></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="Mnumber" class="col-sm-2 col-form-label">Mobile Number</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" id="Mnumber" name="mobileNumber" placeholder="Mobile Number">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="Aimage" class="col-sm-2 col-form-label">Add Image</label>
                  <div class="col-sm-4">
                  <input type="file" name="addImage" accept="image/*">
                    <!-- <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit"> -->
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-4">
                    <input class="btn btn-primary btn-block" type="submit" name="btn" value="Submit">
                  </div>
                </div>

                

              </form>
            </div>
        </div>
      </div>
    </div>
    <!--footer-->
   <?php include_once 'include/footer.php'; ?>