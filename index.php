
<?php

include('inc/randomworkout.php'); //gives us variables chest, back and leg. Each are a random exercise for that body part

if(isset($_POST['download'])) {

$chestExercise = $chest_exercises[$chest_exercise];
$legExercise =  $leg_exercises[$leg_exercise];
$backExercise = $back_exercises[$back_exercise];

$set1_chest = $_POST["chest_set1_data"];
$set2_chest = $_POST["chest_set2_data"];
$set3_chest = $_POST["chest_set3_data"];
$set4_chest = $_POST["chest_set4_data"];
$set5_chest = $_POST["chest_set5_data"];

$set1_leg = $_POST["leg_set1_data"];
$set2_leg = $_POST["leg_set2_data"];
$set3_leg = $_POST["leg_set3_data"];
$set4_leg = $_POST["leg_set4_data"];
$set5_leg = $_POST["leg_set5_data"];

$set1_back = $_POST["back_set1_data"];
$set2_back = $_POST["back_set2_data"];
$set3_back = $_POST["back_set3_data"];
$set4_back = $_POST["back_set4_data"];
$set5_back = $_POST["back_set5_data"];

$content = " Exercise, Set 1, Set 2, Set 3, Set 4, Set 5\n ";

$content .= "$chestExercise, $set1_chest, $set2_chest, $set3_chest, $set4_chest, $set5_chest\n";

$content .= "$legExercise, $set1_leg, $set2_leg, $set3_leg, $set4_leg, $set5_leg\n";

$content .= "$backExercise, $set1_back, $set2_back, $set3_back, $set4_back, $set5_back\n";

$file_name = "Random Workout Generator " . date("d M Y") . ".csv";
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="' .$file_name . '"');

echo $content;
exit();
}

?>
<!DOCTYPE HTML>
  <head>
    <meta id="meta" name="viewport" content="width=device-width; initial-scale=1.0" />
    <title>
      Random Workout Generator
    </title>
    <link rel="stytlesheet" href="/css/noramlize.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/grid.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  </head>
    <body>
      <div class= "hero">
        <div class="name">Random Workout Generator (beta)</div>

      </div>
      <div class="container">

        <div>
          <h1>Random Workout Generator</h1>
          <h3>For those days when you just don't know what to do!</h3>
        </div>
      <form class="workout-panel large" method="post">
        <table class="workout-panel large">
          <tr>
            <th><label for="exercise">Exercise</label></th>
            <th><label for="set1">Set 1</label></th>
            <th><label for="set2">Set 2</label></th>
            <th><label for="set3">Set 3</label></th>
            <th><label for="set4">Set 4</label></th>
            <th><label for="set5">Set 5</label></th>
          </tr>
          <tr>
            <th><label for="chest-exercise"><?php echo $chest_exercises[$chest_exercise] ?></label></th>
            <td><input type="text" name="chest_set1_data" placeholder="reps x weight"> </td>
            <td><input type="text" name="chest_set2_data" placeholder="reps x weight"> </td>
            <td><input type="text" name="chest_set3_data" placeholder="reps x weight"> </td>
            <td><input type="text" name="chest_set4_data" placeholder="reps x weight"> </td>
            <td><input type="text" name="chest_set5_data" placeholder="reps x weight"> </td>
          </tr>
          <tr>
            <th><label for="leg-exercise"><?php echo $leg_exercises[$leg_exercise]; ?></label></th>
            <td><input type="text" name="leg_set1_data" placeholder="reps x weight"> </td>
            <td><input type="text" name="leg_set2_data" placeholder="reps x weight"> </td>
            <td><input type="text" name="leg_set3_data" placeholder="reps x weight"> </td>
            <td><input type="text" name="leg_set4_data" placeholder="reps x weight"> </td>
            <td><input type="text" name="leg_set5_data" placeholder="reps x weight"> </td>
          </tr>
          <tr>
            <th><label for="back-exercise"><?php echo $back_exercises[$back_exercise]; ?></label></th>
            <td><input type="text" name="back_set1_data" placeholder="reps x weight"> </td>
            <td><input type="text" name="back_set2_data" placeholder="reps x weight"> </td>
            <td><input type="text" name="back_set3_data" placeholder="reps x weight"> </td>
            <td><input type="text" name="back_set4_data" placeholder="reps x weight"> </td>
            <td><input type="text" name="back_set5_data" placeholder="reps x weight"> </td>
          </tr>
        </table>
        <input type = "submit" name = "download" value = "Download">
      </form>

      <form class="workout-panel mobile">
        <table class="workout-panel mobile">
            <tr>
              <th><label for="chest-exercise"><?php echo $chest_exercises[$chest_exercise] ?></label><th>
            </tr>
            <tr>
              <td>Set 1</td>
              <td><input type="text" name="chest_set1_data" placeholder="reps x weight"></td>
            </tr>
            <tr>
              <td>Set 2</td>
              <td><input type="text" name="chest_set2_data" placeholder="reps x weight"></td>
            </tr>
            <tr>
              <td>Set 3</td>
              <td><input type="text" name="chest_set3_data" placeholder="reps x weight"></td>
            </tr>
            <tr>
              <td>Set 4</td>
              <td><input type="text" name="chest_set4_data" placeholder="reps x weight"></td>
            </tr>
            <tr>
              <td>Set 5</td>
              <td><input type="text" name="chest_set5_data" placeholder="reps x weight"></td>
            </tr>

            <tr>
              <th><label for="leg-exercise"><?php echo $leg_exercises[$leg_exercise]; ?></label></th>
            </tr>
            <tr>
              <td>Set 1</td>
              <td><input type="text" name="leg_set1_data" placeholder="reps x weight"></td>
            </tr>
            <tr>
              <td>Set 2</td>
              <td><input type="text" name="leg_set2_data" placeholder="reps x weight"></td>
            </tr>
            <tr>
              <td>Set 3</td>
              <td><input type="text" name="leg_set3_data" placeholder="reps x weight"></td>
            </tr>
            <tr>
              <td>Set 4</td>
              <td><input type="text" name="leg_set4_data" placeholder="reps x weight"></td>
            </tr>
            <tr>
              <td>Set 5</td>
              <td><input type="text" name="leg_set5_data" placeholder="reps x weight"></td>
            </tr>

            <tr>
              <th><label for="back-exercise"><?php echo $back_exercises[$back_exercise]; ?></th>
            </tr>
            <tr>
              <td>Set 1</td>
              <td><input type="text" name="back_set1_data" placeholder="reps x weight"></td>
            </tr>
            <tr>
              <td>Set 2</td>
              <td><input type="text" name="back_set2_data" placeholder="reps x weight"></td>
            </tr>
            <tr>
              <td>Set 3</td>
              <td><input type="text" name="back_set3_data" placeholder="reps x weight"></td>
            </tr>
            <tr>
              <td>Set 4</td>
              <td><input type="text" name="back_set4_data" placeholder="reps x weight"></td>
            </tr>
            <tr>
              <td>Set 5</td>
              <td><input type="text" name="back_set5_data" placeholder="reps x weight"></td>
            </tr>
        </table>
        <input type = "submit" name = "download" value = "Download">
      </form>

    <div>


    </div>
    <div>
      <h2>About</h2>
      <p> This app generates a random workout for three muscle groups (chest, legs and back).
          This is a great tool for beginners who don't know how to put together a workout or for old pros who are just looking for something new.
          Don't forget to create an account so you can save all of your workouts!
      </p>
    </div>
    <div>
      <h2>What's Next?</h2>
      <p>
        This page was developed by Vee Floyd (<a href="http:veefloyd.com">veefloyd.com</a>) as a project to learn some front-end PHP.
        Vee is an aspiring front end developer, so now that the front end of this app is complete, he is on to learning other front end languages and technologies.
        Vee plans to update this app with a back end once he has mastered the front end.
        Users will be able to create accounts and log their randomly generated workouts for posterity (or, you know, in case they want to track their progress. Whatever floats your boat).
        Until then, feel free to download your randomly generated workouts and keep track of them the old-fashioned way!
      </p>
    </div>


      </div>






    </body>
