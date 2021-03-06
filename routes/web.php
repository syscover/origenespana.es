<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('mail/contact',                         '\App\Http\Controllers\WebController@sendForm')->name('web.main.contact');
Route::get('/',                                     '\App\Http\Controllers\WebController@home')->name('web.home');

Route::get('nosotros/origen-espana',                function () { return view('web.pages.about.about-general');           })->name('web.about.general');
Route::get('nosotros/objetivos',                    function () { return view('web.pages.about.about-objectives');        })->name('web.about.objectives');
Route::get('nosotros/organos-representacion',       function () { return view('web.pages.about.about-organisation');      })->name('web.about.organisation');

Route::get('sellos-dop-e-igp',                      function () { return view('web.pages.seals');                         })->name('web.seals');

Route::get('relaciones-institucionales',            function () { return view('web.pages.relations');                     })->name('web.relations');

Route::get('socios',                                '\App\Http\Controllers\PartnerController@partners')->name('web.partners.list');
Route::get('socios/{slug}',                         '\App\Http\Controllers\PartnerController@partner')->name('web.partners.item');

Route::get('noticias',                              '\App\Http\Controllers\WebController@news')->name('web.blog.list');
Route::get('noticias/{slug}',                       '\App\Http\Controllers\WebController@newsItem')->name('web.blog.post');

Route::get('contacto',                              function () { return view('web.pages.contact');                       })->name('web.contact');
Route::get('aviso-legal',                           function () { return view('web.pages.legal-advice');                  })->name('web.legalAdvice');
