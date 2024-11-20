<?php
//ini_set('memory_limit', '1024M'); 


$server = "localhost";
$user = "root";
$pass = "";
$db = "timetable1";

$con = mysqli_connect($server, $user, $pass, $db);
if ($con==true) {
    echo"Connected";
    //die("Connection failed: " . mysqli_connect_error());
}
else{
    echo"Not Connected";
}

$sql = "SELECT facultyName,subjectName,classSem,credit,division FROM timetable_generator1";
$result=$con->query($sql);

if($result->num_rows > 0){
    
      echo "<table border='1'><tr>
        <th>No.</th>
        <th>TIME</th>
        <th>MON</th>
        <th>TUE</th>
        <th>WED</th>
        <th>THUR</th>
        <th>FRI</th>
        <th>SAT</th>
      </tr>";
      // Output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["facultyName"]. "</td><td>" . $row["subjectName"]. "</td><td>" . $row["classSem"]. "</td><td>" . $row["credit"]."</td><td>" . $row["division"]. "</td></tr>";
      }
      echo "</table>";
    
}
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    
    <button id="showTableButton">Show Table</button>
    <table id="subjectTable" border="1" cellspacing="0" cellpadding="5">
      <tr class="t_hading">
        <th class="t">No.</th>
        <th class="t">TIME</th>
        <th class="t">MON</th>
        <th class="t">TUE</th>
        <th class="t">WED</th>
        <th class="t">THUR</th>
        <th class="t">FRI</th>
        <th class="t">SAT</th>
      </tr>
      <!-- Sample rows for the timetable -->
      <tr class="tr_size">
        <th rowspan="2" class="no">1.</th>
        <td rowspan="2">8:30 TO 9:30</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="tr_size">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="tr_size">
        <th rowspan="2" class="no">2.</th>
        <td rowspan="2">9:30 TO 10:30</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="tr_size">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th colspan="8" align="CENTER">BREAK</th>
      </tr>
      <tr class="tr_size">
        <th rowspan="2" class="no">3.</th>
        <td rowspan="2">11 TO 12</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="tr_size">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="tr_size">
        <th rowspan="2" class="no">4.</th>
        <td rowspan="2">12 TO 1</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="tr_size">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
    <script>
      const facultyName = [];
      const subjectName = [];
      const classSem = [];
      const credit = [];
      const division = [];
      document
        .getElementById("showTableButton")
        .addEventListener("click", function (event) {
          event.preventDefault();

          // const infacultyName = document.getElementById("facultyName").value;
          // const insubjectName = document.getElementById("subjectName").value;
          // const incredit = document.getElementById("totalCredits").value;
          // const inclassSem = document.getElementById("classSem").value;
          // const indivision = document.getElementById("division").value;

          facultyName.push($facultyName);
          subjectName.push($subjectName);
          classSem.push($classSem);
          credit.push($credit);
          division.push($division);
                   //document.getElementById("subjectForm").reset(); // Reset the form

          if (facultyName.length - 1 > 6) {
            alert("total subjects is 7");
            facultyName.length -= 1;
          }

        //   document
        //     .getElementById("showTableButton")
        //     .addEventListener("click", function () {
              for (let index = 1; index < 9; index++) {
                for (let j = 1; j < 7; j++) {
                  if (index == 1) {
                    if (j == 3 && subjectName[j - 1] == subjectName[2]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[0];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[0];
                    } else if (j == 5 && subjectName[j - 1] == subjectName[4]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[2];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[2];
                    } else {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[j - 1];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[j - 1];
                    }
                  } else if (index == 3) {
                    if (j == 1 && subjectName[j - 1] == subjectName[0]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[2];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[2];
                    } else if (j == 2 && subjectName[j - 1] == subjectName[1]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[4];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[4];
                    } else if (j == 4 && subjectName[j - 1] == subjectName[3]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[4];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[4];
                    } else if (j == 5 && subjectName[j - 1] == subjectName[4]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[1];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[1];
                    } else if (j == 6 && subjectName[j - 1] == subjectName[5]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[2];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[2];
                    } else {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[3];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[3];
                    }
                  } else if (index == 6) {
                    if (j == 1 && subjectName[j - 1] == subjectName[0]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[3];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[3];
                    } else if (j == 2 && subjectName[j - 1] == subjectName[1]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[2];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[2];
                    } else if (j == 4 && subjectName[j - 1] == subjectName[3]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[1];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[1];
                    } else if (j == 5 && subjectName[j - 1] == subjectName[4]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[4];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[4];
                    } else if (j == 6 && subjectName[j - 1] == subjectName[5]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[0];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[0];
                    } else {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = subjectName[5];
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[5];
                    }
                  } else if (index == 8) {
                    if (j == 1 && subjectName[j - 1] == subjectName[0]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = "ds lab";
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[2];
                    } else if (j == 2 && subjectName[j - 1] == subjectName[1]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = "dbms lab";
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[4];
                    } else if (j == 4 && subjectName[j - 1] == subjectName[3]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = "wad-iii lab";
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[1];
                    } else if (j == 5 && subjectName[j - 1] == subjectName[4]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = "ds lab";
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[2];
                    } else if (j == 6 && subjectName[j - 1] == subjectName[5]) {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = "c lab";
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[0];
                    } else {
                      var tabl =
                        document.getElementById("subjectTable").rows[index]
                          .cells;
                      tabl[j + 1].innerHTML = "c lab";
                      var tabl1 =
                        document.getElementById("subjectTable").rows[index + 1]
                          .cells;
                      tabl1[j - 1].innerHTML = facultyName[0];
                    }
                  }
                }
              }
            //});
        });
    </script>
  </body>
</html>
