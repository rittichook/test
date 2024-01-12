@extends('layout.master')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">จำนวนสมาชิกทั้งหมด</p>
                                    <h5 class="text-secondary font-weight-bolde">
                                        {{$allUser}}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape shadow-primary text-center rounded-circle text-light" style="background-image: linear-gradient(310deg, #6882A8 0%, #003569 100%);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-people " style="margin-top: 0.65rem !important;"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">จำนวนนักศึกษา</p>
                                    <h5 class="text-secondary font-weight-bolde">
                                        {{$allStudent}}
                                    </h5>

                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape shadow-danger text-center rounded-circle text-light" style="background-image: linear-gradient(310deg, #6882A8 0%, #003569 100%);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-mortarboard-fill"
                                        style="margin-top: 0.65rem !important;" viewBox="0 0 16 16">
                                        <path
                                            d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z" />
                                        <path
                                            d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z" />
                                    </svg>
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">จำนวนอาจารย์</p>
                                    <h5 class="text-secondary font-weight-bolde">
                                        {{$allProfessor}}

                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape shadow-success text-center rounded-circle text-light" style="background-image: linear-gradient(310deg, #6882A8 0%, #003569 100%);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-people-fill"
                                        style="margin-top: 0.65rem !important;" viewBox="0 0 16 16">
                                        <path
                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">เข้าสู่ระบบ</p>
                                    <h5 class="text-secondary font-weight-bolde">
                                        {{$userAgoraAccount}}
                                    </h5>

                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape shadow-warning text-center rounded-circle text-light" style="background-image: linear-gradient(310deg, #6882A8 0%, #003569 100%);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-people-fill"
                                        style="margin-top: 0.65rem !important;" viewBox="0 0 16 16">
                                        <path
                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">

                        @include('dashboard.calendar')
                    </div>
                </div>
            </div> --}}

        {{-- <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-light" role="alert">
                            A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>

                        <div class="alert alert-light" role="alert">
                            A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>

                        <div class="alert alert-light" role="alert">
                            A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>

                        <div class="alert alert-light" role="alert">
                            A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>

                        <div class="alert alert-light" role="alert">
                            A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>

                        <div class="alert alert-light" role="alert">
                            A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>

                        <div class="alert alert-light" role="alert">
                            A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>

                        <div class="alert alert-light" role="alert">
                            A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>
                        <div class="alert alert-light" role="alert">
                            A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}



    @endsection
