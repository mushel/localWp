<?php $thisPage="Contact"; ?>
<?php 
include 'includes/header.php';
?> 


	<div class="row">
		<div class="six columns">
			<form id="demo-form" action="post.php" method="post" name="contactus">
		
				<h4>Hi there, want to reach out? Go ahead and send me a email.</h4>
				<label for="name">Name:</label> <input type="text" name="name" class="form-control"/>
				
				<label for="email">Email:</label> <input type="email" name="email" class="form-control" required=""/>
				<label for="phone">Phone:</label> <input type="tel" name="phone" class="form-control"/><br>
				<label for="comment">Message:</label><textarea name="comment" class="full-width"></textarea><br>
				
				
				<button type="submit" class="button">Submit</button>
			</form>	
			
			
		</div>
		<div class="six columns">
			<img src="images/contact.jpg" title="Contact me" class="u-max-full-width" />
		</div>
	</div>
	
	<script src="form-validation.js" type="text/javascript"></script>

<?php 
include 'includes/footer.php';
?>
