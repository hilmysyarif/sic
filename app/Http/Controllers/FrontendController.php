<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\News as News;
//use App\Promo as Promo;
use App\Charters as Charters;
use App\User as User;
use App\Http\Controllers\Controller;
use Input;
use Spatie\Newsletter\MailChimp\Newsletter;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $newscount = News::where('id','!=','null')->count();
        $chartercount = Charters::where('id','!=','null')->count();
        $userscount = User::where('id','!=','null')->count();
        $categories = \DB::table('categories')->lists('name', 'id');
        $publisher = \DB::table('users')->lists('name', 'id');
         return view('backend.home', compact('newscount', 'userscount', 'chartercount'))->with(['categories' => $categories, 'publisher' => $publisher]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe()
    {

        Newsletter::subscribe(Input::get('subs'));
        return view('frontend.master')->with('message', 'Thanks for subscribe to us!');

    }

    public function NewsCount()
    {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
