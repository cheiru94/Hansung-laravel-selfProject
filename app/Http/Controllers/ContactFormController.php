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
        // dd($contact->type);
       
        // 4. type
        switch ($contact->type ) {
          case 'house':
            $type = '주택';
            break;
          case 'villa':
            $type = '빌라';
            break;
          case 'apartment':
            $type = '아파트';
            break;
          case 'shop':
            $type = '상가';
            break;
          case 'supervision':
            $type = '감리';
            break;
        }
        // 5. region
        switch ($contact->region ) {
          case 0:
            $region = '남구';
            break;
          case 1:
            $region = '중구';
            break;
          case 2:
            $region = '북구';
            break;
          case 3:
            $region = '동구';
            break;
          case 4:
            $region = '울주군';
            break;
          case 5:
            $region = '그 외 지역';
            break;
        }

        return view('contacts.show',compact('contact','type','region'));
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
