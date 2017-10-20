@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Customers Info</h1>
            </div>
        </div>
        <hr>
        <div class="box"> <!-- .box -->
            <table class="table is-striped is-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Business Name</th>
                    <th>Business Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Use Loan For</th>
                    <th>Date Created</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->first_name }} {{ $customer->last_name }}</td>
                        <td>{{ $customer->business_name }}</td>
                        <td>
                            {{ $customer->business_address }} 
                            <br/> 
                            {{ $customer->city }}, {{ $customer->state->code }} {{ $customer->zip_code }}
                        </td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->reason->name }}</td>
                        <td>{{ date("M-d-Y", strtotime($customer->created_at)) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div> <!-- End .box -->
        {{ $customers->links() }}
    </div>
@stop