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
        // $news = collect(config('news.news'))->where('slug', $slug)->first();
        $news           = collect(config('news.news'));
        $newsItem       = null;
        $previousSlug   = null;
        $nextSlug       = null;

        foreach ($news as $key => $value)
        {
            if ($value->slug === $slug)
            {
                $newsItem       = $value;
                $previousSlug   = $news[$key-1 === -1 ? count($news) - 1 : $key-1]->slug;
                $nextSlug       = $news[$key+1 === count($news) ? 0 : $key+1]->slug;
            }
        }

        if (!$newsItem) abort(404);

        return view('web.pages.blog.blog-post', [
            'newsItem'      => $newsItem,
            'previousSlug'  => $previousSlug,
            'nextSlug'      => $nextSlug,
        ]);
    }
}
