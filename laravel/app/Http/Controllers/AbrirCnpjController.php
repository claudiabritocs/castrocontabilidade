<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Contato;
use App\Models\Certificados;

class AbrirCnpjController extends Controller
{
    public function index()
    {
        return view('frontend.abrircnpj', [
            'contato' => Contato::first(),
            'certificados' => Certificados::ordenados()->get(),
            'faq' => Faq::ordenados()->get(),
        ]);
    }
}
