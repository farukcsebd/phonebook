<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $users=$user->id;

        $contacts= Contact::where('user_id', $users)->paginate(10);
        return view('contact.index',compact('contacts'));
    }
    public function create()
    {
        return view('contact.create');
    }
    public function store(Request $request)
    {
        

        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'mobile' => 'string|required|unique:contacts|max:15',
            'email' => 'max:50',
            'group' => 'max:50',
        ]);
        $request->user()->contacts()->create($validated);
        return redirect('contact');

    }
}
