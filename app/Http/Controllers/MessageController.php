<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Testimonial;
use App\Models\Topic;
use App\Traits\Common;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


//use Illuminate\Mail\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use Common;
    public function index()
    {
        $messages = Message::get();

        return view('messages', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());


        $data = Validator::make(
            $request->all(),
            [
                'sender' => 'required|string|max:255',
                'email' => 'required|email',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
           ]
        );
        
        if ($data->fails()) {
            return response()->json(['message' => $data->messages()], 422);
        }



        // $data = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email',
        //     'subject' => 'required|string|max:255',
        //     'message' => 'required|string',
        // ]);
        // dd($data);
        // Store message in the database
        $message = Message::create($request->all());

        // Send email
        // Mail::send([], [], function ($mail) use ($request) {
        //     $mail->to('maysaa.ahmed94@gmail.com') 
        //         ->subject($request->subject)
        //         ->setBody('From: ' . $request->sender . '<br>Email: ' . $request->email . '<br>Message: ' . $request->message, 'text/html');
        // });

        return redirect()->back()->with('success', 'Your message has been sent and saved.');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Message::where('id', $id)->delete();
       
        return redirect()->route('messages.index');
    }

    public function detail(string $id)
    {
        $message = Message::findOrFail($id);
        return view('message_details', compact('message'));
    }

    public function viewContact()
    {
        $contacts = Message::get();

        return view('contact', compact('contacts'));
    }
    public function viewHome()
    {
        $home = Message::get();
        // $topics = Message::latest()->take(2)->get();
        // Fetch the latest 3 published testimonials from the database
        $testimonials = Testimonial::where('published', 1)
        ->latest()
        ->take(3)
        ->get();

        $topics = Topic::where('published', 1)
                                   ->latest()
                                   ->take(2)
                                   ->get();

        return view('home_page', compact('home','testimonials','topics'));
    }
    //topic listing page
    public function viewTopicList()
    {
        $list = Message::get();
        $topics = Topic::where('published', true)->latest()->take(3)->get();
        $topics2 = Topic::where('published', true)->latest()->take(2)->get();
        return view('topics-listing', compact('list', 'topics', 'topics2'));
    }
    //our clients page
    public function viewOurClients()
    {
        $client = Message::get();
        $testimonials = Testimonial::where('published', true)->latest()->get();

        return view('testimonials_public', compact('client', 'testimonials'));
    }

    //view Topic Detail page
    public function viewTopicDetail($id)
    {
        $detail = Message::get();
        $topic2 = Topic::findOrFail($id);
        return view('topics-detail_public', compact('detail', 'topic2'));
    }
}
