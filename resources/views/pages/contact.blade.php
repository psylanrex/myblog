@extends('layouts.main')

@section('content')
    <div class="container-fluid contact-wrapper">
        
        <section class="map">
            <div class="card">
                <div class="card-content">
                    <div id="google-map" style="height:300px;"></div>
                </div>
            </div>
        </section>
        @include('includes.notifications.form-message')
        <section class="contact-container">
            <div class="columns">
                <div class="column"></div>
                <div class="column is-three-quarters">
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
                            <form action="/" method="POST" id="application-form">
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
                                                    <select name="state_id" id="state">
                                                        <option value="" class="placeholder">Select a state</option>
                                                        @foreach ($states as $state)
                                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-third">
                                        <div class="field">
                                            <p class="control">
                                                <input type="text" name="zip_code" class="input" placeholder="Zipcode" />
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
                                                <input type="text" name="loan_amount" class="input" placeholder="Loan Amount Requested" />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="column is-half">
                                        <div class="field">
                                            <p class="control">
                                                <input type="text" name="need_timeframe" class="input" placeholder="How Soon Do You Need The Money?" />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column">
                                        <div class="field">
                                            <div class="control">
                                                <div class="select">
                                                    <select name="reason_id" id="reason">
                                                        <option value="" class="placeholder">How would you use the loan?</option>
                                                        @foreach ($reasons as $reason)
                                                            <option value="{{ $reason->id }}">{{ $reason->name }}</option>
                                                        @endforeach
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

@section('scripts')
    <script>
        function initMap() {
            var myLatLng = {lat: 33.691756, lng: -117.829176};
            var map = new google.maps.Map(document.getElementById('google-map'), {
                zoom: 16,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Capital Direct'
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASB6e1gJxqH_IarieQqt1b-DtwKWsQ1v8&callback=initMap"
  type="text/javascript"></script>
@stop