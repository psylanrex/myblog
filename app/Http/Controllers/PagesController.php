<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\State;
use App\Reason;
use App\Customer;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    
    public function blog()
    {
        $posts = Post::with('tags')->published()->orderBy('published_at', 'desc')->paginate(3);
        return view('pages.blog', compact('posts'));
    }
    
    public function getPost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('pages.post', compact('post'));
    }
    
    public function faq()
    {
        return view('pages.faq');
    }
    
    public function contact()
    {
        $states = State::all();
        $reasons = Reason::all();
        return view('pages.contact', compact('states', 'reasons'));
    }
    
    public function saveApplication(Request $request)
    {
        $this->validate($request, [
            'first_name'        => 'required',
            'last_name'         => 'required',
            'business_name'     => 'required',
            'business_address'  => 'required',
            'city'              => 'required',
            'state_id'          => 'required',
            'city'              => 'required',
            'zip_code'          => 'required',
            'reason_id'         => 'required'
        ]);
        $data = [
            'first_name'        => $request->get('first_name'),
            'last_name'         => $request->get('last_name'),
            'business_name'     => $request->get('business_name'),
            'business_address'  => $request->get('business_address'),
            'city'              => $request->get('city'),
            'state_id'          => $request->get('state_id'),
            'zip_code'          => $request->get('zip_code'),
            'phone'             => $request->get('phone'),
            'email'             => $request->get('email'),
            'loan_amount'       => $request->get('loan_amount'),
            'need_timeframe'    => $request->get('need_timeframe'),
            'reason_id'         => $request->get('reason_id')
        ];
        Customer::create($data);
        Session::flash('success', 'We have received your requrest and will get back with you shortly. Thank you for contacting Capital Direct!');
        return redirect()->back();
    }
}
