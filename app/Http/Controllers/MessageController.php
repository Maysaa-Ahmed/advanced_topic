<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Traits\Common;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Store message in the database
        $message = Message::create($data);

        // Send email
        Mail::send([], [], function ($mail) use ($data) {
            $mail->to('maysaa.ahmed94@gmail.com') 
                ->subject($data['subject'])
                ->setBody('From: ' . $data['sender'] . '<br>Email: ' . $data['email'] . '<br>Message: ' . $data['message'], 'text/html');
        });

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

        return view('home_page', compact('home'));
    }
    public function viewTopicList()
    {
        $list = Message::get();

        return view('topics-listing', compact('list'));
    }
    public function viewOurClients()
    {
        $client = Message::get();

        return view('testimonials_public', compact('client'));
    }
}
