<form action="" method="post">
  <label for="quiz-num">Enter # of Quizzes:</label>
  <input type="text" name="quiz_num" id="quiz-num">
  <input type="submit" name="btn" value="generate">
</form>

<?php
  // receive the data
  if (isset($_POST['btn'])) {
    $quiz_num = $_POST['quiz_num'];

    // send the data
    generateQuizInput($quiz_num);
  }
?>

<?php
  // process the data
  function generateQuizInput($data) {
?>
    <form action="" method="post">
      <?php
        for($i = 0; $i < $data; $i++) {
      ?>
          <input type="text" name="quizzes[]"> 
      <?php
        }
      ?>
      <input type="submit" name="submit_quiz_num" value="Average">
    </form>
<?php
    // --> process the data again
  }
?>

<?php
  if (isset($_POST['submit_quiz_num'])) {
    $quizzes = $_POST['quizzes'];
    // print_r($quizzes);
    calculateAverage($quizzes);
  }

  function calculateAverage($quizzes) {
    $sum = 0;
    $average = 0;

    foreach($quizzes as $scores) {
      // compound operator
      $sum += $scores;
    }

    $average = $sum / count($quizzes);
    displayAverage($average);
  }

  function displayAverage($average) {
    echo "average score is " . round($average);
  }
?>