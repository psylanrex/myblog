<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::with(['state', 'reason'])->orderBy('created_at', 'desc')->paginate(10);
        return view('manage.customers.index', compact('customers'));
    }
}
