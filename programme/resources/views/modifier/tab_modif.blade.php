@php
	use Illuminate\Support\Facades\BD;

$rq = DB::select(" SELECT eleve.*, notes.note FROM `eleve` , notes
		WHERE notes.annee = eleve.annee
    AND notes.mat_eleve = eleve.mat_eleve
    AND eleve.code_classe = '$c'
		AND eleve.serie = '$s'
		AND eleve.groupe = '$g'
    AND notes.annee = '$an'
    AND notes.code_matiere = '$code_matiere'
    AND notes.id_type = '$id_type'
    AND notes.id_session = '$sess' ");



@endphp

@extends('admlayout')

@section('content') 
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
        <div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
			<form action="{{url('tab_modifsave', ['an' => $an, 'sess' => $sess, 'c' => $c, 's' => $s, 'g' => $g, 'id_type' => $id_type, 'code_matiere' => $code_matiere])}}" method="">
			<div class="row">
      			<div class="col-md-6 col-sm-6">
      				<button class="btn btn-danger"  type="reset">
						Effacer tout
					</button>
      			</div>
				<div class=" text-right col-md-6 col-sm-6">
    			  	<button class="btn btn-action " type="submit" id="enregistrer">
						Enrégistrer
					</button>
				</div>
			</div>
			<div class=" bg-success ">
							<h3 class="thin text-center">Modification des note : {{$nom_matiere}} ~  {{$nom_type}} ~ ( {{$c}}  {{$s}}  {{$g}} )   </h3>
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
            <th class="text-center" width="15%">Pas de note</th>
        </tr>
	</thead>
	<tbody id="tbody">
		
		<?php 
		

		foreach ($rq as $key) {
      $ch = doubleval($key->note) == 99 ? 'on' : 'off';

			echo "<tr class=\" t_$key->mat_eleve\">
				<input type=\"text\" style=\"display: none;\" value=\"$key->mat_eleve\" name=\"matricules[]\" id=\"hide\" >
					<td class=\"text-center\">$key->mat_eleve</td>
					<td class=\"text-center\">$key->nom</td>
					<td class=\"text-center\">$key->prenom</td>
					<td class=\"text-center\">
						<input class=\"form-control text-center i_$key->mat_eleve\" type=\"number\" min=\"0\" max=\"20\" step=\"any\" value=\"$key->note\" name=\"notes[]\" required >
					</td>
					<td class=\"text-center\">
						<input type=\"checkbox\" class=\"form-control cases\" value=\"$ch\" id=\"$key->mat_eleve\">
					</td>
				</tr>";
		}
		// foreach ([$c, $s, $g] as $key) {
		// 	echo "<input type=\"text\" style=\"display: none;\" value=\"$key\" name=\"hide\" id=\"hide\" >";
		// }
		

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

// var i = [1,5,8,8];
// i+=(9);
// alert(i);

	var cases =  document.querySelectorAll('.cases');

	cases.forEach(el => {
		el.addEventListener('click', function () {
      load(el);
    });
    load(el);

	});

  function load(el) {
    // alert(el.value);
    // e.preventDefault();
			var id = el.attributes.getNamedItem('id').value;
			var inp = document.querySelector('.i_'+id);
			var text = document.querySelector('.t_'+id);
			// alert(el.value+inp);
			if(el.value == 'off'){
				el.value = 'on';
				inp.removeAttribute('disabled');
				text.classList.remove('text-muted');
			}
			else {
				el.value = 'off';
				inp.value = '';
				inp.setAttribute('disabled', 'disabled');
				el.setAttribute('checked', 'checked');
				text.classList.add('text-muted');
			}
		
  }
	
	var btn = document.querySelector('#enregistrer');
	btn.addEventListener('click', (e) => {
    		// e.preventDefault();
			var bcases = [];
			var i = 0, j =0, k = 0;
			var mcases = [];
			cases.forEach(el => {
				
				if(el.value == 'on'){
					mcases.push(el);
					i++;
				}
				else {
					bcases.push(el);
					j++
				}
				// alert(el.value);
				k++;
			
			});
			// alert(i);
			var t = confirm('Etes vous - sûrs');
			if(t){
				cases.forEach(el => {
					if(el.value == 'off'){
						var id = el.attributes.getNamedItem('id').value;
						var inp = document.querySelector('.i_'+id);
						
						inp.removeAttribute('disabled');
						inp.removeAttribute('max');
						inp.value = 99;
					}

				});
				// alert('go');
			}
			else{
				e.preventDefault();
			}

			

			
		});



</script>
@endsection 