<form action="{{ route('contact.store') }}" method="POST" class="contact-form style2" id="contactform">
    @csrf
    <input type="hidden" name="utm_source" value="{{ request()->get('utm_source') }}">
    <input type="hidden" name="utm_medium" value="{{ request()->get('utm_medium') }}">
    <input type="hidden" name="utm_campaign" value="{{ request()->get('utm_campaign') }}">
    <input type="hidden" name="utm_term" value="{{ request()->get('utm_term') }}">
    <input type="hidden" name="utm_content" value="{{ request()->get('utm_content') }}">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="contactNumber" class="sec-para">Full Name<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                placeholder="Enter your Name" value="{{ old('name') }}">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label class="sec-para" for="email">Email Address<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                id="email" placeholder="Enter your Official Mail Id" value="{{ old('email') }}">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label class="sec-para" for="companyname">Company Name</label>
            <input type="text" class="form-control @error('companyname') is-invalid @enderror" name="companyname"
                id="companyname" placeholder="Enter your Company Name" value="{{ old('companyname') }}">
            @error('companyname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label class="sec-para" for="url">Website or Instagram Handle</label>
            <input type="url" class="form-control @error('url') is-invalid @enderror" name="url" id="url"
                placeholder="Enter your Website Url" value="{{ old('url') }}">
            @error('url')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        {{-- <div class="form-group col-md-6">
                                        <label class="form-label" for="name">Your Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="name" placeholder="Enter your Name"
                                            value="{{ old('name') }}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="Enter your Email"
                                    value="{{ old('email') }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> --}}
        {{-- <div class="form-group col-md-6">
                                            <label class="form-label" for="phone">Phone</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                name="phone" id="phone" placeholder="Enter your Phone"
                                                value="{{ old('phone') }}" maxlength="10" pattern="\d{10}">
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="budget">Marketing Budget</label>
                                <select class="form-select @error('budget') is-invalid @enderror" id="budget"
                                    name="budget">
                                    <option selected disabled>Choose an option</option>
                                    <option value="Under ₹ 50,000">Under ₹ 50,000</option>
                                    <option value="₹ 50,000 - ₹ 1,00,000">₹ 50,000 - ₹ 1,00,000</option>
                                    <option value="Above ₹ 1,00,000">Above ₹ 1,00,000</option>
                                    <option value="Have not Estimated Yet">Have not Estimated Yet</option>
                                </select>
                                @error('budget')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> --}}
        <div class="row col-md-12">
            <div class="col-md-3 form-group">
                <label for="countryCode" class="sec-para">Country Code<span class="text-danger">*</span></label>
                <select class="form-select" id="countryCode" name="countryCode">
                    <option value="" disabled {{ old('countryCode') == '' ? 'selected' : '' }}>Select Code
                    </option>
                    <option value="+91" data-maxlength="10" data-currency="INR"
                        {{ old('countryCode') == '+91' ? 'selected' : '' }}>India (+91)</option>
                    <option value="+971" data-currency="AED" {{ old('countryCode') == '+971' ? 'selected' : '' }}>UAE
                        (+971)</option>
                    <option value="+61" data-maxlength="8" data-currency="AUD"
                        {{ old('countryCode') == '+61' ? 'selected' : '' }}>Australia (+61)
                    </option>

                    {{-- Uncomment and add more countries if needed --}}
                    {{-- <option value="+1" data-maxlength="8" data-currency="USD" {{ old('countryCode') == '+1' ? 'selected' : '' }}>USA (+1)</option> --}}
                    {{-- <option value="+44" data-currency="GBP" {{ old('countryCode') == '+44' ? 'selected' : '' }}>UK (+44)</option> --}}
                    {{-- <option value="+49" data-currency="EUR" {{ old('countryCode') == '+49' ? 'selected' : '' }}>Germany (+49)</option> --}}
                </select>

            </div>
            <div class="col-md-9 form-group">
                <label for="contactNumber" class="sec-para">Contact Number<span class="text-danger">*</span></label>
                {{-- <input type="tel" class="form-control"
                                                placeholder="Enter Your Number"> --}}
                <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone"
                    id="contactNumber" placeholder="Enter your Phone" value="{{ old('phone') }}" maxlength="10"
                    pattern="\d{10}">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Hidden field to capture old budget -->
        <input type="hidden" id="oldBudget" value="{{ old('budget') }}">

        <div class="form-group col-md-6">
            <label for="budgetOption" class="sec-para">Your Budget In (<span id="currencySymbol"></span>)<span
                    class="text-danger">*</span></label>
            <select class="form-select @error('budget') is-invalid @enderror" id="budgetOption" name="budget">
                <option value="" selected disabled>Select a budget range</option>
            </select>
            @error('budget')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label class="sec-para" for="aboutUs">How Did You Hear About Us? </label>
            <select class="form-select @error('aboutUs') is-invalid @enderror" id="aboutUs" name="aboutUs">
                <option disabled {{ old('aboutUs') ? '' : 'selected' }}>Choose an option</option>
                <option value="google" {{ old('aboutUs') == 'google' ? 'selected' : '' }}>Google
                </option>
                <option value="Instagram" {{ old('aboutUs') == 'Instagram' ? 'selected' : '' }}>
                    Instagram</option>
                <option value="LinkedIn" {{ old('aboutUs') == 'LinkedIn' ? 'selected' : '' }}>
                    LinkedIn</option>
                <option value="Referral" {{ old('aboutUs') == 'Referral' ? 'selected' : '' }}>
                    Referral</option>
                <option value="Other" {{ old('aboutUs') == 'Other' ? 'selected' : '' }}>Other
                </option>
            </select>
            @error('aboutUs')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-md-12">
            <label class="sec-para">Service you want?<span class="text-danger">*</span> </label>
            {{-- Label now applies to the group --}}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-check @error('service') is-invalid @enderror">
                        {{-- Container for checkboxes --}}
                        {{-- Individual checkboxes --}}
                        <input class="form-check-input" type="checkbox" name="service[]" id="seo"
                            value="Search Engine Optimization"
                            {{ is_array(old('service')) && in_array('Search Engine Optimization', old('service')) ? 'checked' : '' }}>
                        <label class="form-check-label" for="seo">SEO</label>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check @error('service') is-invalid @enderror">
                        <input class="form-check-input" type="checkbox" name="service[]" id="webdev"
                            value="Website Development"
                            {{ is_array(old('service')) && in_array('Website Development', old('service')) ? 'checked' : '' }}>
                        <label class="form-check-label" for="webdev">Website Development</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check @error('service') is-invalid @enderror">
                        <input class="form-check-input" type="checkbox" name="service[]" id="socialmedia"
                            value="Social Media"
                            {{ is_array(old('service')) && in_array('Social Media', old('service')) ? 'checked' : '' }}>
                        <label class="form-check-label" for="socialmedia">Social Media</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check @error('service') is-invalid @enderror">
                        <input class="form-check-input" type="checkbox" name="service[]" id="digitalmarketing"
                            value="Digital Marketing"
                            {{ is_array(old('service')) && in_array('Digital Marketing', old('service')) ? 'checked' : '' }}>
                        <label class="form-check-label" for="digitalmarketing">Digital
                            Marketing</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check @error('service') is-invalid @enderror">
                        <input class="form-check-input" type="checkbox" name="service[]" id="contentmarketing"
                            value="Content Marketing"
                            {{ is_array(old('service')) && in_array('Content Marketing', old('service')) ? 'checked' : '' }}>
                        <label class="form-check-label" for="contentmarketing">Content
                            Marketing</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check @error('service') is-invalid @enderror">
                        <input class="form-check-input" type="checkbox" name="service[]" id="sem"
                            value="SEM"
                            {{ is_array(old('service')) && in_array('SEM', old('service')) ? 'checked' : '' }}>
                        <label class="form-check-label" for="sem">Performance
                            Marketing</label>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check @error('service') is-invalid @enderror">

                        <input class="form-check-input" type="checkbox" name="service[]" id="photovideo"
                            value="Photography & Video
                                    Production"
                            {{ is_array(old('service')) &&
                            in_array(
                                'Photography & Video
                                                                                                                                                                Production',
                                old('service'),
                            )
                                ? 'checked'
                                : '' }}>
                        <label class="form-check-label" for="photovideo">Photography & Video
                            Production</label>
                    </div>
                </div>
            </div>
            {{-- Error message for the group of checkboxes --}}
            @error('service')
                <span class="text-danger mt-1">{{ $message }}</span>
            @enderror
            <span id="service-error" class="text-danger mt-1 d-block"></span>

        </div>

        <div class="form-group col-md-12">
            <label class="sec-para" for="timeline">Timeline to Start the Project</label>
            <select class="form-select @error('timeline') is-invalid @enderror" id="timeline" name="timeline">
                <option disabled {{ old('timeline') ? '' : 'selected' }}>Choose an option</option>
                <option value="Immediately" {{ old('timeline') == 'Immediately' ? 'selected' : '' }}>Immediately
                </option>
                <option value="In 1–2 weeks" {{ old('timeline') == 'In 1–2 weeks' ? 'selected' : '' }}>In 1–2 weeks
                </option>
                <option value="In a month" {{ old('timeline') == 'In a month' ? 'selected' : '' }}>In a month</option>
                <option value="Just exploring options"
                    {{ old('timeline') == 'Just exploring options' ? 'selected' : '' }}>
                    Just exploring options
                </option>
            </select>
            @error('timeline')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-12">

            <label class="sec-para" for="messageforus">Tell us About Your Business or
                Goals</label>
            <textarea class="form-control @error('messageforus') is-invalid @enderror" id="messageforus"
                placeholder="Enter your message" rows="3" name="messageforus"></textarea>
            {{-- <i class="fal fa-pencil"></i> --}}
            @error('messageforus')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mt-3">
            <div class="form-check p-0">
                <input class="form-check-input" type="checkbox" id="consent" name="consent" value="1"
                    {{ old('consent') ? 'checked' : '' }}>
                <label class="form-check-label" for="consent">
                    I agree to receive communication from Sociomark.
                </label>
            </div>
            <span id="consent-error" class="text-danger mt-1 d-block"></span>
        </div>
        <div class="col-12 form-group mb-0 text-center">
            <button type="submit" class="th-btn th-radius">Book A Free Strategy Call</button>
        </div>

    </div>

</form>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const countryCodeSelect = document.getElementById('countryCode');
        const budgetOptionSelect = document.getElementById('budgetOption');
        const currencySymbolSpan = document.getElementById('currencySymbol');
        const oldBudget = document.getElementById('oldBudget')?.value;

        const budgetData = {
            'INR': [{
                    value: '60000-100000',
                    text: '₹ 60,000 - ₹ 1,00,000'
                },
                {
                    value: '100000-200000',
                    text: '₹ 1,00,000 - ₹ 2,00,000'
                },
                {
                    value: '200000-above',
                    text: '₹ 2,00,000+'
                }
            ],
            'USD': [{
                    value: '0-1000',
                    text: '$ 0 - $ 1,000'
                },
                {
                    value: '1001-5000',
                    text: '$ 1,001 - $ 5,000'
                },
                {
                    value: '5001-10000',
                    text: '$ 5,001 - $ 10,000'
                },
                {
                    value: '10001-above',
                    text: '$ 10,001+'
                }
            ],
            'GBP': [{
                    value: '0-500',
                    text: '£ 0 - £ 500'
                },
                {
                    value: '501-2000',
                    text: '£ 501 - £ 2,000'
                },
                {
                    value: '2001-5000',
                    text: '£ 2,001 - £ 5,000'
                },
                {
                    value: '5001-above',
                    text: '£ 5,001+'
                }
            ],
            'AED': [{
                    value: '2,500-5,000',
                    text: 'AED 2,500 - AED 5,000'
                },
                {
                    value: '5,000-10,000',
                    text: 'AED 5,000 - AED 10,000'
                },
                {
                    value: '10,000+',
                    text: 'AED 10,000+'
                }
            ],
            'EUR': [{
                    value: '0-1000',
                    text: '€ 0 - € 1,000'
                },
                {
                    value: '1001-5000',
                    text: '€ 1,001 - € 5,000'
                },
                {
                    value: '5001-10000',
                    text: '€ 5,001 - € 10,000'
                },
                {
                    value: '10001-above',
                    text: '€ 10,001+'
                }
            ],
            'AUD': [{
                    value: '1,500-3,000',
                    text: '$ 1,500 - $ 3,000'
                },
                {
                    value: '3,000-5,000',
                    text: '$ 3,000 - $ 5,000'
                },
                {
                    value: '5,000+',
                    text: '$ 5,000+'
                }
            ]
        };

        function updateBudgetOptions() {
            const selectedOption = countryCodeSelect.options[countryCodeSelect.selectedIndex];
            const selectedCurrency = selectedOption ? selectedOption.dataset.currency : null;

            budgetOptionSelect.innerHTML = '<option value="" selected disabled>Select a budget range</option>';

            if (selectedCurrency && budgetData[selectedCurrency]) {
                currencySymbolSpan.textContent = selectedCurrency;

                budgetData[selectedCurrency].forEach(budget => {
                    const option = document.createElement('option');
                    option.value = budget.value;
                    option.textContent = budget.text;

                    if (oldBudget && oldBudget === budget.value) {
                        option.selected = true;
                    }

                    budgetOptionSelect.appendChild(option);
                });
            } else {
                currencySymbolSpan.textContent = '';
            }
        }

        // Trigger on load (for old values)
        updateBudgetOptions();

        // Recalculate when country changes
        countryCodeSelect.addEventListener('change', () => {
            // Clear oldBudget so a new selection doesn't auto-select old
            document.getElementById('oldBudget').value = '';
            updateBudgetOptions();
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        // Add custom validation methods
        $.validator.addMethod("emailregex", function(value, element) {
            return this.optional(element) || /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/i.test(value);
        });
        $.validator.addMethod("letters", function(value, element) {
            return this.optional(element) || /^[a-zA-Z \s']*$/i.test(value);
        });
        $.validator.addMethod("numbers", function(value, element) {
            return this.optional(element) || /^[0-9]{10}$/.test(value);
        });

        // jQuery Validation
        $('#contactform').validate({
            ignore: [], // Ensure validation on unchecked checkboxes as well
            rules: {
                name: {
                    required: true,
                    letters: true,
                },
                lastname: 'required',
                organisation: 'required',
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
                message: {
                    required: true,
                },
                budget: {
                    required: true,
                },
                'service[]': {
                    required: true,
                    minlength: 1
                },
                consent: {
                    required: true // Make sure consent checkbox is validated
                }
            },
            messages: {
                name: {
                    required: 'This Name field is required',
                    letters: 'Only Letters & Spaces are Allowed.'
                },
                lastname: 'This Last Name field is required',
                organisation: 'This Organisation field is required',
                email: 'Please enter a Valid Email Id',
                phone: {
                    required: 'This Phone field is required',
                    numbers: 'Please enter exactly 10 digits',
                    minlength: 'Phone number must be 10 digits',
                    maxlength: 'Phone number must be 10 digits',
                },
                message: 'This message field is required',
                budget: 'Please select a budget range',
                'service[]': 'Please select at least one service',
                consent: 'You must agree before submitting' // Consent checkbox error message
            },
            errorPlacement: function(error, element) {
                if (element.attr("name") === "service[]") {
                    $("#service-error").html(error);
                } else if (element.attr("name") === "consent") {
                    $("#consent-error").html(error);
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                form.submit(); // Only submit if validation passes
            }
        });

        // Remove error on checkbox change
        $('#consent').on('change', function() {
            if ($(this).is(':checked')) {
                $("#consent-error").html('');
            }
        });
    });
</script>
