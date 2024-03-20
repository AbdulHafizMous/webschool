<?php
use Illuminate\Support\Facades\BD;

$rqan = DB::select(' SELECT MAX(infoetbs.annee) as annee
FROM `infoetbs`');

$rqs = DB::select('SELECT sessions.*
FROM sessions
WHERE sessions.act = 1');

$rq = DB::select('SELECT code_classe, serie, groupe
FROM `enseignement`
WHERE annee = ?
GROUP BY code_classe, serie, groupe;', ["{$rqan[0]->annee}"]);


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
					<h1 class="page-title">Conduites</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Notes de Conduites </h3>
						<hr>

							<form method="" action="{{url('tab_cond')}}">
							<div class="top-margin">

								<?php 
										echo " Année : {$rqan[0]->annee}  <br> Session : {$rqs[0]->nom_session} ";
										echo "<input type=\"text\" style=\"display: none;\" value=\"{$rqan[0]->annee} . {$rqs[0]->id_session} . {$rqs[0]->nom_session}\" name=\"an_sess\" id=\"hide\" >";
									
										?>
										<ul class="list-inline" style="margin-top: 20px">
											<?php
									foreach ($rq as $row) {
										$def = DB::select('SELECT CASE (COALESCE( SUM(note), 0)) WHEN 0 THEN 0 ELSE 1 END as def 
											FROM `conduite`, eleve
											WHERE conduite.annee = eleve.annee
											AND conduite.mat_eleve = eleve.mat_eleve
											AND conduite.annee = ?
											AND conduite.id_session = ?
											AND eleve.code_classe = ?
											AND eleve.serie = ?
											AND eleve.groupe = ?;', ["{$rqan[0]->annee}", "{$rqs[0]->id_session}", "{$row->code_classe}", "{$row->serie}", "{$row->groupe}"])[0]->def;
										
										$col = $def == '0' ? 'btn-danger' : 'btn-success';
										$sym = $def == '0' ? ' !! ' : ' V ';


										echo "
										
										<li class=\"list-inline-item my-2 mx-1\" style=\"margin:10px 5px; \">
										<button
											class=\"btn $col classes\"
											id=\"{$row->code_classe} . {$row->serie} . {$row->groupe} . $def\"
										>
										{$row->code_classe} . {$row->serie} . {$row->groupe}
											<span
												class=\"badge bg-primary\"
												style=\"margin-left: 5px\"
												type=\"submit\"

												> $sym </span
											>
										</button>
								
									</li>
										
										";
									}
									
								?>
									
								</ul>

								<input type="text" style="display: none;" value="" name="classe" id="classe_slt" >
								
								

								<hr>

								{{-- <div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox" > 
											Vérifier vos informations
										</label>                        
									</div>
									<div class="col-lg-4 text-right">
										<button id="btnvalider" class="btn btn-action" type="submit">Suivant</button> 
									</div>
								</div> --}}
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

var classes = document.querySelectorAll(".classes");
var inp = document.querySelector("#classe_slt");

classes.forEach(c => {
    c.addEventListener("click", function(e) {
		inp.value = c.attributes.getNamedItem('id').value;
		// e.preventDefault();
		alert(inp.value);
	});
  });
	
</script>
@endsection 
