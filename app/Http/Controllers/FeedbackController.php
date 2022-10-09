<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::where('allow', '=', 1)->get();
        return view('feedbacks', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'email'   => 'required|string|email|unique:feedback',
            'fName'   => 'string|required',
            'lName' => 'string|required',
            'phone' => 'required|string',
            'gender' => 'required|numeric',
            'subject' => 'required|string',
            'comment' => 'required|string',
            'satisfaction' => 'required|numeric',
        ]);
        if ($request['allow'] != null) {
            $formFields['allow'] = 1;
        } else {
            $formFields['allow'] = 0;
        }
        $review = feedback::create($formFields);
        return back()->with('info', 'Feedback has been added successfully, thanks.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(feedback $feedback)
    {
        //
    }
}
