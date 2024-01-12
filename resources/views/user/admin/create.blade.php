<style>
    .modal-content {
        padding: 2%;
        height: 96.5vh;
        border: #ced4da;
        box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
    }

    .modal.fade.show {
        background-color: #ffffff;
    }
</style>

<div class="modal fade" id="CreateAdmin" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path
                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                    </svg> เพิ่มผู้ดูแลระบบ
                </h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.store') }}" method="POST">
                    @csrf
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

                                </div>
                                <div class="d-flex flex-column justify-content-center w-100">
                                    <input type="text" list="brow" class="form-control form-control-sm" name="code" placeholder="ค้นหาผู้ใช้งาน" / required>
                                    <datalist id="brow">
                                        @foreach ($userArray as $userData)
                                        <option value="{{ $userData['username'] }}">ชื่อ : {{ $userData['first_name'] }} นามสกุล :
                                            {{ $userData['last_name'] }}</option>
                                         @endforeach
                                    </datalist>


                                </div>

                            </div>
                        </div>
                        <div class="col text-center">
                            <h6 class="mb-0 text-sm mt-2">ALL</h6>
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
                            <h6 class="mb-0 text-sm text-start">การจัดการผู้ใช้งาน</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm mx-2 text-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5" />
                                </svg>
                                นักศึกษา
                            </h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" name="name[]" value="student-management" >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm  mx-2 text-start"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5" />
                                </svg> อาจารย์</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" name="name[]" value="professor-management">
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm  mx-2 text-start"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5" />
                                </svg> บุคลากร</h6>

                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" name="name[]" value="staff-management" >
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm  mx-2 text-start"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5" />
                                </svg> ศิษย์เก่า</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" name="name[]" value="alumni-management">
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm mx-2 text-start"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5" />
                                </svg> ผู้ดูแลระบบ</h6>

                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" name="name[]" value="admin-management">
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm text-start">การจัดการข่าวสารและประกาศ</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" name="name[]" value="content-management">
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm text-start">การจัดการกิจกรรม</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" name="name[]" value="calendar-activity-management">
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm text-start">การจัดการตารางเรียน / สอน</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" name="name[]" value="timetable-management">
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm text-start">การจัดการคำนำหน้า</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" name="name[]" value="prefix-management">
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm text-start">การจัดการคณะ / สาขา</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" name="name[]" value="faculty-major-management">
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm text-start">การจัดการรายวิชา</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" name="name[]" value="subject-management">
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm text-start">การจัดการห้องเรียน / สถานที่</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" name="name[]" value="room-management">
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="mb-0 text-sm text-start">การจัดการข้อผิดพลาด</h6>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" name="name[]" value="room-management">
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto ">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="form-check mx-auto">
                                <input class="form-check-input text-center" type="checkbox"
                                    id="fcustomCheck1" disabled>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-xs bg-gradient-secondary"
                    data-bs-dismiss="modal">ยกเลิก</button>
                <button type="submit" class="btn btn-xs text-light font-weight-bolder"
                    style="background-color: #1D4F89">บันทึก</button>
            </div>
            </form>
        </div>
    </div>
</div>
