<?php
session_start();
require_once __DIR__ . '\..\dbconnect.php';
require_once __DIR__ . '\actions\helper.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Система тестирования</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
<?php
//print_r($_POST);
$id_user = $_SESSION['user']['id'];
$send = $_POST["send"];
$title = $_POST["title"];

if(isset($send)){
    $result = mysqli_query($connect, "INSERT INTO `test_t` (`id_TEST`, `Name_test`, `Aytor`) VALUES (NULL, '$title', '$id_user');") or die ("Error : ".mysqli_error());
    //$result="1";
    //if(isset($result)){
       if(isset($result)){
            $result2 = mysqli_query($connect, "SELECT MAX(id_TEST) FROM test_t;") or die ("Error : ".mysqli_error());
        }
        $last_id = mysqli_fetch_assoc($result2);
       // print_r($last_id);

        $id_us=end($last_id);
        print_r($id_us);
        
    //}
    

    //$questionNum = 1;
    //$question = trim($_POST['question_'.$questionNum]);
    //print_r($question);
    $questionNum = 1;
        while (isset($_POST['question_' . $questionNum])) {
            $question = trim($_POST['question_' . $questionNum]);
            if (empty($question)) {
                break;
            }
            print_r($question);
            $result = mysqli_query($connect, "INSERT INTO `question_t` (`id_question`, `id_test_question`, `name_question`) VALUES (NULL, '$id_us', '$question');") or die ("Error : ".mysqli_error());
            //$last_id_question = $question;

            if(isset($result)){
                $result2 = mysqli_query($connect, "SELECT MAX(id_question) FROM question_t;") or die ("Error : ".mysqli_error());
            }
            $last_question = mysqli_fetch_assoc($result2);
           // print_r($last_id);
    
           $last_id_question=end($last_question);
            print_r($last_id_question);


            

            $answerNum = 1;
            while (isset($_POST['answer_text_' . $questionNum . '_' . $answerNum])) {
                $answer = trim($_POST['answer_text_' . $questionNum . '_' . $answerNum]);
                $score = trim($_POST['answer_score_' . $questionNum . '_' . $answerNum]);
                if (empty($answer)) {
                    break;
                }
                $result = mysqli_query($connect, "INSERT INTO `answer_t` (`id_answer`, `id_question_answer`, `Answer`, `v_answer`) VALUES (NULL, '$last_id_question', '$answer', '$score' );") or die ("Error : ".mysqli_error());
                
                $answerNum++;
            }


            $questionNum++;
        }

}




?>
