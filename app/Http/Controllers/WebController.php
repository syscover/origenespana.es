<?php namespace App\Http\Controllers;

class WebController extends Controller
{
    public function home()
    {
        $partners = collect(config('partners.partners'));

        return view('web.pages.home', ['highlightsPartners' => $partners->shuffle()->take(10)]);
    }
}
