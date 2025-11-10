<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="contain">
        <div class="result">
            <h3 style="font-size:2.5rem;">Result of Election </h3><br>

            <ul>
                
            <li><h4 id='l1'><span>Candidate 1 Votes : </span>
            <?php 
                $c1 = "Candidate 1";
                $select1 = mysqli_query($conn, "SELECT * FROM `info` WHERE name = '$c1'");
                $votes1 = mysqli_num_rows($select1);
                echo '<span style="color:red; text-shadow:0 .5rem 1rem rgba(0, 0, 0, .2);">'.$votes1.'</span>';
                ?></h4></li>
        
        <li><h4 id='l2'><span>Candidate 2 Votes : </span>
            <?php 
                $c2 = "Candidate 2";
                $select2 = mysqli_query($conn, "SELECT * FROM `info` WHERE name = '$c2'");
                $votes2 = mysqli_num_rows($select2);
                echo '<span style="color:red; text-shadow:0 .5rem 1rem rgba(0, 0, 0, .2);">'.$votes2.'</span>';
                ?></h4></li>

            <li><h4 id='l3'><span>Candidate 3 Votes : </span>
            <?php 
                $c3 = "Candidate 3";
                $select3 = mysqli_query($conn, "SELECT * FROM `info` WHERE name = '$c3'");
                $votes3 = mysqli_num_rows($select3);
                echo '<span style="color:red; text-shadow:0 .5rem 1rem rgba(0, 0, 0, .2);">'.$votes3.'</span>';
                ?></h4></li>

            <li ><h4 id="l4"><span>Candidate 4 Votes : </span>
            <?php 
                $c4 = "Candidate 4";
                $select4 = mysqli_query($conn, "SELECT * FROM `info` WHERE name = '$c4'");
                $votes4 = mysqli_num_rows($select4);
                echo '<span style="color:red; text-shadow:0 .5rem 1rem rgba(0, 0, 0, .2);">'.$votes4.'</span>';
                ?></h4></li>

            <li><h4 id='l5'><span>Candidate 5 Votes : </span>
            <?php 
                $c5 = "Candidate 5";
                $select5 = mysqli_query($conn, "SELECT * FROM `info` WHERE name = '$c5'");
                $votes5 = mysqli_num_rows($select5);
                echo '<span style="color:red; text-shadow:0 .5rem 1rem rgba(0, 0, 0, .2);">'.$votes5.'</span>';
                ?></h4></li>
                
            </ul>

            
            <?php 

            $max = max($votes1,$votes2,$votes3,$votes4,$votes5);
            $winner="";
            
        if($max!=0)
        {
            if($votes1 == $max)
            {
                $winner .= $c1."<br>";
                echo '<style> #l1{ background-color:rgb(14, 218, 14); border-radius:50px;} </style>';
            }

            if($votes2 == $max){
                $winner .=$c2."<br>";
                echo '<style> #l2{ background-color:rgb(14, 218, 14); border-radius:50px;} </style>';
            }

            if($votes3 == $max){
                $winner .=$c3."<br>";
                echo '<style> #l3{ background-color:rgb(14, 218, 14); border-radius:50px;} </style>';
            }

            if($votes4 == $max){
                $winner .=$c4."<br>";
                echo '<style> #l4{ background-color:rgb(14, 218, 14); border-radius:50px;} </style>';
            }

            if($votes5 == $max){
                $winner .=$c5."<br>";
                echo '<style> #l5{ background-color:rgb(14, 218, 14); border-radius:50px;} </style>';
            }
        }
        else
        {
                $winner = "No Winner !! ";
                echo '<style> .win{ color:red; } </style>';
            }

            echo '<h1><span>On Lead</span><br><span class="win">'.$winner.'</span></h1>';
            ?>
         
        </div>
    </div>
</body>
</html>