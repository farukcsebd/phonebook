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
        return view('contact.index', compact('contacts'));
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
    public function search(Request $request)
    {
        // $user = Auth::user();

        // // Retrieve the search query from the request
        // $search = $request->input('search');

        // // Query the contacts based on the search query (matching name or phone number)
        // $contacts = $user->contacts()
        //     ->where('mobile', 'LIKE', '%' . $search . '%')
        //     ->paginate(10)
        //     ->appends(['search' => $search]); // Append the search query to the pagination links
        // return view('contact.index', compact('contacts'));

        //     if ($request->search) {

        //         $searchContacts = Contact::where('mobile', 'LIKE', '%' . $request->search . '%')->latest()->paginate(10);
        //         dd($searchContacts);
        //         return view('contact.index', compact('searchContacts'));
        //     }
        //     else {
        //     echo "Hello";
        //     }
        // }
        $search = $_GET['search'];
        $user = Auth::user();
        $users = $user->id;

        // dd($search);

        if ($search == "") {

            return redirect('/contact')->with('massage', 'No data available');
        } else {
            $contacts = Contact::where('user_id', $users, 'and')->where('name', 'LIKE', '%' . $search . '%')->orWhere('mobile', 'LIKE', '%' . $search . '%')->orWhere('email', 'LIKE', '%' . $search . '%')->orWhere('group', 'LIKE', '%' . $search . '%')->paginate(10);
            return view('contact.index', compact('contacts'));
        }
    }
}