@extends('layouts.main')

@section('content')
    <div class="container-fluid contact-wrapper">
        <section class="contact-title">
            <div class="title-container">
                <h2 class="title">Contact Us</h2>
            </div>
        </section>
        <section class="box map">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title">Map</div>
                </div>
                <div class="card-content"></div>
            </div>
        </section>
        <section class="contact-container">
            <div class="columns">
                <div class="column"></div>
                <div class="column is-three-quarters ">
                    <div class="columns">   
                        <div class="column is-one-third" id="contact-info">
                            <div class="columns">
                                <div class="column">
                                    <div class="contact-box">
                                        <div class="icon-box">
                                            <i class="fa fa-4x fa-phone" aria-hidden="true"></i>
                                        </div>
                                        <div class="contact-inner">
                                            <h4 class="is-4">Phone</h4>
                                            <p>855-267-LOAN(5626)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <div class="contact-box">
                                        <div class="icon-box">
                                            <i class="fa fa-4x fa-envelope-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="contact-inner">
                                            <h4 class="is-4">Email</h4>
                                            <p>info@capitaldirect.org</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <div class="contact-box">
                                        <div class="icon-box">
                                            <i class="fa fa-4x fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <div class="contact-inner">
                                            <h4 class="is-4">Address</h4>
                                            <p>8 Corporate Park Suite 300</p>
                                            <p>Irvine, CA 92606</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="column is-two-thirds" id="contact-form">
                            <form action="" method="POST" id="application-form">
                                {{ csrf_field() }}
                                <div class="columns">
                                    <div class="column is-half">
                                        <div class="field">
                                            <p class="control">
                                                <input type="text" name="first_name" class="input" placeholder="First Name" />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column is-half">
                                        <div class="field">
                                            <p class="control">
                                                <input type="text" name="last_name" class="input" placeholder="Last Name" />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column">
                                        <div class="field">
                                            <p class="control">
                                                <input type="text" name="business_name" class="input" placeholder="Legal Business Name" />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column">
                                        <div class="field">
                                            <p class="control">
                                                <input type="text" name="business_address" class="input" placeholder="Business Address" />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column is-third">
                                        <div class="field">
                                            <p class="control">
                                                <input type="text" name="city" class="input" placeholder="City" />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column is-third">
                                        <div class="field">
                                            <div class="control">
                                                <div class="select">
                                                    <select name="state" id="state">
                                                        <option value="" class="placeholder">Select a state</option>
                                                        <option value="1">CA</option>
                                                        <option value="2">AZ</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-third">
                                        <div class="field">
                                            <p class="control">
                                                <input type="text" name="zipcode" class="input" placeholder="Zipcode" />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column is-half">
                                        <div class="field">
                                            <p class="control">
                                                <input type="text" name="phone" class="input" placeholder="Phone" />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column is-half">
                                        <div class="field">
                                            <p class="control">
                                                <input type="email" name="email" class="input" placeholder="Email" />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column is-half">
                                        <div class="field">
                                            <p class="control">
                                                <input type="text" name="amount" class="input" placeholder="Loan Amount Requested" />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column is-half">
                                        <div class="field">
                                            <p class="control">
                                                <input type="text" name="how_soon" class="input" placeholder="How Soon Do You Need The Money?" />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column">
                                        <div class="field">
                                            <div class="control">
                                                <div class="select">
                                                    <select name="reason" id="reason">
                                                        <option value="" class="placeholder">How would you use the loan?</option>
                                                        <option value="1">Reason 1</option>
                                                        <option value="2">Reason 2</option>
                                                    </select>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column">
                                        <div class="control">
                                            <button class="button is-info" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="column"></div>
            </div>
        </section>
    </div>
    
@stop