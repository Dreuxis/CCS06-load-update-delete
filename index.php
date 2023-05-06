<?php

require "config.php";

use App\Pet;

$pets = Pet::list();
?>

<link rel="stylesheet" href="design.css">
<style>
	body {
		background-image: url("https://images7.alphacoders.com/617/617537.jpg");
		background-size: 100% 100%;
	}
</style>
<body>
<div class="main">
	<h1>Pets</h1>

	<table border="1" cellpadding="5">
	<tr>
		<th>Id</th>
		<th>Pet Name</th>
		<th>Pet Gender</th>
		<th>Pet Birthdate</th>
		<th>Owner</th>
		<th>Email</th>
		<th>Address</th>
		<th>Contact Number</th>
	</tr>
	<?php foreach ($pets as $pet): ?>
	<tr>
	<td><?php echo $pet->getId(); ?></td>
	<td><?php echo $pet->getName(); ?></td>
	<td><?php echo $pet->getGender(); ?></td>
	<td><?php echo $pet->getBirthdate(); ?></td>
	<td><?php echo $pet->getOwner(); ?></td>
	<td><?php echo $pet->getEmail(); ?></td>
	<td><?php echo $pet->getAddress(); ?></td>
	<td><?php echo $pet->getContactNumber(); ?></td>
	<td>
		<a class="edit" href="edit-pet.php?id=<?php echo $pet->getId(); ?>">EDIT</a>
	</td>
	<td>
		<a class="delete" href="delete-pet.php?id=<?php echo $pet->getId(); ?>">DELETE</a>
	</td>
	</tr>
	<?php endforeach ?>
	</table>
</div>
</body>