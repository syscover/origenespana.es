<?php namespace App\Http\Controllers;

class PartnerController extends Controller
{
    public function partners()
    {
        return view('web.pages.partners.partners-list', ['partners' => config('partners.partners')]);
    }

    public function partner($slug)
    {
        $partners       = config('partners.partners');
        $partner        = null;
        $previousSlug   = null;
        $nextSlug       = null;

        foreach ($partners as $key => $value)
        {
            if ($value->slug === $slug)
            {
                $partner        = $value;
                $previousSlug   = $partners[$key-1 === -1 ? count($partners) - 1 : $key-1]->slug;
                $nextSlug       = $partners[$key+1 === count($partners) ? 0 : $key+1]->slug;
            }
        }

        if (!$partner) abort(404);

        return view('web.pages.partners.partners-item', [
            'partner'       => $partner,
            'previousSlug'  => $previousSlug,
            'nextSlug'      => $nextSlug,
        ]);
    }
}
