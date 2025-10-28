<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Show the application welcome page.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
        return view('welcome');
    }
    public function shop()
    {
        return view('shop');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }

    public function montecristi()
    {
        // Retorna la vista correspondiente a la ruta /montecristi
        return view('montecristi');
    }

    public function histoire()
    {
        // Retorna la vista correspondiente a la ruta /histoire
        return view('histoire');
    }

    public function bandes()
    {
        // Retorna la vista correspondiente a la ruta /bandes
        return view('bandes');
    }

    public function processus()
    {
        // Retorna la vista correspondiente a la ruta /processus
        return view('processus');
    }

    public function faq()
    {
        // Retorna la vista correspondiente a la ruta /faq
        return view('faq');
    }

    public function origine()
    {
        // Retorna la vista correspondiente a la ruta /origine
        return view('origine');
    }

    public function commentCommander()
    {
        // Retorna la vista correspondiente a la ruta /comment-commander
        return view('comment-commander');
    }

    public function artPorterPreserver()
    {
        // Retorna la vista correspondiente a la ruta /art-porter-preserver
        return view('art-porter-preserver');
    }

    public function chapeauxMontecristi()
    {
        // Retorna la vista correspondiente a la ruta /chapeaux-montecristi
        return view('chapeaux-montecristi');
    }

    public function histoirePalmatahat()
    {
        // Retorna la vista correspondiente a la ruta /histoire-palmatahat
        return view('histoire-palmatahat');
    }

    public function bandesChapeaux()
    {
        // Retorna la vista correspondiente a la ruta /bandes-chapeaux
        return view('bandes-chapeaux');
    }

}
