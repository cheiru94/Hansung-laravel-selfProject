<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Services\CheckFormService;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactFormController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    // 값 들어있는지 확인
    if ($request->topic) {
      // dd($request->topic);
    }
    $topic = $request->topic; // 입력 받은 키워드 
    $search = $request->search; // 입력 받은 키워드 
    // $query = ContactForm::search($search);
    $query = ContactForm::search([$topic, $search]);


    /* 🟡 페이지 네이션 하기 전 */
    // $contacts = ContactForm::select('id','name','title','region','created_at')->get();

    /* 🟢 페이지 네이션 처리 */
    $contacts = $query->select('id', 'name', 'title', 'region', 'created_at')
      ->orderByDesc('id')
      ->paginate(10);

    // 폴더명.파일명
    return view('contacts.index', compact('contacts', 'topic', 'search'));
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
  public function store(StoreContactRequest $request) // store 메소드에는 Request 객체가 들어온다
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

    // 4. type -> App/Services/CheckFormService
    $type = CheckFormService::checkType($contact);

    // 5. region -> App/Services/CheckFormService
    $region = CheckFormService::checkRegion($contact);


    return view('contacts.show', compact('contact', 'type', 'region'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //

    $contact = ContactForm::find($id);
    // dd($contact);
    return view('contacts.edit', compact('contact'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateContactRequest $request, string $id)
  {
    // 수정
    $contact = ContactForm::find($id);
    $contact->title = $request->title;
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->type = $request->type;
    $contact->region = $request->region;
    $contact->contact = $request->contact;
    $contact->save();

    return to_route('contacts.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
    $contact = ContactForm::find($id);
    $contact->delete();  // 데이터 ->delete();로 해당 레코드를 다 지우자

    return to_route('contacts.index');
  }
}
