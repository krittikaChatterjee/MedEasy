<!DOCTYPE html>
<html>
<head>
	<?php include_once("asset/plugins.php");?>
	
	<title>About Us</title>




<style type="text/css">
	   {margin:0px;
		padding:0px;box-sizing:border-box;}
	.section{
		     width:100%;min-height:100vh;background-image:url('<?php echo base_url();?>image/aboutback.jpg');
            background-repeat: no-repeat;
            background-size: cover;;
	       }	
	 .container{
	 	width:80%;display:block;margin:auto;padding-top: 100px;
	 }  
	 .content-section{
	 	float:left;
	 	width:55%;
	 }   
	 .image-section{
	 	float:right;
	 	width:40%;
	 } 
	 .image-section img{
	 	width:100%;
	 	height: auto;
	 }
	 .content-section .title{text-transform: uppercase;font-size: 28px;color:brown;}
	 .content-section .content h3{margin-top:20px;color:#5d5d5d;}
	 .content-section .button{margin-top: 30px;}
	 .content-section .button a{background-color: #3d3d3d;padding: 12px 40px; text-decoration: none; font-size: 25px;letter-spacing: 1.5px; color: white;}
	 .content-section .button a:hover{background-color: red;color:black;}
	 .content-section .social{margin-top: 40px;}
	 .content-section .social a{color:blue;font-size: 30px;padding:40px 10px;}
</style>
</head>
<body>

<?php include_once("asset/nabbar.php");?>


<div class="section">
	  <div class="container">
	  	<div class="content-section">
	  		<div class="title">
	  			<h1>About Us</h1>
	  		</div>
	  		<div class="content">
	  			<h3>PharaHome s has for some time been prized for our development in both pharmacy and retail. We were an early adopter of gelatin containers as a medication conveyance vehicle, the first in the region to have in-store photograph preparing and one-hour photograph handling, and are currently using innovative advances, for example, the MyIR framework which puts the capacity of patients to follow their very own vaccination records.

</h3>
	  		</div>
	  		<div class="button">
	  			<a href="">Read More</a>
	  		</div>

	  		<div class="social">
	  		   <a href="#" class="fa fa-facebook"></a>
               <a href="#" class="fa fa-twitter"></a>
	  		   <a href="#" class="fa fa-instagram"></a>
	       </div>
	     </div>
	  	
	   	   <div class="image-section">
	  		  <img src="<?php echo base_url();?>image/about.jpg">
	  	  </div>

	  </div>
	   
 </div>
 <?php include_once("asset/footer.php");?>

</body>