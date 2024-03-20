// trim1

var lblst = ["M < 10","10 <= M < 12","12 <= M < 14","14 <= M < 16","16 <= M < 18","18 <= M "];
var lblst2 = ["Insuffisant","Passable","Assez Bien","Bien","Très Bien","Excellent"];

// var dtlst = [15,10,20,14,16];


// Données du graphique Doughnut
    var data = {
      labels: lblst2,
      datasets: [{
        data: dtlst,
        backgroundColor: ['rgb(55, 99, 132)', 'rgb(55, 205, 86)','rgb(75, 192, 192)', 'rgb(55, 25, 86)','rgb(55, 205, 6)','rgb(155, 105, 156)']
      }]
    };

    // Configuration du graphique
    var options = {};

    // Création du graphique Doughnut
    var ctx = document.getElementById('doughnutChart1').getContext('2d');
    var doughnutChart = new Chart(ctx, {
      type: 'doughnut',
      data: data,
      options: options
    });


 document.addEventListener('DOMContentLoaded', function () {
  // Données du graphique
  var data = {
    labels: lblst,
    datasets: [{
      label: 'Effectifs',
      backgroundColor: 'rgba(75, 192, 192, 0.2)',
      borderColor: 'rgba(75, 192, 192, 1)',
      borderWidth: 1,
      data: dtlst
    }]
  };

  // Options du graphique
  var options = {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  };

  // Créer le graphique
  var ctx = document.getElementById('barChart1').getContext('2d');
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
  });
});



// trim2

// // Données du graphique Doughnut
// var data = {
//     labels: ["1=< M <5","5=< M <10","10=< M <12","12=< M <16","16=< M <18","18=< M <20"],
//     datasets: [{
//       data: [15,10,20,14,16,25],
//       backgroundColor: ['rgb(55, 99, 132)', 'rgb(55, 205, 86)','rgb(75, 192, 192)', 'rgb(55, 25, 86)','rgb(55, 205, 6)','rgb(155, 105, 156)']
//     }]
//   };

//   // Configuration du graphique
//   var options = {};

//   // Création du graphique Doughnut
//   var ctx = document.getElementById('doughnutChart2').getContext('2d');
//   var doughnutChart = new Chart(ctx, {
//     type: 'doughnut',
//     data: data,
//     options: options
//   });


// document.addEventListener('DOMContentLoaded', function () {
// // Données du graphique
// var data = {
//   labels:["1=< M <5","5=< M <10","10=< M <12","12=< M <16","16=< M <18","18=< M <20"],
//   datasets: [{
//     label: 'Effectifs',
//     backgroundColor: 'rgba(75, 192, 192, 0.2)',
//     borderColor: 'rgba(75, 192, 192, 1)',
//     borderWidth: 1,
//     data: [5, 10, 16, 12, 14,6]
//   }]
// };

// // Options du graphique
// var options = {
//   scales: {
//     y: {
//       beginAtZero: true
//     }
//   }
// };

// // Créer le graphique
// var ctx = document.getElementById('barChart2').getContext('2d');
// var myBarChart = new Chart(ctx, {
//   type: 'bar',
//   data: data,
//   options: options
// });
// });



// // trim3

// // Données du graphique Doughnut
// var data = {
//     labels: ["1=< M <5","5=< M <10","10=< M <12","12=< M <16","16=< M <18","18=< M <20"],
//     datasets: [{
//       data: [15,10,20,14,16,25],
//       backgroundColor: ['rgb(55, 99, 132)', 'rgb(55, 205, 86)','rgb(75, 192, 192)', 'rgb(55, 25, 86)','rgb(55, 205, 6)','rgb(155, 105, 156)']
//     }]
//   };

//   // Configuration du graphique
//   var options = {};

//   // Création du graphique Doughnut
//   var ctx = document.getElementById('doughnutChart3').getContext('2d');
//   var doughnutChart = new Chart(ctx, {
//     type: 'doughnut',
//     data: data,
//     options: options
//   });


// document.addEventListener('DOMContentLoaded', function () {
// // Données du graphique
// var data = {
//   labels:["1=< M <5","5=< M <10","10=< M <12","12=< M <16","16=< M <18","18=< M <20"],
//   datasets: [{
//     label: 'Effectifs',
//     backgroundColor: 'rgba(75, 192, 192, 0.2)',
//     borderColor: 'rgba(75, 192, 192, 1)',
//     borderWidth: 1,
//     data: [5, 10, 16, 12, 14,6]
//   }]
// };

// // Options du graphique
// var options = {
//   scales: {
//     y: {
//       beginAtZero: true
//     }
//   }
// };

// // Créer le graphique
// var ctx = document.getElementById('barChart3').getContext('2d');
// var myBarChart = new Chart(ctx, {
//   type: 'bar',
//   data: data,
//   options: options
// });
// });


