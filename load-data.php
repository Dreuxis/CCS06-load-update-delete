<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Lucky', 'Male', '2020-02-20', 'Jolly Roger', 'roger.jolly@example.com', '777 One Piece St., Raftale, All Blue', '04128995431');    
	echo "<li>Added 1 pet.";

	$pets = [    
	['name' => 'Hershey', 'gender' => 'Female', 'birthdate' => '2018-05-31', 'owner' => 'Bob Ross', 'email' => 'roos.bob@gmail.com', 'address' => '421 Anywhere St., Seattle, USA', 'contact_number' => '09818140270'],
    ['name' => 'Osiris', 'gender' => 'Male', 'birthdate' => '2015-11-23', 'owner' => 'Orisa', 'email' => 'orisa.yam@example.com','address' => '123 Alphabet St., Luxemburg, Luxemburg','contact_number' => '07215647089'],
    ['name' => 'Miles','gender' => 'Male','birthdate' => '2020-07-13','owner' => 'Stan Lee','email' => 'stan.lee@example.com', 'address' => '601 Excelsior St., New York, USA', 'contact_number' => '616-1999']
	];

	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

