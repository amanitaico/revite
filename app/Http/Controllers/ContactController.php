<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Pagination\Paginator;
use Illuminate\Validation\Rule;


class ContactController extends Controller
{

    public function create()
    {
        return view('contact.inquire');
    }


    public function index()
    {
        $contacts=Contact::paginate(8);
        return view('contact.index',compact('contacts'));
    }


    public function confirm(Request $request)
    {
        $inputs=$request->validate([        
        'company'=>'required|max:30',
        'name'=>'required|max:30',
        'tel'=>'required||string|min:8',
        'email'=>'required','email', 
        'birthdate'=>'required',
        'gender'=>'required',
        'profession'=>'required',
        'content'=>'required|max:255',
        'situation'=>'nullable'
        ]);

       

        return view('contact.confirm', [
            'inputs' => $inputs,
        ]);

    }


    public function store(Request $request)
    {
        $contact = new Contact;

        $contact->company = $request->company;
        $contact->name = $request->name;
        $contact->tel = $request->tel;
        $contact->email = $request->email;
        $contact->profession = $request->profession;
        $contact->birthdate = $request->birthdate;
        $contact->gender = $request->gender;
        $contact->content = $request->content;
        $contact->situation = $request->situation;
        $contact->save();

        return view('contact.complete');
    }

    public function edit(Contact $contact)
    { 
        return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $inputs=$request->validate([        
            
            'situation'=>'required'
        
            ]);
          
            $contact->situation=$inputs['situation'];
            

            $contact->save();
    
            return redirect()->route('contact.index')->with('message', '情報の更新やりよりました！');
            
    }   

        
}