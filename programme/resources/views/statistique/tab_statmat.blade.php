<?php 

use Illuminate\Support\Facades\BD;

$rq = DB::select(" SELECT * FROM `moyennes01` 
		WHERE annee = ?
		AND code_classe = ?
		AND serie = ?
		AND groupe = ?
		AND code_matiere =?
		AND id_session = ? ", ["{$an}", "{$c}",
		"{$s}","{$g}","{$code_matiere}", "{$sess}"]);


$v12 = $v10 = $v14 = $v16 = $v18 = $v20 = 0;
$vpf = $vpfo = number_format($rq[0]->moy, '2');

    foreach ($rq as $key) {
			$mg = number_format($key->moy, '2');

			// $ment = '';

			if ($mg < 10) {
				# code...
				// $ment = 'Insuffisant';
        $v10++;
			}
			elseif ($mg < 12) {
				# code...
				// $ment = 'Passable';
        $v12++;
			}
			elseif ($mg < 14) {
				# code...
				// $ment = 'Assez Bien';
        $v14++;
			}
			elseif ($mg < 16) {
				# code...
				// $ment = 'Bien';
        $v16++;
			}
			elseif ($mg < 18) {
				# code...
				// $ment = 'Très Bien';
        $v18++;
			}
			else {
				# code...
				// $ment = 'Excellent';
        $v20++;
			}

      if ($mg < $vpf) {
        $vpf = $mg;
      }
      if ($mg > $vpfo) {
        $vpfo = $mg;
      }

					
		}

    echo "<script> 
      
      var dtlst = ['$v10', '$v12', '$v14', '$v16', '$v18', '$v20' ]; 

      var listmoyenne=[['M < 10', 'Insuffisant', '$v10'],['10 <= M < 12', 'Passable', '$v12'],['12 <= M < 14', 'Assez Bien', '$v14'], 
      ['14 <= M < 16', 'Bien', '$v16'], ['16 <= M < 18', 'Très Bien', '$v18'], ['18 <= M ', 'Excellent', '$v20']];

      var listmoyenn=[['Plus forte Moyenne','$vpfo'],['Plus faible Moyenne','$vpf']];
      
      </script>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov ">
	
	<title>Accueil -  Progressus</title>

	<link rel="shortcut icon" href="images/gt_favicon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">  


</head>

<body>
  {{-- <div class="bg-primary">
    <nav class="navbar navbar-expand-md navbar-light bg text-white">
      <div class="container-fluid text-white">
        <img src="images/logo.png" alt="">
        <button class="navbar-toggler mt-2 text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ul-bg pull-right" id="navbarSupportedContent">
        <ul class="navbar-nav me-3 mb-2 mb-lg-0 cont pull-right">
		  <li class="nav-item"><a class="nav-link mx-3 btn btn-success text-white fs-4" href="admhome">Menu Principal</a></li>
			  <li class="nav-item"><a class="nav-link btn btn-success mx-3 text-white fs-4" href="">Déconnexion</a></li>
          </ul>      
        </div>
      </div>
    </nav>
  </div> --}}


  <div class="container-fluid px-5 mt-3">
    {{-- <div class="row">
      <div class=" text-right col-md-6 col-sm-6">
            <a class="btn btn-action btn-warning " href="submit" id="enregistrer">
          Télécharger
      </a>
         </div>
    </div> --}}
    <div class=" bg-light ">
            <h3 class="thin text-center">Statistiques des Moyennes : ~ {{$nsess}}  ~ {{$nom_matiere}} ~ ( {{$c}}  {{$s}}  {{$g}} ) ~ Coef : {{$rq[0]->coefficient}}  </h3>
            </div>
            <hr>
  </div>


{{-- <div class="d-flex align-items-start  bg-secondary mt-0 ">
<div class="col-md-2 col-sm-2 ">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="btn btn-success btn-lg mt-3" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Trimestre 1</button><br>
    <button  class="btn btn-success btn-lg" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Trimestre 2</button><br>
    <button  class="btn btn-success btn-lg" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Trimestre 3</button>
  </div>
</div>
<div class="col-md-10 col-sm-10 bg-white">
  <div class="tab-content" id="v-pills-tabContent" style="padding-left:3%;">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><div id="trim1"></div></div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><div id="trim2"></div></div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><div id="trim3"></div></div>
  </div>
</div>
</div> --}}
<div class="container-fluid p-5">
<div class="row" id="contenutrim1">
      <div class="col-md-6">
        <div class="mt-4">
        <div>
          <p class="text-center bg-success text-white">BILAN STATISTIQUE</p>
           <table border=1px class="table table-secondary table-striped bg-info" id="tbl1" width=100%>
            <thead>
              <th class="text-center">Moyenne </th>
              <th class="text-center">Mention </th>
              <th class="text-center">Effectif </th>
            </thead>
            <tbody id="tbody1"></tbody>
           </table>
        </div>
        <div>
        <p class="text-center bg-success text-white mt-5">MOYENNE</p>
           <table border=1px class="table table-secondary table-striped bg-info" id="tbll1" width=100%>
            <thead>
              <th class="text-center">Type </th>
              <th class="text-center">Moyenne </th>
            </thead>
            <tbody id="tbodyy1"></tbody>
           </table>
        </div>
        </div>
      </div>
     <div class="col-md-6">
        <div class="mb-4">
          <canvas id="barChart1" width="400" height="200"></canvas>
        </div>
        <div>
        <canvas id="doughnutChart1" width="200" height="200"></canvas>
        </div>       
    </div>
  </div>

</div>
{{-- <div class="row" id="contenutrim2">
      <div class="col-md-6">
        <div class="mt-4">
        <div>
          <p class="text-center bg-success text-white">BILAN STATISTIQUE</p>
           <table border=1px class="table table-info table-striped" id="tbl2" width=100%>
            <thead>
              <th class="text-center">Moyenne </th>
              <th class="text-center">Effectif </th>
            </thead>
            <tbody id="tbody2"></tbody>
           </table>
        </div>
        <div>
        <p class="text-center bg-success mt-5 text-white">MOYENNE</p>
           <table border=1px class="table table-info table-striped " id="tbll2" width=100%>
            <thead>
              <th class="text-center">Type </th>
              <th class="text-center">Moyenne </th>
            </thead>
            <tbody id="tbodyy2"></tbody>
           </table>
        </div>
        </div>
      </div>
     <div class="col-md-6">
        <div>
          <canvas id="barChart2" width="400" height="200"></canvas>
        </div>
        <div>
        <canvas id="doughnutChart2" width="400" height="400"></canvas>
        </div>       
    </div>
  </div>

</div>
<div class="row" id="contenutrim3">
      <div class="col-md-6">
        <div class="mt-4">
        <div>
          <p class="text-center bg-success text-white">BILAN STATISTIQUE</p>
           <table border=1px class="table table-success table-striped " id="tbl3" width=100%>
            <thead>
              <th class="text-center">Moyenne </th>
              <th class="text-center">Effectif </th>
            </thead>
            <tbody id="tbody3"></tbody>
           </table>
        </div>
        <div>
        <p class="text-center bg-success mt-5 text-white">MOYENNE</p>
           <table border=1px class="table table-success table-striped bg-info" id="tbll3" width=100%>
            <thead>
              <th class="text-center">Type </th>
              <th class="text-center">Moyenne </th>
            </thead>
            <tbody id="tbodyy3"></tbody>
           </table>
        </div>
        </div>
      </div>
     <div class="col-md-6">
        <div>
          <canvas id="barChart3" width="400" height="200"></canvas>
        </div>
        <div>
        <canvas id="doughnutChart3" width="400" height="400"></canvas>
        </div>       
    </div>
  </div>

</div> --}}

<script>
var contenutrim1 = document.getElementById("contenutrim1");
// var contenutrim2 = document.getElementById("contenutrim2");
// var contenutrim3 = document.getElementById("contenutrim3");
var trim1 =document.getElementById("trim1");
// var trim2 =document.getElementById("trim2");
// var trim3 =document.getElementById("trim3");
trim1.appendChild(contenutrim1);
// trim2.appendChild(contenutrim2);
// trim3.appendChild(contenutrim3);
  
</script>
<script>
  var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
})
</script>
</body>


<script src="js/bootstrap.bundle.js"></script>
  <script src="js/chart.js"></script>

  
  <script src="js/headroom.min.js"></script>
	<script src="js/jQuery.headroom.min.js"></script>
  <script src="js/tab_satateffmat.js"></script>
  <script src="js/tab_statmoymat.js"></script>
  <script src="js/charts_statmat.js"></script>
</html>