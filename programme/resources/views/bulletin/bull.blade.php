<?php
use Illuminate\Support\Facades\BD;

$rqan = DB::select(' SELECT MAX(infoetbs.annee) as annee
FROM `infoetbs`');

$rqs = DB::select('SELECT sessions.*
FROM sessions
WHERE sessions.act = 1');

$rq = DB::select('SELECT enseignement.*, matieres.nom_matiere 
FROM `enseignement`, matieres
WHERE enseignement.code_matiere = matieres.code_matiere
AND enseignement.annee = ?;', ["{$rqan[0]->annee}"]);

$codelistejs = "";

foreach($rq as $row){ 
	$r = DB::select("SELECT annee, code_classe, code_matiere, serie, groupe, id_session,
		SUM(CASE WHEN moyennes01.moy > 0 THEN 0 ELSE -1 END) AS moy 
		FROM `moyennes01`
		WHERE annee = ?
		AND code_classe = ?
		AND serie = ?
		AND groupe = ?
		AND code_matiere =?
		AND id_session = ?
		GROUP BY annee, code_classe, serie, groupe, code_matiere, id_session;", ["{$rqan[0]->annee}", "{$row->code_classe}",
		"{$row->serie}","{$row->groupe}","{$row->code_matiere}", "{$rqs[0]->id_session}"]);

	if (!empty($r)) {
		$r = $r[0]->moy;
	}
	else{
		$r = -1;
	}
	

	$codelistejs = $codelistejs." ['{$row->code_classe}','{$row->serie}','{$row->groupe}',
	'{$row->nom_matiere}','{$row->code_matiere}','{$r}'], ";
}

echo "<script> var listeclasses = [".$codelistejs."]; </script>";



?>



@extends('admlayout')



@section('content') 
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<div class="row">

			{{-- @php
				if (isset($ok)) {
					echo "Enregistrement effectué";
				}	
			@endphp --}}
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Bulletins de note</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Bulletins </h3>
						<hr>

							 {{-- profile  --}}
							 <form method="" action="{{url('tab_bull')}}">
								<div class="top-margin">

								<?php 
										echo " <div class=\"row\" style=\"padding-bottom: 20px; display: flex; flex-direction: row; justify-content: space-between; justify-items: center;\"> 
											<div class=\"col\"> <span class=\"text-primary\" style=\"font-weight : bold;\"> Année : </span> {$rqan[0]->annee} </div>  
											<div class=\"col\"> <span class=\"text-primary\" style=\"font-weight : bold;\"> Session Actuelle : </span> {$rqs[0]->nom_session} </div>  </div>";
										echo "<input type=\"text\" style=\"display: none;\" value=\"{$rqan[0]->annee} . {$rqs[0]->id_session}\" name=\"an_sess\" id=\"hide\" >";
										echo "<input type=\"text\" style=\"display: none;\" value=\"1\"  name=\"mode\" id=\"mode\" >";
									?>

								<br>
								<label>Sessions</label>
								<select name="session" class="form-control" required>
									<?php

										$requete = DB::select('SELECT * FROM `sessions` WHERE id_session <= ?', ["{$rqs[0]->id_session}"]);

										foreach ($requete as $key) {
											echo " <option value=\"$key->id_session\">$key->nom_session</option> ";
										}

										if($rqs[0]->id_session == DB::select('SELECT MAX(id_session) as id_session FROM `sessions`')[0]->id_session ){
													echo " <option value=\"0\">Annuelle</option> ";
												}
												
										
									?>
									{{-- <option value="trim1">Trimestre 1</option>
									<option value="trim2">Trimestre 2</option>
									<option value="trim3">Trimestre 3</option> --}}
								</select> 
								
								</div>
								<div class="top-margin">
									<label>Classe . Série . Groupe</label>
									<select id="classe" class="form-control" name="classe" required>
								  </select> 								    
								</div>

								<div id="imp1" class="invalid-feedback " style="color: red; margin: auto; padding-top: 10px">
									
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox" > 
											Vérifier vos informations
										</label>                        
									</div>
									<div class="col-lg-4 text-right">
										<button id="btnvalider1" class="btn btn-action" type="submit">Suivant</button> 
									</div>
								</div>
							</form>
							 {{--  --}}

						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	
@endsection 


@section('jsfiles') 
<script src="{{url('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{url('js/bull.js')}}"></script>
@endsection 
