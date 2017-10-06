<?php 
include_once 'include/header.php';
include 'classes/Superadmin.php';
 $obj_sup = new Superadmin();
 
  $statment=$obj_sup->view_all_member_name();

  if (isset($_POST['btn'])) {
    // print_r($_POST);
    $statment=$obj_sup->save_all_achievement($_POST);
  }

?>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Achievements</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
	        	<div class="blank-page widget-shadow scroll" id="style-2 div1">
          
<div class="form-group row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <h3>Add New Achievement</h3>
    </div>
    <div class="col-sm-4 text-right">
                <a class="btn btn-primary" href="all_achievement.php" role="button">Back</a>
              </div>
  </div>


  

  <div class="container">

    <div class="form-group row">
      <div class="col-sm-4">
        <h4>Achievement Information:</h4>
      </div>
    </div>
    <form action="" method="post">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Employee</label>
        <div class="col-sm-4">
          <select class="form-control" name="employee">
            <option selected>Select Employe</option> 
            <?php while($row = $statment->fetch(PDO::FETCH_ASSOC)){?>   
            <option value="<?php echo $row['fullName']?>"><?php echo $row['fullName']?></option>
            <?php } ?>  
          </select>
        </div>
      </div>


      <!-- <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Forward Application To</label>
        <div class="col-sm-4">
          <select class="form-control">
            <option selected>John Smith</option>
            <option value="1">Paul Walker</option>
            <option value="2">Ben Foster</option>
            <option value="3">Peter Parker</option>    
          </select>
        </div>
      </div> -->

      <div class="form-group row">
        <label for="Cname" class="col-sm-2 col-form-label">Achievement Title</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="Cname" name="achievementTitle" placeholder="Achievement Title">
        </div>
      </div>

      <div class="form-group row">
        <label for="Dob" class="col-sm-2 col-form-label">Achievement Date</label>
        <div class="col-sm-4">
          <input type="Date" class="form-control" id="Dob" name="achievementDate">
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
	
 <?php include_once 'include/footer.php';?>
