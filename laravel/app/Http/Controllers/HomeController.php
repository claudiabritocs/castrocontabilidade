<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Contato;
use App\Models\Principal;
use App\Models\Certificados;
use App\Models\AceiteDeCookies;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home', [
            'home' => Principal::first(),
            'contato' => Contato::first(),
            'certificados' => Certificados::ordenados()->get(),
            'faq' => Faq::ordenados()->get(),
        ]);
    }

    public function postCookies(Request $request)
    {
        $input = $request->all();
        $input['ip'] = $request->ip();

        AceiteDeCookies::create($input);

        return redirect('/');
    }
}
