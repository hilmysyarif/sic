<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Controllers\Controller;
use App\Charters as Charters;
use App\Category as Category;
use App\Lokasi as Lokasi;
use yajra\Datatables\Datatables;
use Slug as Slug;
use DB;
use Input;
use Image;


class ChartersController extends Controller
{

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function listsAll()
    {
        $produk = DB::table('charters')->whereCategories('5')->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.berths', 'charters.price', 'charters.image', 'charters.slug')->limit(3)->get();
        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        return view('frontend.master')->with(['produk' => $produk, 'news2' => $news2]);

    }

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function lists()
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();        
        $page = DB::table('categories')->whereid(9)->select('categories.name as name')->get();
        $news = DB::table('charters')->whereCategories('9')->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.beds', 'charters.bath','charters.sqft','charters.price', 'charters.image', 'charters.slug')->get();

        return view('frontend.charter.c-list.index')->with(['news' => $news, 'page' => $page, 'news2' => $news2]);

    }

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function luxury()
    {
        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();        
        $page = DB::table('categories')->whereid(3)->select('categories.name as name')->get();
        $news = DB::table('charters')->whereCategories('3')->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.beds', 'charters.image', 'charters.sqft','charters.price', 'charters.slug')->get();
        return view('frontend.charter.luxury-yacth.index')->with(['news' => $news, 'page' => $page, 'news2' => $news2]);

    }

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function luxurysingle($slug)
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $page = DB::table('categories')->whereid(3)->select('categories.name as name')->get();
        $news = DB::table('charters')->whereCategories('3')->whereSlug($slug)->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.beds', 'charters.image', 'charters.sqft', 'charters.descr', 'charters.price', 'charters.slug')->get();
        return view('frontend.charter.luxury-yacth.single')->with(['news' => $news, 'page' => $page, 'news2' => $news2]);

    }

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function wood()
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $page = DB::table('categories')->whereid(4)->select('categories.name as name')->get();
        $news = DB::table('charters')->whereCategories('4')->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.beds', 'charters.bath','charters.price','charters.sqft', 'charters.image','charters.descr', 'charters.slug')->get();

        return view('frontend.charter.motor-wood.index')->with(['news' => $news, 'page' => $page, 'news2' => $news2]);

    }


    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function woodsingle($slug)
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $page = DB::table('categories')->whereid(4)->select('categories.name as name')->get();
        $news = DB::table('charters')->whereCategories('4')->whereSlug($slug)->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.beds','charters.price', 'charters.bath','charters.sqft', 'charters.image','charters.descr', 'charters.slug')->get();

        return view('frontend.charter.motor-wood.single')->with(['news' => $news, 'page' => $page, 'news2' => $news2]);

    }

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function motor()
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $page = DB::table('categories')->whereid(5)->select('categories.name as name')->get();
        $news = DB::table('charters')->whereCategories('5')->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.berths', 'charters.price', 'charters.image','charters.descr', 'charters.slug')->get();

        return view('frontend.charter.motor-yacth.index')->with(['news' => $news, 'page' => $page, 'news2' => $news2]);

    }

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function motorsingle($slug)
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $page = DB::table('categories')->whereid(5)->select('categories.name as name')->limit(1)->get();
        $news = DB::table('charters')->whereCategories('5')->whereSlug($slug)->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.berths', 'charters.price', 'charters.image','charters.descr', 'charters.slug')->get();

        return view('frontend.charter.motor-yacth.single')->with(['news' => $news, 'page' => $page, 'news2' => $news2]);

    }

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function schoon()
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $page = DB::table('categories')->whereid(6)->select('categories.name as name')->get();
        $news = DB::table('charters')->whereCategories('6')->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.beds', 'charters.bath','charters.sqft', 'charters.price','charters.image','charters.descr', 'charters.slug')->get();

        return view('frontend.charter.wooden-schooner.index')->with(['news' => $news, 'page' => $page, 'news2' => $news2]);

    }

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function schoonsingle($slug)
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $page = DB::table('categories')->whereid(6)->select('categories.name as name')->get();
        $news = DB::table('charters')->whereCategories('6')->whereSlug($slug)->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.beds', 'charters.bath','charters.sqft', 'charters.price','charters.image', 'charters.descr','charters.slug')->get();

        return view('frontend.charter.wooden-schooner.single')->with(['news' => $news, 'page' => $page, 'news2' => $news2]);

    }

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function phinschoon()
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $page = DB::table('categories')->whereid(7)->select('categories.name as name')->get();
        $news = DB::table('charters')->whereCategories('7')->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.beds', 'charters.bath','charters.sqft','charters.price', 'charters.image','charters.descr', 'charters.slug')->get();

        return view('frontend.charter.phinisi-schooner.index')->with(['news' => $news, 'page' => $page, 'news2' => $news2]);

    }

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function phinschoonsingle($slug)
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $page = DB::table('categories')->whereid(7)->select('categories.name as name')->get();
        $news = DB::table('charters')->whereCategories('7')->whereSlug($slug)->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.beds', 'charters.bath','charters.sqft','charters.price', 'charters.image','charters.descr', 'charters.slug')->get();

        return view('frontend.charter.phinisi-schooner.single')->with(['news' => $news, 'page' => $page, 'news2' => $news2]);

    }

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function commercial()
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $page = DB::table('categories')->whereid(8)->select('categories.name as name')->get();
        $news = DB::table('charters')->whereCategories('8')->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.beds', 'charters.bath','charters.sqft', 'charters.price','charters.image','charters.descr', 'charters.slug')->get();

        return view('frontend.charter.commercial.index')->with(['news' => $news, 'page' => $page, 'news2' => $news2]);

    }

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function commercialsingle($slug)
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();        
        $page = DB::table('categories')->whereid(8)->select('categories.name as name')->get();
        $news = DB::table('charters')->whereCategories('8')->whereSlug($slug)->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.beds', 'charters.bath','charters.sqft', 'charters.price','charters.image','charters.descr', 'charters.slug')->get();

        return view('frontend.charter.commercial.single')->with(['news' => $news, 'page' => $page, 'news2' => $news2]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.charters.index');

    }

    public function indexCategory()
    {
        return view('backend.charters.category.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \DB::table('categories')->lists('name', 'id');
        $lokasi = \DB::table('lokasis')->lists('name', 'id');
        $yacth = \DB::table('categories')->lists('name', 'id');
        return view('backend.charters.create')->with(['categories' => $categories, 'lokasi' => $lokasi, 'yacth' => $yacth]);
    }

    public function createCategory()
    {
        return view('backend.charters.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $news2 = new Charters(array(
    $title = Input::get('name'),
    $beds = Input::get('beds'),
    $bath = Input::get('bath'),
    $beths = Input::get('beths'),
    $lokasi = Input::get('lokasi'),
    $descr = Input::get('descr'),
    $sqft = Input::get('sqft'),
    $yacth = Input::get('yacth'),
    $price = Input::get('price'),
    $image = Request::get('image'),
    ));

    if($image == '' || $title == '' || $category = ''){
            return \Redirect::route('charters')->with('message', 'You must fill required form');
    }else{

            $news2->image = $image;
            $news2->name = $title;
            $news2->beds = $beds;
            $news2->bath = $bath;
            $news2->berths = $beths;
            $news2->descr = $descr;
            $news2->lokasi = $lokasi;
            $news2->sqft = $sqft;
            $news2->categories = $yacth;
            $news2->price = $price;
            $news2->slug = Slug::convert($news2->title);


     $news2->save();
    return \Redirect::route('charters',
        array($news2->id));
    }
}

    public function storeCategory(Request $request)
    {

    $news2 = new Lokasi(array(
      'name' => Input::get('name')
    ));

     $news2->save();
    return \Redirect::route('charters.location',
        array($news2->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $news=Charters::find($id);
           $categories = \DB::table('categories')->lists('name', 'id');
            $lokasi = \DB::table('lokasis')->lists('name', 'id');
            $yacth = \DB::table('categories')->lists('name', 'id');
            return view('backend.charters.edit',compact('news'))->with(['yacth' => $yacth, 'lokasi' => $lokasi]);
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


           $news=Charters::find($id);
  $news2 = new Charters(array(
      $title = Input::get('name'),
    $beds = Input::get('beds'),
    $bath = Input::get('bath'),
    $beths = Input::get('beths'),
    $lokasi = Input::get('lokasi'),
    $sqft = Input::get('sqft'),
    $descr = Input::get('descr'),    
    $yacth = Input::get('yacth'),
    $price = Input::get('price'),
    $image = Input::get('image'),
    ));
    if($image == '' || $title == '' || $category = ''){
            return \Redirect::route('charters')->with('message', 'You must fill required form');
    }else{

            $news2->image = $image;
            $news2->name = $title;
            $news2->beds = $beds;
            $news2->bath = $bath;
            $news2->berths = $beths;
            $news2->descr = $descr;            
            $news2->lokasi = $lokasi;
            $news2->sqft = $sqft;
            $news2->categories = $yacth;
            $news2->price = $price;
            $news2->slug = Slug::convert($news2->title);


           $news->update();

            return \Redirect::route('charters', $news->id)->with('message', 'Charters successfully updated.');
        }

}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           Charters::find($id)->delete();
            return redirect('/admin/charters');
    }

    public function getDatatable()
    {


            $news = Charters::leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')
            ->leftJoin('categories', 'charters.categories', '=', 'categories.id')
            ->select(array('charters.id', 'charters.image', 'charters.name', 'lokasis.name as lokasi', 'categories.name as categories', 'charters.price', 'charters.headline'));

        return Datatables::of($news)
            ->addColumn('image', function ($news) {
                return '<img src="../'.$news->image.'"class="img-responsive" width="200" height="200"></img>';
            })
            ->addColumn('action', function ($news) {
                return '<a href="charters/edit/'.$news->id.'" class="btn btn-xs btn-primary">Edit</a> <a href="charters/delete/'.$news->id.'" class="btn btn-xs btn-danger">Delete</a>';
            })
            ->removeColumn('created_at', 'update_at')
            ->make(true);
    }

    public function getDatatableCategory()
    {


            $promo = DB::table('lokasis')
            ->select(['id', 'name']);

        return Datatables::of($promo)
            ->removeColumn('created_at', 'update_at')
            ->make(true);
    }
}
