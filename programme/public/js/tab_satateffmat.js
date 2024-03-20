// var listmoyenne=[["1=< M <5","6"],["5=< M <10","5"],["10=< M <12","1"],["12=< M <16","6"],["16=< M <18","8"],["18=< M <20","3"]];

var tbody1 = document.getElementById("tbody1");
var tbl1 = document.getElementById("tbl1");
  // get the reference for the body
  for (var i = 0; i < listmoyenne.length ; i++) { 
    var row = document.createElement("tr");
    for (var j = 0; j < listmoyenne[i].length ; j++) {
      var cell = document.createElement("td");
      cell.classList.add("text-center");
       var cellText = document.createTextNode(
        listmoyenne[i][j]);
        cell.appendChild(cellText);
        row.appendChild(cell);
      }
      
      tbody1.appendChild(row);
      tbl1.appendChild(tbody1);
}

// var listmoyenne=[["1=< M <5","6"],["5=< M <10","5"],["10=< M <12","1"],["12=< M <16","6"],["16=< M <18","8"],["18=< M <20","3"]];

// var tbody2 = document.getElementById("tbody2");
// var tbl2 = document.getElementById("tbl2");
//   // get the reference for the body
//   for (var i = 0; i < listmoyenne.length ; i++) { 
//     var row = document.createElement("tr");
//     for (var j = 0; j < listmoyenne[i].length ; j++) {
//       var cell = document.createElement("td");
//       cell.classList.add("text-center");
//        var cellText = document.createTextNode(
//         listmoyenne[i][j]);
//         cell.appendChild(cellText);
//         row.appendChild(cell);
//       }
      
//       tbody2.appendChild(row);
//       tbl2.appendChild(tbody2);
// }


// var listmoyenne=[["1=< M <5","6"],["5=< M <10","5"],["10=< M <12","1"],["12=< M <16","6"],["16=< M <18","8"],["18=< M <20","3"]];

// var tbody3 = document.getElementById("tbody3");
// var tbl3 = document.getElementById("tbl3");
//   // get the reference for the body
//   for (var i = 0; i < listmoyenne.length ; i++) { 
//     var row = document.createElement("tr");
//     for (var j = 0; j < listmoyenne[i].length ; j++) {
//       var cell = document.createElement("td");
//       cell.classList.add("text-center");
//        var cellText = document.createTextNode(
//         listmoyenne[i][j]);
//         cell.appendChild(cellText);
//         row.appendChild(cell);
//       }
      
//       tbody3.appendChild(row);
//       tbl3.appendChild(tbody3);
// }

