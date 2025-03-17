// user_input.php

/**
 * Asks the user for their name and prints out a greeting.
 */
echo "What is your name? ";
$name = trim(fgets(STDIN));
echo "Hello, $name!";