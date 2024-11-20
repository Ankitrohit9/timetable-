function change() {
  const as=["ankit", "as"];

  for (let index = 1; index < 9; index++) {
    for (let j = 1; j < 7; j++) {
      if (index == 1) {
        var tabl = document.getElementById("tabl").rows[index].cells;
        tabl[j + 1].innerHTML = as[index-1];
      } else if (index == 3) {
        var tabl = document.getElementById("tabl").rows[index].cells;
        tabl[j + 1].innerHTML = "subject";
      } else if (index == 6) {
        var tabl = document.getElementById("tabl").rows[index].cells;
        tabl[j + 1].innerHTML = "subject";
      } else if (index == 8) {
        var tabl = document.getElementById("tabl").rows[index].cells;
        tabl[j + 1].innerHTML = "subject";
      }
    }
  }
  for (let index = 2; index < 10; index++) {
    for (let j = 0; j < 6; j++) {
      if (index == 2) {
        var tabl = document.getElementById("tabl").rows[index].cells;
        tabl[j].innerHTML = "feaclty name";
      } else if (index == 4) {
        var tabl = document.getElementById("tabl").rows[index].cells;
        tabl[j].innerHTML = "feaclty name";
      } else if (index == 7) {
        var tabl = document.getElementById("tabl").rows[index].cells;
        tabl[j].innerHTML = "feaclty name";
      } else if (index == 9) {
        var tabl = document.getElementById("tabl").rows[index].cells;
        tabl[j].innerHTML = "feaclty name";
      }
    }
  }
}
