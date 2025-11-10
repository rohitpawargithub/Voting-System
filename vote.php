<?php 
include 'config.php';

if(isset($_POST['submit']))
{
    if(isset($_POST['candidate_sel'])){
        $candidate = $_POST['candidate_sel'];
        $party = $_POST['info'];

       $select = mysqli_query($conn, "INSERT INTO `info`(name, party) VALUES('$candidate', '$party')");
       
       ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Voted Successfully!!</title>
        <link rel="stylesheet" href="style.css">
        <style>
            .container{
                height: 100vh;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="msg">

            <?php
            if($select)
            {
                echo "<h2>Thanks for the vote!!</h2>"; 
                // echo "<script>setTimeout(\"location.href = 'vote_form.php';\",1400);</script>";
            }
        }
        else{
            header('location:vote_form.php');
            
        } 
    }
    else{
        header('location:vote_form.php');
    }
    ?>
            </div>
        </div>
    </body>
    </html>
