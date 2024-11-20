<?php
if (isset($_POST['facultyName'])) 
{
    include 'getdata.php';


    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "timetable1";

    // Create connection
    $con = mysqli_connect($server, $user, $pass, $db);

    // Check connection
    if ($con==true) {
        echo"";
        //die("Connection failed: " . mysqli_connect_error());
    }
    else{
        echo"Not Connected";
    }

    // Get and sanitize input
    $facultyName = mysqli_real_escape_string($con, $_POST['facultyName']);
    $subjectName = mysqli_real_escape_string($con, $_POST['subjectName']);
    $classSem = mysqli_real_escape_string($con, $_POST['classSem']);
    $credit = mysqli_real_escape_string($con, $_POST['totalCredits']);
    $division = mysqli_real_escape_string($con, $_POST['division']);

    $sql = "INSERT INTO timetable_generator1 (facultyName,subjectName,classSem,credit,division) 
            VALUES ('$facultyName','$subjectName','$classSem','$credit','$division')";

    if($con->query($sql) === TRUE) {
        // Redirect after successful insertion
        echo"Successful";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close the connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faculty Subject Entry</title>
    <link rel="stylesheet" href="stylesofgpt.css" />
</head>
<body>
    <?php if (isset($_GET['success'])): ?>
        <div style="color: green; text-align: center; margin-bottom: 20px;">
            New record created successfully!
        </div>
    <?php endif; ?>
    
    <form action="db.php" method="post" id="subjectForm">
        <h1>Subject Entry Form</h1>
        <div class="t_form">
            <div class="f_div">
                <label for="facultyName">Faculty Name:</label>
                <input type="text" id="facultyName" name="facultyName" required />

                <label for="subjectName">Subject Name:</label>
                <input type="text" id="subjectName" name="subjectName" required />
            </div>

            <div class="s_div">
                <label for="totalCredits">Total Credits:</label>
                <input type="number" id="totalCredits" name="totalCredits" required />

                <label for="classSem">Class-Semester:</label>
                <input type="text" id="classSem" name="classSem" required />
            </div>

            <div class="t_div">
                <label for="division">Division:</label>
                <input type="text" id="division" name="division" required />

                <button type="submit">Add Subject</button>
            </div>
        </div>
    </form>
    
</body>
</html>
