@extends('layout.master')

@section('content')
    <style>
        .pagination {
            float: right;
            --bs-pagination-border-color: #ffffff;
            --bs-pagination-disabled-border-color: #ffffff;

            --bs-pagination-active-bg: #003569;
        }

        .page-item .page-link,
        .page-item span {
            color: #003569;
            font-weight: bold;

        }

        .page-item .page-link,
        .page-item span {
            color: #003569;
            font-weight: bold;

        }

        .page-item.active .page-link,
        .page-item.active span {
            color: #ffffff;
            /* Text color for active page link */
            border: none;
        }

        .card {
            height: 85vh;
        }
    </style>
    <div class="card">
        <div class="container-fluid">
            <a href="{{route('professor.index')}}">
            <p class="mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <g clip-path="url(#clip0_267_1642)">
                        <path
                            d="M9.69997 18.3C10.09 17.91 10.09 17.28 9.69997 16.89L5.82997 13H21C21.55 13 22 12.55 22 12C22 11.45 21.55 11 21 11H5.82997L9.70997 7.12001C10.1 6.73001 10.1 6.10001 9.70997 5.71001C9.31997 5.32001 8.68997 5.32001 8.29997 5.71001L2.69997 11.3C2.30997 11.69 2.30997 12.32 2.69997 12.71L8.28997 18.3C8.67997 18.68 9.31997 18.68 9.69997 18.3Z"
                            fill="#003569" />
                    </g>
                    <defs>
                        <clipPath id="clip0_267_1642">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

                รายชื่อนักศึกษา
            </p>
            </a>
            <div class="nav-wrapper position-relative end-0 mt-3">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#profile-tabs-simple"
                            role="tab" aria-controls="profile" aria-selected="true">
                            ข้อมูลผู้ใช้งาน
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#dashboard-tabs-simple" role="tab"
                            aria-controls="dashboard" aria-selected="false">
                            เปลี่ยนรหัสผ่าน
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Optional: Add your tab content here -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="profile-tabs-simple" role="tabpanel" aria-labelledby="profile">

                    <div class="row mt-2">
                        <div class="col-3">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="exampleFormControlInput1">รูปนักศึกษา</label>

                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-icon btn-3 btn- w-100" type="button" style="height: 328px">
                                            <span class="btn-inner--icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                                    viewBox="0 0 25 24" fill="none">
                                                    <g clip-path="url(#clip0_331_4358)">
                                                        <path
                                                            d="M21.52 5H19.5V2.98C19.5 2.44 19.06 2 18.52 2H18.49C17.94 2 17.5 2.44 17.5 2.98V5H15.49C14.95 5 14.51 5.44 14.5 5.98V6.01C14.5 6.56 14.94 7 15.49 7H17.5V9.01C17.5 9.55 17.94 10 18.49 9.99H18.52C19.06 9.99 19.5 9.55 19.5 9.01V7H21.52C22.06 7 22.5 6.56 22.5 6.02V5.98C22.5 5.44 22.06 5 21.52 5ZM16.5 9.01V8H15.49C14.96 8 14.46 7.79 14.08 7.42C13.71 7.04 13.5 6.54 13.5 5.98C13.5 5.62 13.6 5.29 13.77 5H5.5C4.4 5 3.5 5.9 3.5 7V19C3.5 20.1 4.4 21 5.5 21H17.5C18.6 21 19.5 20.1 19.5 19V10.72C19.2 10.89 18.86 11 18.48 11C17.39 10.99 16.5 10.1 16.5 9.01ZM16.46 19H6.5C6.09 19 5.85 18.53 6.1 18.2L8.08 15.57C8.29 15.29 8.7 15.31 8.9 15.59L10.5 18L13.11 14.52C13.31 14.26 13.7 14.25 13.9 14.51L16.85 18.19C17.11 18.52 16.88 19 16.46 19Z"
                                                            fill="#ACACAC" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_331_4358">
                                                            <rect width="24" height="24" fill="white"
                                                                transform="translate(0.5)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg> </span>
                                        </button>
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-6 text-center">
                                    <button class="btn text-light w-100 btn-xs" type="button"
                                        style="background-image: linear-gradient(310deg, #6882A8 0%, #003569 100%);">อัปโหลดรูปโปรไฟล์</button>

                                </div>
                                <div class="col-6 text-center my-auto">
                                    <p> ยังไม่มีไฟล์ที่เลือก
                                    </p>
                                </div>
                                <div class="col-12">
                                    <p> ชนิดไฟล์ JPG และ PNG ขนาดไฟล์ไม่เกิน 1MB เท่านั้น
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">รหัสนักศึกษา</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="รหัสนักศึกษา">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">สถานะ</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">คำนำหน้า</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">ชื่อจริง (ภาษาไทย)</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="ชื่อจริง (ภาษาไทย)">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">นามสกุล (ภาษาไทย)</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="นามสกุล (ภาษาไทย)">
                                    </div>
                                </div>
                                <div class="col-2">

                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">ชื่อจริง (ภาษาอังกฤษ)</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="ชื่อจริง (ภาษาอังกฤษ)">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">นามสกุล (ภาษาอังกฤษ)</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="นามสกุล (ภาษาอังกฤษ)">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">ชั้นปี</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="ชั้นปี">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">คณะ</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="คณะ">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">สาขา</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="สาขา">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">อีเมล</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="อีเมล">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">เบอร์โทรศัพท์</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="เบอร์โทรศัพท์">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">วันเกิด</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="วันเกิด">
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="row" style="margin-top: 30%">
                            <div class="col-6 text-start">
                                <button class="btn btn-outline-danger" type="button">ลบผู้ใช้งาน</button>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{route('professor.index')}}">

                                <button class="btn btn-outline-primary" type="button">ยกเลิก</button>
                                </a>
                                <button class="btn text-light" type="button"
                                    style="background-image: linear-gradient(310deg, #6882A8 0%, #003569 100%);">บันทึก</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="dashboard-tabs-simple" role="tabpanel" aria-labelledby="dashboard">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">ชื่อผู้ใช้งาน</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="อีเมล">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">รหัสผ่าน</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="อีเมล">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">ยืนยันรหัสผ่าน</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="อีเมล">
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <a href="{{route('professor.index')}}">
                            <button class="btn btn-outline-primary" type="button">ยกเลิก</button>
                            </a>
                            <button class="btn text-light" type="button"
                                style="background-image: linear-gradient(310deg, #6882A8 0%, #003569 100%);">บันทึก</button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
