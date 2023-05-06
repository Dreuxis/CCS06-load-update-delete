<?php

require "config.php";

use App\Pet;

$pets = Pet::list();

$pet_id = $_GET['id'];

$pet = Pet::getById($pet_id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Pet</title>
	<link rel="stylesheet" href="design.css">
</head>
<style>
	body {
		background-image: url("https://free4kwallpapers.com/uploads/originals/2020/05/09/puppy-dog-wallpaper.jpg");
		background-size: 100% 110%;
	}
</style>
<body>
<div class="main">
<h1>Edit Pet</h1>


<form action="save-changes.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $pet->getId(); ?>">
	<div>
		<label>Pet Name</label><br>
		<input type="text" name="name" placeholder="Pet Name" value="<?php echo $pet->getName();?>" />
	</div>
	<div>
		<label>Pet Gender</label><br>
		<input type="text" name="gender" placeholder="Pet Gender" value="<?php echo $pet->getGender();?>" />
	</div>
	<div>
		<label>Birthday</label><br>
		<input type="date" name="birthdate" placeholder="Birthday" value="<?php echo $pet->getBirthdate();?>" />
	</div>
	<div>
		<label>Owner</label><br>
		<input type="text" name="owner" placeholder="Owner Name" value="<?php echo $pet->getOwner();?>" />
	</div>
	<div>
		<label>Email Address</label><br>
		<input type="email" name="email" placeholder="email@address.com" value="<?php echo $pet->getEmail();?>" />
	</div>
	<div>
		<label>Address</label><br>
		<input type="text" name="address" placeholder="Address" value="<?php echo $pet->getAddress();?>" />
	</div>
	<div>
		<label>Contact Number</label><br>
		<input type="text" name="contact_number" placeholder="Contact Number" value="<?php echo $pet->getContactNumber();?>" />
	</div>
	<br>
	<div>
		<button>
			Save
		</button>
		<a class="delete" href="index.php">Cancel</a>
	</div>
</form>
</div>
</body>
</html>