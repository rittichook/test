@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card p-4">
                    <div class="row">
                        <div class="col">
                            {{-- <div class="form-group">
                                <input class="form-control form-control-sm" type="search" value="ค้นหา" id="example-search-input">
                            </div> --}}
                        </div>
                        <div class="col">
                            {{-- <div class="form-group">
                                <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                  <option>-</option>
                                </select>
                              </div> --}}
                        </div>
                        <div class="col">
                            {{-- <div class="form-group">
                                <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                  <option>-</option>
                                </select>
                              </div> --}}
                        </div>
                        <div class="col text-end">
                            <button class="btn btn-icon btn-3 btn-primary btn-xs my-auto" style="background-color: #003569" type="button">
                                <span class="btn-inner--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_48_241)">
                                          <path d="M15 12C17.21 12 19 10.21 19 8C19 5.79 17.21 4 15 4C12.79 4 11 5.79 11 8C11 10.21 12.79 12 15 12ZM6 10V8C6 7.45 5.55 7 5 7C4.45 7 4 7.45 4 8V10H2C1.45 10 1 10.45 1 11C1 11.55 1.45 12 2 12H4V14C4 14.55 4.45 15 5 15C5.55 15 6 14.55 6 14V12H8C8.55 12 9 11.55 9 11C9 10.45 8.55 10 8 10H6ZM15 14C12.33 14 7 15.34 7 18V19C7 19.55 7.45 20 8 20H22C22.55 20 23 19.55 23 19V18C23 15.34 17.67 14 15 14Z" fill="#FFFFFF"/>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_48_241">
                                            <rect width="24" height="24" fill="white"/>
                                          </clipPath>
                                        </defs>
                                      </svg>
                                   </span>
                            <span class="btn-inner--text">เพิ่มผู้ดูแลระบบ</span>
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive p-">
                        <table class="table align-items-center mb-0 table-hover">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        ลำดับ</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        รหัสประจำตัว</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        สิทธิ์</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($data as $datas)
                                <tr>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $loop->iteration }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">{{ $datas }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-xs font-weight-bold">
                                            @foreach ($accessRights as $accessRight)
                                                @if ($accessRight->code === $datas)
                                                    @php
                                                        $badgeLabels = [
                                                            'user-management' => 'จัดการผู้ใช้งาน',
                                                            'faculty-major-management' => 'จัดการคณะ/สาขาวิชา',
                                                            'content-management' => 'จัดการข่าวสารและประกาศ',
                                                            'room-management' => 'จัดการห้องเรียน',
                                                            'calendar-activity-management' => 'จัดการปฏิทิน-กิจกรรม',
                                                            'prefix-management' => 'จัดการคำนำหน้า',
                                                            'timetable-management' => 'จัดการตารางเรียน-สอน',
                                                            'groupchat-management' => 'จัดการกลุ่มแชท',
                                                            'subject-management' => 'จัดการรายวิชา',
                                                        ];

                                                        $badgeLabel = $badgeLabels[$accessRight->name] ?? null;
                                                    @endphp
                                                    @if ($badgeLabel)
                                                        <span class="badge bg-primary">{{ $badgeLabel }}</span>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </span>
                                    </td>
                                    <td>
                                        <button class="btn btn-icon btn-3 btn-primary btn-xs my-auto" style="background-color: #003569" type="button">
                                            <span class="btn-inner--icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                    <g clip-path="url(#clip0_190_2829)">
                                                    <path d="M2.25 13.095V15.375C2.25 15.585 2.415 15.75 2.625 15.75H4.905C5.0025 15.75 5.1 15.7125 5.1675 15.6375L13.3575 7.45501L10.545 4.64251L2.3625 12.825C2.2875 12.9 2.25 12.99 2.25 13.095ZM15.5325 5.28001C15.825 4.98751 15.825 4.51501 15.5325 4.22251L13.7775 2.46751C13.485 2.17501 13.0125 2.17501 12.72 2.46751L11.3475 3.84001L14.16 6.65251L15.5325 5.28001Z" fill="white"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_190_2829">
                                                        <rect width="18" height="18" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                </svg>        </span>
                                        <span class="btn-inner--text">แก้ไข</span>
                                        </button>                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
