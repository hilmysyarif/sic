<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Controllers\Controller;
use App\User as User;
use yajra\Datatables\Datatables;
use DB;
use Input;
use Image;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.users.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $input = new User(array(
    $admin_name = Input::get('name'),
    $admin_email = Input::get('email'),
    $password = Input::get('password'),
    $image = Input::file('image'),
    ));

        if($image == ''){
                return \Redirect::route('users')->with('message', 'You must fill required form');
        }else{
                $image = Input::file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $path = public_path('/img/'. $imageName);
                Image::make($image->getRealPath())->resize(72, 72)->save($path);

                $input->name = $admin_name;
                $input->email = $admin_email;
                $input->password = bcrypt($password);
                $input->image = 'img/'. $imageName;

               $input->save();

        return \Redirect::route('users',
            array($input->id));
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
           $users = User::find($id);
            return view('backend.users.edit',compact('users'));
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

    $users = User::find($id);
    $input = new User(array(
    $admin_name = Input::get('name'),
    $admin_email = Input::get('email'),
    $password = Input::get('password'),
    $image = Input::file('image'),
    ));
        if($image == ''){
                return \Redirect::route('users')->with('message', 'You must fill required form');
        }else{
                $image = Input::file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $path = public_path('/img/'. $imageName);
                Image::make($image->getRealPath())->resize(72, 72)->save($path);


            $users->name = $admin_name;
            $users->email = $admin_email;
            $users->password = $password;
            $users->image = 'img/'. $imageName;

           $users->update();

            return \Redirect::route('users', $users->id)->with('message', 'Users successfully updated.');
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
           User::find($id)->delete();
            return redirect('/admin/users');
    }

    public function getDatatable()
    {


            $users = User::select(array('users.id', '.users.name', 'users.email', 'users.image', 'users.created_at'));

        return Datatables::of($users)
            ->addColumn('image', function ($users) {
                return '<img src="../'.$users->image.'"class="img-responsive" width="50" height="50"></img>';
            })
            ->addColumn('action', function ($users) {
                return '<a href="users/edit/'.$users->id.'" class="btn btn-xs btn-primary">Edit</a>
                            <a href="users/delete/'.$users->id.'" class="btn btn-xs btn-danger">Delete</a>';
            })
            ->removeColumn('update_at')
            ->make(true);
    }
}
