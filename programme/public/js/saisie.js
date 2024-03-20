
// Sélection des éléments de menu déroulant
var classSelect = document.getElementById("classe");
var matieresSelect = document.getElementById("matieres");
var typeSelect = document.getElementById("type");

// var listeclasses=[
//   ['6eme','-','A','PCT'],

// ];
    

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
      classSelect.add(option);
    }
    
  }
  // alert('avant');

  chargematiere();
  veriftype();
  // alert('apres');

  
} 



function chargematiere() {
  // Effacer les options de matierse existantes
  matieresSelect.innerHTML = "";

  // Récupérer la valeur sélectionnée de la 
  var selectedClasse = classSelect.value;
  var c = selectedClasse.split(' . ')[0];
  var s = selectedClasse.split(' . ')[1];
  var g = selectedClasse.split(' . ')[2];
  

  listeclasses.forEach(i => {
  if (i[0]==c && i[1]==s && i[2]==g) {

    addMatieres(i[3], i[4]);
  }
  });
}

function veriftype() {
  var selectedClasse = classSelect.value;
  var c = selectedClasse.split(' . ')[0];
  var s = selectedClasse.split(' . ')[1];
  var g = selectedClasse.split(' . ')[2];
  var mat = matieresSelect.value.split(' ')[0];
  var inter = '';
  var dev = '';
  // alert(mat);
  listeclasses.forEach(row => {
    if(row[0]==c && row[1]==s && row[2]==g && row[4]==mat){
      inter = row[5];
      dev = row[6];
    }
  });

  typeSelect.innerHTML = "";
  typeSelect.removeAttribute('disabled');
  document.getElementById("btnvalider").removeAttribute('disabled');
  var imp = document.getElementById("imp");
  imp.innerHTML = '';

  if(parseInt(inter)<=3){
    // 
    // alert(inter);
    var t = 'Interrogation '+parseInt(inter);

    typeSelect.innerHTML += '<option value="'+parseInt(inter)+' . '+t+'"\>'+t+'</option\>';
  }
  if(parseInt(dev)<=5){
    // 
    var t ='Devoir '+(parseInt(dev) - 3);
    typeSelect.innerHTML += '<option value="'+parseInt(dev)+' . '+t+'"\>'+t +'</option\>';

  }
  if(parseInt(inter)>3 && parseInt(dev)>5){
    // 
    typeSelect.setAttribute('disabled', 'disabled');
    document.getElementById("btnvalider").setAttribute('disabled', 'disabled');
    // typeSelect.attributes.setNamedItem('disabled');
    imp.innerHTML = 'Impossible de saisir des Notes';
  }
}

// Définition des options de matiere en fonction de la classe sélectionné
classSelect.addEventListener("change", function() {
  chargematiere();
  veriftype();
});

matieresSelect.addEventListener("change", function() {
  veriftype();
});

// typeSelect.addEventListener("click", function() {
//   veriftype();
// });

// Fonction pour ajouter une option de matieres
function addMatieres(matieresName, code) {
  // var option = document.createElement("option");
  // option.text = matieresName;
  // matieresSelect.add(option);
  matieresSelect.innerHTML += '<option value="'+code+' . '+matieresName+'"\>'+matieresName+'</option\>';
}
  
loaded();
    


  

 

