<?php

namespace App\Http\Controllers;

use App\Models\reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Reviews::get();
        return view('reviews', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $formFields = $request->validate([
            'title'   => 'required|string',
            'author'   => 'string|required',
            'rating' => 'numeric|required',
            'email' => 'required|email',
            'summary' => 'sometimes',
        ]);
        $request->validate(['imagePath' => 'required|file|max:5120|mimes:png,jpg,jpeg']);
        if ($request->hasFile('imagePath')) {
            $file = request()->file('imagePath');
            $formFields['imagePath'] = '/reviewImages/' . $file->store('', ['disk' => 'reviewImages']);
        }
        $formFields['active'] = 0;
        $review = reviews::create($formFields);
        return back()->with('info', 'Review has been added successfully, please await for it to be activated.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function show(reviews $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function edit(reviews $reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reviews $reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(reviews $reviews)
    {
        //
    }
}
