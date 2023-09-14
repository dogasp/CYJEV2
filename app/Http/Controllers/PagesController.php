<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function main(){
        return view('main');
    }

    public function team(){
        return view('template.team');
    }

    public function devis(){
        return view('template.devis');
    }

    public function offres(){
        return view('template.offrePresta');
    }

    public function detailOffres(){
        return view('template.detailOffrePresta');
    }

    public function succeed(){
        return view('template.devis')->with('success', 'Votre message a bien été envoyé. Merci !');
    }

    public function signature(){
        return view('template.signature');
    }

    public function resultSignature(){
        return view('signature.signature-result');
    }
}
