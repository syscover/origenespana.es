<?php namespace App\Http\Controllers;

class WebController extends Controller
{
    public function home()
    {
        $partners   = collect(config('partners.partners'));
        $news       = collect(config('news.news'));

        return view('web.pages.home', [
            'highlightsPartners'    => $partners->shuffle()->take(10),
            'news'                  => $news
        ]);
    }

    public function news()
    {
        $news = collect(config('news.news'));

        return view('web.pages.blog.blog-list', [
            'news' => $news
        ]);
    }

    public function newsItem($slug)
    {
        $news = collect(config('news.news'))->where('slug', $slug)->first();

        return view('web.pages.blog.blog-post', ['newsItem' => $news]);
    }
}
