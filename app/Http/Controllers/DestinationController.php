<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Controllers\Controller;
use App\Destination as Destination;
use App\Category as Category;
use yajra\Datatables\Datatables;
use Slug as Slug;
use DB;
use Input;
use Image;


class DestinationController extends Controller
{

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();

        $destination = Destination::where('id','!=','null')->get();
        return view('frontend.destination.index')->with(['destination' => $destination, 'news2' => $news2]);

    }


    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function single($slug)
    {

        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
        $page = DB::table('categories')->whereid(3)->select('categories.name as name')->get();
        $news = DB::table('destinations')->whereSlug($slug)->leftJoin('schedules', 'destinations.sc_id', '=', 'schedules.id')->select('destinations.tujuan', 'destinations.description', 'destinations.price', 'destinations.price', 'destinations.floors', 'destinations.address', 'destinations.city', 'destinations.state', 'destinations.mls', 'destinations.quare_feet', 'destinations.square_feet', 'destinations.bed', 'destinations.bath', 'destinations.image', 'destinations.feature', 'schedules.tour_date as tour_date', 'schedules.trip_length as trip_length', 'schedules.route as route', 'schedules.dept_from as dept_from', 'schedules.arrive_at as arrive_at', 'schedules.space as space')->get();
        return view('frontend.destination.single')->with(['news' => $news, 'page' => $page, 'news2' => $news2]);


    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.destination.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.destination.create');
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

    $bookings = new Destination(array(
    $tujuan = Input::get('tujuan'),
   $s_content = Input::get('s_content'),
    $description = Input::get('content'),
    $address = Input::get('address'),
    $floors = Input::get('floors'),
    $city = Input::get('city'),
    $state = Input::get('state'),
    $mls = Input::get('mls'),
    $quare = Input::get('quare'),
    $square = Input::get('square'),
    $bed = Input::get('bed'),
    $bath = Input::get('bath'),
        $price = Input::get('price'),
    $feature = Input::get('feature'),
    $image = Input::file('image'),
    ));

    if($image == ''){
            return \Redirect::route('destination')->with('message', 'You must fill required form');
    }else{
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img/'. $imageName);
            Image::make($image->getRealPath())->save($path);

            $bookings->tujuan = $tujuan;
            $bookings->description = $description;
            $bookings->address = $address;
            $bookings->floors = $floors;
            $bookings->city = $city;
            $bookings->state = $state;
            $bookings->mls = $mls;
            $bookings->quare_feet = $quare;
            $bookings->square_feet = $square;
            $bookings->price = $price;
            $bookings->bed = $bed;
            $bookings->bath = $bath;
            $bookings->feature = $feature;
            $bookings->slug = Slug::convert($bookings->tujuan);
            $bookings->s_content = $s_content;
            $bookings->image = 'img/'. $imageName;


     $bookings->save();
    return \Redirect::route('destination',
        array($bookings->id));
    }
}


/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $booking = Destination::find($id);
           $schedule = \DB::table('schedules')->lists('tour_date', 'id', 'trip_length', 'route','dept_from', 'arrive_at', 'space');
            return view('backend.destination.edit',compact('booking'))->with(['schedule' => $schedule]);
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

    $bookings = Destination::find($id);
    $input = new Destination(array(
    $tujuan = Input::get('tujuan'),
   $s_content = Input::get('s_content'),
    $description = Input::get('content'),
    $address = Input::get('address'),
    $floors = Input::get('floors'),
    $city = Input::get('city'),
    $state = Input::get('state'),
    $mls = Input::get('mls'),
    $quare = Input::get('quare'),
    $square = Input::get('square'),
    $price = Input::get('price'),
    $bed = Input::get('bed'),
    $bath = Input::get('bath'),
    $feature = Input::get('feature'),
    $image = Input::file('image'),
    ));

    if($image == ''){
            return \Redirect::route('destination')->with('message', 'You must fill required form');
    }else{
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img/'. $imageName);
            Image::make($image->getRealPath())->save($path);

            $bookings->tujuan = $tujuan;
            $bookings->description = $description;
            $bookings->address = $address;
            $bookings->floors = $floors;
            $bookings->city = $city;
            $bookings->state = $state;
            $bookings->mls = $mls;
            $bookings->quare_feet = $quare;
            $bookings->square_feet = $square;
            $bookings->bed = $bed;
            $bookings->price = $price;
            $bookings->bath = $bath;
            $bookings->feature = $feature;
            $bookings->slug = Slug::convert($bookings->tujuan);
            $bookings->s_content = $s_content;
            $bookings->image = 'img/'. $imageName;


           $bookings->update();

            return \Redirect::route('destination', $bookings->slug)->with('message', 'Destination successfully updated.');
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
           Destination::find($id)->delete();
            return redirect('/admin/destination');
    }

    public function getDatatable()
    {


            $booking = Destination::select(array('id', 'image', 'tujuan'));

        return Datatables::of($booking)
            ->addColumn('image', function ($booking) {
                return '<img src="../'.$booking->image.'"class="img-responsive" width="50" height="50"></img>';
            })
            ->addColumn('action', function ($booking) {
                return '<a href="destination/edit/'.$booking->id.'" class="btn btn-xs btn-primary">Edit</a> <a href="destination/delete/'.$booking->id.'" class="btn btn-xs btn-danger">Delete</a>';
            })
            ->removeColumn('update_at')
            ->make(true);
    }
}
