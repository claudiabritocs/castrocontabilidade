<?php

namespace App\Http\Controllers;

use App\Models\Certificados;
use App\Models\Contato;
use App\Models\Faq;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function index()
    {
        return view('frontend.servicos', [
            'contato' => Contato::first(),
            'certificados' => Certificados::ordenados()->get(),
            'faq' => Faq::ordenados()->get(),
        ]);
    }

}
