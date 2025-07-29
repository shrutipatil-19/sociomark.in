<div class="th-blog-wrapper overflow-hidden space" id="contact">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-4 pe-md-5">
                <div class="title-area mb-20">
                    <h2 class="sec-title " data-aos="fade-right" data-aos-delay="100">Start the <span
                            class="highlight-orange">Conversation</span>, <span class="text-blue"> Spark the <span
                                class="big-font">Change</span> </span></h2>
                </div>
                <p class="sec-para mb-35 " data-aos="fade-right" data-aos-delay="100">Whether it’s a big brief or a tiny
                    thought, we’d love to hear what’s on your mind.
                </p>

            </div>
            <div class="offset-xl-1 col-xl-7 p-3">

                <div class="">
                    <h3 class="text-center mb-15 form-head head-mbl-text">Please Fill In The Form Below</h3>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif


                    @include('Frontend.partial.contactUsForm')

                </div>

            </div>
        </div>
    </div>
</div>

