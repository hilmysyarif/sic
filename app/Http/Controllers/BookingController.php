<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Controllers\Controller;
use App\Booking as Booking;
use App\Category as Category;
use App\Charters as Charters;
use App\Customers as Customers;
use yajra\Datatables\Datatables;
use Slug as Slug;
use DB;
use Input;
use Image;


class BookingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inquiry($slug)
    {
        $tourname = Input::get('tujuan');
        $tourdate = Input::get('date_from') + ' - ' + Input::get('date_to');        
            $tour = \DB::table('charters')->where('slug', '=', $slug)->first();


        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();                
        return view('frontend.inquiry.index', ['tour' => $tour, 'news2' => $news2 ]);


    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inquirysearch()
    {
        //$tour = DB::table('charters')->leftJoin('lokasis', 'charters.lokasi', '=', 'lokasis.id')->select('charters.name', 'lokasis.name as lokasi', 'charters.berths', 'charters.price', 'charters.image', 'charters.slug')->limit(10)->get();      
        $tour = Input::all();
        $tourname = Input::get('tujuan');
        $tourdate = Input::get('date_from');
        $tourdateto = Input::get('date_to'); 
        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();                
        return view('frontend.inquiry.search', ['tourdate' => $tourdate, 'tourname' => $tourname, 'tourdateto' => $tourdateto, 'news2' => $news2 ]);


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inquiry_store($slug)
    {
        $tour = Charters::where('slug', '=', $slug)->first();
    $customers = Customers::first();    
        $booking = Booking::first();
        $customers = new Customers(array(
    $email = \Input::get('email'),
    $phone = \Input::get('phone'),
    $country = \Input::get('country'),
            ));
    $bookings = new Booking(array(
    $cust_name = \Input::get('name'),
    $message = \Input::get('message'),
    ));

            $bookings->cust_name = $cust_name;
            $bookings->tour_name = $tour->name;
            $customers->cust_name = $cust_name;
            $customers->email = $email;
            $customers->phone = $phone;
            $customers->country = $country;
            //$bookings->tour_date = $tour_date;
            $bookings->price = $tour->price;
            //$bookings->status = $status;

           $bookings->save();
           $customers->save();

        return \Redirect::back()->with('message', 'Your inquiry has been successfully send to us.', $tour);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inquiryindex($slug)
    {

                $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();
                                $tour = \DB::table('charters')->where('slug', '=', $slug)->first();

        return view('frontend.inquiry.index',['tour' => $tour, 'tourname' => $tourname, 'news2' => $news2 ]);


    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inquiry_storeatas()
    {

        $tour = Input::all();
        $tourname = Input::get('tourname');
        $tourdate = Input::get('tourdate');
        $tourdateto = Input::get('tourdateto');
        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();              
        $customers = new Customers(array(
    $cust_name = Input::get('name'),            
    $email = Input::get('email'),
    $phone = Input::get('phone'),
    $country = Input::get('country'),
            ));
    $bookings = new Booking(array(
    $cust_name = Input::get('name'),
    $message = Input::get('message'),
    ));

            $bookings->cust_name = $cust_name;
            $bookings->tour_name = $tourname;
            $customers->cust_name = $cust_name;
            $customers->email = $email;
            $customers->phone = $phone;
            $customers->country = $country;
            $bookings->tour_date = $tourdateto;
            //$bookings->price = $tourprice->price;
            //$bookings->status = $status;

           $bookings->save();
           $customers->save();

        return \Redirect::back()->with('message', 'Your inquiry has been successfully send to us.', $tourname);

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.booking.index');

    }

/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $booking = \DB::table('bookings')->where('bookings.id', '=', $id)->leftJoin('charters', 'bookings.tour_name', '=', 'charters.name')->leftJoin('customers', 'bookings.cust_name', '=', 'customers.cust_name')->select('bookings.id as id', 'charters.name as tour_name', 'bookings.tour_date', 'bookings.price', 'bookings.status','customers.cust_name as cust_name', 'customers.email as email', 'customers.phone as phone', 'customers.country as country')->first();
           $lokasi = \DB::table('charters')->leftJoin('bookings', 'charters.name', '=', 'bookings.tour_name')->get();
           $customers = \DB::table('customers')->lists('cust_name', 'email', 'phone', 'country' , 'id');
            return view('backend.booking.edit',compact('booking'))->with(['lokasi' => $lokasi, 'customers' => $customers]);
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

    $bookings = Booking::find($id);
    $input = new Booking(array(
    $cust_name = Input::get('cust_name'),
    $tour_name = Input::get('tour_name'),
    $tour_date = Input::get('tour_date'),
    $price = Input::get('price'),
    $status = Input::get('status'),
    ));
        $customers = new Customers(array(
    $cust_name = Input::get('name'),            
    $email = Input::get('email'),
    $phone = Input::get('phone'),
    $country = Input::get('country'),
            ));




            $input->cust_name = $cust_name;
            $input->tour_name = $tour_name;
            $input->tour_date = $tour_date;
            $customers->cust_name = $cust_name;
            $customers->email = $email;
            $customers->phone = $phone;
            $customers->country = $country;
            $input->price = $price;
            $input->status = $status;

           $bookings->update();

            return \Redirect::route('booking', $bookings->id)->with('message', 'Booking successfully updated.');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           Booking::find($id)->delete();
            return redirect('/admin/booking');
    }

    public function getDatatable()
    {


            $booking = Booking::select(array('bookings.id', 'bookings.cust_name', 'bookings.tour_name', 'bookings.tour_date', 'bookings.price', 'bookings.created_at'));

        return Datatables::of($booking)
            ->addColumn('action', function ($booking) {
                return '<a href="booking/edit/'.$booking->id.'" class="btn btn-xs btn-primary">Edit</a> <a href="booking/delete/'.$booking->id.'" class="btn btn-xs btn-danger">Delete</a>';
            })
            ->removeColumn('update_at')
            ->make(true);
    }
}
