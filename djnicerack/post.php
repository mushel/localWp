<?php include 'includes/header.php'; ?>

	
	<?php
$person = new stdClass;
$person->name = $_POST['name'];
$person->email = $_POST['email'];

$person->phone = $_POST['phone'];
$person->comment = $_POST['comment'];
$person->headers = 'From:info@djnicerack.com' . "\r\n". 
               "MIME-Version: 1.0" . "\r\n" . 
               "Content-type: text/html; charset=UTF-8" . "\r\n";

mail('mush_el@yahoo.com', "New message from $person->name" , "$person->email and $person->name number is $person->phone. This is what they had to say in the comments: $person->comment" , "$person->headers" );



?>
	<div class="row">
		<div class="twelve columns">
			<p></p>
			<p>
<?
echo "Thanks $person->name, your email was sent to dj Nice Rack. from $person->email.";

?></p>
		</div>
	</div>

<?php 
include 'includes/footer.php';
?>
