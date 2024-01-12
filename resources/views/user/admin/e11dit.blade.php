@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
<div class=" container-fluid p-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4" @if($contentManagement) checked @endif>
                    <label class="form-check-label me-2" for="customCheck4">จัดการประกาศและข่าวสาร</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4" @if($timetableManagement) checked @endif>
                    <label class="form-check-label me-2" for="customCheck4">จัดการตารางเรียน-สอน</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4" @if($prefixManagement) checked @endif>
                    <label class="form-check-label me-2" for="customCheck4">จัดการคำนำหน้า</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4" @if($facultyMajorManagement) checked @endif>
                    <label class="form-check-label me-2" for="customCheck4">จัดการคณะ/สาขา</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4" @if($groupchatManagement) checked @endif>
                    <label class="form-check-label me-2" for="customCheck4">จัดการกลุ่มแชท</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4" @if($userManagement) checked @endif>
                    <label class="form-check-label me-2" for="customCheck4">จัดการผู้ใช้งาน</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4" @if($studentManagement) checked @endif>
                    <label class="form-check-label me-2" for="customCheck4">จัดการนักศึกษา</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4" @if($professorManagement) checked @endif>
                    <label class="form-check-label me-2" for="customCheck4">จัดการอาจารย์</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4" @if($staffManagement) checked @endif>
                    <label class="form-check-label me-2" for="customCheck4">จัดการบุคลากร</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4" @if($adminManagement) checked @endif>
                    <label class="form-check-label me-2" for="customCheck4">จัดการผู้ดูแลระบบ</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4" @if($alumniManagement) checked @endif>
                    <label class="form-check-label me-2" for="customCheck4">จัดการศิษย์เก่า</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4" @if($calendarActivityManagement) checked @endif>
                    <label class="form-check-label me-2" for="customCheck4">จัดการปฏิทิน-กิจกรรม</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4" @if($subjectManagement) checked @endif>
                    <label class="form-check-label me-2" for="customCheck4">จัดการรายวิชา</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name[]" value="staff-management" id="customCheck4" @if($roomManagement) checked @endif>
                    <label class="form-check-label me-2" for="customCheck4">จัดการห้องเรียน</label>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
