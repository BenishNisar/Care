<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include_once("headerfront.php");
include_once("headerstyle.php");
?>


<div class="container">
<div class="row">

<div class="col-sm-12 col-md-12 col-lg-12">

   <table border="1px"   style="width:100%;background-color:rgb(26, 118, 209);color:white;" class="mt-5 text-white text-center table">
            <tr class="text-light" style="border-right:1px solid black;">
                        <th >Doctor</th>
                        <th>Specialty</th>
                        <th>Availability</th>
                    
                        
                     
                   
                    </tr>




<?php
$Db=mysqli_connect("localhost","root","","care");
$Query="SELECT availability.avaliabilityid, doctoraccount.username,doctoraccount.specialty, availability.dayavailability, availability.weekavailability,availability.monthavalibility FROM availability INNER JOIN doctoraccount ON availability.doctorid = doctoraccount.id;";
$Response=mysqli_query($Db,$Query);
if(mysqli_num_rows($Response)){
    while($Data=mysqli_fetch_array($Response)){

 ?>




<tr class="text-dark">
  
    <td class="text-light"><?php echo $Data[1]; ?></td>
    
    

  
    <td class="text-light"><?php echo $Data[2];?></td>

    <td class="text-light"><?php echo $Data[3]; ?></td>
</tr>

<?php
}
}


?>





                 
            </table>
          </div>
        
   

  
 
 
        
              
                
       

     
         




















</div>




</div>









  <!-- container-scroller -->
  

<!-- footer -->


    
</body>
</html>
