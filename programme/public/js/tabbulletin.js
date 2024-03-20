var listeeleve=[
  ['1111111','AKAKPO','Jules','6eme','-','A'],
  ['2222222','MANOUTON','David','6eme','-','A'],
  ['4444444','SOUSOU','Brigitte','6eme','-','A'],
  ['2222222','BOTON','Frise','6eme','-','A'],
  ['3333333','FANOU','Belge Alain','6eme','-','A'],
  ['4444444','ASSOGBA','Olivier','6eme','-','A'],
  ['5555555','ZANNOU','Martine Lora Fidelia','6eme','-','A'],
  ['6666666','KLO','David','6eme','-','B'],
  ['8888888','DJIGBE','Flore','6eme','-','B'],
  ['7777777','ZOU','Luc Sejro','6eme','-','B'],
  ['9999999','AKAKPO','Joane','6eme','-','B'],
  ['2111111','WAN','Sabine','6eme','-','B'],
  ['2222222','ASSANI','Florentine','6eme','-','B'],
  ['2333333','GLELE','Bella','6eme','-','B'],
  ['2444444','EFFA','Jean-Marie','6eme','-','B'],
  ['2555555','LOU','Joe','4eme','-','A'],
  ['2666666','AFAN','Sarrah','4eme','-','A'],
  ['2777777','FON','Marc','4eme','-','A'],
  ['2888888','ACHAFA','Frido','4eme','-','A'],
  ['2999999','HAFFAM','Aline betisse','4eme','-','A'],
  ['2000000','IDRISSOU','Fadilath','4eme','-','A'],
  ['1000000','CAPO','Jean','4eme','-','A'],
  ['3111111','ELNE','Marc','4eme','-','A'],
  ['3222222','FLAKAN','Christelle zoe','4eme','-','A'],
  ['3555555','RAFAN','Belkis','4eme','-','A'],
  ['3333333','IDRISSOU','Obed','2nde','C','A'],
  ['3444444','ADJOVI','Brice','2nde','C','A'],
  ['3666666','HASSANI','Marcela','2nde','C','A'],
  ['3777777','LAKPA','Adjakpe','2nde','C','A'],
  ['3888888','BAFAROU','Gloria','2nde','C','A'],
  ['3999999','GLEKPE','Yves Styve','2nde','C','A'],
  ['4111111','CLOKPEKPEDJI','Dan sodis','2nde','C','A'],
  ['4222222','CHAFFA','Luc Aurel','2nde','C','A'],
  ['4333333','COCO','Fani','Tle','B','A'],
  ['4444444','SATAN','Gloire','Tle','B','A'],
  ['4555555','EKOKPE BANNI','Issa','Tle','B','A'],
  ['4777777','ILOYA','Brice','Tle','B','A'],
  ['4666666','OKPE','Jeanne','Tle','B','A'],
  ['4999999','OKPE','Jeanette','Tle','B','A'],
  ['4888888','ZINDJI','Claude','Tle','B','A'],
  ['5222222','AFLAKPA','Justin','Tle','B','A'],
  ['5677443','BOTON','Epiphanie','Tle','B','A'],
  ['9853644','YANDJI','Mirabelle','Tle','B','A'],
  ['6754324','BOTON','Emile ','Tle','B','A']
  ];
var tbody = document.getElementById("tbody");
var tbl = document.getElementById("tbl"); 

/*function recuperer(){
var classSelect = document.getElementById("classe");
var choix=[];
for(let i=0;i<classSelect.length;i++){
choix.appendChild(classSelect.split('')[i]);
}
}*/
function generate_table() {
// get the reference for the body
listeeleve.forEach(i => {
  if (i[3]=="Tle"){ 
  var row = document.createElement("tr");
  for (var j = 0; j < 5 ; j++) {
    if(j<3) {
    var cell = document.createElement("td");
    cell.classList.add("text-center")
     var cellText = document.createTextNode(
      i[j]);
      cell.appendChild(cellText);
      }
    if(j == 4) {
    // Create a <td> element and a text node, make the text
    // node the contents of the <td>, and put the <td> at
    // the end of the table row
    var cell = document.createElement("td");
    var input = document.createElement("button");
    input.classList.add("form-control","btn-success");
    input.setAttribute("type","submit");
    var cellText = document.createTextNode(
      "Voir");
    input.appendChild(cellText);
    cell.classList.add("text-center");
    cell.appendChild(input);
    } 
    row.appendChild(cell);
      cell
    
  }
  tbody.appendChild(row);
  }
});
  tbl.appendChild(tbody);
 
 }
  

  // Récupérer la valeur sélectionnée de la classe
 
