<?php
/**
 * User: Abdelghafour
 * Date: 24/01/2019
 * Time: 21:07
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */
namespace App\Controller;

use App\Table\Accueil;

use App\Table\Apropos;

use App\Table\Decoration;

use App\Table\Gastronomie;

use App\Table\Patisserie;

use App\Table\Planifions;

class HomeController extends AppController
{

    public function index()
    {

        $apropo = Apropos::getSingle(1);

        $photo  = Accueil::getSingle(1);

        $planifions = Planifions::getAll();

        $this->render('public.home',compact('apropo','photo','planifions'));
    }

    public function aniv()
    {
        $this->render('public.aniv');
    }

    public function decoration()
    {
        $photos = Decoration::getAll();

        $this->render('public.decoration',compact('photos'));
    }

    public function gastronomie()
    {
        $gastronomies = Gastronomie::getAll();

        $this->render('public.gastronomie',compact('gastronomies'));
    }

    public function patisserie()
    {
        $patisseries = Patisserie::getAll();

        $this->render('public.patisserie',compact('patisseries'));
    }

    public function devis()
    {
        $this->render('public.devis');
    }

    public function contact()
    {
        $this->render('public.contact');
    }

}