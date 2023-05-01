<?php

namespace App\Http\Controllers;


class ViewPageController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function tournamentPage()
    {
        return view('tournament.tournament');
    }

    public function create_tournamentPage()
    {
        return view('tournament.manage_tourna');
    }

    public function aboutPickleBallLandingPage()
    {
        return view('about.about');
    }

    public function galleryLandingPage()
    {
        return view('about.gallery');
    }

    public function aboutPickleBallPage()
    {
        return view('about.about');
    }

    public function galleryPage()
    {
        return view('about.gallery');
    }

    public function clubsPage()
    {
        return view('clubs.clubs');
    }

}
