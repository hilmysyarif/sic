<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Controllers\Controller;
use App\Charters as Charters;
use App\Testimonial as Testimonial;
use yajra\Datatables\Datatables;
use Slug as Slug;
use DB;
use Input;
use Image;


class TestimonialController extends Controller
{

    /**
     * Passing data to view
     *
     * @return \Illuminate\Http\Response
     */
    public function lists()
    {
        $testimonial = DB::table('testimonials')->select('testimonials.cust_name as name', 'testimonials.testimonial', 'testimonials.image')->get();

        return view('frontend.master')->with(['testimonial' => $testimonial]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.testimonial.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = \DB::table('customers')->lists('cust_name', 'id', 'image');
        return view('backend.testimonial.create')->with(['customers' => $customers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $news2 = new Testimonial(array(
    $name = Input::get('name'),
    $testimonial = Input::get('testimonial'),
    $image = Input::file('image'),
    ));

    if($image == ''){
            return \Redirect::route('testimonial')->with('message', 'You must fill required form');
    }else{
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img/'. $imageName);
            Image::make($image->getRealPath())->save($path);

            $news2->image = 'img/'. $imageName;
            $news2->cust_name = $name;
            $news2->testimonial = $testimonial;


     $news2->save();
    return \Redirect::route('testimonial',
        array($news2->id));
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
           $news=Testimonial::find($id);
           $customers = \DB::table('customers')->lists('cust_name', 'id', 'image');
            return view('backend.testimonial.edit',compact('news'))->with(['customers' => $customers]);
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


           $news=Testimonial::find($id);
  $news2 = new Testimonial(array(
    $name = Input::get('name'),
    $testimonial = Input::get('testimonial'),
    $image = Input::file('image'),
    ));
    if($image == '' ){
            return \Redirect::route('testimonial')->with('message', 'You must fill required form');
    }else{
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img/'. $imageName);
            Image::make($image->getRealPath())->save($path);

            $news2->image = 'img/'. $imageName;
            $news2->cust_name = $name;
            $news2->testimonial = $testimonial;


           $news->update();

            return \Redirect::route('testimonial', $news->id)->with('message', 'Testimonial successfully updated.');
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
           Testimonial::find($id)->delete();
            return redirect('/admin/testimonial');
    }

    public function getDatatable()
    {


            $news = Testimonial::leftJoin('customers', 'testimonials.cust_name', '=', 'customers.id')
            ->select(array('testimonials.id', 'testimonials.image', 'testimonials.cust_name as name', 'testimonials.testimonial'));

        return Datatables::of($news)
            ->addColumn('image', function ($news) {
                return '<img src="../'.$news->image.'"class="img-responsive" width="50" height="50"></img>';
            })
            ->addColumn('action', function ($news) {
                return '<a href="testimonial/edit/'.$news->id.'" class="btn btn-xs btn-primary">Edit</a> <a href="testimonial/delete/'.$news->id.'" class="btn btn-xs btn-danger">Delete</a>';
            })
            ->removeColumn('created_at', 'update_at')
            ->make(true);
    }
}
