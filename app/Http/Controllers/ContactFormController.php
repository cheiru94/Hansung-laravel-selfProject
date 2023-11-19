<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $contacts = ContactForm::select('id','name','title','region','created_at')->get();

        // 폴더명.파일명
        return view('contacts.index',compact('contacts')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         // 폴더명.파일명
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage. 
     */
    public function store(Request $request) // store 메소드에는 Request 객체가 들어온다
    {
        // dd($request);
        ContactForm::create([
          'title' => $request->title,
          'name' => $request->name,
          'email' => $request->email,
          'type' => $request->type,
          'region' => $request->region,
          'contact' => $request->contact,
      ]);

        return to_route('contacts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $contact = ContactForm::find($id);
        return view('contacts.show',compact('contact'));
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
        //
    }
}
