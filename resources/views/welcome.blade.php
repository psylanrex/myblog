@extends('layouts.main')

@section('content')
<section class="hero"> {{--Hero--}}
    <div class="overlay">
        <div class="hero-body">
            <div class="container">
                <div class="container has-text-centered hero-content-wrapper">
                    <div class="hero-content">
                        <h1 class="title is-1">
                            Business Loan and Merchant Solutions
                        </h1>
                        <p>
                            <a class="button is-outlined" role="button">
                                Learn More
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> {{--End Hero--}}
<section class="about-us"> {{--About Us--}}
    <div class="columns">
        <div class="column is-4 about-us-left">

        </div>
        <div class="column is-8 about-us-right">
            <div class="about-us-right-content">
                <div class="card">
                    <div class="card-header">
                        <div class="about-us-card-header-title">
                            <h2 class="title is-2">Who We Are</h2>
                            <hr id="about-us-divider">
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <div class="about-us-content-wrapper">
                                <p>
                                    Our mission is to perfect modern business lending and merchant services. Here at Capital Direct, we know that as a business owner, your time is precious. We pride ourselves in having one of the shortest turn around times in the industry. We understand what drives our customers and want them to be satisfied and successful. At Capital Direct, we're dedicated on changing how small businesses access funds. From working capital loans to merchant services to equipment leasing and financing. If your business needs it - we can help you get it - FAST!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> {{--End About Us--}}
<div class="container services"> {{--Services--}}
    <div class="card">
        <div class="card-header services-header">
            <div class="service-title">
                <h2 class="title is-2">
                    What We Finance
                </h2>
            </div>
        </div>
        <div class="card-content">
            <div class="columns">
                <div class="column is-4">
                    <div class="card inner-card-service">
                        <div class="card-header">
                            <div class="card-header-wrapper">
                                <div class="card-header-title-icon">
                                    <span><i class="fa fa-2x fa-truck"></i></span>
                                </div>
                                <div class="card-header-title-text">
                                    <p>Commercial Vehicles</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <ul>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Commercial Truck Leasing and Financing</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Commercial Van Leasing and Financing</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Commercial Trailer Leasing and Financing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card inner-card-service">
                        <div class="card-header">
                            <div class="card-header-wrapper">
                                <div class="card-header-title-icon">
                                    <span><i class="fa fa-2x fa-truck"></i></span>
                                </div>
                                <div class="card-header-title-text">
                                    <p>Auto Shop Equipment</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <ul>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Automotive Body Equipment</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Automotive Diagnostic Equipment Leasing and Financing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card inner-card-service">
                        <div class="card-header">
                            <div class="card-header-wrapper">
                                <div class="card-header-title-icon">
                                    <span><i class="fa fa-2x fa-truck"></i></span>
                                </div>
                                <div class="card-header-title-text">
                                    <p>Construction Equipment</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <ul>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Crane, Forklift, Skid Steer, Excavator, Jackhammer, Bulldozer</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Power Generator</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Compressor Drill Equipment</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Concrete Equipment Grinder</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column is-4">
                    <div class="card inner-card-service">
                        <div class="card-header">
                            <div class="card-header-wrapper">
                                <div class="card-header-title-icon">
                                    <span><i class="fa fa-2x fa-truck"></i></span>
                                </div>
                                <div class="card-header-title-text">
                                    <p>Machine Tool</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <ul>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Welding Machine</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Lathe and Milling Machine</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Saw</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> CNC Machine</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Molding Equipment </li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Plasma Cutter</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Waterjet Equipment</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Woodworking Equipment</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Stamping Press</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card inner-card-service">
                        <div class="card-header">
                            <div class="card-header-wrapper">
                                <div class="card-header-title-icon">
                                    <span><i class="fa fa-2x fa-truck"></i></span>
                                </div>
                                <div class="card-header-title-text">
                                    <p>Medical Equipment</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <ul>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Dental Equipment and Seating</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Physical Therapy and Chiropractic Equipment</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Dermatology Equipment</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Veterinary Equipment</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Diagnostic and Imaging Equipment</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Medical Laser Equipment</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> X-Ray and Ultrasound Machine</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Dry Cleaning Equipment</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Wheelchair</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card inner-card-service">
                        <div class="card-header">
                            <div class="card-header-wrapper">
                                <div class="card-header-title-icon">
                                    <span><i class="fa fa-2x fa-truck"></i></span>
                                </div>
                                <div class="card-header-title-text">
                                    <p>Restaurant Equipment</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <ul>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Ice Machine</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Refrigerator/Freezer</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Vending Machine Bakery/Catering Equipments</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Point of Sale System</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Restaurant Dishwasher</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Food Preparation Equipment</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Restaurant Oven/Warming Equipment</li>
                                    <li><span class="service-list-icon"><i class="fa fa-star" aria-hidden="true"></i></span> Restaurant Booth</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>{{--End Services--}}
<section class="qualities"> {{--Qualities--}}
    <div class="columns">
        <div class="qualities-wrapper">
            <div class="qualities-wrapper-overlay">
                <div class="column qualities-column">
                    <div class="card qualities-content-wrapper">
                        <div class="card-header">
                            <div class="qualities-card-header-title">
                                <h2 class="title is-2">Why Choose Us</h2>
                                <hr id="qualities-content-divider">
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="qualities-card-content">
                                <div class="columns">
                                    <div class="column is-6 qualities-content-section">
                                        <div class="bullet">
                                            <div class="bullet-title">
                                                <span class="quality-bullet"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                                Experienced
                                            </div>
                                            <div class="bullet-content">
                                                With over a decade of experience, our team will closely monitor every transaction to assure your complete satisfaction.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6 qualities-content-section">
                                        <div class="bullet">
                                            <div class="bullet-title">
                                                <span class="quality-bullet"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                                Well-Connected
                                            </div>
                                            <div class="bullet-content">
                                                Throughout the years, our team has developed excellent relationships with our partners. We utilize these resources and connections to efficiently deliver results to our merchants.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column is-6 qualities-content-section">
                                        <div class="bullet">
                                            <div class="bullet-title">
                                                <span class="quality-bullet"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                                Knowledgeable
                                            </div>
                                            <div class="bullet-content">
                                                Experience ultimately brings knowledge. Our team is trained to guide each merchant through our "simple" process to expedite approvals.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6 qualities-content-section">
                                        <div class="bullet">
                                            <div class="bullet-title">
                                                <span class="quality-bullet"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                                Fast
                                            </div>
                                            <div class="bullet-content">
                                                We know that your time is valuable. Through innovation and state-of-the-art technology, Capital Direct delivers fast and reliable service. Our aim is to get you access to funds as soon as possible.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column is-6 qualities-content-section">
                                        <div class="bullet">
                                            <div class="bullet-title">
                                                <span class="quality-bullet"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                                Friendly
                                            </div>
                                            <div class="bullet-content">
                                                At Capital Direct, we pride ourselves in knowing that we have the friendliest staff around. We are proud to say that we screen for that when constructing our team.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6 qualities-content-section">
                                        <div class="bullet">
                                            <div class="bullet-title">
                                                <span class="quality-bullet"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                                Efficient
                                            </div>
                                            <div class="bullet-content">
                                                Efficiency is doing something the best possible way. Our team strives to work in a well-organized and competent manner to maximize results for our merchants.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> {{--End Qualities--}}

<div class="box process"> {{--Process--}}
    <div class="columns process-wrapper">
        <div class="column is-3 process-left">
            <div class="process-left-heading">Our quick process</div>
            <div class="process-left-text">The steps to get your loan</div>
        </div>
        <div class="column is-6 process-right">
            <div class="process-section">
                <div class="process-section-heading">Apply Online</div>
                <div class="process-section-body">
                    <p class="step-title">Under 10 minutes</p>
                    <p class="step-subtitle">Check your eligibility in seconds, and complete our easy application to
                        get your instant quote.</p>
                </div>
            </div>
            <div class="process-section">
                <div class="process-section-heading">Hear From Us</div>
                <div class="process-section-body">
                    <p class="step-title">Within 24 hours</p>
                    <p class="step-subtitle">Your dedicated loan specialist is available to help you every step of
                        the way with personalized service.</p>
                </div>
            </div>
            <div class="process-section">
                <div class="process-section-heading">Get A Decision</div>
                <div class="process-section-body">
                    <p class="step-title">In as fast as 24 hours</p>
                    <p class="step-subtitle">Your underwriter will review your application and may schedule a quick
                        call to get to know your business.</p>
                </div>
            </div>
            <div class="process-section">
                <div class="process-section-heading">You Get Funded</div>
                <div class="process-section-body">
                    <p class="step-title">In as soon as 24 hours</p>
                    <p class="step-subtitle">Once approved, you’ll receive funds in your account within 24
                        hours.</p>
                </div>
            </div>
        </div>
    </div>
</div> {{--End Process--}}
@stop

