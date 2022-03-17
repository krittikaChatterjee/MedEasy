<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<?php include_once('asset/plugins.php') ?>
	<style type="text/css">
	
		/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
	header{
		background-color: pink;
		top: 0;
		position: sticky;
	}
	#d{
		position: sticky;
	}
	#d1{

		position: relative;
	
	}
	#cap{
		position: absolute;
		left: 600px;
		top: 200px;
		color: red;
		font-size: 50px;
		background-color: lightgreen;
		opacity: 0.7;
	}
	#i{
		 border-radius: 20px 50px;
	}
	#s1{
		background-image: url('images/del1.jpg');
		background-repeat: no-repeat;
		background-size: cover;
	}
	#drop{
		background-color: pink;
	}
	#acc{
		background-color: pink;
	}
</style>

		
	</head>

<body>

	
	<h1 style="text-align: center;"><u>Contact Us</u></h1>
	<main class="container row" >
	<div class="col-lg-6 border-right">
		<div style="text-align: justify-all; margin-left:30px; ">
			<h2>Our Corporate Office Address</h2>
			<section style="text-align: justify;">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</section>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58734.831716933295!2d88.48636153186943!3d23.06313839259376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8c1512898dc45%3A0x82dedc94d8158118!2sChakdaha%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1620469122569!5m2!1sen!2sin" width="510" height="500" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
		</div>
		
	</div>
	<div class="col-lg-6">
		<h2 style="text-align: center; margin-right:0px;">Your Suggestions</h2>
		<div class="container border">
			<form method="post" autocomplete="off">
			<div class="form-group">
				<label>Name:</label>
					<input type="text" name="t1" id="t1" required placeholder="Enter Your Name"  class="form-control">
			</div>
			<div class="form-group">
				<label>Phone Number:</label>
				<input type="Number" name="t2" id="t2" required placeholder="Enter Your Phone Number" class="form-control">
			</div>
			<div class="form-group">
			<label>Email Id:</label>
			<input type="email" name="t3" id="t3" required placeholder="Enter Your Email Id" class="form-control">
		</div>
			<div class="form-group">
			<label>Suggestion:</label>
			<textarea class="form-control" rows="5" id="comment" name="text"></textarea>
		</div>
		
		<button type="reset" class="btn btn-outline-danger">Reset</button>
		 <button type="submit" class="btn btn-success col-lg-10">Submit</button>
		
		</form>
		
		</div>
		
		<div class="col-lg-12">
			<a href="tel:7908284856">
				<button class="col-lg-12 btn btn-primary"><i class="fa fa-phone" id="i"></i> Call Us Now</button>
			</a>
			<h4 style="text-align: center;">Or</h4>
			<a href="mailto:abc@gmail,com">
				<button class="col-lg-12 btn btn-danger"><i class="fa fa-paper-plane" id="i"></i> Mail Us Now</button>
			</a>
		</div>
		
	</div>
	</main>
<?php include_once('asset/footer.php') ?>

</body>
</html>
