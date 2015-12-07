<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller
{
    protected $image;

    public function __construct(Image $imageRepository)
    {
        $this->image = $imageRepository;
    }

    public function getUpload()
    {
        return view('backend.charters.create');
    }

    public function postUpload()
    {
        $photo = Input::all();
        $response = $this->image->upload($photo);
        return $response;

    }

    public function deleteUpload()
    {

        $filename = Input::get('id');

        if(!$filename)
        {
            return 0;
        }

        $response = $this->image->delete( $filename );

        return $response;
    }
}