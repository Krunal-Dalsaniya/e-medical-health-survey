@extends('layouts.medicalApp')

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl py-5">
            <!--begin::Row-->
            <div class="row gy-0 gx-10">
                <!--begin::Col-->
                <div class="col-12">
                    <!--begin::Card-->
                    <div class="card card-xl-stretch bg-body border-0 mb-5 mb-xl-0">
                        <!--begin::Card Body-->
                        <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                            <!--begin::Section-->
                            <div class="pt-10">
                                <!--begin::Heading-->
                                <h1 class="fw-bolder mb-5" id="vertical-icons">
                                    E-medical Registration
                                </h1>
                                <!--end::Heading-->
                                <!--begin::Block-->
                                <div class="py-5">
                                    <div class="rounded border p-10">
                                        <ul class="nav d-flex justify-content-between nav-tabs nav-pills border-0 me-5 mb-3 mb-md-0 fs-6">
                                            <li class="nav-item me-0 mb-md-2">
                                                <a class="nav-link active btn btn-flex btn-active-light-success"
                                                    data-bs-toggle="tab" href="#kt_vtab_pane_4">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-primary me-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <span class="d-flex flex-column align-items-start">
                                                        <span class="fs-4 fw-bolder">Parents</span>
                                                        {{-- <span class="fs-7">Description</span> --}}
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item me-0 mb-md-2">
                                                <a class="nav-link btn btn-flex btn-active-light-info" data-bs-toggle="tab"
                                                    href="#kt_vtab_pane_5">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen003.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M13.0079 2.6L15.7079 7.2L21.0079 8.4C21.9079 8.6 22.3079 9.7 21.7079 10.4L18.1079 14.4L18.6079 19.8C18.7079 20.7 17.7079 21.4 16.9079 21L12.0079 18.8L7.10785 21C6.20785 21.4 5.30786 20.7 5.40786 19.8L5.90786 14.4L2.30785 10.4C1.70785 9.7 2.00786 8.6 3.00786 8.4L8.30785 7.2L11.0079 2.6C11.3079 1.8 12.5079 1.8 13.0079 2.6Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <span class="d-flex flex-column align-items-start">
                                                        <span class="fs-4 fw-bolder">Doctors</span>
                                                        {{-- <span class="fs-7">Description</span> --}}
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="kt_vtab_pane_4" role="tabpanel">
                                                Et et
                                                consectetur ipsum labore excepteur est proident excepteur ad velit
                                                occaecat
                                                qui minim
                                                occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur
                                                veniam
                                                sunt est aute
                                                sit dolor anim. Velit non irure adipisicing aliqua ullamco irure
                                                incididunt
                                                irure non
                                                esse consectetur nostrud minim non minim occaecat. Amet duis do nisi
                                                duis
                                                veniam non est
                                                eiusmod tempor incididunt tempor dolor ipsum in qui sit.</div>
                                            <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">Nulla est
                                                ullamco
                                                ut irure
                                                incididunt nulla Lorem Lorem minim irure officia enim reprehenderit.
                                                Magna
                                                duis labore
                                                cillum sint adipisicing exercitation ipsum. Nostrud ut anim non
                                                exercitation
                                                velit
                                                laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit
                                                ullamco
                                                magna consequat
                                                voluptate minim amet aliquip ipsum aute laboris nisi. Labore labore
                                                veniam
                                                irure irure
                                                ipsum pariatur mollit magna in cupidatat dolore magna irure esse
                                                tempor
                                                ad
                                                mollit.
                                                Dolore commodo nulla minim amet ipsum officia consectetur amet
                                                ullamco
                                                voluptate nisi
                                                commodo ea sit eu.</div>
                                            
                                                mollit
                                                irure quis
                                                est nostrud cillum consequat Lorem esse do quis dolor esse fugiat
                                                sunt
                                                do.
                                                Eu ex commodo
                                                veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore
                                                anim
                                                cupidatat.
                                                eserunt officia id Lorem nostrud aute id commodo elit eiusmod enim
                                                irure
                                                amet eiusmod
                                                qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua
                                                non
                                                et
                                                quis aliquip
                                                ad irure in labore cillum elit enim. Consequat aliquip incididunt
                                                ipsum
                                                et
                                                minim laborum
                                                laborum laborum et cillum labore. Deserunt adipisicing cillum id
                                                nulla
                                                minim
                                                nostrud
                                                labore eiusmod et amet.</div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Block-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Card Body-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
@endsection
