@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card p-4">
                    <div class="row">
                        <div class="col text-end">
                            <button class="btn btn-icon btn-3 btn-primary my-auto" style="background-color: #003569"
                                type="button" data-bs-toggle="modal" data-bs-target="#create_admin">
                                <span class="btn-inner--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_857_1798)">
                                          <path d="M15.0001 10.8333H10.8334V15C10.8334 15.4583 10.4584 15.8333 10.0001 15.8333C9.54175 15.8333 9.16675 15.4583 9.16675 15V10.8333H5.00008C4.54175 10.8333 4.16675 10.4583 4.16675 9.99999C4.16675 9.54166 4.54175 9.16666 5.00008 9.16666H9.16675V4.99999C9.16675 4.54166 9.54175 4.16666 10.0001 4.16666C10.4584 4.16666 10.8334 4.54166 10.8334 4.99999V9.16666H15.0001C15.4584 9.16666 15.8334 9.54166 15.8334 9.99999C15.8334 10.4583 15.4584 10.8333 15.0001 10.8333Z" fill="white"/>

                                        </g>
                                        <defs>
                                          <clipPath id="clip0_857_1798">
                                            <rect width="20" height="20" fill="white"/>
                                          </clipPath>
                                        </defs>
                                      </svg>
                                </span>
                                <span class="btn-inner--text">เพิ่มผู้ดูแลระบบ</span>
                            </button>
                            @include('user.admin.create')
                        </div>
                    </div>
                    <div class="table-responsive p-">
                        <table class="table align-items-center mb-0 table-hover">
                            <thead>


                                <tr>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        ลำดับ</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        รหัสประจำตัว / ชื่อ-นามสกุล</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        สิทธิ์การเข้าถึงเมนู</th>
                                        <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-3">
                                            สถานะ</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                                วันที่อัปเดต</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                    </th>
                                </tr>
                            </thead>



                            @foreach ($accessRights as $accessRight)
                                <tr>
                                <td>
                                  <div class="d-flex px-2 py-1">

                                    <div class="d-flex flex-column justify-content-center">
                                      <h6 class="mb-0 text-xs">{{ $loop->iteration }}</h6>
                                    </div>
                                  </div>
                                </td>

                                <td>
                                  <p class="text-xs font-weight-bold mb-0">รหัสประจำตัว: {{ $accessRight->code }}</p>
                                  <p class="text-xs text-secondary mb-0">ชื่อ: N/A นามสกุล: N/A</p>
                                </td>
                                <td>

                                    @php
                                        $names = explode(', ', $accessRight->concatenated_names);
                                    @endphp
                                    @foreach ($names as $name)
                                        {{-- @if ($name == 'faculty-major-management')
                                            <span class="badge bg-gradient-primary text-xs">คณะ/สาขา<span
                                                    class="badge bg-gradient-success"></span></span>
                                        @endif --}}

                                        {{-- @php
                                        $contentManagement = false;
                                      @endphp

                                      @if ($name === 'content-management')
                                        @php
                                          $contentManagement = true;
                                        @endphp
                                        {{$contentManagement}}
                                      @endif --}}

                                      @if ($name == 'user-management')
                                      <span class="badge bg-gradient-primary text-xxs">จัดการผู้ใช้งาน<span
                                              class="badge bg-gradient-success"></span></span>
                                  @endif
                                      @if ($name == 'student-management')
                                          <span class="badge bg-gradient-info text-xxs">นักศึกษา<span
                                                  class="badge bg-gradient-success"></span></span>
                                      @endif
                                      @if ($name == 'professor-management')
                                          <span class="badge bg-gradient-info text-xxs">อาจารย์<span
                                                  class="badge bg-gradient-success"></span></span>
                                      @endif
                                      @if ($name == 'staff-management')
                                          <span class="badge bg-gradient-info text-xxs">บุคลากร<span
                                                  class="badge bg-gradient-success"></span></span>
                                      @endif
                                      @if ($name == 'alumni-management')
                                          <span class="badge bg-gradient-info text-xxs">ศิษย์เก่า<span
                                                  class="badge bg-gradient-success"></span></span>
                                      @endif
                                      @if ($name == 'admin-management')
                                          <span class="badge bg-gradient-info text-xxs">ผู้ดูแลระบบ<span
                                                  class="badge bg-gradient-success"></span></span>
                                      @endif

                                        @if ($name == 'subject-management')
                                            <span class="badge bg-gradient-primary text-xxs">รายวิขา<span
                                                    class="badge bg-gradient-success"></span></span>
                                        @endif

                                        @if ($name == 'groupchat-management')
                                            <span class="badge bg-gradient-primary text-xxs">กลุ่มแชท<span
                                                    class="badge bg-gradient-success"></span></span>
                                        @endif
                                        @if ($name == 'room-management')
                                            <span class="badge bg-gradient-primary text-xxs">ห้องเรียน<span
                                                    class="badge bg-gradient-success"></span></span>
                                        @endif

                                                 @if ($name == 'faculty-major-management')
                                            <span class="badge bg-gradient-primary text-xxs">คณะ/สาขา<span
                                                    class="badge bg-gradient-success"></span></span>
                                        @endif

                                        @if ($name == 'content-management')
                                            <span class="badge bg-gradient-primary text-xxs">ประกาศและข่าวสาร<span
                                                    class="badge bg-gradient-success"></span></span>
                                        @endif

                                        @if ($name == 'calendar-activity-management')
                                            <span class="badge bg-gradient-primary text-xxs">กิจกรรม<span
                                                    class="badge bg-gradient-success"></span></span>
                                        @endif
                                        @if ($name == 'timetable-management')
                                            <span class="badge bg-gradient-primary text-xxs">ตารางเรียน-สอน<span
                                                    class="badge bg-gradient-success"></span></span>
                                        @endif
                                        @if ($name == 'prefix-management')
                                            <span class="badge bg-gradient-primary text-xxs">คำนำหน้่า<span
                                                    class="badge bg-gradient-success"></span></span>
                                        @endif
                                    @endforeach
                                </td>

                                <td>
                                      @if ($accessRight->status == true)
                                        <span class="badge bg-gradient-success my-auto pt-2">ACTIVE</span>
                                        @endif

                                </td>
                                <td>
                                    <span class="text-secondary text-sm font-weight-bolder opacity-7">{{ $accessRight->updated_at }}</span>
                                </td>
                                <td class="text-end">
                                    <form method="PUT" action="{{route('admin.show',$accessRight->code)}}">
                                        <button class="btn btn-icon btn-3 btn-primary btn-xs my-auto" style="background-color: #6882A8">
                                            <span class="btn-inner--icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <g clip-path="url(#clip0_190_2829)">
                                                        <path d="M2.25 13.095V15.375C2.25 15.585 2.415 15.75 2.625 15.75H4.905C5.0025 15.75 5.1 15.7125 5.1675 15.6375L13.3575 7.45501L10.545 4.64251L2.3625 12.825C2.2875 12.9 2.25 12.99 2.25 13.095ZM15.5325 5.28001C15.825 4.98751 15.825 4.51501 15.5325 4.22251L13.7775 2.46751C13.485 2.17501 13.0125 2.17501 12.72 2.46751L11.3475 3.84001L14.16 6.65251L15.5325 5.28001Z" fill="white" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_190_2829">
                                                            <rect width="18" height="18" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="btn-inner--text">แก้ไข</span>
                                        </button>
                                    </form>

                                </td>






                            @endforeach
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
