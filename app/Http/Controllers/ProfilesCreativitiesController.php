<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Creativity;

class ProfilesCreativitiesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($profile)
    {
        $profile = auth()->user()->get();
        return view('profiles.creativities.create')->with(compact($profile));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'min:1','max:255'],
            'description' => ['required', 'min:1'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif'],
            'type' => ['required']
        ]);
        $image = request()->image;
        $filename = time().".".$image->extension();
        $image->storeAs('public/images', $filename);
        $creativity = Creativity::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $filename,
            'user_id' => auth()->id(),
            'rate' => 0,
            'type' => $request->type
        ]);

        return redirect(route('profiles.creativities.show', ['profile' => auth()->id(), 'creativity' => $creativity->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($profile, $creativity)
    {
        $creativity = Creativity::find($creativity);
        return view('profiles.creativities.show')->withCreativity($creativity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($profile, $creativity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $profile, $creativity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($profile, $creativity)
    {
        //
    }
}
