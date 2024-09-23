<?php

namespace App\Http\Controllers;
use App\Models\Topic;
use Illuminate\Http\Request;
use App\Traits\Common;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use Common;
    public function index()
    {
        $topics = Topic::get();

        return view('topics', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_topic');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (isset($request->trending)) {
            $trend = true;
        } else {
            $trend = false;
        }

        if (isset($request->published)) {
            $pub = true;
        } else {
            $pub = false;
        }

        $data = [
            'topic_name' => $request->topic_name,
            'topic_category' => $request->topic_category,
            'topic_content' => $request->topic_content,
            'trending' => $trend,
            'published' => $pub,
            'image'=> $request->image,
        ];

        $data['image'] = $this->uploadFile($request->image, 'assets/images');
        Topic::create($data);
        return redirect()->route('topics.index');
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
        $topic = Topic::findOrFail($id);
        return view('edit_topic', compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'topic_name' => $request->topic_name,
            'topic_category' => $request->topic_category,
            'topic_content' => $request->topic_content,
            'published' => isset( $request->published),
            'trending' => isset( $request->trending),
            // 'image' => $request->image,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets/images');
        }

        Topic::where('id',$id)->update($data);
        return redirect()->route('topics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Topic::where('id', $id)->delete();
       
        return redirect()->route('topics.index');
    }

    public function detail(string $id)
    {
        $topic = Topic::findOrFail($id);
        return view('topic_details', compact('topic'));
    }

    public function getLatestTopics()
    {
        // Fetch the latest 2 published topics from the database
        $topics = Topic::where('published', 1)
                                   ->latest()
                                   ->take(2)
                                   ->get();
    
        return view('home_page', compact('topics'));
    }
}
