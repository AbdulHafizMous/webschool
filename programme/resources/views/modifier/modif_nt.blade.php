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
	$codelistejs = $codelistejs." ['{$row->code_classe}','{$row->serie}','{$row->groupe}',
	'{$row->nom_matiere}','{$row->code_matiere}','{$row->int_act}','{$row->dev_act}'], ";
}

echo "<script> var listeclasses = [".$codelistejs."]; </script>";



?>




@extends('admlayout')



@section('content') 
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<div class="row">

			@php
				if (isset($ok)) {
					echo "Enregistrement effectué";
				}	
			@endphp
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Modification de note</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Modification de note</h3>
						<hr>

							<form method="" action="{{url('tab_modif')}}">
							<div class="top-margin">

								<?php 
										echo " Année : {$rqan[0]->annee}  <br> Session : {$rqs[0]->nom_session} ";
										echo "<input type=\"text\" style=\"display: none;\" value=\"{$rqan[0]->annee} . {$rqs[0]->id_session}\" name=\"an_sess\" id=\"hide\" >";
									?>
								
									{{-- <label>Sessions</label>
									<select name="session" class="form-control" required>
										<?php

											// $requete = DB::select('SELECT * FROM `sessions`');

											// foreach ($requete as $key) {
											// 	echo " <option value=\"$key->id_session\">$key->nom_session</option> ";
											// }
											
										?>
										<option value="trim1">Trimestre 1</option>
										<option value="trim2">Trimestre 2</option>
										<option value="trim3">Trimestre 3</option>
									</select>  --}}
								</div>
								<div class="top-margin">
									<label>Classe . Série . Groupe</label>
									<select id="classe" class="form-control" name="classe" required>
								  </select> 								    
								</div>
								<div class="top-margin">
									<label>Matières<span class="text-danger">*</span></label>
									<select id="matieres" class="form-control" name="matieres" required>
								    </select> 
								</div>

								<div class="top-margin">
										<label>Type de note <span class="text-danger">*</span></label>
										<select id="type" name="type" class="form-control is-invalid" required>
											{{-- <option value="dev">Devoir</option>
											<option value="int">Interrogation</option>
											 --}}
										</select> 
										<div id="imp" class="invalid-feedback " style="color: red; margin: auto; padding-top: 10px">
											
										</div>

										<br> <br>
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
										<button id="btnvalider" class="btn btn-action" type="submit">Suivant</button> 
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	
@endsection 


@section('jsfiles') 
{{-- <script src="{{url('js/jquery-3.6.0.min.js')}}"></script> --}}
<script src="{{url('js/modif.js')}}"></script>
@endsection 
