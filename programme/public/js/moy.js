
// Sélection des éléments de menu déroulant
var classSelect = document.querySelectorAll("#classe");
// var panes = document.querySelectorAll(".moyopt");
var modes = document.querySelectorAll("#mode");
var matieresSelect = document.getElementById("matieres");


    // alert(classSelect[1]);

function loaded( ) {
  var tmp = [];
  for (let i = 0; i < listeclasses.length; i++) {
    var dedan = false;

    for (let j = 0; j < tmp.length; j++) {
      if(listeclasses[i][0]==tmp[j][0] && listeclasses[i][1]==tmp[j][1] && listeclasses[i][2]==tmp[j][2]){
        dedan = true;
        // break;
      }
    }

    if(dedan==false){
      // alert('no');
      var el = [listeclasses[i][0], listeclasses[i][1], listeclasses[i][2]];
      // alert(el);
      tmp.push(el);
      // alert(tmp);
      // var ser = listeclasses[i][1] == 'NA' ? ' - ' : listeclasses[i][1];
      var c = listeclasses[i][0]+" . "+listeclasses[i][1]+" . "+listeclasses[i][2];
      var option = document.createElement("option");
      option.text = c;
      
      classSelect[0].innerHTML += '<option \>'+c+'</option\>';
      classSelect[1].innerHTML += '<option \>'+c+'</option\>';
      // classSelect.forEach(c => {
      //   c.add(option);
      //   // alert(c);
      // });
      
    }
    
  }


  chargematiere();
  veriftype();
  veriftype2();

  
} 

function chargematiere() {
  // Effacer les options de matierse existantes
  matieresSelect.innerHTML = "";

  // Récupérer la valeur sélectionnée de la 
  var selectedClasse = classSelect[0].value;
  var c = selectedClasse.split(' . ')[0];
  var s = selectedClasse.split(' . ')[1];
  var g = selectedClasse.split(' . ')[2];
  

  listeclasses.forEach(i => {
  if (i[0]==c && i[1]==s && i[2]==g) {

    addMatieres(i[3], i[4]);
  }
  });
}

classSelect[0].addEventListener("change", function() {
    chargematiere();
    veriftype();
  });

classSelect[1].addEventListener("change", function() {
  veriftype2();
  
});

function addMatieres(matieresName, code) {
  // var option = document.createElement("option");
  // option.text = matieresName;
  // matieresSelect.add(option);
  matieresSelect.innerHTML += '<option value="'+code+' . '+matieresName+'"\>'+matieresName+'</option\>';
}
  
loaded();

function veriftype() {
  var selectedClasse = classSelect[0].value;
  var c = selectedClasse.split(' . ')[0];
  var s = selectedClasse.split(' . ')[1];
  var g = selectedClasse.split(' . ')[2];
  var mat = matieresSelect.value.split(' ')[0];
  var inter = '';
  // alert(mat);
  listeclasses.forEach(row => {
    if(row[0]==c && row[1]==s && row[2]==g && row[4]==mat){
      inter = row[5];
    }
  });

  // typeSelect.innerHTML = "";
  // typeSelect.removeAttribute('disabled');
  document.getElementById("btnvalider0").removeAttribute('disabled');
  var imp = document.getElementById("imp0");
  imp.innerHTML = '';

  if(parseInt(inter) == 0){
    // alert('bon');
  }
  else{
    document.getElementById("btnvalider0").setAttribute('disabled', 'disabled');
    imp.innerHTML = 'Impossible de calculer les moyennes car il manque des notes';
  }
}
function veriftype2() {
  var selectedClasse = classSelect[1].value;
  var c = selectedClasse.split(' . ')[0];
  var s = selectedClasse.split(' . ')[1];
  var g = selectedClasse.split(' . ')[2];
  var inter = 0;
  // alert(mat);
  listeclasses.forEach(row => {
    if(row[0]==c && row[1]==s && row[2]==g){
      inter += parseInt( row[5]);
    }
  });

  // typeSelect.innerHTML = "";
  // typeSelect.removeAttribute('disabled');
  document.getElementById("btnvalider1").removeAttribute('disabled');
  var imp = document.getElementById("imp1");
  imp.innerHTML = '';

  if(parseInt(inter) == 0){
    // alert('bon');
  }
  else{
    document.getElementById("btnvalider1").setAttribute('disabled', 'disabled');
    imp.innerHTML = 'Impossible de calculer les moyennes car il manque des notes pour certaines matières';
  }
}

matieresSelect.addEventListener("change", function() {
  veriftype();
});

    

// panes.forEach(p => {
//   p.addEventListener("click", function() {

//     if(panes[0]==p){
//       modes[0].setAttribute('value', '1');modes[1].setAttribute('value', '0');
//       // alert(0);
//     }
//     else{
//       modes[0].setAttribute('value', '0');modes[1].setAttribute('value', '1');
//       // alert(modes[1].attributes.getNamedItem('value').value);
//     }
    
    
//   });
// });

  

 

