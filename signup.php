<?php 
include_once 'header.php' ?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Sign up</h2>



<form class="signup-form" action="includes/signup.inc.php_" method="POST">
	<input type="text" name="first" placeholder="Firstname">
	<input type="text" name="last" placeholder="Lastname">
	<input type="text" name="email" placeholder="E-mail">
	<input type="text" name="uid" placeholder="Username">
	<input type="text" name="pwd" placeholder="Password">
	<button type="Submit" name="submit">Sign up</button>



</form>


	</div>





</section>

<?php 
include_once 'footer.php';

 ?>

</body>
</html>