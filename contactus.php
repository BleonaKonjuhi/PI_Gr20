<?php include 'formprocess.php'; ?>


<html>
    <head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="contactus.css">
<!------ Include the above in your HEAD tag ---------->
</head>
    <header>
</header>


<div class="container contact">

	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
        </div>
        
		<div class="col-md-9">
        <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">

			<div class="contact-form">
            
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">First Name:</label>
				  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" value="<?=$name?>">
                    <span class="error"><?= $name_error ?></span>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Last Name:</label>
				  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" value="<?=$surname?>">
                    <span class="error"><?= $surname_error ?></span>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
                    <input type="email" class="form-control"  placeholder="Enter email" name="email" value="<?=$email?>">
                    <span class="error"><?= $email_error ?></span>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="comment" name="message" value="<?=$message?>"> </textarea>
                    <span class="success"><?= $success ?> </span>
                    
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" name="submit">Submit</button>
				  </div>
                </div>
            
            </div>
      </form>
		</div>
	</div>
</div>

<html>