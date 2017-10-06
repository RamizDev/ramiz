<?php 
	include_once 'include/header.php';
	include 'classes/Superadmin.php';
    $obj_sup = new Superadmin();
 
    $statment=$obj_sup->view_all_member_info();
?>
	   <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel='stylesheet' type='text/css' />
	   <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Blank</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
	        	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>Name</th>
			                <th>Company Name</th>
			                <th>Designation/Job Title</th>
			                <th>Email</th>
			                <th>Mobile Number</th>
			                <th>View</th>
			                 
			            </tr>
			        </thead>
			        <tfoot>
			            <tr>
			                <th>Name</th>
			                <th>Company Name</th>
			                <th>Designation/Job Title</th>
			                <th>Email</th>
			                <th>Mobile Number</th>
			                <th>View</th>
			            </tr>
			        </tfoot>
			        <tbody>
			        <?php while($row = $statment->fetch(PDO::FETCH_ASSOC)) {?>
			            <tr>
			                <td><?php echo $row['fullName'];?></td>
			                <td><?php echo $row['companyName']; ?></td>
			                <td><?php echo $row['jobTitle']; ?></td>
			                <td><?php echo $row['emailAddress']; ?></td>
			                <td><?php echo $row['mobileNumber']; ?></td>
			                
			                <td class="center">
			                            <a class="btn btn-primary" href="profile.php?id=<?php echo $row['id']; ?>">
			                                <i class="fa fa-eye" aria-hidden="true"></i>

			                            </a>
			                            
			                </td>
			            </tr>
			            <?php } ?>
			        </tbody>
			    </table>
	        </div>
	       </div>
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    
    <script>
       $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
 <?php include_once 'include/footer.php';?>
