
// var listmoyenn=[["Plus forte","16"],["Plus faible","5"]];

var tbodyy1 = document.getElementById("tbodyy1");
var tbll1 = document.getElementById("tbll1");
  // get the reference for the body
for (var i = 0; i < listmoyenn.length ; i++) { 
    var row = document.createElement("tr");
    for (var j = 0; j < listmoyenn[i].length ; j++) {
      var cell = document.createElement("td");
      cell.classList.add("text-center");
       var cellText = document.createTextNode(
        listmoyenn[i][j]);
        cell.appendChild(cellText);
        row.appendChild(cell);
      }
      
      tbodyy1.appendChild(row);
      tbll1.appendChild(tbodyy1);
}

// var listmoyenn=[["Plus forte","16"],["Plus faible","5"]];
// var tbodyy2 = document.getElementById("tbodyy2");
// var tbll2 = document.getElementById("tbll2");
//   // get the reference for the body
// for (var i = 0; i < listmoyenn.length ; i++) { 
//     var row = document.createElement("tr");
//     for (var j = 0; j < listmoyenn[i].length ; j++) {
//       var cell = document.createElement("td");
//       cell.classList.add("text-center");
//        var cellText = document.createTextNode(
//         listmoyenn[i][j]);
//         cell.appendChild(cellText);
//         row.appendChild(cell);
//       }
      
//       tbodyy2.appendChild(row);
//       tbll2.appendChild(tbodyy2);
// }


// var listmoyenn=[["Plus forte","16"],["Plus faible","5"]];
// var tbodyy3 = document.getElementById("tbodyy3");
// var tbll3 = document.getElementById("tbll3");
//   // get the reference for the body
// for (var i = 0; i < listmoyenn.length ; i++) { 
//     var row = document.createElement("tr");
//     for (var j = 0; j < listmoyenn[i].length ; j++) {
//       var cell = document.createElement("td");
//       cell.classList.add("text-center");
//        var cellText = document.createTextNode(
//         listmoyenn[i][j]);
//         cell.appendChild(cellText);
//         row.appendChild(cell);
//       }
      
//       tbodyy3.appendChild(row);
//       tbll3.appendChild(tbodyy3);
// }