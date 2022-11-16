<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <h1>Juego de preguntas</h1>
    <?php require('data_questions.php'); ?>
    <?php $score = isset($_POST['score']) ? $_POST['score'] : 0; ?>
    <?php $lives = isset($_POST['lives']) ? $_POST['lives'] : 3; ?>
    <?php $level = isset($_POST['level']) ? $_POST['level'] : 1; ?>
    <?php
        if (isset($_POST['send'])) {
            $answer = isset($_POST['answer']) ? $_POST['answer'] : '';
            $id = isset($_POST['questionID']) ? $_POST['questionID'] : '';
            
            $question = $questions[$id];
            
            $answers = $question[1];
            $correct = $answers[0];
            $point = $question[2];
            echo $question[0] . "<br>";
            echo $answer . "<br>";
            if ($answer == $correct) {
                echo "CORRECTO";
                $score += $point;
                $level++;
            } else {
                echo "INCORRECTO: " . $correct;
                $lives--;
            }
        }
    ?>
    <h2>Score: <?=$score?> | Lives: <?=$lives?> | LEVEL: <?=$level?></h2>
    <hr>
    <?php
        if ($lives>0 && $level<6) {
            do {
                $random = rand(0, count($questions)-1);
                $question = $questions[$random];
                $levelQuestion = $question[2];            
            } while ($levelQuestion != $level);        
            $text = $question[0];
            $answers = $question[1];
            shuffle($answers);
    ?>
    <h1>Pregunta:</h1>
    <form action="quiz.php" method="post">
        <h2>Pregunta: <?=$text?></h2>
        <input type="hidden" name="questionID" value="<?=$random?>">
        <input type="hidden" name="score" value="<?=$score?>">
        <input type="hidden" name="lives" value="<?=$lives?>">
        <input type="hidden" name="level" value="<?=$level?>">
        <ul>
        <?php foreach($answers as $answer) { ?>
            <li>
                <label><input type="radio" name="answer" value="<?=$answer?>"><?=$answer?></label>
            </li>
        <?php } ?>
        </ul>
        <input type="submit" name="send" value="enviar"/>
    </form>
    <?php } else { 
        if ($lives==0) {
    ?>
            <h1>GAME OVER</h1>
        <?php } else { ?>
            <h1>WIN!!!</h1>
        <?php } ?>
        <p><a href="quiz.php">Volver a jugar</a></p>
    <?php } ?>
</body>
</html>