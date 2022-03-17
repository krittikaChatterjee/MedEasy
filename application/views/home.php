<!DOCTYPE html>
<html>
<head>
	<?php include_once("asset/plugins.php");?>
	
	<title>Medicine Order</title>


	
		<style type="text/css">

	    
      
     body{
            width: 100%;height: 100vh;
            background-image:url('<?php echo base_url();?>image/home2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            color:black;

           }
     
       main{
       	width: 100%;
       	height:85vh;display: flex;
       	justify-content: center;align-items: center;text-align: center;
       }
       section h3{
       	font-size: 35px; font-weight: 200;letter-spacing: 3px;
       	text-shadow: 2px 2px 2px white;
       }
       section h1{
       	
       	font-size: 60px; font-weight: 700;text-shadow: 2px 2px 2px white;text-shadow: 2px 2px 2px brown;
       }
       section p{
       	font-size: 25px; word-spacing: 3px; color: black;
       	 }
       section a{
       	padding: 12px 30px; border-radius: 4px; outline: none;text-decoration: none;
       	font-weight: 500; text-transform: uppercase; font-size: 13px;
       }
       section .btn1{background: black; color: white;

       }
   </style>
</head>
<body>
  <?php 
  $data=$this->session->all_userdata();
  /*print'<pre>';
  print_r($data);*/
  //echo $data['USER']['name'];
  if(isset($data['USER']['name'])){
  ?>
  <a href="<?php echo base_url();?>index.php/home/profile">
  <?php echo $data['USER']['name']; ?>
</a>
  <a href="<?php base_url(); ?>index.php/home/logout">logout</a>

<?php } ?>


	 
	  <header>
      <?php include_once("asset/nabbar.php");?>
      	   	   	<main>
    		<section>
    			<h3>Medicine at your Door Step!</h3>
    			<h1>Whereever the art of Medicine is loved,there is also a love of Humanity</h1>
    			<p>Poisons and medicine are often the same substance given with different intents.” — Peter Mere Latham, 19th-century English physician and educator While the 19th-century quotes and proverbs reference holistic health and express skepticism about the pharmacy profession, today’s quotes mention Internet pharmacies, harmful prescription medicines, and the prevalence of chain pharmacies. As the pharmacy profession and attitudes toward it evolve, pharmacists are at the forefront of many important issues, including drug safety, affordable health care, and customer service. Just as we learn about past attitudes toward pharmacy by reading old quotes, it is interesting to consider what future historians will deduce from reading the quotes of today..

                </p>
    			<a href="<?php echo base_url();?>index.php/Home/aboutus" class="btn1">About Us</a>
    		</section>
    	</main>
    </header>
	   <?php include_once("asset/footer.php")?>

	   

</body>
</html>