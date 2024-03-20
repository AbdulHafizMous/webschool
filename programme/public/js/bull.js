
// Sélection des éléments de menu déroulant
var classSelect = document.querySelector("#classe");
// var panes = document.querySelectorAll(".moyopt");


    // alert(classSelect);

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
      
      classSelect.innerHTML += '<option \>'+c+'</option\>';
      // classSelect.forEach(c => {
      //   c.add(option);
      //   // alert(c);
      // });
      
    }
    
  }


  veriftype2();

  
} 

classSelect.addEventListener("change", function() {
  veriftype2();
  
});

  
loaded();

function veriftype2() {
  var selectedClasse = classSelect.value;
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

    


  

 

