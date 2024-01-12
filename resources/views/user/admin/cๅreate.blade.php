<style>
    .modal-backdrop {
        height: 0%;
    }
    .form-check{
        float: left;
    }
    .col-sm-2{
width: 10%
    }

</style>

<div class="modal fade" id="create_admin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <g clip-path="url(#clip0_857_1798)">
                          <path d="M15.0001 10.8333H10.8334V15C10.8334 15.4583 10.4584 15.8333 10.0001 15.8333C9.54175 15.8333 9.16675 15.4583 9.16675 15V10.8333H5.00008C4.54175 10.8333 4.16675 10.4583 4.16675 9.99999C4.16675 9.54166 4.54175 9.16666 5.00008 9.16666H9.16675V4.99999C9.16675 4.54166 9.54175 4.16666 10.0001 4.16666C10.4584 4.16666 10.8334 4.54166 10.8334 4.99999V9.16666H15.0001C15.4584 9.16666 15.8334 9.54166 15.8334 9.99999C15.8334 10.4583 15.4584 10.8333 15.0001 10.8333Z" fill="black"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_857_1798">
                            <rect width="20" height="20" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>
                เพิ่มผู้ดูแลระบบ
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                      </div>
                    </div>
                    <fieldset class="row mb-3">
                      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                          <label class="form-check-label" for="gridRadios1">
                            First radio
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                          <label class="form-check-label" for="gridRadios2">
                            Second radio
                          </label>
                        </div>
                        <div class="form-check disabled">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                          <label class="form-check-label" for="gridRadios3">
                            Third disabled radio
                          </label>
                        </div>
                      </div>
                    </fieldset>
                    <div class="row mb-3">
                      <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck1">
                          <label class="form-check-label" for="gridCheck1">
                            Example checkbox
                          </label>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </form>


                {{-- <form action="{{ route('admin.store') }}" method="post">
                    @csrf
                    <div class="container-fluid w-75">
                        <div class="form-group">
                            <label class="form-check-label me-2" for="customCheck1">ค้นหาผู้ใช้งาน</label>
                            <input list="brow" name="code" class="form-control form-control-sm">
                            <datalist id="brow">
                                @foreach ($userArray as $userData)
                                    <option value="{{ $userData['username'] }}">{{ $userData['first_name'] }}
                                        {{ $userData['last_name'] }}</option>
                                @endforeach
                            </datalist>
                    </div>

                    <div class="row text-end">
                        <div class="col-4 text-gr adient text-primary font-weight-bold">
                            จัดการผู้ใช้งาน |
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="name[]" value="student-management" id="customCheck1">
                                <label class="form-check-label me-2" for="customCheck1">นักศึกษา</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="name[]" value="professor-management" id="customCheck3">
                                <label class="form-check-label me-2" for="customCheck1">อาจารย์</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4">
                                <label class="form-check-label me-2" for="customCheck1">บุคลากร</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="name[]" value="alumni-management" id="customCheck5">
                                <label class="form-check-label me-2" for="customCheck1">ศิษย์เก่า</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="name[]" value="admin-management" id="customCheck6">
                                <label class="form-check-label me-2" for="customCheck1">ผู้ดูแลระบบ</label>
                            </div>
                        </div>
                    </div>


                    <div class="row text-end">
                        <div class="col-4 text-gr adient text-primary font-weight-bold">
                            จัดการปฎิทิน |
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="name[]" value="calendar-activity-management" id="customCheck6">
                                <label class="form-check-label me-2" for="customCheck1">จัดการปฎิทิน-กิจกรรม</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="name[]" value="timetable-management" id="customCheck6">
                                <label class="form-check-label me-2" for="customCheck1">จัดการตารางเรียน-ตารางสอน</label>
                            </div>
                        </div>
                    </div>


                    <div class="row text-end">
                        <div class="col-4 text-gr adient text-primary font-weight-bold">
                            จัดการประกาศและข่าวสาร |
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="name[]" value="content-management" id="customCheck6">
                                <label class="form-check-label me-2" for="customCheck1">จัดการประกาศและข่าวสาร</label>
                            </div>
                        </div>
                    </div>

                    <div class="row text-end">
                        <div class="col-4 text-gr adient text-primary font-weight-bold">
                            จัดการข้อมูลพื้นฐานของระบบ |
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="name[]" value="prefix-management" id="customCheck6">
                                <label class="form-check-label me-2" for="customCheck1">จัดการคำนำหน้า</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="name[]" value="faculty-major-management" id="customCheck6">
                                <label class="form-check-label me-2" for="customCheck1">จัดการคณะ/สาขา</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="name[]" value="subject-management" id="customCheck6">
                                <label class="form-check-label me-2" for="customCheck1">จัดการรายวิชา</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="name[]" value="room-management" id="customCheck6">
                                <label class="form-check-label me-2" for="customCheck1">จัดการห้องเรียน</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="name[]" value="groupchat-management" id="customCheck6">
                                <label class="form-check-label me-2" for="customCheck1">จัดการกลุ่มแชท</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkAll">
                        <label class="form-check-label me-2" for="checkAll">เลือกทั้งหมด</label>
                    </div>
                </div>


<script>
    const checkAllCheckbox = document.getElementById('checkAll');
    const checkboxesToControl = document.querySelectorAll('.form-check-input:not(#checkAll)');

    checkAllCheckbox.addEventListener('change', function () {
        const isChecked = checkAllCheckbox.checked;
        checkboxesToControl.forEach(function (checkbox) {
            checkbox.checked = isChecked;
        });
    });
</script> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn btn-outline" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="submit" class="btn text-white" style="background-color: #003569">บันทึก</button>
            </form>
        </div>
        </div>
    </div>
</div>
