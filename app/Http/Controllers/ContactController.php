<?php

namespace App\Http\Controllers;



namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;




class ContactController extends Controller
{



    public function create(){
        return view('index.create');
    }

    public function  store(){
    Contact::create($this->validateNewContact());
       return back()->with('success','New Contact Created!').redirect('/');

    }
public function index(){

    $contacts =  DB::table('contacts')->get();

    return view('index.index',[
        'contacts'=>$contacts,
        ]

    );
}
public function destroy (Contact $contact){

    $contact->delete();

    return back()->with('success', 'Contact Deleted Successfully!!');
}

//public function destroy(Contact $contact){
//    $contact->delete();
//    return back()->with('success', 'Post Deleted!');
//}
public function edit(Contact $contact){

//    $contact = DB::table('contacts')->where('id', $id)->first();


    return view('index.edit',[
            'contact'=>$contact,
        ]

    );
}

public function update( Contact $contact)
{

    $attributes = $this->ValidateContact($contact);

    $contact->update($attributes);
    return back()->with('success','Contact Successfully updated').redirect('/');

}


public function validateContact(?Contact $contact = null): array
{

    $contact ??= new Contact();

    return request()->validate([
        'name'=>'required|max:255',
        'email'=>'required|email',
        'phone_number'=>'required|numeric|digits:10',
        'address'=>'required'
    ]);
}

    public function validateNewContact(?Contact $contact = null): array
    {

        $contact ??= new Contact();

        return request()->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:contacts,email',
            'phone_number'=>'required|numeric|digits:10|unique:contacts,phone_number',
            'address'=>'required'
        ]);
    }


}
