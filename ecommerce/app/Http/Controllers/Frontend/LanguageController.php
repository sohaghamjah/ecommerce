<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * For bangla language
     *
     * @return void
     */
    public function bangla(){
        session() -> get('language');
        session() -> forget('language');
        Session::put('language', 'bangla');
        return redirect() -> back();
    }

    /**
     * For english language
     *
     * @return void
     */
    public function english(){
        session() -> get('language');
        session() -> forget('language');
        Session::put('language', 'english');
        return redirect() -> back();
    }
}
