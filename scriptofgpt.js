const facultyName = [];
const subjectName = [];
const classSem = [];
const credit = [];
const division = [];
document
  .getElementById("subjectForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const infacultyName = document.getElementById("facultyName").value;
    const insubjectName = document.getElementById("subjectName").value;
    const incredit = document.getElementById("totalCredits").value;
    const inclassSem = document.getElementById("classSem").value;
    const indivision = document.getElementById("division").value;

    facultyName.push(infacultyName);
    subjectName.push(insubjectName);
    classSem.push(inclassSem);
    credit.push(incredit);
    division.push(indivision);

    document.getElementById("subjectForm").reset(); // Reset the form

    if (facultyName.length - 1 > 6) {
      alert("total subjects is 7");
      facultyName.length -= 1;
    }

    document
      .getElementById("showTableButton")
      .addEventListener("click", function () {
        for (let index = 1; index < 9; index++) {
          for (let j = 1; j < 7; j++) {
            if (index == 1) {
              if (j == 3 && subjectName[j - 1] == subjectName[2]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[0];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[0];
              } else if (j == 5 && subjectName[j - 1] == subjectName[4]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[2];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[2];
              } else {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[j - 1];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[j - 1];
              }
            } else if (index == 3) {
              if (j == 1 && subjectName[j - 1] == subjectName[0]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[2];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[2];
              } else if (j == 2 && subjectName[j - 1] == subjectName[1]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[4];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[4];
              } else if (j == 4 && subjectName[j - 1] == subjectName[3]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[4];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[4];
              } else if (j == 5 && subjectName[j - 1] == subjectName[4]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[1];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[1];
              } else if (j == 6 && subjectName[j - 1] == subjectName[5]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[2];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[2];
              } else {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[3];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[3];
              }
            } else if (index == 6) {
              if (j == 1 && subjectName[j - 1] == subjectName[0]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[3];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[3];
              } else if (j == 2 && subjectName[j - 1] == subjectName[1]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[2];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[2];
              } else if (j == 4 && subjectName[j - 1] == subjectName[3]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[1];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[1];
              } else if (j == 5 && subjectName[j - 1] == subjectName[4]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[4];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[4];
              } else if (j == 6 && subjectName[j - 1] == subjectName[5]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[0];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[0];
              } else {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = subjectName[5];
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[5];
              }
            } else if (index == 8) {
              if (j == 1 && subjectName[j - 1] == subjectName[0]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = "ds lab";
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[2];
              } else if (j == 2 && subjectName[j - 1] == subjectName[1]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = "dbms lab";
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[4];
              } else if (j == 4 && subjectName[j - 1] == subjectName[3]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = "wad-iii lab";
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[1];
              } else if (j == 5 && subjectName[j - 1] == subjectName[4]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = "ds lab";
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[2];
              } else if (j == 6 && subjectName[j - 1] == subjectName[5]) {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = "c lab";
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[0];
              } else {
                var tabl =
                  document.getElementById("subjectTable").rows[index].cells;
                tabl[j + 1].innerHTML = "c lab";
                var tabl1 =
                  document.getElementById("subjectTable").rows[index + 1].cells;
                tabl1[j - 1].innerHTML = facultyName[0];
              }
            }
          }
        }
      });
  });
