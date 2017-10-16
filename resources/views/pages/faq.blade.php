@extends('layouts.main')

@section('content')
<div class="fluid-container faq-wrapper">
    <section class="box calculator">
        <div class="card">
            <div class="card-header">
                <div class="card-header-title">Loan Calculator</div>
            </div>
            <div class="card-content"></div>
        </div>
    </section>
    <div class="columns">
        <div class="column is-one-third">
            <div class="process"> <!-- .process -->
                <div class="process-wrapper"> <!-- .process-wrapper -->
                    <div class="columns process-title">
                        <div class="column">
                            <p class="title">Our quick process</p>
                            <hr>
                        </div>
                    </div>
                    <div class="process-body">
                        <div class="columns process-section">
                            <div class="column">
                                <div class="process-section-heading">
                                    Apply Online
                                </div>
                                <div class="process-section-body">
                                    <p class="step-title">Under 10 minutes</p>
                                    <p class="step-subtitle">Check your eligibility in seconds, and complete our easy application to get your instant quote.</p>
                                </div>
                            </div>
                        </div>
                        <div class="columns process-section">
                            <div class="column">
                                <div class="process-section-heading">
                                    Hear From Us
                                </div>
                                <div class="process-section-body">
                                    <p class="step-title">Within 24 hours</p>
                                    <p class="step-subtitle">Your dedicated loan specialist is available to help you every step of the way with personalized service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="columns process-section">
                            <div class="column">
                                <div class="process-section-heading">
                                    Get A Decision
                                </div>
                                <div class="process-section-body">
                                    <p class="step-title">In as fast as 24 hours</p>
                                    <p class="step-subtitle">Your underwriter will review your application and may schedule a quick call to get to know your business.</p>
                                </div>
                            </div>
                        </div>
                        <div class="columns process-section">
                            <div class="column">
                                <div class="process-section-heading">
                                    You Get Funded
                                </div>
                                <div class="process-section-body">
                                    <p class="step-title">In as soon as 24 hours</p>
                                    <p class="step-subtitle">Once approved, you’ll receive funds in your account in up to 24 hours.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End .process-wrapper -->
            </div> <!-- End .process -->
        </div>
        <div class="column is-two-thirds">
            <div class="box faq">
                <div class="panel">
                    <div class="qa-pair">
                        <input type="checkbox" name="q-1" id="q-1" />
                        <label for="q-1">What is a business cash advance?</label>
                        <div class="panel-answer" id="a-1">
                            A business cash advance is a short term (typically 4 to 12 months) financing solution based on purchasing your future sale receivables. The business cash advance can be used for any business purpose.
                        </div>
                    </div>
                    <div class="qa-pair">
                        <input type="checkbox" name="q-2" id="q-2" />
                        <label for="q-2">How much can I get?</label>
                        <div class="panel-answer" id="a-2">
                            Businesses can get cash advance amounts ranging from $2500 to $500,000, depending on monthly revenue, credit history and business performance.
                        </div>
                    </div>
                    <div class="qa-pair">
                        <input type="checkbox" name="q-3" id="q-3" />
                        <label for="q-3">How do I know if I qualify? </label>
                        <div class="panel-answer" id="a-3">
                            Minimum requirements for qualification are at least 6 months in business and a steady monthly cash flow or at least $5000 in monthly revenue.
                        </div>
                    </div>
                    <div class="qa-pair">
                        <input type="checkbox" name="q-4" id="q-4" />
                        <label for="q-4">What do I need when applying?</label>
                        <div class="panel-answer" id="a-4">
                            Prior to applying (online or by phone), please have the following information at hand:
                            <ul>
                                <li>Average monthly gross sales figures</li>
                                <li>Average monthly credit card sales figures</li>
                                <li>Social Security number of business owner</li>
                                <li>Business Federal Tax ID / EIN</li>
                            </ul>
                            In addition, we may need the following depending on the amount of the business cash advance offered or requested.
                            <ul>
                                <li>3 months of bank statements</li>
                                <li>3 months of credit card transaction processing statements</li>
                                <li>Lease agreement or landlord contact information</li>
                            </ul>
                        </div>
                    </div>
                    <div class="qa-pair">
                        <input type="checkbox" name="q-5" id="q-5" />
                        <label for="q-5">How do I apply?</label>
                        <div class="panel-answer" id="a-5">
                            Business owners can apply now online or call us at 949.302.1235. You'll know within 24 hours after submitting a signed application and financial statements whether you qualify and how much capital you're eligible to receive.
                        </div>
                    </div>
                    <div class="qa-pair">
                        <input type="checkbox" name="q-6" id="q-6" />
                        <label for="q-6">Are there any costs to apply?</label>
                        <div class="panel-answer" id="a-6">
                            No. Our quotes and application process are completely free.
                        </div>
                    </div>
                    <div class="qa-pair">
                        <input type="checkbox" name="q-7" id="q-7" />
                        <label for="q-7">What type of businesses does Capital Direct work with?</label>
                        <div class="panel-answer" id="a-7">
                            We worked with all types of industries and businesses across the United States.
                        </div>
                    </div>
                    <div class="qa-pair">
                        <input type="checkbox" name="q-8" id="q-8" />
                        <label for="q-8">What is the cost of a business cash advance?</label>
                        <div class="panel-answer" id="a-8">
                            We charge a simple "factoring rate" based on the amount of funding, the term and the financial strength of your business.
                        </div>
                    </div>
                    <div class="qa-pair">
                        <input type="checkbox" name="q-9" id="q-9" />
                        <label for="q-9">Does my personal credit score matter?</label>
                        <div class="panel-answer" id="a-9">
                            We look at your business performance, not just your personal credit, to get you approved and qualified for up to $500,000.
                        </div>
                    </div>
                    <div class="qa-pair">
                        <input type="checkbox" name="q-10" id="q-10" />
                        <label for="q-10">How long does it take to receive funds?</label>
                        <div class="panel-answer" id="a-10">
                            The funds can be deposited into your business checking account in as little as 24 hours or up to 3 business days after approval.
                        </div>
                    </div>
                    <div class="qa-pair">
                        <input type="checkbox" name="q-11" id="q-11" />
                        <label for="q-11">How does repayment work?</label>
                        <div class="panel-answer" id="a-11">
                            Payments are automatically deducted from your business checking account each business day. Our business owners find that daily repayment is easier on their cash flow and simpler to manage
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop