@php
	use Illuminate\Support\Facades\BD;

    $an = DB::select(' SELECT MAX(infoetbs.annee) as annee
FROM `infoetbs`')[0]->annee;

$etbs = DB::select(" SELECT * FROM `infoetbs` 
WHERE id = (SELECT MAX(id) FROM infoetbs);");


$nsess = DB::select("SELECT sessions.*
FROM sessions
WHERE sessions.act = '$sess' ")[0]->nom_session;


$rq = DB::select(" SELECT * FROM `moyennes01` 
		WHERE annee = ?
		AND mat_eleve = ?
		AND id_session = ? ", ["{$an}", "{$mat}", "{$sess}"]);

$rq2 = DB::select(" SELECT * FROM `moyennes02` 
WHERE annee = ?
AND mat_eleve = ?
AND id_session = ? ", ["{$an}", "{$mat}", "{$sess}"]);

$bornes = DB::select(" SELECT MIN(moygac) as pfa, MAX(moygac) pfo FROM `moyennes02` 
WHERE annee = ?
AND code_classe = ?
AND serie = ?
AND groupe = ?
AND id_session = ? ", ["{$an}", "{$rq[0]->code_classe}", "{$rq[0]->serie}", "{$rq[0]->groupe}", "{$sess}"]);


$rg = DB::select(" SELECT tmp.rang
FROM (SELECT mat_eleve, ROW_NUMBER() OVER(ORDER BY moygac DESC, nom, prenom ASC) AS rang FROM `moyennes02` 
WHERE annee = ?
AND id_session = ?
AND code_classe = ?
AND serie = ?
AND groupe = ?) as tmp
WHERE tmp.mat_eleve = ? ; ", ["{$an}", "{$sess}", "{$rq[0]->code_classe}", "{$rq[0]->serie}", "{$rq[0]->groupe}", "{$mat}"])[0]->rang;

if ($rg == '1') {
    if ($rq[0]->sexe == 'M') {
        $rg = '1 er';
    }
    else {
        $rg = '1 ère';
    }
    
}
else {
    $rg .= ' ème';
}


@endphp



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap-grid.min.css')}}">
</head>
<body>


<div class="container">
    <div class="col-sm-12 col-lg-10 offset-md-1 offset-lg-1 border border-2 m-5">
    
        <div class="mt-3">
            <table width="100%">
                <tr>
                    <td width="20%" class="text-center"><img class=" img-responsive w-25 h-25" src="{{url('imgs/OIP.jpg')}}" ></td>
                    <td width="60%" class="text-center text-primary">Ministère des Enseignements secondaire, technique et de la Formation professionnelle
                        <h6>{{$etbs[0]->nom}}</h6>
                        <p class="text-center" >{{$etbs[0]->contact}} </p>
                    </td>
                    <td width="20%" class="text-center"><img class="img-responsive w-25 h-25" src="{{url($etbs[0]->logo)}}" style="margin-right:0;"></td>
                </tr>
            </table>
        </div>
        <div class="row mt-3 bg-info" style="margin: auto;">
            <div class="col-md-6 ">
            <table width="100%">
                <tr>
                    <th width="30%">Matricule :  </th>
                    <td width="70%"> {{$mat}} </td>
                </tr>
            </table>
            </div>
            <div class="col-md-6 ">
                <table width="100%">
                    <tr>
                        <th width="30%">Classe : </th>
                        <td width="70%">{{$rq[0]->code_classe}} {{$rq[0]->serie}} {{$rq[0]->groupe}}</td>
                    </tr>
                </table>
            </div>
        </div>

            <div class="row bg-info" style="margin: auto;">
            <div class="col-md-6 ">
                <table width="100%">
                    <tr>
                        <th width="30%">Nom :</th>
                        <td width="70%">{{$rq[0]->nom}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6 ">
                <table width="100%">
                    <tr>
                        <th width="30%" class="mt-0">Prénoms :</th>
                        <td width="70%">{{$rq[0]->prenom}}</td>
                    </tr>
                </table>
            </div>
            </div>
            <div class="row bg-info" style="margin: auto;">
                <div class="text-end text-primary bd-secondary rounded m-3 pe-5" style="font-size: 20px">
                    <table width="100%">
                        <tr>
                            <th width="50%">{{$nsess}}</th>
                        </tr>
                    </table>
                </div>
                {{-- <div class="col-md-6 ">
                    <table width="100%">
                        <tr>
                            <th width="25%" class="mt-0">Status :</th>
                            <td width="75%">Nouveau</td>
                        </tr>
                    </table>
                </div> --}}
            </div>
           
    
        
        <div class="text-center text-primary fs-2">
           BULLETIN DE NOTE
        </div>
        <table width="100%" cellspacing="0" class="table table-primary table-striped bd-2">
            <thead class="thead-dark">
                <tr>
                    <th width="30%" class="text-center" rowspan="2">Disciplines</th>
                    <th width="5%" class="text-center" rowspan="2">Coef</th>
                    <th width="10%" class="text-center" rowspan="2">MI</th>
                    <th width="25%" class="text-center" rowspan="1" colspan="2">Devoirs</th>
                    <th width="10%" class="text-center" rowspan="2">Moyennes /20</th>          
                    <th width="10%" class="text-center" rowspan="2">MC</th>
                    <th width="10%" class="text-center" rowspan="2">Mention</th>
                </tr>
                <tr>
                    <th rowspan="1" class="text-center" colspan="1">D1</th>
                    <th rowspan="1" class="text-center" colspan="1">D2</th>
                </tr>
                
                
            </thead>

            <?php 
            
            foreach ($rq as $key ) {
                # code...
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
              echo " <tr class=\"text-center\">
                <td>$key->code_matiere</td>
                <td>$key->coefficient</td>
                <td>$mi</td>
                <td>$key->dev1</td>
                <td>$key->dev2</td>
                <td>$mg</td>
                <td>$mgc</td>
                <td>$ment</td>
            </tr>";

            }

            $tmoycoef = number_format($rq2[0]->tmoycoefac, '2');
            
            ?>

           
            <tr class="text-center">
                <td>Conduite</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td>{{$rq2[0]->note}}</td>
                <td>{{$rq2[0]->note}}</td>
                <td></td>
            </tr>


            <tr class="text-center bg-white">
                <th>TOTAL</th>
                <th>{{$rq2[0]->tcoefac}}</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>{{$tmoycoef}}</th>
                <th></th>
            </tr>
        </table>

    <div class="mt-5 mb-5">
    <table width="100%" cellspacing="0" class="table table-success border border-2">
        <thead>
            <tr>
                <th class="bg-info text-center" width="20%" rowspan="1" colspan="2">BILAN TRIMESTRIEL</th>
                <th class="bg-info text-center" width="25%" colspan="2">APPRECITION</th>
                <th class="bg-info text-center" width="25%" colspan="2">OBSERVATION</th>
                <th class="bg-info text-center" width="20%" colspan="1">DIRECTEUR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="bg-info text-center" rowspan="1" colspan="1">Note de conduite</th>
                <td class="text-center bg-white" rowspan="1" colspan="1"> {{$rq2[0]->note}} </td>
                <td class="text-center" rowspan="1" colspan="1">Felicitation</td>  
                <td class="text-center" rowspan="1" colspan="1"> <input type="checkbox"></td>
                <td class="text-center" rowspan="1" colspan="1"><label>Insuffisant</label></td>
                <td class="text-center" rowspan="1" colspan="1"><input type="radio" name="tab" id="refus"></td> 
                <td rowspan="2" colspan="1" class="bg-white text-center"> ... </td>
            </tr>
                <tr>
                    <th class="bg-info text-center" width="20%" rowspan="1" colspan="1">Moyenne trimestrielle</th>
                    <td class="text-center bg-white" width="10%" rowspan="1" colspan="1">{{number_format($rq2[0]->moygac, '2')}}</td>
                    <td class="text-center" rowspan="1" colspan="1">Encouragement</td>  
                    <td class="text-center" rowspan="1" colspan="1"><input type="checkbox"></td>
                    <td class="text-center" rowspan="1" colspan="1">
                        <label>Passable</label>
                     </td>
                    <td class="text-center" rowspan="1" colspan="1"><input type="radio" name="tab" id="refus"></td>           
                </tr>
                <tr>
                    <th class="bg-info text-center" width="20%" rowspan="1" colspan="1">Rang</th>
                    <td class="text-center bg-white" width="10%" rowspan="1" colspan="1">{{$rg}}</td>
                    <td class="text-center" rowspan="1" colspan="1">Tableau d'honneur</td>  
                    <td class="text-center" rowspan="1" colspan="1"><input type="checkbox"></td>
                    <td class="text-center" rowspan="1" colspan="1">
                        <label>Assez-Bien</label>
                     </td>
                     <td class="text-center" rowspan="1" colspan="1"><input type="radio" name="tab" id="refus"></td>
                     <th class="bg-info text-center"  colspan="1">PARENTS</th>
                
                </tr>
                <tr>
                    
                </tr>
                <tr>
                    <th class="text-center text-center bg-info" rowspan="1" colspan="1">Plus forte moyenne</th>
                    <td class="text-center bg-white" width="10%" rowspan="1" colspan="1">{{ number_format($bornes[0]->pfo, '2')}}</td>
                    <td class="text-center" rowspan="1" colspan="1">Avertissement</td>  
                    <td class="text-center" rowspan="1" colspan="1"><input type="checkbox"></td>
                    <td class="text-center" rowspan="1" colspan="1">
                        <label>Bien</label>
                     </td>
                     <td class="text-center" rowspan="1" colspan="1"><input type="radio" name="tab" id="refus"></td>
                     <td rowspan="2" colspan="1" class="bg-white text-center"> ... </td> 
                </tr>
                <tr>
                    <th class="bg-info text-center" width="20%" rowspan="1" colspan="1">Plus faible moyenne</th>
                    <td class="text-center bg-white" width="10%" rowspan="1" colspan="1">{{ number_format($bornes[0]->pfa, '2')}}</td>
                    <td class="text-center" rowspan="1" colspan="1">Blame</td>  
                    <td class="text-center" rowspan="1" colspan="1"><input type="checkbox"></td>
                    <td class="text-center" rowspan="1" colspan="1">
                        <label>Très-Bien</label>
                     </td>
                     <td class="text-center" rowspan="1" colspan="1"><input type="radio" name="tab" id="refus"></td>
                </tr>
        </tbody>
        
    </table>
    </div>
</div>
</div>
    {{-- <script src="{{url('js/bootstrap.bundle.min.js')}}"></script> --}}
</body>
</html>