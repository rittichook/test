    <style>

.avatar{
    border-radius: 100rem;
}
.text-white{
    color: #000;

}

.text-white {
    color: #000 !important;
}
    </style>
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid px-3 mt-2">
            @if (request()->is('dashboard'))
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;"></a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">แดชบอร์ด</li>
                    </ol>
                    <h6 class="font-weight-bolder text-dark mb-0">แดชบอร์ด</h6>
                </nav>
            @endif
            @if (request()->routeIs('student.index'))
                        <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5" href="javascript:;">จัดการผู้ใช้งาน</a></li>
                    <li class="breadcrumb-item text-sm active" aria-current="page">นักศึกษา</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">นักศึกษา</h6>
            </nav>
            @elseif (request()->routeIs('student.create'))
                        <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5" href="javascript:;">จัดการผู้ใช้งาน</a></li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5" href="javascript:;">นักศึกษา</a></li>
                    <li class="breadcrumb-item text-sm active" aria-current="page">เพิ่มผู้ใช้งาน</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">เพิ่มผู้ใช้งาน</h6>
            </nav>
            @elseif (request()->routeIs('student.show'))
                        <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5" href="javascript:;">จัดการผู้ใช้งาน</a></li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5" href="javascript:;">นักศึกษา</a></li>
                    <li class="breadcrumb-item text-sm active" aria-current="page">แก้ไขผู้ใช้งาน</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">แก้ไขผู้ใช้งาน</h6>
            </nav>
        @endif

        @if (request()->routeIs('professor.index'))
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">จัดการผู้ใช้งาน</a>
                </li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">อาจารย์</li>
            </ol>
            <h6 class="font-weight-bolder text-dark mb-0">อาจารย์</h6>
        </nav>
@elseif (request()->routeIs('professor.create'))
        <nav aria-label="breadcrumb">
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5" href="javascript:;">จัดการผู้ใช้งาน</a></li>
    <li class="breadcrumb-item text-sm"><a class="opacity-5" href="javascript:;">อาจารย์</a></li>
    <li class="breadcrumb-item text-sm active" aria-current="page">เพิ่มผู้ใช้งาน</li>
</ol>
<h6 class="font-weight-bolder mb-0">เพิ่มผู้ใช้งาน</h6>
</nav>
@elseif (request()->routeIs('professor.show'))
        <nav aria-label="breadcrumb">
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5" href="javascript:;">จัดการผู้ใช้งาน</a></li>
    <li class="breadcrumb-item text-sm"><a class="opacity-5" href="javascript:;">อาจารย์</a></li>
    <li class="breadcrumb-item text-sm active" aria-current="page">แก้ไขผู้ใช้งาน</li>
</ol>
<h6 class="font-weight-bolder mb-0">แก้ไขผู้ใช้งาน</h6>
</nav>
@endif


    @if (request()->is('staff'))
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">จัดการผู้ใช้งาน</a>
            </li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">บุคลากร</li>
        </ol>
        <h6 class="font-weight-bolder text-dark mb-0">บุคลากร</h6>
    </nav>
@endif
@if (request()->is('alumn'))
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">จัดการผู้ใช้งาน</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">ศิษย์เก่า</li>
    </ol>
    <h6 class="font-weight-bolder text-dark mb-0">ศิษย์เก่า</h6>
</nav>
@endif
@if (request()->is('admin'))
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">จัดการผู้ใช้งาน</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">ผู้ดูแลระบบ</li>
    </ol>
    <h6 class="font-weight-bolder text-dark mb-0">ผู้ดูแลระบบ</h6>
</nav>
@elseif (request()->routeIs('admin.create'))
<nav aria-label="breadcrumb">
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
<li class="breadcrumb-item text-sm"><a class="opacity-5" href="javascript:;">จัดการผู้ใช้งาน</a></li>
<li class="breadcrumb-item text-sm active" aria-current="page">ผู้ดูแลระบบ</li>
</ol>
<h6 class="font-weight-bolder mb-0">แก้ไขผู้ดูแลระบบ</h6>
</nav>
@endif
@if (request()->is('activity'))
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;"></a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">จัดการปฏิทิน-กิจกรรม</li>
    </ol>
    <h6 class="font-weight-bolder text-dark mb-0">จัดการปฏิทิน-กิจกรรม</h6>
</nav>
@endif
@if (request()->is('content'))
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;"></a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">จัดการข่าวสารและประกาศ</li>
    </ol>
    <h6 class="font-weight-bolder text-dark mb-0">จัดการข่าวสารและประกาศ</h6>
</nav>
@endif
@if (request()->is('timetable'))
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;"></a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">จัดการตารางเรียน-สอน</li>
    </ol>
    <h6 class="font-weight-bolder text-dark mb-0">จัดการตารางเรียน-สอน</h6>
</nav>
@endif
@if (request()->is('prefix'))
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;"></a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">จัดการคำนำหน้า</li>
    </ol>
    <h6 class="font-weight-bolder text-dark mb-0">จัดการคำนำหน้า</h6>
</nav>
@endif
@if (request()->is('faculty'))
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;"></a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">จัดการคณะและสาขาวิชา</li>
    </ol>
    <h6 class="font-weight-bolder text-dark mb-0">จัดการคณะและสาขาวิชา</h6>
</nav>
@endif
@if (request()->is('subject'))
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;"></a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">จัดการรายวิขา</li>
    </ol>
    <h6 class="font-weight-bolder text-dark mb-0">จัดการรายวิขา</h6>
</nav>
@endif
@if (request()->is('room'))
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;"></a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">จัดการห้องเรียน</li>
    </ol>
    <h6 class="font-weight-bolder text-dark mb-0">จัดการห้องเรียน</h6>
</nav>
@endif
@if (request()->is('groupchat'))
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;"></a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">จัดการกลุ่มแชท</li>
    </ol>
    <h6 class="font-weight-bolder text-dark mb-0">จัดการกลุ่มแชท</h6>
</nav>
@endif



            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    {{-- <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div> --}}
                </div>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                            {{-- <i class="fa fa-user me-sm-1"></i> --}}
                            <span class="d-sm-inline d-none text-dark">

   {{-- {{ Auth::user()->accessRights }} --}}
   @if (Auth::user()->role=='admin')
   {{ Auth::user()->role }}
   <img src="{{ asset('https://res.cloudinary.com/dsxvhnxol/image/upload/v1695186574/xm9cwjhyijgy3grno37k.png') }}"
   class="avatar avatar-sm border me-3 mx-2">
   @endif


                                @if (isset(Auth::user()->teacherProfile))

                                    {{ Auth::user()->teacherProfile->code . ' ' . Auth::user()->teacherProfile->prefix->name . ' ' . Auth::user()->teacherProfile->first_name . ' ' . Auth::user()->teacherProfile->last_name }}
                            </span>

                            @if (Auth::user()->teacherProfile->avatar)
                                <img src="{{ Auth::user()->teacherProfile->avatar }}"
                                    class="avatar avatar-sm border me-3 mx-2">
                            @else
                                <img src="{{ asset('https://res.cloudinary.com/dsxvhnxol/image/upload/v1695186574/xm9cwjhyijgy3grno37k.png') }}"
                                    class="avatar avatar-sm border me-3 mx-2">
                            @endif
                        @elseif(isset(Auth::user()->studentProfile))

                            {{ Auth::user()->studentProfile->student_code . ' ' . Auth::user()->studentProfile->prefix->name . ' ' . Auth::user()->studentProfile->first_name . ' ' . Auth::user()->studentProfile->last_name }}</span>

                            @if (Auth::user()->studentProfile->avatar)
                                <img src="{{ Auth::user()->studentProfile->avatar }}"
                                    class="avatar avatar-sm border me-3 mx-2">
                            @else
                                <img src="{{ asset('https://res.cloudinary.com/dsxvhnxol/image/upload/v1695186574/xm9cwjhyijgy3grno37k.png') }}"
                                    class="avatar avatar-sm border me-3 mx-2">
                            @endif
                        @else
                            @endif

                        </a>
                    </li>
                    {{-- <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li> --}}
                    {{-- <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">N/A</span>N/A
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          N/A
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
