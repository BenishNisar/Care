<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care</title>
    <?php

include_once("headerstyle.php");
include_once("doctortablestyle.php");
?>
</head>
<body>
<?php  include_once("headerfront.php"); 
 
?>



<div class="container">
      <div class="header_wrap">
        <div class="num_rows">
		
				<div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
			 		<select class  ="form-control" name="state" id="maxRows">
						 
						 
						 <option value="10">10</option>
						 <option value="15">15</option>
						 <option value="20">20</option>
						 <option value="50">50</option>
						 <option value="70">70</option>
						 <option value="100">100</option>
            <option value="5000">Show ALL Rows</option>
						</select>
			 		
			  	</div>
        </div>
        <div class="tb_search">
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
        </div>
      </div>
<table class="table table-striped table-class" id= "table-id">
  
<thead>
<tr>
                       


                        
                        <th>Specialist Name</th>
                        <th>Specialty</th>
                        <th>City</th>
						            <th>Book Appointment</th>
                        
                        

	</tr>
  </thead>


 
 

<tbody>
	
<?php
 $Db=mysqli_connect("localhost","root","","care");
 $Query="SELECT availability.avaliabilityid, doctoraccount.username, availability.dayavailability, availability.weekavailability,availability.monthavalibility,doctoraccount.specialty,doctoraccount.city FROM availability INNER JOIN doctoraccount ON availability.doctorid = doctoraccount.id;";
 $Response=mysqli_query($Db,$Query);
 if(mysqli_num_rows($Response)){
     while($Data=mysqli_fetch_array($Response)){
 
  ?>
	
<tr class="text-dark">
    <td><?php echo $Data[1]; ?></td>
    <td><?php echo $Data[5]; ?></td>
    <td><?php echo $Data[6]; ?></td>
	
	<td><a href="bookappointment.php?id=<?php echo $Data[0]; ?>"><button class="btn btn-primary">Book Appointment</button></a></td>
  
    
  
 
  

    
   
</tr>
<?php
}
}


?>









  
    <tbody>
</table>

<!--		Start Pagination -->
			<div class='pagination-container'>
				<nav>
				  <ul class="pagination">
				   <!--	Here the JS Function Will Add the Rows -->
				  </ul>
				</nav>
			</div>
      <div class="rows_count">Showing 11 to 20 of 91 entries</div>

</div> <!-- 		End of Container -->



<!--  Developed By Yasser Mas -->
        
   

  
 
 
        
              
                
       

     
         




















</div>




</div>









  <!-- container-scroller -->
  <?php
include_once("footerfront.php");
include_once("doctorstylescript.php");
?>

<!-- footer -->


    
</body>
</html>
