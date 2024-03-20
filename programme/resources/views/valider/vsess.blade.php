<?php
use Illuminate\Support\Facades\BD;

$rqan = DB::select(' SELECT MAX(infoetbs.annee) as annee
FROM `infoetbs`');

$rqs = DB::select('SELECT sessions.*
FROM sessions
WHERE sessions.act = 1');


$rq = DB::select('SELECT code_classe, serie, groupe, SUM(CASE WHEN int_act > 1 THEN 0 ELSE 1 END) AS intv, SUM(CASE WHEN dev_act = 6 THEN 0 ELSE 1 END) AS devv
FROM `enseignement` 
WHERE annee = ?
GROUP BY code_classe, serie, groupe;', ["{$rqan[0]->annee}"]);

$code = "";
$ok1 = 0;

foreach ($rq as $key) {
	$code = $code."<tr class=\"$key->code_classe . $key->serie . $key->groupe\">
			<td class=\"text-center\">$key->code_classe ~ $key->serie ~ $key->groupe</td>
			";

	if($key->intv == '0' && $key->devv == '0'){
		$code = $code."<td class=\"text-center text-success\">V</td>";
	}
	else {
		$code = $code."<td class=\"text-center text-danger\">X</td>";
		$ok1 += 1;
	}
	
}

$code = $code." </tr> ";

$ok2 = $ok1 == 0 ? '' : 'disabled';


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
					<h1 class="page-title">Validation</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Valider la Sassion en Cours : ~ {{$rqs[0]->nom_session}} ~ </h3>
						<hr>

							<form method="" action="{{url('vsess_save', ['sess' => $rqs[0]->id_session])}}">
								<div class="row m-auto d-flex" style="display: flex; flex-direction: row; justify-content: space-between; justify-items: center;">
									<div class="col-md-6 col-sm-6">
										<a class="btn btn-warning"  href="{{url('saisie_nt')}}">
										  Saisie de Notes
									  </a>
									</div>
								  <div class=" text-right col-md-6 col-sm-6">
										<button class="btn btn-success btn-action " type="submit" id="enregistrer" {{$ok2}}>
										  Enrégistrer
									  </button>
								  </div>
							  </div>
							{{-- <div class="top-margin"> --}}

								<div class="panel panel-default">
									<div class="panel-body ">
					
										<table width="100%" class="table table-secondary table-striped bg-info" id="tbl">
											<thead class="thead-dark">
												<tr class="bg-primary" >
													<th class="text-center" width="50%">Classe ~ Série ~ Groupe</th>
													<th class="text-center" width="15%">Valide</th>
													
												</tr>
											</thead>
											<tbody id="tbody">
												
												<?php 
												
										
												echo $code;
												
										
												?>
										
											</tbody>
										</table>
								
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
<script src="{{url('js/jquery-3.6.0.min.js')}}"></script>
{{-- <script src="{{url('js/modif.js')}}"></script> --}}
<script>

	
</script>
@endsection 
