<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $con = mysqli_connect('localhost','root','','test');
        if(mysqli_connect_errno()){
            die("Failed to connect with MySQL: ". mysqli_connect_error());
        }

        $question = $_POST['question'];
        $option1 = $_POST['1'];
        $option2 = $_POST['2'];
        $option3 = $_POST['3'];
        $option4 = $_POST['4'];
        $answer = $_POST['answer'];
        
        $sql = "INSERT INTO `questions` (`question`, `option1`, `option2`, `option3`, `option4`, `answer`) values('$question', '$option1', '$option2','$option3', '$option4', '$answer')";
        $result = mysqli_query($con, $sql);
        #$num = mysqli_num_rows($result);

        if($result){
            echo "data inserted successfully";
        }
        else{
            echo "error in insertion";
        }


    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <form action="" method="post" class = "card">
            <h2>Enter your Question<h2>
            <input type ="text" class="form-control" name = "question" required>
            <div class = "card">
                Enter your option<br>
            
                <span>1<input type = "text " class = "mt-2" name = 1 required></span>
                <span>2<input type = "text" class = "mt-2" name = 2 required ></span>
                <span>3<input type = "text" class = "mt-2" name = 3 required ></span>
                <span> 4<input type = "text" class = "mt-2" name = 4 required></span>
            </div>
            <br>
            Correct Answer(option number)
            <input type = "number" class = "form-control mt-2" name = "answer" min = "1"max="4" required >

            <button class = "btn btn-primary">submit</button>
        </form>
    
    </div>


    
</body>
</html>