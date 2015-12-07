<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Controllers\Controller;
use App\Settings as Settings;
use App\Category as Category;
use yajra\Datatables\Datatables;
use Slug as Slug;
use DB;
use Input;
use Image;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Settings::all();
        return view('backend.settings.index',compact('bookings'));

    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    $input = new Settings(array(
    $title = Input::get('title'),
    $desc = Input::get('desc'),
    $url = Input::get('url'),
    $email = Input::get('email'),
    $keywords = Input::get('keywords'),
    $copyright = Input::get('copyright'),
    $facebook = Input::get('facebook'),
    $twitter = Input::get('twitter'),
    ));

            settings_set('title', Input::get('title'));
            settings_set('description', Input::get('desc'));
            settings_set('site_url', Input::get('url'));
            settings_set('email', Input::get('email'));
            settings_set('keywords', Input::get('keywords'));
            settings_set('copyright', Input::get('copyright'));
            settings_set('desc_about', Input::get('desc_about'));
            settings_set('company_profile', Input::get('compro'));
            settings_set('privacy', Input::get('privacy'));
            settings_set('terms', Input::get('terms'));
            settings_set('address', Input::get('address'));
            settings_set('facebook', Input::get('facebook'));
            settings_set('twitter', Input::get('twitter'));
            settings_set('phone', Input::get('phone'));
            settings_set('about', Input::get('about'));                              

            return redirect('/admin/settings')->with('message', 'Settings successfully updated.');
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatesite(Request $request)
    {
        
    $input = new Settings(array(
    $title2 = Input::get('desc_about'),
    $desc2 = Input::get('compro'),
    $url2 = Input::get('privacy'),
    $email2 = Input::get('terms'),
    ));

            settings_set('title', Input::get('title'));
            settings_set('description', Input::get('desc'));
            settings_set('site_url', Input::get('url'));
            settings_set('email', Input::get('email'));
            settings_set('keywords', Input::get('keywords'));
            settings_set('copyright', Input::get('copyright'));
            settings_set('desc_about', Input::get('desc_about'));
            settings_set('company_profile', Input::get('compro'));
            settings_set('privacy', Input::get('privacy'));
            settings_set('facebook', Input::get('facebook'));
            settings_set('twitter', Input::get('twitter'));            
            settings_set('terms', Input::get('terms'));
            settings_set('address', Input::get('address'));
            settings_set('phone', Input::get('phone'));    
            settings_set('about', Input::get('about')); 
            return redirect('/admin/settings')->with('message', 'Settings successfully updated.');

    }

}
