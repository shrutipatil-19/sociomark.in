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
                            <div class="row">
                                <input type="hidden" name="page_url" id="page_url">
                                <!-- <input type="hidden" name="page_url" value="{{ url()->current() }}"> -->
                                <!-- <input type="hidden" name="page_url" value="{{ request()->get('page_url') }}"> -->
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
                                    const pageUrlField = document.getElementById("page_url");
                                    if (pageUrlField) {
                                        pageUrlField.value = window.location.href;
                                        console.log("page_url set to:", pageUrlField.value);
                                    }
                                    form.submit();
                                }
                            });
                        </script>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const form = document.getElementById("popupForm");
                                if (form) {
                                    form.addEventListener("submit", function() {
                                        const pageUrlField = document.getElementById("page_url");
                                        if (pageUrlField) {
                                            pageUrlField.value = window.location.href;
                                            console.log("page_url set to:", pageUrlField.value);
                                        }
                                    });
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