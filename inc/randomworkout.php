<?php

// Each of these arrays contains exercises for the specified muscle groups

$chest_exercises = array(
"Dumbbell Bench Press",
"Dumbbell Flys",
"Bench Press",
"Cable Press",
"Cable Flys",
"Incline Bench Press",
"Incline Dumbbell Dench Press"
);

$back_exercises = array(
"Dumbell Row",
"Cable Row",
"Pullups",
"Wide Grip Pullups",
"Lat Pull Downs"
);

$leg_exercises = array(
"Back Squat",
"Walking Lunges",
"Front Squat",
"Deadlift",
"Reverse Deadlift"

);

// The following functions choose a random key from the exercise arrays above. The output is a number (the key of the above arrays)

$chest_exercise = array_rand($chest_exercises, 1);

$back_exercise = array_rand($back_exercises, 1);

$leg_exercise = array_rand($leg_exercises, 1);

// Now we use the results above to display the randomly chosen exercises. We return the key of each array as the string it is associated with

return ("$chest_exercises[$chest_exercise] \n <br>");

return ("$back_exercises[$back_exercise] \n <br>");

return ("$leg_exercises[$leg_exercise] \n <br>");
