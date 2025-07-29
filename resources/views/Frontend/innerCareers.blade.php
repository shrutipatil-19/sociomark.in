@extends('Frontend.layout.app')

@section('content')
<style>
    .alert-dismissible .btn-close {
        position: absolute;
        top: 16px;
        right: 0;
        z-index: 2;
        padding: 4px 6px;
    }

    .alert-dismissible {
        padding-right: 28px;
    }

    .alert {
        padding: 10px;
    }

    .btn-close {
        width: 6px;
        height: 6px;
    }
</style>
<main id="contact">
    <section style="margin-top: 66px;">

    </section>

    <div class="overflow-hidden space contact-head">
        <div class="container">
            <div class="row justify-content-end">
                <div class="title-area text-center text-xl-start col-md-3 head-text-div mt-1 pl-0">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}<button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                    @endif
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="title-area text-center text-xl-start col-md-12 head-text-div mt-1 pl-0">
                    <h2 class="sec-title head-text head-mbl-text text-blue" data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        Business Development (UAE)
                    </h2>
                </div>
                <div class="text-center text-xl-start col-md-12 pl-0">

                    <p class="sec-para text-blue"><b> Location:-</b> </p>
                    <p class="sec-para">UAE</p>

                    <p class="sec-para text-blue"><b>Compensation:-</b></p>
                    <p class="sec-para">As per industry standards + Incentives for each successful lead conversion +
                        Performance bonuses upon target achievement</p>
                    <br>


                    <p class="sec-para text-blue"><b>Role Overview:-</b></p>
                    <p class="sec-para">We are seeking a dynamic and results-driven Business Development Specialist to
                        join our team in Navi Mumbai. This is a full-time on-site role, ideal for individuals with a
                        passion for sales and a strong understanding of digital solutions.</p>
                    <br>
                    <p class="sec-para">The selected candidate will play a pivotal role in identifying new business opportunities and building lasting client relationships to drive company growth.</p>
                    <br>


                    <p class="sec-para text-blue"><b> Key Responsibilities:-</b></p>
                    <ul>
                        <li class="sec-para">Generate qualified leads through strategic outreach and networking.</li>
                        <li class="sec-para">Conduct in-depth market research to identify new opportunities.</li>
                        <li class="sec-para">Engage with potential clients to understand their needs and offer tailored solutions.</li>
                        <li class="sec-para">Maintain high levels of customer service to nurture client relationships.</li>
                        <li class="sec-para">Collaborate with internal teams to develop proposals and presentations.</li>
                        <li class="sec-para">Leverage analytical skills to assess performance and optimize business strategies.</li>
                        <li class="sec-para">Stay updated on industry trends and competitor activities.</li>
                    </ul><br>


                    <p class="sec-para text-blue"><b>Qualifications & Requirements:-</b></p>

                    <ul>
                        <li class="sec-para">Mandatory: Prior experience working with a digital marketing agency</li>
                        <li class="sec-para">Excellent communication and interpersonal skills.</li>
                        <li class="sec-para">Proven experience in lead generation and market research.</li>
                        <li class="sec-para">Customer service-oriented mindset.</li>
                        <li class="sec-para">Strong negotiation and persuasion abilities.</li>
                        <li class="sec-para">Capability to thrive in a fast-paced, target-driven environment.</li>
                        <li class="sec-para">Awareness of current digital marketing trends and tools.</li>
                        <li class="sec-para">Bachelor’s degree in Business Administration or a related field</li>
                    </ul><br>
                    <p class="sec-para text-blue"><b> Target Services:-</b></p>
                    <p class="sec-para">The ideal candidate will focus on bringing clients for the following services:</p>

                    <ul>
                        <li class="sec-para">Digital Marketing</li>
                        <li class="sec-para">Social Media Management</li>
                        <li class="sec-para">Search Engine Optimization (SEO)</li>
                        <li class="sec-para">Website Development & Content Writing</li>
                        <li class="sec-para">Content Production</li>
                    </ul>

                    <p class="sec-para text-blue"><b>Industry:-</b></p>
                    <p class="sec-para">Digital Marketing</p>

                    <p class="sec-para text-blue"><b>Position:-</b></p>
                    <p class="sec-para">Business Development Specialist</p>

                    <p class="sec-para text-blue"><b>Experience:-</b></p>
                    <p class="sec-para">Up to 2 years</p>
                    <a href="#" class="th-btn th-icon" data-bs-toggle="modal"
                        data-bs-target="#getAQuoteModal">Apply Now<i class="fa-solid fa-arrow-right ms-2"></i></a>

                </div>
            </div>
        </div>

    </div>
    <!-- popup modal  start-->
    <!-- Modal -->
    <div class="modal fade" id="getAQuoteModal" tabindex="-1" aria-labelledby="getAQuoteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content contact-form style2" style="padding: 10px 10px;">
                <div class="modal-header">
                    <h2 class="modal-title fs-5 text-blue" id="getAQuoteModalLabel">Apply Now</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <!-- Contact Popup Form -->
                        <!-- Contact Popup Form -->
                        <form action="{{ route('jobStore') }}" method="POST" id="popupForm"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="page_url" id="page_url">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name"><b>Your Name</b><span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" id="popName" placeholder="Enter your Name"
                                        value="{{ old('name') }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email"><b>Email</b><span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="popEmail" placeholder="Enter your Email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="phone"><b>Phone</b><span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" id="popPhone" placeholder="Enter your Phone"
                                        value="{{ old('phone') }}" maxlength="10" pattern="\d{10}">
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="cv"><b>Upload CV</b><span class="text-danger">*</span></label>
                                    <input type="file" class="form-control @error('cv') is-invalid @enderror"
                                        name="cv" id="cv">
                                    @error('cv')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="plinks"><b>Profile Links</b></label>
                                    <input type="text" class="form-control @error('plinks') is-invalid @enderror"
                                        name="plinks" id="plinks" placeholder="Enter your Profile Links"
                                        value="{{ old('plinks') }}">
                                    @error('plinks')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 form-group mb-0 text-center">
                                    <button type="submit" class="th-btn th-radius">Send</button>
                                </div>
                            </div>
                        </form>

                        <script type="text/javascript">
                            $.validator.addMethod("emailregex", function(value, element) {
                                return this.optional(element) || /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/i.test(value);
                            });

                            $.validator.addMethod("letters", function(value, element) {
                                return this.optional(element) || /^[a-zA-Z\s']*$/i.test(value);
                            });

                            $.validator.addMethod("numbers", function(value, element) {
                                return this.optional(element) || /^[0-9]{10}$/.test(value);
                            });

                            $('#popupForm').validate({
                                rules: {
                                    name: {
                                        required: true,
                                        letters: true,
                                    },
                                    email: {
                                        required: true,
                                        emailregex: true,
                                    },
                                    phone: {
                                        required: true,
                                        numbers: true,
                                        minlength: 10,
                                        maxlength: 10,
                                    },

                                },
                                messages: {
                                    name: {
                                        required: 'This Name field is required',
                                        letters: 'Only Letters & Spaces are Allowed.'
                                    },
                                    phone: {
                                        required: 'This Phone field is required',
                                        numbers: 'Please enter 10 digits',
                                        minlength: 'Phone number must be 10 digits',
                                        maxlength: 'Phone number must be 10 digits',
                                    },

                                    email: 'Please enter a Valid Email Id',

                                },
                                submitHandler: function(form) {
                                    form.submit();
                                }
                            });
                        </script>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const pageUrlField = document.getElementById('page_url');
                                if (pageUrlField) {
                                    pageUrlField.value = window.location.href;
                                }
                            });
                        </script>

                    </div>
                </div>
                <div class="modal-footer d-none">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- popup modal  end-->
</main>
@endsection