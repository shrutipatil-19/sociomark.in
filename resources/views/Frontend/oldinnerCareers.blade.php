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
                    <h2 class="sec-title head-text head-mbl-text text-blue" data-aos="fade-right"
                        data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        {{ $job->title }}
                    </h2>
                </div>

                <div class="text-center text-xl-start col-md-12 pl-0">
                    <p class="sec-para text-blue"><b>Location:-</b></p>
                    <p class="sec-para">{{ $job->location }}</p>

                    <p class="sec-para text-blue"><b>Compensation:-</b></p>
                    <p class="sec-para">{{ $job->compensation }}</p>

                    <p class="sec-para text-blue"><b>Role Overview:-</b></p>
                    <p class="sec-para">{{ $job->role_overview }}</p>


                    <h4 class="text-secondary">Responsibilities</h4>
                    <ul>
                        @php
                        // Decode JSON to get the single long string
                        $raw = json_decode($job->responsibilities, true);

                        // If it's an array with one string, process it
                        $responsibilities = [];
                        if (is_array($raw) && count($raw) === 1) {
                        // Break that long string into parts using "." (fullstop)
                        $responsibilities = preg_split('/\.\s*/', trim($raw[0], " ."));
                        }
                        @endphp

                        @if (!empty($responsibilities))
                        @foreach ($responsibilities as $item)
                        @if (trim($item) !== '')
                        <li>{{ trim($item) }}.</li>
                        @endif
                        @endforeach
                        @endif


                    </ul>



                    <p class="sec-para text-blue"><b>Industry:-</b></p>
                    <p class="sec-para">{{ $job->industry }}</p>

                    <p class="sec-para text-blue"><b>Position:-</b></p>
                    <p class="sec-para">{{ $job->position }}</p>

                    <p class="sec-para text-blue"><b>Experience:-</b></p>
                    <p class="sec-para">{{ $job->experience }}</p>

                    <a href="#" class="th-btn th-icon" data-bs-toggle="modal"
                        data-bs-target="#getAQuoteModal">Apply Now<i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>

        </div>
        {{-- Include modal --}}
        @include('Frontend.partial.job.apply-job', ['job' => $job])
    </div>

</main>
@endsection








