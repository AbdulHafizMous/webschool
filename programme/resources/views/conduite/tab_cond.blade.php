@php
	use Illuminate\Support\Facades\BD;

$code = "";

if($def == '0') {
	
	$rq = DB::select(" SELECT * FROM `eleve` 
		WHERE code_classe = '$c'
		AND serie = '$s'
		AND groupe = '$g' ") ;

	

		foreach ($rq as $key) {
			$code = $code."<tr class=\" t_$key->mat_eleve\">
				<input type=\"text\" style=\"display: none;\" value=\"$key->mat_eleve\" name=\"matricules[]\" id=\"hide\" >
					<td class=\"text-center\">$key->mat_eleve</td>
					<td class=\"text-center\">$key->nom</td>
					<td class=\"text-center\">$key->prenom</td>
					<td class=\"text-center\">
						<input class=\"form-control text-center i_$key->mat_eleve notes\" type=\"number\" min=\"0\" max=\"20\" step=\"any\" name=\"notes[]\" required >
					</td>
				</tr>";
		}
	}
	else {
		$rq = DB::select(" SELECT eleve.*, conduite.note FROM `eleve` , conduite
		WHERE conduite.annee = eleve.annee
    AND conduite.mat_eleve = eleve.mat_eleve
    AND eleve.code_classe = '$c'
		AND eleve.serie = '$s'
		AND eleve.groupe = '$g'
    AND conduite.annee = '$an'
    AND conduite.id_session = '$sess' ");

	

		foreach ($rq as $key) {
			$code = $code."<tr class=\" t_$key->mat_eleve\">
				<input type=\"text\" style=\"display: none;\" value=\"$key->mat_eleve\" name=\"matricules[]\" id=\"hide\" >
					<td class=\"text-center\">$key->mat_eleve</td>
					<td class=\"text-center\">$key->nom</td>
					<td class=\"text-center\">$key->prenom</td>
					<td class=\"text-center\">
						<input class=\"form-control text-center i_$key->mat_eleve notes\" type=\"number\" min=\"0\" max=\"20\" step=\"any\" value=\"$key->note\" name=\"notes[]\" required >
					</td>
				</tr>"; 
		}

	}


@endphp

@extends('admlayout')

@section('content') 
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
        <div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
			<form action="{{url('tab_condsave', ['an' => $an, 'sess' => $sess, 'c' => $c, 's' => $s, 'g' => $g])}}" method="">
			<div class="row m-auto d-flex" style="display: flex; flex-direction: row; justify-content: space-between; justify-items: center;">
      			<div class="col-md-6 col-sm-6">
      				<button class="btn btn-danger"  type="reset">
						Effacer tout
					</button>
      			</div>
				  <div class="col-md-6 col-sm-6">
					<div class="row" style="display: flex; flex-direction: row; justify-content: space-around; justify-items: center;">
						<input class="form-control text-center" type="number" min="0" max="20" step="any" id="btnset">
						<button class="btn btn-warning"  id = "btn_autoset" >
						  Tout Définir
					  </button></div>
					
				</div>
				<div class=" text-right col-md-6 col-sm-6">
    			  	<button class="btn btn-action " type="submit" id="enregistrer">
						Enrégistrer
					</button>
				</div>
			</div>
			<div class=" bg-success ">
							<h3 class="thin text-center">Notes de Conduite : {{$nsess}} ~ ( {{$c}}  {{$s}}  {{$g}} )   </h3>
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
            <th class="text-center" width="15%">Note</th>
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
    
</article>
<!-- /Article -->




</div>
</div>	<!-- /container -->

@endsection 

@section('jsfiles') 
<script>

	
	var btn = document.querySelector('#enregistrer');
	btn.addEventListener('click', (e) => {
    		// e.preventDefault();
			// alert('go');
			
			var t = confirm('Etes vous - sûrs');
			if(!t){
				e.preventDefault();
			}

			

			
		});

		var btnset = document.querySelector('#btn_autoset');
		btnset.addEventListener('click', (e) => {
    		e.preventDefault();
			// alert('go');
			var ch = document.querySelector('#btnset');
			if(ch.value != ''){
				var notes = document.querySelectorAll(".notes");
				notes.forEach(c => {
					c.value = ch.value;
				});
			}
			

			

			
		});



</script>
@endsection 