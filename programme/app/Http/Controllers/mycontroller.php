<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Mail\EnvoyerMail;
use Illuminate\Support\Facades\Mail;

use Dompdf\Dompdf;
// use Dompdf\Options; 

class myController extends Controller{

    public function tsaisie(Request $request){
        // $matiere = 'AZERT';
        $matiere = $request->input('matieres');
        $type = $request->input('type');
        $classe = $request->input('classe');
        $an_sess = $request->input('an_sess');
        // dd($an_sess);

        $tab = array(
            'nom_matiere' => explode(' . ', $matiere)[1], 
            'code_matiere' => explode(' . ', $matiere)[0], 
            'nom_type' => explode(' . ', $type)[1], 
            'id_type' => explode(' . ', $type)[0], 
            'c' => explode(' . ',$classe)[0]  ,
            's' => explode(' . ',$classe)[1],
            'g' => explode(' . ',$classe)[2],
            'an' => explode(' . ',$an_sess)[0],
            'sess' => explode(' . ',$an_sess)[1],
        );

        // return redirect()->view('saisie/tab_saisie', ['matiere' => $matiere]);

        return view('saisie/tab_saisie', $tab);
    }

    public function tsaisiesave(Request $request, $an, $sess, $c, $s, $g, $id_type, $code_matiere, $nom_type, $nom_matiere){
        // $matiere = 'AZERT';
        // $hidden = $request->input('hide');
        $notes = $request->input('notes');
        $matricules = $request->input('matricules');

        
        foreach ($matricules as $m) {
            $n = doubleval($notes[array_search($m, $matricules)]);
            

            $rq = DB::insert("INSERT INTO `notes`(`annee`, `mat_eleve`, `code_matiere`, `id_type`, `id_session`, `note`)
         VALUES (?, ?, ?, ?, ?, ?)",
          ["$an", "$m", "$code_matiere", "$id_type", "$sess", "$n"]); 

          $r0 = DB::select('SELECT * FROM `eleve` 
          WHERE annee = ?
          AND mat_eleve = ?
          GROUP BY annee ,mat_eleve;', ["$an", "$m"]);

          $this->mailer($r0[0], $nom_matiere, $nom_type, $n);

          $key = $id_type < 4 ? 'int_act' : 'dev_act';
          $value = intval($id_type) + 1;

          $rq2 = DB::update("UPDATE `enseignement` SET $key = ? 
          WHERE  annee = ?
          AND code_classe = ?
          AND serie = ?
          AND groupe = ?
          AND code_matiere = ? ", ["$value", "$an", "$c", "$s", "$g", "$code_matiere"]);

        //   $rq = DB::insert("INSERT INTO `notes`(`annee`, `mat_eleve`, `code_matiere`, `id_type`, `id_session`, `note`)
        //   VALUES ('2023-2024', ?, ?, ?, '1', ?)",
        //    ["$m", "$code_matiere", "$id_type", "$n"])(); 
        }


        // $tab = array(
        //     'notes' => $notes, 
        //     'matricules' => $matricules,
        //     'c' => $c,
        //     's' => $s,
        //     'g' => $g,
        //     'id_type' => $id_type,
        //     'code_matiere' => $code_matiere,
        //     // 'hidden' => $hidden, 
        // );

        return view('saisie/saisie_nt', ['ok' => '1']);
        // return view('test2', $tab);
    }

    public function tmodif(Request $request){
        // $matiere = 'AZERT';
        $matiere = $request->input('matieres');
        $type = $request->input('type');
        $classe = $request->input('classe');
        $an_sess = $request->input('an_sess');
        // dd($an_sess);

        $tab = array(
            'nom_matiere' => explode(' . ', $matiere)[1], 
            'code_matiere' => explode(' . ', $matiere)[0], 
            'nom_type' => explode(' . ', $type)[1], 
            'id_type' => explode(' . ', $type)[0], 
            'c' => explode(' . ',$classe)[0]  ,
            's' => explode(' . ',$classe)[1],
            'g' => explode(' . ',$classe)[2],
            'an' => explode(' . ',$an_sess)[0],
            'sess' => explode(' . ',$an_sess)[1],
        );

        // return redirect()->view('saisie/tab_saisie', ['matiere' => $matiere]);

        return view('modifier/tab_modif', $tab);
    }

    public function tmodifsave(Request $request, $an, $sess, $c, $s, $g, $id_type, $code_matiere){
        // $matiere = 'AZERT';
        // $hidden = $request->input('hide');
        $notes = $request->input('notes');
        $matricules = $request->input('matricules');

        // dd([ "$an", "$code_matiere", "$id_type", "$sess"]);
        // dd($notes);

        $rq2 = DB::delete("DELETE notes FROM `notes` 
            WHERE annee = ?
            AND code_matiere = ?
            AND id_type = ?
            AND id_session = ? ; ", [ "$an", "$code_matiere", "$id_type", "$sess"]);

        foreach ($matricules as $m) {
            $n = doubleval($notes[array_search($m, $matricules)]);

            $rq = DB::insert("INSERT INTO `notes`(`annee`, `mat_eleve`, `code_matiere`, `id_type`, `id_session`, `note`)
         VALUES (?, ?, ?, ?, ?, ?)",
          ["$an", "$m", "$code_matiere", "$id_type", "$sess", "$n"]); 

        //   $key = $id_type < 4 ? 'int_act' : 'dev_act';
        //   $value = intval($id_type) + 1;

        //   $rq2 = DB::update("UPDATE `enseignement` SET $key = ? 
        //   WHERE  annee = ?
        //   AND code_classe = ?
        //   AND serie = ?
        //   AND groupe = ?
        //   AND code_matiere = ? ", ["$value", "$an", "$c", "$s", "$g", "$code_matiere"]);

        //   $rq = DB::insert("INSERT INTO `notes`(`annee`, `mat_eleve`, `code_matiere`, `id_type`, `id_session`, `note`)
        //   VALUES ('2023-2024', ?, ?, ?, '1', ?)",
        //    ["$m", "$code_matiere", "$id_type", "$n"])(); 
        }


        // $tab = array(
        //     'notes' => $notes, 
        //     'matricules' => $matricules,
        //     'c' => $c,
        //     's' => $s,
        //     'g' => $g,
        //     'id_type' => $id_type,
        //     'code_matiere' => $code_matiere,
        //     // 'hidden' => $hidden, 
        // );

        return view('modifier/modif_nt', ['ok' => '1']);
        // return view('test2', $tab);
    }

    public function tcond(Request $request){
        
        $classe = $request->input('classe');
        $an_sess = $request->input('an_sess');
        // dd($an_sess);

        $tab = array(
            'c' => explode(' . ',$classe)[0]  ,
            's' => explode(' . ',$classe)[1],
            'g' => explode(' . ',$classe)[2],
            'def' => explode(' . ',$classe)[3],
            'an' => explode(' . ',$an_sess)[0],
            'sess' => explode(' . ',$an_sess)[1],
            'nsess' => explode(' . ',$an_sess)[2],
        );

        // return redirect()->view('saisie/tab_saisie', ['matiere' => $matiere]);

        return view('conduite/tab_cond', $tab);
    }

    public function tcondsave(Request $request, $an, $sess, $c, $s, $g){
        // $matiere = 'AZERT';
        // $hidden = $request->input('hide');
        $notes = $request->input('notes');
        $matricules = $request->input('matricules');

        foreach ($matricules as $m) {
            $n = doubleval($notes[array_search($m, $matricules)]);

            $rq2 = DB::delete("DELETE conduite FROM `conduite` 
            WHERE annee = ?
            AND id_session = ?
            AND mat_eleve = ?
             ; ", [ "$an", "$sess", "$m"]);

            $rq = DB::insert("INSERT INTO `conduite`(`annee`, `id_session`, `mat_eleve`, `note`)
         VALUES (?, ?, ?, ?)",
          ["$an", "$sess", "$m", "$n"]);
        } 

        return view('conduite/cond', ['ok' => '1']);
        // return view('test2', $tab);
    }

    public function tmoy(Request $request){
        // $matiere = 'AZERT';
        $mode = $request->input('mode');

        if ($mode == '0') {
            # code...
            $matiere = $request->input('matieres');
            $classe = $request->input('classe');
            $an_sess = $request->input('an_sess');
            $sess = explode(' . ',$an_sess)[1];

            $nsess = DB::select('SELECT sessions.*
                FROM sessions
                WHERE id_session = ? ', ["$sess"] )[0]->nom_session;
            // dd($an_sess);

            $tab = array(
                'nom_matiere' => explode(' . ', $matiere)[1], 
                'code_matiere' => explode(' . ', $matiere)[0], 
                'c' => explode(' . ',$classe)[0]  ,
                's' => explode(' . ',$classe)[1],
                'g' => explode(' . ',$classe)[2],
                'an' => explode(' . ',$an_sess)[0],
                'sess' => $sess,
                'nsess' => $nsess,
            );

            return view('moyenne/tab_moy_pm', $tab);

        }
        else {
            $classe = $request->input('classe');
            $an_sess = $request->input('an_sess');
            $sess = explode(' . ',$an_sess)[1];

            $sesssel = $request->input('session');

            if ($sesssel=='0') {
                $nsess = 'Annuel';
            }
            else {

            $nsess = DB::select('SELECT sessions.*
                FROM sessions
                WHERE id_session = ? ', ["$sesssel"] )[0]->nom_session;
            // dd($an_sess);
            }


            $tab = array(
                // 'ok' => $mode,
                'c' => explode(' . ',$classe)[0]  ,
                's' => explode(' . ',$classe)[1],
                'g' => explode(' . ',$classe)[2],
                'an' => explode(' . ',$an_sess)[0],
                'sess' => $sesssel,
                'nsess' => $nsess,
            );

            return view('moyenne/tab_moy_gn', $tab);
            
        }
        
    }

    public function tstatnts(Request $request){
        $mode = $request->input('mode');

        if ($mode == '0') {
            # code...
            $matiere = $request->input('matieres');
            $classe = $request->input('classe');
            $an_sess = $request->input('an_sess');
            $sess = explode(' . ',$an_sess)[1];
            $sesssel = $request->input('session');

            $nsess = DB::select('SELECT sessions.*
                FROM sessions
                WHERE id_session = ? ', ["$sesssel"] )[0]->nom_session;
            // dd($an_sess);

            $tab = array(
                'nom_matiere' => explode(' . ', $matiere)[1], 
                'code_matiere' => explode(' . ', $matiere)[0], 
                'c' => explode(' . ',$classe)[0]  ,
                's' => explode(' . ',$classe)[1],
                'g' => explode(' . ',$classe)[2],
                'an' => explode(' . ',$an_sess)[0],
                'sess' => $sesssel,
                'nsess' => $nsess,
            );

            // 
            $html= view('statistique/tab_statmat', $tab) -> render();
            // $this->pdf_stat($html, $tab);

            return view('statistique/tab_statmat', $tab);

        }
        else {
            $classe = $request->input('classe');
            $an_sess = $request->input('an_sess');
            $sess = explode(' . ',$an_sess)[1];
            $sesssel = $request->input('session');

            if ($sesssel=='0') {
                $nsess = 'Annuel';
            }
            else {

            $nsess = DB::select('SELECT sessions.*
                FROM sessions
                WHERE id_session = ? ', ["$sesssel"] )[0]->nom_session;
            // dd($an_sess);
            }

            $tab = array(
                // 'ok' => $mode,
                'c' => explode(' . ',$classe)[0]  ,
                's' => explode(' . ',$classe)[1],
                'g' => explode(' . ',$classe)[2],
                'an' => explode(' . ',$an_sess)[0],
                'sess' => $sesssel,
                'nsess' => $nsess,
            );

            $html= view('statistique/tab_statsess', $tab) -> render();
            // $this->pdf_stat($html, $tab);

            return view('statistique/tab_statsess', $tab);
            
        }
        
    }

    public function van_save(){
        // Ajouter nouvelle ligne dans infoetbs 

        $r1 = DB::select('SELECT * FROM `infoetbs` 
        WHERE id = (SELECT MAX(id) FROM infoetbs);');
        $a1 = explode('-',$r1[0]->annee)[1];
        $a2 = (intval(explode('-',$r1[0]->annee)[1]) + 1);
        $an =  "$a1-$a2" ;


        $r11 = DB::insert('INSERT INTO `infoetbs` (`id`, `annee`, `nom`, `contact`, `logo`) 
        VALUES (NULL, ?, ?, ?, ?)', ["$an", "{$r1[0]->nom}", "{$r1[0]->contact}", "{$r1[0]->logo}"]);

        
        // remettre act sur 1 dans session

        $r2 = DB::update("UPDATE `sessions` SET `act`= ? 
                            WHERE id_session = ? ;", ['1', '1']);

        return view('valider/van', ['ok' => '1']);
    }

    public function vsess_save($sess){ 

        if($sess < DB::select('SELECT MAX(id_session) as id_session FROM `sessions`')[0]->id_session ){
            //Passer int act et devact à 1 4

            $r1 = DB::update("UPDATE `enseignement` SET `int_act`= ? ,`dev_act`= ? ", ['1', '4']);

            // changer act dans session 

            $sess = intval($sess) + 1;

            $r2 = DB::update("UPDATE `sessions` SET `act`= ? ", ['0']);
            $r3 = DB::update("UPDATE `sessions` SET `act`= ? 
                                WHERE id_session = ? ;", ['1', "$sess"]);

            return view('valider/vsess', ['ok' => '1']);
        } else {
            return view('valider/van', ['oktxt' => 'Veuillez plutôt valider l\'année']);
        }
    }

    public function tbull(Request $request){
      
        $classe = $request->input('classe');
        $an_sess = $request->input('an_sess');
        $sess = explode(' . ',$an_sess)[1];

        $sesssel = $request->input('session');

        if ($sesssel=='0') {
            $nsess = 'Annuel';
        }
        else {

        $nsess = DB::select('SELECT sessions.*
            FROM sessions
            WHERE id_session = ? ', ["$sesssel"] )[0]->nom_session;
        // dd($an_sess);
        }

        $tab = array(
            // 'ok' => $mode,
            'c' => explode(' . ',$classe)[0]  ,
            's' => explode(' . ',$classe)[1],
            'g' => explode(' . ',$classe)[2],
            'an' => explode(' . ',$an_sess)[0],
            'sess' => $sesssel,
            'nsess' => $nsess,
        );

        return view('bulletin/tab_bull', $tab);
        
        
        
    }

    public function bfile(Request $request, $sess, $mat){

        if ($sess == '0') {
            # code...
            // $matiere = $request->input('matieres');
            // $classe = $request->input('classe');
            // $an_sess = $request->input('an_sess');
            // $sess = explode(' . ',$an_sess)[1];

            // $nsess = DB::select('SELECT sessions.*
            //     FROM sessions
            //     WHERE id_session = ? ', ["$sess"] )[0]->nom_session;
            // // dd($an_sess);

            $tab = array(
                // 'nom_matiere' => explode(' . ', $matiere)[1], 
                // 'code_matiere' => explode(' . ', $matiere)[0], 
                // 'c' => explode(' . ',$classe)[0]  ,
                // 's' => explode(' . ',$classe)[1],
                // 'g' => explode(' . ',$classe)[2],
                // 'an' => explode(' . ',$an_sess)[0],
                // 'sess' => $sess,
                // 'nsess' => $nsess,
                'mat' => $mat,
            );

            return view('bulletin/bull_a_md', $tab);

        }
        else {
            // $classe = $request->input('classe');
            // $an_sess = $request->input('an_sess');
            // $sess = explode(' . ',$an_sess)[1];

            // $sesssel = $request->input('session');

            // $nsess = DB::select('SELECT sessions.*
            //     FROM sessions
            //     WHERE id_session = ? ', ["$sesssel"] )[0]->nom_session;
            // // dd($an_sess);

            $tab = array(
                // 'ok' => $mode,
                // 'c' => explode(' . ',$classe)[0]  ,
                // 's' => explode(' . ',$classe)[1],
                // 'g' => explode(' . ',$classe)[2],
                // 'an' => explode(' . ',$an_sess)[0],
                'sess' => $sess,
                // 'nsess' => $nsess,
                'mat' => $mat,
            );

            return view('bulletin/bull_t_md', $tab);
            
        }
        
    }

    public function pdf_bull($sess, $mat){
        $pdffile = new Dompdf();
        if ($sess == '0') {
            # code...
            // $matiere = $request->input('matieres');
            // $classe = $request->input('classe');
            // $an_sess = $request->input('an_sess');
            // $sess = explode(' . ',$an_sess)[1];

            // $nsess = DB::select('SELECT sessions.*
            //     FROM sessions
            //     WHERE id_session = ? ', ["$sess"] )[0]->nom_session;
            // // dd($an_sess);

            $tab = array(
                // 'nom_matiere' => explode(' . ', $matiere)[1], 
                // 'code_matiere' => explode(' . ', $matiere)[0], 
                // 'c' => explode(' . ',$classe)[0]  ,
                // 's' => explode(' . ',$classe)[1],
                // 'g' => explode(' . ',$classe)[2],
                // 'an' => explode(' . ',$an_sess)[0],
                // 'sess' => $sess,
                // 'nsess' => $nsess,
                'mat' => $mat,
            );

            $html= view('bulletin/bull_a_md', $tab) -> render();

        }
        else {
            // $classe = $request->input('classe');
            // $an_sess = $request->input('an_sess');
            // $sess = explode(' . ',$an_sess)[1];

            // $sesssel = $request->input('session');

            // $nsess = DB::select('SELECT sessions.*
            //     FROM sessions
            //     WHERE id_session = ? ', ["$sesssel"] )[0]->nom_session;
            // // dd($an_sess);

            $tab = array(
                // 'ok' => $mode,
                // 'c' => explode(' . ',$classe)[0]  ,
                // 's' => explode(' . ',$classe)[1],
                // 'g' => explode(' . ',$classe)[2],
                // 'an' => explode(' . ',$an_sess)[0],
                'sess' => $sess,
                // 'nsess' => $nsess,
                'mat' => $mat,
            );

             $html= view('bulletin/bull_t_md', $tab) -> render();
            
        }
        
        
        $pdffile->loadHtml($html);
        $pdffile->setPaper('A4', 'portrait');
        // Render the HTML as PDF
        $pdffile->render();
        // Télécharge le pdf 
        $pdffile->stream();
    }

    public function pdf_stat($html, $tab){
        
        $pdffile = new Dompdf();
        $pdffile->loadHtml($html);
        $pdffile->setPaper('A4', 'portrait');
    
    
        // Render the HTML as PDF
        $pdffile->render();
    
        // Télécharge le pdf 
        $pdffile->stream();
    
        // $tab = array(
        //     'name' => 'Dave',
        //     'age' => 26
        // );
    
        // return view('test2', $tab);
        return view('statistique/tab_statmat', $tab);
    }

    public function mailer($obj, $nom_matiere, $nom_type, $note){

        $tab = array(
            'nom_matiere' => $nom_matiere, 
            'n' => $obj->nom,
            'p' => $obj->prenom,
            'c' => $obj->code_classe,
            's' => $obj->serie,
            'g' => $obj->groupe,
            'nt' => $note,
            // 'an' => explode(' . ',$an_sess)[0],
            'nom_type' => $nom_type,
            // 'nsess' => $nsess,
        );

        Mail::to("$obj->email_parent")
            ->send(new EnvoyerMail('saisie', $tab));

        // return view('test2');
        // return view('test2', compact('nom'));
    }

    public function index(){
        $nom = 'david';

        $tab = array(
            'name' => 'Dave',
            'age' => 26
        );

        return view('test2', $tab);
        // return view('test2', compact('nom'));
    }

    


}




?>