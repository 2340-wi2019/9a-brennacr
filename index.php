<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 2</title>
</head>
<body>
    
    <?php
        //Task 3.1: Change these items to reflect
        //four of your favorite things
        $my_favorite_things = array (
            "My first favorite thing is Jesus",
            "My second favorite thing is Family",
            "My third favorite thing are Friends",
            "My fourth favorite thing is running"
        );
    ?>

    <h1>My Favorite Things</h1>
        <!-- Task 3.2: Code to output things below -->
		<?php  
		$counter = 0;
		for($i = 0; $i < count($my_favorite_things); $i++) {
		echo $my_favorite_things[$i] , "<br/>";
		}
		?>

    </body>

