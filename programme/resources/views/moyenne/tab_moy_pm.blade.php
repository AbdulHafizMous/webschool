@php
	use Illuminate\Support\Facades\BD;

$rq = DB::select(" SELECT * FROM `moyennes01` 
		WHERE annee = ?
		AND code_classe = ?
		AND serie = ?
		AND groupe = ?
		AND code_matiere =?
		AND id_session = ? ", ["{$an}", "{$c}",
		"{$s}","{$g}","{$code_matiere}", "{$sess}"]);



@endphp

@extends('admlayout')

@section('content') 
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
        <div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
			{{-- <form action="{{url('tab_saisiesave', ['an' => $an, 'sess' => $sess, 'c' => $c, 's' => $s, 'g' => $g, 'id_type' => $id_type, 'code_matiere' => $code_matiere])}}" method=""> --}}
			<div class="row">
				<div class=" text-right col-md-6 col-sm-6">
    			  	<a class="btn btn-action " href="submit" id="enregistrer">
						Télécharger
				</a>
     	    </div>
			</div>
			<div class=" bg-success ">
							<h3 class="thin text-center">Table de Moyennes : ~ {{$nsess}}  ~ {{$nom_matiere}} ~ ( {{$c}}  {{$s}}  {{$g}} ) ~ Coef : {{$rq[0]->coefficient}}  </h3>
							</div>
							<hr>
				<div>
				<div class="panel panel-default">
					<div class="panel-body ">
	
        <table width="100%" class="table table-secondary table-striped bg-info" id="tbl">
	<thead class="thead-dark">
        <tr class="bg-primary" >
            <th class="text-center" width="10%">Matricule</th>
            <th class="text-center" width="20%">Nom</th>
            <th class="text-center" width="40%">Prénoms</th>
            <th class="text-center" width="15%">MI</th>
            <th class="text-center" width="15%">Dev 1</th>
            <th class="text-center" width="15%">Dev 2</th>
            <th class="text-center" width="15%">MG</th>
            <th class="text-center" width="15%">MG Coef</th>
            <th class="text-center" width="15%">Mention</th>
        </tr>
	</thead>
	<tbody id="tbody">
		<?php 
		foreach ($rq as $key) {
			$mi = number_format($key->moy_inter, '2');
			$mg = number_format($key->moy, '2');
			$mgc = number_format($key->moy_coef, '2');

			$ment = '';

			if ($mg < 10) {
				# code...
				$ment = 'Insuffisant';
			}
			elseif ($mg < 12) {
				# code...
				$ment = 'Passable';
			}
			elseif ($mg < 14) {
				# code...
				$ment = 'Assez Bien';
			}
			elseif ($mg < 16) {
				# code...
				$ment = 'Bien';
			}
			elseif ($mg < 18) {
				# code...
				$ment = 'Très Bien';
			}
			else {
				# code...
				$ment = 'Excellent';
			}


			echo "<tr class=\" t_$key->mat_eleve\">
				<input type=\"text\" style=\"display: none;\" value=\"$key->mat_eleve\" name=\"matricules[]\" id=\"hide\" >
					<td class=\"text-center\">$key->mat_eleve</td>
					<td class=\"text-center\">$key->nom</td>
					<td class=\"text-center\">$key->prenom</td>
					<td class=\"text-center\">$mi</td>
					<td class=\"text-center\">$key->dev1</td>
					<td class=\"text-center\">$key->dev2</td>
					<td class=\"text-center\">$mg</td>
					<td class=\"text-center\">$mgc</td>
					<td class=\"text-center\">$ment</td>
				</tr>
					";
					
		}
		// foreach ([$c, $s, $g] as $key) {
		// 	echo "<input type=\"text\" style=\"display: none;\" value=\"$key\" name=\"hide\" id=\"hide\" >";
		// }
		

		?>

	</tbody>
    </table>

</div>

</div>


	  {{-- </form>   --}}
    
</article>
<!-- /Article -->




</div>
</div>	<!-- /container -->

@endsection 

@section('jsfiles') 
<script>


</script>
@endsection 