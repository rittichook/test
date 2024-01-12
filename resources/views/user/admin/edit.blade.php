@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card p-4">
                    <div class="row mb-3">
                        <div class="col" style="border: #f6f9fc">
                            <a href="{{ route('admin.index') }}">
                                <button class="btn btn-icon btn-3 btn-xs btn-outline-secondary my-auto" type="button"
                                    data-bs-toggle="modal" data-bs-target="">
                                    <span class="btn-inner--icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                                        </svg>
                                    </span>
                                    <span class="btn-inner--text my-auto"></span>
                                </button>
                            </a>
                            <span class="mb-0 text-sm mt-2"></span>
                        </div>
                        <div class="col text-end" style="border: #f6f9fc">
                            {{-- <button class="btn btn-icon btn-3 btn-xs btn-outline-danger  my-auto font-weight-bold" type="button"
                            data-bs-toggle="modal" data-bs-target="">
                            <span class="btn-inner--icon">
                            </span>
                            <span class="btn-inner--text">ลบผู้ดูแลระบบ</span>
                        </button> --}}
                            <button class="btn btn-icon btn-3 btn-xs text-light my-auto font-weight-bold" type="button" style="background-image: linear-gradient(310deg, #6882A8 0%, #003569 100%"
                                data-bs-toggle="modal" data-bs-target="">
                                <span class="btn-inner--icon">
                                </span>
                                <span class="btn-inner--text">บันทึก</span>
                            </button>

                        </div>
                    </div>
                    <style>
                        .form-check-input:checked[type="checkbox"] {
                            background-image: linear-gradient(310deg, #6882A8 0%, #003569 100%);
                        }

                        .col {
                            border: 1px solid #f6f9fc;
                            padding: 10px;
                            /* Optional: Add padding to the rows for better spacing */
                        }
                    </style>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="{{ asset('https://res.cloudinary.com/dsxvhnxol/image/upload/v1695186574/xm9cwjhyijgy3grno37k.png') }}"
                                        class="avatar avatar-sm me-3">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-xs">รหัสประจำตัว: {{ $name->code }} ชื่อ : N/A นามสกุล : N/A</h6>
                                    <p class="text-xs text-secondary mb-0">ตำแหน่ง : N/A แผนก : N/A </p>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">

                            <h6 class="mb-0 text-sm mt-2">View</h6>


                        </div>
                        <div class="col text-center">
                            <h6 class="mb-0 text-sm mt-2">Add & Edit</h6>


                        </div>
                        <div class="col text-center">
                            <h6 class="mb-0 text-sm mt-2">Delete</h6>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm">การจัดการผู้ใช้งาน</h6>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm mx-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5"/>
                                  </svg>
                                นักศึกษา
                            </h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1"@if ($studentManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($studentManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($studentManagement == 1) checked @endif >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm  mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5"/>
                              </svg> อาจารย์</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($professorManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($professorManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($professorManagement == 1) checked @endif >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm  mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5"/>
                              </svg> บุคลากร</h6>

                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($staffManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($staffManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($staffManagement == 1) checked @endif >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm  mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5"/>
                              </svg> ศิษย์เก่า</h6>


                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($alumniManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($alumniManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($alumniManagement == 1) checked @endif >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5"/>
                              </svg> ผู้ดูแลระบบ</h6>

                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($adminManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($adminManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($adminManagement == 1) checked @endif >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm">การจัดการข่าวสารและประกาศ</h6>


                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($contentManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($contentManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($contentManagement == 1) checked @endif >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm">การจัดการกิจกรรม</h6>


                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($calendarActivityManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($calendarActivityManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($calendarActivityManagement == 1) checked @endif >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm">การจัดการตารางเรียน / สอน</h6>


                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($timetableManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($timetableManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($timetableManagement == 1) checked @endif >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm">การจัดการคำนำหน้า</h6>


                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($prefixManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($prefixManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($prefixManagement == 1) checked @endif >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm">การจัดการคณะ / สาขา</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($facultyMajorManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($facultyMajorManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($facultyMajorManagement == 1) checked @endif >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm">การจัดการรายวิชา</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($subjectManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($subjectManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($subjectManagement == 1) checked @endif >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm">การจัดการห้องเรียน / สถานที่</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($roomManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($roomManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($roomManagement == 1) checked @endif >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm">การจัดการข้อผิดพลาด</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($roomManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($roomManagement == 1) checked @endif >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox" value=""
                                    id="fcustomCheck1" @if ($roomManagement == 1) checked @endif >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
