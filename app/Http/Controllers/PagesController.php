<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\State;
use App\Reason;
use App\Customer;
use App\User;
use Illuminate\Support\Facades\Session;
use App\Notifications\NewCustomerAdmin;
use Notification;

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
        $this->validate(
            $request, 
            [
                'first_name'        => 'required',
                'last_name'         => 'required',
                'business_name'     => 'required|unique:customers,business_name',
                'business_address'  => 'required',
                'city'              => 'required',
                'state_id'          => 'required',
                'zip_code'          => 'required',
                'phone'             => 'required|unique:customers,phone',
                'email'             => 'required|unique:customers,email',
                'loan_amount'       => 'numeric',
                'reason_id'         => 'required'
            ],
            [
                'unique'    => 'Your :attribute indicates that you may have contacted us. Please call so we can better assist you.'    
            ]
        );
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
        $customer = Customer::create($data);
        if ( ! $customer) {
            Session::flash('danger', 'Your application was not saved. Please fill in the form again. Thank you.');
            return redirect()->back();
        }
        // $admin = User::isSuperManager();
        // $admin->notify(new NewCustomerAdmin($customer));
        Notification::route('mail', 'mkha813@yahoo.com')->notify(new NewCustomerAdmin($customer));
        Session::flash('success', 'We have received your requrest and will get back with you shortly. Thank you for contacting Capital Direct!');
        return redirect()->back();
    }
    
    /**
     * Performs search function on blog page
     **/
    public function searchBlog(Request $request) 
    {
        $search_phrase = $request->get('search_phrase');
        $posts = [];
        if ($search_phrase) {
            $posts = Post::where(function($query) use($search_phrase) {
                $words = array_filter(explode(' ', $search_phrase));
                foreach ($words as $index => $word) {
                    $word = '%' . $word . '%';
                    $query = $query->where('title', 'LIKE', $word)->orWhere('body', 'LIKE', $word);
                }
            })->paginate(3);
        }
        return view('pages.blog', compact('posts'));
    }
}
