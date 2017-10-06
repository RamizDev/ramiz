<?php 
include_once 'include/header.php';
include 'classes/Superadmin.php';
 $obj_sup = new Superadmin();
 
  $statment=$obj_sup->view_all_member_gender();
  $eType=$obj_sup->view_all_member_eType();
  $eCat=$obj_sup->view_all_member_eCat();
  $eAge=$obj_sup->view_all_member_eAge();
 
?>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Pie Chart</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
	        <div class="blank-page widget-shadow scroll" id="style-2 div1">

          <div class="container">

              <!DOCTYPE html>  
 <html>  
      <head>  
             
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(mfChart);  
           google.charts.setOnLoadCallback(eType);  
           google.charts.setOnLoadCallback(eCat);  
           google.charts.setOnLoadCallback(eAge);  
           function mfChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = $statment->fetch(PDO::FETCH_ASSOC))  
                          {  
                               echo "['".$row["gender"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Male to Female Employees',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  

           function eType()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['EmployeeType', 'Number'],  
                          <?php  
                          while($row = $eType->fetch(PDO::FETCH_ASSOC))  
                          {  
                               echo "['".$row["employeeType"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Employees by Types',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('eType'));  
                chart.draw(data, options);  
           }  
           function eCat()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['EmployeeCategory', 'Number'],  
                          <?php  
                          while($row = $eCat->fetch(PDO::FETCH_ASSOC))  
                          {  
                               echo "['".$row["employeeCategory"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Employees by Categories',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('eCat'));  
                chart.draw(data, options);  
           }  
           function eAge()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['dateOfBirth', 'Number'],  
                          <?php  
                          while($row = $eAge->fetch(PDO::FETCH_ASSOC))  
                          {  
                               echo "['".$row["dateOfBirth"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Employees by Age',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('eAge'));  
                chart.draw(data, options);  
           }  
           </script>




      </head>  
      <body>  
            

           <div class="col-md-10">
              
              <div class="col-md-5">
                <div id="piechart" style="width: 500px; height: 250px;"></div>
              </div>
                
                <div class="col-md-5">
                  <div id="eType" style="width: 500px; height: 250px;"></div>

                </div>
              
            </div>
            <div class="col-md-10">
              
               <div class="col-md-5">
                  <div id="eCat" style="width: 500px; height: 250px;"></div>

                </div>
                <div class="col-md-5">
                  <div id="eAge" style="width: 500px; height: 250px;"></div>

                </div>
               
           </div>  
      </body>  
 </html>   
   
          </div>

        </div>
	     </div>
	   </div>
	
 <?php include_once 'include/footer.php';?>
