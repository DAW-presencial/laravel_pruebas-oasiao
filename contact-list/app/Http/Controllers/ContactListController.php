<?php

namespace App\Http\Controllers;

use App\Models\ContactList;
use Illuminate\Http\Request;

class ContactListController extends Controller
{
    public function index()
    {
        $contactList = ContactList::all()->toJson();
        $contactList = json_decode($contactList);

        //dd($contactList);//me muestra la vista index.blade.php y le paso por parametro $contactList

        return view('contactlist.index',['contactlist'=> $contactList]);
    }

    public function create()
    {
        return view('contactlist.create');
    }

    public function store(Request $request)
    {
        /*$contact = new ContactList();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->save();*/

        $contact = ContactList::create([ //you can do put make but you have to use save();
           'name' => $request->input('name'), //field => $request->input('name of the input')
            'phone'=> $request->input('phone')
        ]);
        return redirect('/contacts');

    }

    public function show($id)
    {
        $contact = ContactList::find($id);
        return view('contactlist.show')->with('contact',$contact);
        //'contact' --> lo q pasamos al blade || $contact --> variable anterior
    }

    public function edit($id)
    {
        $contact = ContactList::where('id',$id)->first();
        return view('contactlist.edit')->with('contact',$contact); //->with ::: we don't pass all the array, only one parameter
    }

    public function update(Request $request, $id)
    {
        $contact = ContactList::where('id',$id)
            ->update([
            'name' => $request->input('name'), //field => $request->input('name of the input')
            'phone'=> $request->input('phone')
        ]);

        return redirect('/contacts');
    }

    public function destroy($id)
    {
        $contact = ContactList::where('id',$id)->first();

        $contact->delete();

        return redirect('/contacts');
    }
}
