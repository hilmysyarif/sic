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
use Mailchimp;
use DB;
class FrontendController extends Controller
{

    protected $mailchimp;
    protected $listId = 'd9ae9ab162';        // Id of newsletter list


    public function __construct(Mailchimp $mailchimp) 
    {
        $this->mailchimp = $mailchimp;

    }

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
    public function about()
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $news = News::where('id','!=','null')->get();
        return view('frontend.about.about')->with(['news' => $news, 'news2' => $news2]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function compro()
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $news = News::where('id','!=','null')->get();
        return view('frontend.about.compro')->with(['news' => $news, 'news2' => $news2]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $news = News::where('id','!=','null')->get();
        return view('frontend.about.privacy')->with(['news' => $news, 'news2' => $news2]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $news = News::where('id','!=','null')->get();
        return view('frontend.about.terms')->with(['news' => $news, 'news2' => $news2]);

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe()
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();

        try {
            $this->mailchimp
                ->lists
                ->subscribe(
                    $this->listId, 
                    ['email' => Input::get('email')]
                );
        } catch (\Mailchimp_List_AlreadySubscribed $e) {
            return \Redirect::to('/')->with('message', 'Sorry, You already subscribe us');
        } catch (\Mailchimp_Error $e) {
             return \Redirect::to('/')->with('message', 'Thanks for subscribe to us!');
        }

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
