<?phpIn PHP, randomization of numbers can be done using the built-in function `rand()` or `mt_rand()`. 

The `rand()` function generates a random integer between two specified values, while `mt_rand()` generates a random integer using the Mersenne Twister algorithm. 

To generate a random number between two specified values using `rand()`, you can use the following code:

$random_number = rand($min, $max);

where `$min` and `$max` are the minimum and maximum values respectively.

To generate a random number using `mt_rand()`, you can use the following code:

$random_number = mt_rand($min, $max);

Both functions can also be used to generate random floating-point numbers by setting the third parameter to `true`:

$random_number = rand($min, $max, true);
$random_number = mt_rand($min, $max, true);

It is important to note that these functions generate pseudo-random numbers, which means that the sequence of numbers generated is determined by a starting point called the seed. 
You can set the seed value using the `srand()` function.
?>