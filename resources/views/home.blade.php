@extends('layouts.medicalApp')

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl py-5">
            <!--begin::Row-->
            <div class="row gy-0 gx-10">
                <div class="col-xl-12">
                    <!--begin::Engage widget 2-->
                    <div class="card card-xl-stretch bg-body border-0 mb-5 mb-xl-0">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column flex-lg-row flex-stack p-lg-15">
                            <!--begin::Info-->
                            <div
                                class="d-flex flex-column justify-content-center align-items-center align-items-lg-start me-10 text-center text-lg-start">
                                <!--begin::Title-->
                                <h3 class="fs-2hx line-height-lg mb-5">
                                    <span class="fw-bold">Lorem ipsum dolor sit</span>
                                    <br />
                                    <span class="fw-bolder">consectetur adipiscing</span>
                                </h3>
                                <!--end::Title-->
                                <div class="fs-4 text-muted mb-7">Ut enim ad minim veniam, quis nostrud
                                    <br />exercitation ullamco laboris nisi
                                </div> <a href='#' class="btn btn-success fw-bold px-6 py-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_create_campaign">Learn More</a>
                            </div>
                            <!--end::Info-->
                            <!--begin::Illustration--><img src="assets/media/illustrations/sketchy-1/11.png" alt=""
                                class="mw-200px mw-lg-350px mt-lg-n10" />
                            <!--end::Illustration-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 2-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Home-->
            <div class="content flex-row-fluid mt-20" id="kt_content">
                <!--begin::About card-->
                <div class="card">
                    <!--begin::Body-->
                    <div class="card-body p-lg-17">
                        <!--begin::About-->
                        <div class="mb-18">
                            <!--begin::Wrapper-->
                            <div class="mb-10">
                                <!--begin::Top-->
                                <div class="text-center mb-15">
                                    <!--begin::Title-->
                                    <h3 class="fs-2hx text-dark mb-5">About Us</h3>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="fs-5 text-muted fw-bold">Within the last 10 years, we have sold over 100,000
                                        admin theme copies that have been
                                        <br>successfully deployed by small businesses to global enterprises
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Top-->
                                <!--begin::Overlay-->
                                <div class="overlay">
                                    <!--begin::Image-->
                                    <img class="w-100 card-rounded" src="{{ asset('media/home-banner.jpg')}}"
                                        alt="">
                                    <!--end::Image-->                                   
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Description-->
                            <div class="fs-5 fw-bold text-gray-600">
                                <!--begin::Text-->
                                <p class="mb-8">First, a disclaimer – the entire process of writing a blog post often
                                    takes more than a couple of hours, even if you can type eighty words per minute and your
                                    writing skills are sharp. From the seed of the idea to finally hitting “Publish,” you
                                    might spend several days or maybe even a week “writing” a blog post, but it’s important
                                    to spend those vital hours planning your post and even thinking about
                                    <a href="../../demo11/dist/pages/blog/post.html" class="link-primary pe-1">Your
                                        Post</a>(yes, thinking counts as working if you’re a blogger) before you actually
                                    write it.
                                </p>
                                <!--end::Text-->
                                <!--begin::Text-->
                                <p class="mb-8">There’s an old maxim that states,
                                    <span class="text-gray-800 pe-1">“No fun for the writer, no fun for the
                                        reader.”</span>No matter what industry you’re working in, as a blogger, you should
                                    live and die by this statement.
                                </p>
                                <!--end::Text-->
                                <!--begin::Text-->
                                <p class="mb-8">Before you do any of the following steps, be sure to pick a topic that
                                    actually interests you. Nothing – and
                                    <a href="../../demo11/dist/pages/blog/home.html" class="link-primary pe-1">I mean
                                        NOTHING</a>– will kill a blog post more effectively than a lack of enthusiasm from
                                    the writer. You can tell when a writer is bored by their subject, and it’s so
                                    cringe-worthy it’s a little embarrassing.
                                </p>
                                <!--end::Text-->
                                <!--begin::Text-->
                                <p class="mb-17">I can hear your objections already. “But Dan, I have to blog for a
                                    cardboard box manufacturing company.” I feel your pain, I really do. During the course
                                    of my career, I’ve written content for dozens of clients in some less-than-thrilling
                                    industries (such as financial regulatory compliance and corporate housing), but the
                                    hallmark of a professional blogger is the ability to write well about any topic, no
                                    matter how dry it may be. Blogging is a lot easier, however, if you can muster at least
                                    a little enthusiasm for the topic at hand.</p>
                                <!--end::Text-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::About-->
                        <!--begin::Statistics-->
                        <div class="card bg-light mb-18">
                            <!--begin::Body-->
                            <div class="card-body py-15">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-center">
                                    <!--begin::Items-->
                                    <div class="d-flex justify-content-between mb-10 mx-auto w-xl-900px">
                                        <!--begin::Item-->
                                        <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-2">
                                            <!--begin::Content-->
                                            <div class="text-center">
                                                <!--begin::Symbol-->
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                <span class="svg-icon svg-icon-2tx svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect x="2" y="2" width="9" height="9"
                                                            rx="2" fill="black"></rect>
                                                        <rect opacity="0.3" x="13" y="2" width="9"
                                                            height="9" rx="2" fill="black"></rect>
                                                        <rect opacity="0.3" x="13" y="13" width="9"
                                                            height="9" rx="2" fill="black"></rect>
                                                        <rect opacity="0.3" x="2" y="13" width="9"
                                                            height="9" rx="2" fill="black"></rect>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="mt-1">
                                                    <!--begin::Animation-->
                                                    <div
                                                        class="fs-lg-2hx fs-2x fw-bolder text-gray-800 d-flex align-items-center">
                                                        <div class="min-w-70px counted" data-kt-countup="true"
                                                            data-kt-countup-value="700">700</div>+
                                                    </div>
                                                    <!--end::Animation-->
                                                    <!--begin::Label-->
                                                    <span class="text-gray-600 fw-bold fs-5 lh-0">Businesses</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-2">
                                            <!--begin::Content-->
                                            <div class="text-center">
                                                <!--begin::Symbol-->
                                                <!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
                                                <span class="svg-icon svg-icon-2tx svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M13 10.9128V3.01281C13 2.41281 13.5 1.91281 14.1 2.01281C16.1 2.21281 17.9 3.11284 19.3 4.61284C20.7 6.01284 21.6 7.91285 21.9 9.81285C22 10.4129 21.5 10.9128 20.9 10.9128H13Z"
                                                            fill="black"></path>
                                                        <path opacity="0.3"
                                                            d="M13 12.9128V20.8129C13 21.4129 13.5 21.9129 14.1 21.8129C16.1 21.6129 17.9 20.7128 19.3 19.2128C20.7 17.8128 21.6 15.9128 21.9 14.0128C22 13.4128 21.5 12.9128 20.9 12.9128H13Z"
                                                            fill="black"></path>
                                                        <path opacity="0.3"
                                                            d="M11 19.8129C11 20.4129 10.5 20.9129 9.89999 20.8129C5.49999 20.2129 2 16.5128 2 11.9128C2 7.31283 5.39999 3.51281 9.89999 3.01281C10.5 2.91281 11 3.41281 11 4.01281V19.8129Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="mt-1">
                                                    <!--begin::Animation-->
                                                    <div
                                                        class="fs-lg-2hx fs-2x fw-bolder text-gray-800 d-flex align-items-center">
                                                        <div class="min-w-50px counted" data-kt-countup="true"
                                                            data-kt-countup-value="80">80</div>K+
                                                    </div>
                                                    <!--end::Animation-->
                                                    <!--begin::Label-->
                                                    <span class="text-gray-600 fw-bold fs-5 lh-0">Quick Reports</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-2">
                                            <!--begin::Content-->
                                            <div class="text-center">
                                                <!--begin::Symbol-->
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                                <span class="svg-icon svg-icon-2tx svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                            fill="black"></path>
                                                        <path opacity="0.3"
                                                            d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                            fill="black"></path>
                                                        <path opacity="0.3"
                                                            d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="mt-1">
                                                    <!--begin::Animation-->
                                                    <div
                                                        class="fs-lg-2hx fs-2x fw-bolder text-gray-800 d-flex align-items-center">
                                                        <div class="min-w-50px counted" data-kt-countup="true"
                                                            data-kt-countup-value="35">35</div>M+
                                                    </div>
                                                    <!--end::Animation-->
                                                    <!--begin::Label-->
                                                    <span class="text-gray-600 fw-bold fs-5 lh-0">Payments</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Testimonial-->
                                <div class="fs-2 fw-bold text-muted text-center mb-3">
                                    <span class="fs-1 lh-1 text-gray-700">“</span>When you care about your topic, you’ll
                                    write about it in a
                                    <br>
                                    <span class="text-gray-700 me-1">more powerful</span>, emotionally expressive way
                                    <span class="fs-1 lh-1 text-gray-700">“</span>
                                </div>
                                <!--end::Testimonial-->
                                <!--begin::Author-->
                                <div class="fs-2 fw-bold text-muted text-center">
                                    <a href="../../demo11/dist/account/security.html"
                                        class="link-primary fs-4 fw-bolder">Marcus Levy</a>
                                    <span class="fs-4 fw-bolder text-gray-600">,KeenThemes CEO</span>
                                </div>
                                <!--end::Author-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Statistics-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::About card-->
            </div>
            <!--end::home-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Container-->
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Row-->
            <div class="row gy-0 gx-10">
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Footer-->
                    <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                        <!--begin::Container-->
                        <div
                            class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1"> <span class="text-muted fw-bold me-1">2021©</span>
                                <a href="javascript:void(0)" target="_blank"
                                    class="text-gray-800 text-hover-primary">E-medical</a> </div>
                            <!--end::Copyright-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Footer-->
                    <!--end::Engage drawers-->
                    <!--begin::Scrolltop-->
                    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg--><span class="svg-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                    rx="1" transform="rotate(90 13 6)" fill="black" />
                                <path
                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Scrolltop-->
                </div>
            </div>
        </div>
    </div>
@endsection
