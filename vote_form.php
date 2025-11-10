<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote Form</title>

    <!-- Ex. Javascript File -->
    <script src="script.js"></script>

    <!-- Ex. Css File  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <div class="vote_form">
            <form action="vote.php" method="post" name="vote_here">
                <h3>Enter your Vote</h3><br>
                <ul>
                    <li><span>Select your candidate : &emsp;</span><select name="candidate_sel" id="cand_sel" onchange="candidate_info()">
                        <option value="" selected disabled>Candidates</option>
                        <option value="Candidate 1">Candidate 1</option>
                        <option value="Candidate 2">Candidate 2</option>
                        <option value="Candidate 3">Candidate 3</option>
                        <option value="Candidate 4">Candidate 4</option>
                        <option value="Candidate 5">Candidate 5</option>
                    </select></li><br>

                    <li><span>About the candidate : </span><p id="c_abt">Choose a Candidate to view their information</p></li>
                    <li><span>Party of candidate : </span><p id="c_party"></p></li>
                </ul>
                <input type="hidden" name="info" id="hid_party">
                <center>
                    <input type="submit" name="submit" value="Submit Vote" class="btn"><br>
                </center>
            </form>
        </div>

    </div>
</body>
</html>