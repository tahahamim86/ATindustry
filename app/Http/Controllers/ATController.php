<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$contacts=Contact::all();
return redirect()->view('pages.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 $request->validate([
    'name'=>'required',
    'mail'=>'required',
    'num'=>'required',
    'msg'=>'required'
 ]);
 $contacts=Contact::create($request->all());
 return redirect()->view('pages.datacenter')->with('succes','saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('pages.create',compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect()->route('pages.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contacts)
    {
        $request->validate([
            'name'=>'required',
            'mail'=>'required',
            'num'=>'required',
            'msg'=>'required'
         ]);
         $contacts->update($request->all());
         return redirect()->route('pages.index')->with('succes','updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Contact $contacts)
    {
       $contacts->delete();
       return redirect()->route('pages.index')->with('succes','updated succesfully');
    }
}
