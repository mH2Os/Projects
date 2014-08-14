<?php

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'What is your first name? ');
usleep(500000);

// Get the input from user
$first_name = fgets(STDIN);
usleep(500000);

// Output the user's name
fwrite(STDOUT, "Hello $first_name\n");
usleep(500000);

fwrite(STDOUT, "You wanna play a game $first_name?\n");
usleep(500000);

$answer = trim(fgets(STDIN));
usleep(500000);

if($answer = 'yes')
	echo 'Grand, lets play HIGHER and LOWER'\n;


