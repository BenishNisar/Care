<?php

session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Care</title>
		
		<?php
		include_once("headerstyle.php");
		
		?>


	
		
    </head>
    <body>
		<?php
		include_once("headerfront.php");
		?>
	
	
		
		
			
		
	
		<!-- Breadcrumbs -->
  





	


<script>
    

var name1 = prompt('Are you experience any of these symptoms?\na)Fever\nb)Chronic cough\nc)Headache');


if (name1=='ab'){
alert('You have infection cold....');
}
if(name1=='a'){
var name1a=prompt('Are you experience any of these symptoms?\n-Runny or stuffy nose\n-Sore throatnCough\n-Congestion\n-Slight body aches or a mild headache\n-Sneezing\n-Low-grade\n-fever\n-Generally feeling unwell (malaise)\n(a)Yes\n(b)No\n(c)Some options are different');
if(name1a=='a'){
alert('You have common Cold....');
}
else if (name1a=='b'){
var name1b=prompt('Are you experience any of these symptoms?\n- Symptoms of blood clots in legs (deep vein thrombosis (DVT) are pain,\n- Redness, and swelling\n-Symptoms of an arterial blood clot in a limb (leg or arm) include pain, pale color, and coolness to the touch.\n(a)Yes\n(b)No ');
if(name1b=='a'){
alert('You have Blood clots');
	}
}
  else if (name1a=='c'){
var name1b=prompt('Are you experience any of these symptoms?\n- abdominal cramps.\n-diarrhea.\n-vomiting.\n-loss of appetite.\n-mild fever.\n-weakness.\n-nausea.\n-headaches.\n(a)Yes\n(b)No ');
if(name1b=='a'){
alert('You have Food poisoning');
	}
else if(name1b=='b'){
alert('You have simple cold...');
	}	
 }
  
    
}

if(name1=='b'){
var name2 = prompt('Are you experience any of these symptoms?\n-Shortness of breath\n-Chest tightness\n-Trouble sleeping caused by shortness of breath, coughing or wheezing\n-A whistling or wheezing sound when exhaling\n-Coughing or wheezing attacks that are worsened by a respiratory virus, such as a cold or the flu\n(a)Yes\n(b)No ');
if(name2=='a'){
    alert('You have Asthma!!!!\nContact with our  specialist...');
		}
		else if(name2=='b'){
		var name5= prompt('Are you experience any of these symptoms?\n-Constant Coughing & Throat Clearing.\n-Phlegm.\n-Upset Stomach, Stomach Ache or Pain.\n-Itchy Throat, Sore\n-Throat or Tickling in the Throat.\n-Breathing Problems & Difficulties or Shortness of Breath.\n-Swollen Glands.\n-Blood in Mucus.\nChest Pain.\n(a)Yes\n(b)No');
		if(name5=='a'){
		alert('You have Post nasal drip......');
			}
				else if(name5=='b'){
	alert('You are ok...');
 			}
		}
		
	}

if(name1=='c') 
{
var name3 = prompt('Are you experience any of these symptons?\n-Increased thirst\n-increased hunger\n-Dry mouth\n-Frequent urination or urine infection\n-unexplain weight loss\n-fatigue(weak/tired feeling)\n(a)Yes\n(b)No');
if(name3=='a'){
    alert('You have Diabetes!!!!\nContact with our Diabetes specialist...');
	}
	else if(name3=='b')
	{var name4 = prompt('Are you experience any of these symptoms?\n-Vision problems\n-Chest pain\n-Blood urine\n-Difficulty breathing\n-Irregular heartbeat\n(a)Yes\n(b)No');
if(name4=='a'){
    alert('you have Blood Pressure...');
	}
	else if(name4=='b'){
	alert('You are ok...');
 		}
	}
	
}


</script>



<?php
echo "<script>window.location.href='bookappointment.php';</script>";
?>









	
	<?php
	include_once("footerfront.php");
    include_once("script.php");
	?>
		
		
       
    </body>

</html>


	