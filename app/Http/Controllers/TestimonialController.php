<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use App\Traits\Common;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use Common;
    public function index()
    {
        $testimonials = Testimonial::get();

        return view('testimonials', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_testimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (isset($request->published)) {
            $pub = true;
        } else {
            $pub = false;
        }

        $data = [
            'name' => $request->name,
            'content' => $request->content,
            'published' => $pub,
            'image'=> $request->image,
        ];

        $data['image'] = $this->uploadFile($request->image, '../../../public/assets/images');
        Testimonial::create($data);
        return redirect()->route('testimonials.index');
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
        $testimonial = Testimonial::findOrFail($id);
        return view('edit_testimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'name' => $request->name,
            'content' => $request->content,
            'published' => isset( $request->published),
            'image' => $request->image,
        ];

        Testimonial::where('id',$id)->update($data);
        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->delete();
       
        return redirect()->route('testimonials.index');
    }
}
