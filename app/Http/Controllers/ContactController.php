<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Events\ContactFormValid;
use Input;
use Validator;
use Mail;
use Redirect;
use DB;
use Mapper;

class ContactController extends Controller {

    public function getIndex()
    {
        $news2 = DB::table('news')->leftJoin('users', 'news.publisher', '=', 'users.id')->leftJoin('news_categories', 'news.category', '=', 'news_categories.id')->select('news.title', 'news.slug', 'news_categories.name as category', 'news.s_content', 'users.name as publisher', 'news.image', 'news.created_at', 'users.image as image2')->get();        
        Mapper::map(-6.232045, 106.83182);
        return view('frontend.contact.index',compact('news2', 'map'));
    }

    public function postIndex(){

        //Get all the data and store it inside Store Variable
        $data = Input::all();

        //Validation rules
        $rules = array (
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:5'
        );

        //Validate data
        $validator = Validator::make ($data, $rules);

        //If everything is correct than run passes.
        if ($validator ->fails()) {


            return Redirect::route('contact')
             ->with('error', 'Feedback must contain more than 5 characters. Try Again.');

            //return View::make('contact');
         }else{
   //return contact form with errors
                $name = Input::get('name');
                $email = Input::get('email');
                $phone = Input::get('phone');
                $subject = Input::get('subject');
                $messages = Input::get('message');

                $data = array (
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'subject' => $subject,
                    'messages' => $messages
                );                
    
           Mail::send('frontend.contact.contact', $data, function($message) use ($data)
            {



                $message->from('postmaster@sandbox13034b6f6e54467692ea98652f27e85d.mailgun.org', 'Spice Island Charter');
                //$message->from('feedback@gmail.com', 'feedback contact form');
    //email 'To' field: cahnge this to emails that you want to be notified.
                $message->to(settings('email'), 'Spice Island Charter')->subject('Inquiry');

            });
            // Redirect to page
   return Redirect::route('contact')
    ->with('message', 'Your message has been sent. Thank You!');

         }
     }
}