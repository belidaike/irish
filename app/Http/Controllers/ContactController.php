<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

  
class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('home.contacts');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $user=user::all();
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11|numeric',
            'message' => 'required'
        ]);
  
        Contact::create($request->all());
  
        Alert::success('Sent Email Successfully', 'You have sent email Successfully');

        return redirect()->back();
                        //  ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}

