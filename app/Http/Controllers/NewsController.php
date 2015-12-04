<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Controllers\Controller;
use App\News as News;
use App\NewsCategory as NewsCategory;
use yajra\Datatables\Datatables;
use Slug as Slug;
use DB;
use Input;
use Image;
use Newsletter;
use Commentable;
use App\Charters as Charters;
use Lanz\Commentable\Comment as Comment;


class NewsController extends Controller
{



    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $news = News::where('id','!=','null')->get();
        return view('frontend.news.index')->with(['news' => $news, 'news2' => $news2]);

    }

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function showRecent()
    {


        $tourname = Input::get('tujuan');
        $tourdate = Input::get('date_from') + ' - ' + Input::get('date_to');

        $produk = DB::table('charters')->whereCategories('5')->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.berths', 'charters.price', 'charters.image', 'charters.slug')->limit(3)->get();
        $produk2 = DB::table('charters')->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.berths', 'charters.price', 'charters.image', 'charters.slug')->limit(1)->get();
        $testimonial = DB::table('testimonials')->select('testimonials.cust_name as name', 'testimonials.testimonial', 'testimonials.image')->get();
        $news = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        return view('frontend.master')->with(['produk2' => $produk2, 'news' => $news,'news2' => $news2, 'testimonial' => $testimonial, 'produk' => $produk, 'tourname' => $tourname, 'tourdate' => $tourdate]);

    }

    /**
     * Passing data to single view
     *
     * @return \Illuminate\Http\Response
     */
    public function showSingle($slug)
    {

        $disqus = new \Disqus('FL6aL6qXJBlLskGvLbfwgj4eyJmApsi7YOvwHn1Poi6itLKZvPGbuBkGRDgv01tR');

        // to turn off SSL
        $disqus->setSecure(false);

        // example API call
        $comments = $disqus->forums('listPosts', 'spiceislandcharter');

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $news = News::where('slug','=', $slug)->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news.category', 'news.s_content', 'news.content', 'users.name as publisher', 'news.image', 'news.created_at')->get();
        

        return view('frontend.news.single')->with(['news' => $news, 'news2' => $news2, 'comments' => $comments]);

    
    }


    public function comment($slug) {


        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $news = News::where('slug','=', $slug)->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news.category', 'news.s_content', 'news.content', 'users.name as publisher', 'news.image', 'news.created_at')->get();
        

    $com_id = News::first();
    $comment = new Comment;
        $comment->body = \Input::get('comment');
        $comment->poster = \Input::get('author');
        $comment->commentable_id = $com_id->id;


        $com_id->comments()->save($comment);

    return \Redirect::back()->with(['news' => $news, 'news2' => $news2]);    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.news.index');

    }

    public function indexCategory()
    {
        //show all
        //$news=News::all();
        return view('backend.news.category.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \DB::table('news_categories')->lists('name', 'id');
        $publisher = \DB::table('users')->lists('name', 'id');
        return view('backend.news.create')->with(['categories' => $categories, 'publisher' => $publisher]);
    }

    public function createCategory()
    {
        return view('backend.news.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           //$news2=Request::all();
           //News::create($news2);
           //return redirect('/admin/news');
           //


    $news2 = new News(array(
    $title = Input::get('name'),
    $category = Input::get('category'),
    $content = Input::get('content'),
    $s_content = Input::get('s_content'),
    $publisher = Input::get('publisher'),
    $image = Input::file('image'),
    ));

    if($image == '' || $title == '' || $category = '' || $content == '' || $publisher == ''){
            return \Redirect::route('news')->with('message', 'You must fill required form');
    }else{
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img/'. $imageName);
            Image::make($image->getRealPath())->save($path);

            $news2->image = 'img/'. $imageName;
            $news2->title = $title;
            $news2->category = $category;
            $news2->content = $content;
            $news2->publisher = $publisher;
            $news2->slug = Slug::convert($news2->title);
            $news2->s_content = $s_content;


     $news2->save();
    return \Redirect::route('news',
        array($news2->id));
    }
}

    public function storeCategory(Request $request)
    {
           //$news2=Request::all();
           //News::create($news2);
           //return redirect('/admin/news');
           //

    $news2 = new NewsCategory(array(
      'name' => Input::get('name')
    ));

     $news2->save();
    return \Redirect::route('news.category',
        array($news2->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $news=News::find($id);
            return view('backend.news.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $news=News::find($id);
           $categories = \DB::table('news_categories')->lists('name', 'id');
           $publisher = \DB::table('users')->lists('name', 'id');
            return view('backend.news.edit',compact('news'))->with(['categories' => $categories, 'publisher' => $publisher]);
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
           $news=News::find($id);
    $input = new News(array(
    $title = Input::get('title'),
    $category = Input::get('category'),
    $content = Input::get('content'),
    $s_content = Input::get('s_content'),
    $publisher = Input::get('publisher'),
    $image = Input::file('file'),
    ));

    if($image == '' || $title == '' || $category = '' || $content == '' || $publisher == ''){
            return \Redirect::route('news')->with('message', 'You must fill required form');
    }else{
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img/'. $imageName);
            Image::make($image->getRealPath())->save($path);

            $input->image = 'img/'. $imageName;
            $input->title = $title;
            $input->category = $category;
            $input->content = $content;
            $input->s_content = $s_content;
            $input->publisher = $publisher;

           $news->update();

            return \Redirect::route('news',
             array($input->id))->with('message', 'News successfully updated.');
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
           News::find($id)->delete();
            return redirect('/admin/news');
    }

    public function getDatatable()
    {


            $news = News::leftJoin('news_categories', 'news.category', '=', 'news_categories.id')
            ->leftJoin('users', 'news.publisher', '=', 'users.id')
            ->select(array('news.id', 'news.title', 'news_categories.name as categories', 'news.s_content', 'users.name as publisher','news.image'));

        return Datatables::of($news)
            ->addColumn('image', function ($news) {
                return '<img src="../'.$news->image.'"class="img-responsive" width="200" height="200"></img>';
            })
            ->addColumn('action', function ($news) {
                return '<a href="news/edit/'.$news->id.'" class="btn btn-xs btn-primary">Edit</a> <a href="news/delete/'.$news->id.'" class="btn btn-xs btn-danger">Delete</a>';
            })
            ->removeColumn('created_at', 'update_at')
            ->make(true);
    }

    public function getDatatableCategory()
    {


            $promo = DB::table('news_categories')
            ->select(['id', 'name']);

        return Datatables::of($promo)
            ->removeColumn('created_at', 'update_at')
            ->make(true);
    }
}
