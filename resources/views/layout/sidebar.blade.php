<style>
    .submenu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
    }

    .submenu.show {
        max-height: 500px;
    }

    .navbar-vertical .navbar-brand>img,
    .navbar-vertical .navbar-brand-img {
        max-height: 40px;
    }

    .navbar-vertical.navbar-expand-xs .navbar-collapse {
        height: auto;
    }
</style>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main" style="background-color: #6882A8">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <div class="d-flex justify-content-center">
            <a class="navbar-brand m-0" href="" target="_blank">

                <img src="https://res.cloudinary.com/dsxvhnxol/image/upload/v1695186574/xm9cwjhyijgy3grno37k.png"
                    class="h-100 rounded-2" alt="main_logo">
                <span class="nav-link-text ms-1 font-weight-bold fs-5 pt-3"
                    style="font-size: 1rem !important; color:#003569;letter-spacing: 0.5px;">Blokchat STC</span>
            </a>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"
                    href="{{ route('dashboard-index') }}">
                    <div class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <g clip-path="url(#clip0_607_602)">
                                <path
                                    d="M4 13H10C10.55 13 11 12.55 11 12V4C11 3.45 10.55 3 10 3H4C3.45 3 3 3.45 3 4V12C3 12.55 3.45 13 4 13ZM4 21H10C10.55 21 11 20.55 11 20V16C11 15.45 10.55 15 10 15H4C3.45 15 3 15.45 3 16V20C3 20.55 3.45 21 4 21ZM14 21H20C20.55 21 21 20.55 21 20V12C21 11.45 20.55 11 20 11H14C13.45 11 13 11.45 13 12V20C13 20.55 13.45 21 14 21ZM13 4V8C13 8.55 13.45 9 14 9H20C20.55 9 21 8.55 21 8V4C21 3.45 20.55 3 20 3H14C13.45 3 13 3.45 13 4Z"
                                    fill="#333333" />
                            </g>
                            <defs>
                                <clipPath id="clip0_607_602">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">แดชบอร์ด</span>
                </a>
            </li>
            @foreach (Auth::user()->accessRights as $accessRight)
                @if ($accessRight->name == 'user-management' && $accessRight->status == '1')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('calendar') ? 'active' : '' }}" href="#"
                            onclick="toggleSubMenu1()">
                            <div
                                class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_610_1096)">
                                        <path
                                            d="M16 11C17.66 11 18.99 9.66 18.99 8C18.99 6.34 17.66 5 16 5C14.34 5 13 6.34 13 8C13 9.66 14.34 11 16 11ZM8 11C9.66 11 10.99 9.66 10.99 8C10.99 6.34 9.66 5 8 5C6.34 5 5 6.34 5 8C5 9.66 6.34 11 8 11ZM8 13C5.67 13 1 14.17 1 16.5V18C1 18.55 1.45 19 2 19H14C14.55 19 15 18.55 15 18V16.5C15 14.17 10.33 13 8 13ZM16 13C15.71 13 15.38 13.02 15.03 13.05C15.05 13.06 15.06 13.08 15.07 13.09C16.21 13.92 17 15.03 17 16.5V18C17 18.35 16.93 18.69 16.82 19H22C22.55 19 23 18.55 23 18V16.5C23 14.17 18.33 13 16 13Z"
                                            fill="#333333" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_610_1096">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <span class="nav-link-text ms-1 mt-1">จัดการผู้ใช้งาน</span>
                            <span class="ms-auto" id="submenuToggle1"><i class="fas fa-chevron-down"></i></span>
                        </a>
                        <div class="submenu" id="userSubMenu">
                            <ul class="nav flex-column ms-3">
                                @foreach (Auth::user()->accessRights as $accessRight)
                                    @if ($accessRight->name == 'student-management' && $accessRight->status == '1')
                                        <li class="nav-item mt-1">
                                            <a class="nav-link {{ request()->is('student') ? 'active' : '' }}"
                                                href="{{ route('student.index') }}">
                                                <div
                                                    class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <g clip-path="url(#clip0_48_238)">
                                                            <path
                                                                d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V19C4 19.55 4.45 20 5 20H19C19.55 20 20 19.55 20 19V18C20 15.34 14.67 14 12 14Z"
                                                                fill="black" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_48_238">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <span class="nav-link-text ms-1 mt-1">นักศึกษา</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                                @foreach (Auth::user()->accessRights as $accessRight)
                                    @if ($accessRight->name == 'professor-management' && $accessRight->status == '1')
                                        <li class="nav-item mt-1">
                                            <a class="nav-link {{ request()->is('professor') ? 'active' : '' }}"
                                                href="{{ route('professor.index') }}">
                                                <div
                                                    class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <g clip-path="url(#clip0_48_238)">
                                                            <path
                                                                d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V19C4 19.55 4.45 20 5 20H19C19.55 20 20 19.55 20 19V18C20 15.34 14.67 14 12 14Z"
                                                                fill="black" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_48_238">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <span class="nav-link-text ms-1 mt-1">อาจารย์</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                                @foreach (Auth::user()->accessRights as $accessRight)
                                    @if ($accessRight->name == 'staff-management' && $accessRight->status == '1')
                                        <li class="nav-item mt-1">
                                            <a class="nav-link {{ request()->is('staff') ? 'active' : '' }}"
                                                href="{{ route('staff.index') }}">
                                                <div
                                                    class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <g clip-path="url(#clip0_48_238)">
                                                            <path
                                                                d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V19C4 19.55 4.45 20 5 20H19C19.55 20 20 19.55 20 19V18C20 15.34 14.67 14 12 14Z"
                                                                fill="black" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_48_238">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <span class="nav-link-text ms-1 mt-1">บุคลากร</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                                @foreach (Auth::user()->accessRights as $accessRight)
                                    @if ($accessRight->name == 'alumni-management' && $accessRight->status == '1')
                                        <li class="nav-item mt-1">

                                            <a class="nav-link {{ request()->is('alumn') ? 'active' : '' }}"
                                                href="{{ route('alumn.index') }}">
                                                <div
                                                    class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <g clip-path="url(#clip0_48_238)">
                                                            <path
                                                                d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V19C4 19.55 4.45 20 5 20H19C19.55 20 20 19.55 20 19V18C20 15.34 14.67 14 12 14Z"
                                                                fill="black" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_48_238">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <span class="nav-link-text ms-1 mt-1">ศิษย์เก่า</span>

                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                                @foreach (Auth::user()->accessRights as $accessRight)
                                    @if ($accessRight->name == 'admin-management' && $accessRight->status == '1')
                                        <li class="nav-item mt-1">

                                            <a class="nav-link {{ request()->is('admin*', 'admin.show') ? 'active' : '' }}"
                                                href="{{ route('admin.index') }}">
                                                <div
                                                    class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <g clip-path="url(#clip0_48_238)">
                                                            <path
                                                                d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V19C4 19.55 4.45 20 5 20H19C19.55 20 20 19.55 20 19V18C20 15.34 14.67 14 12 14Z"
                                                                fill="black" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_48_238">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <span class="nav-link-text ms-1 mt-1">ผู้ดูแลระบบ</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                                <!-- Add more submenu items as needed -->
                            </ul>
                        </div>
                    </li>
                    <script>
                        function toggleSubMenu1() {
                            var userSubMenu = document.getElementById('userSubMenu');
                            var submenuToggle1 = document.getElementById('submenuToggle1');

                            if (userSubMenu.classList.contains('show')) {
                                userSubMenu.classList.remove('show');
                                submenuToggle1.innerHTML = '<i class="fas fa-chevron-down"></i>';
                            } else {
                                userSubMenu.classList.add('show');
                                submenuToggle1.innerHTML = '<i class="fas fa-chevron-up"></i>';
                            }
                        }
                        @if (request()->is('student', 'professor', 'staff', 'alumn', 'admin*', 'admin.show') ? 'active' : '')
                            window.addEventListener('load', function() {
                                var isUsersActive = document.querySelector('.nav-link.active');

                                if (isUsersActive) {
                                    toggleSubMenu1();
                                }
                            });
                        @endif
                    </script>
                @endif
            @endforeach
            @foreach (Auth::user()->accessRights as $accessRight)
            @if ($accessRight->name == 'content-management' && $accessRight->status == '1')
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('content') ? 'active' : '' }}"
                        href="{{ route('content.index') }}">
                        <div
                            class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_607_617)">
                                    <path
                                        d="M18 12C18 12.55 18.45 13 19 13H21C21.55 13 22 12.55 22 12C22 11.45 21.55 11 21 11H19C18.45 11 18 11.45 18 12Z"
                                        fill="#333333" />
                                    <path
                                        d="M16.59 16.82C16.26 17.26 16.35 17.87 16.79 18.19C17.32 18.58 17.88 19 18.41 19.4C18.85 19.73 19.47 19.64 19.79 19.2C19.79 19.19 19.8 19.19 19.8 19.18C20.13 18.74 20.04 18.12 19.6 17.8C19.07 17.4 18.51 16.98 17.99 16.59C17.55 16.26 16.93 16.36 16.6 16.8C16.6 16.81 16.59 16.82 16.59 16.82Z"
                                        fill="#333333" />
                                    <path
                                        d="M19.81 4.81C19.81 4.8 19.8 4.8 19.8 4.79C19.47 4.35 18.85 4.26 18.42 4.59C17.89 4.99 17.32 5.41 16.8 5.81C16.36 6.14 16.28 6.76 16.61 7.19C16.61 7.2 16.62 7.2 16.62 7.21C16.95 7.65 17.56 7.74 18 7.41C18.53 7.02 19.09 6.59 19.62 6.19C20.05 5.87 20.13 5.25 19.81 4.81Z"
                                        fill="#333333" />
                                    <path
                                        d="M8 9H4C2.9 9 2 9.9 2 11V13C2 14.1 2.9 15 4 15H5V18C5 18.55 5.45 19 6 19C6.55 19 7 18.55 7 18V15H8L13 18V6L8 9Z"
                                        fill="#333333" />
                                    <path
                                        d="M15.5 12C15.5 10.67 14.92 9.46999 14 8.64999V15.34C14.92 14.53 15.5 13.33 15.5 12Z"
                                        fill="#333333" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_607_617">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </div>
                        <span class="nav-link-text ms-1">จัดการข่าวสารและประกาศ</span>
                    </a>
                </li>
            @endif
        @endforeach
            @foreach (Auth::user()->accessRights as $accessRight)
                @if ($accessRight->name == 'calendar-activity-management' && $accessRight->status == '1')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('activity') ? 'active' : '' }}"
                            href="{{ route('activity.index') }}">
                            <div
                                class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_607_612)">
                                        <path
                                            d="M20 3H19V2C19 1.45 18.55 1 18 1C17.45 1 17 1.45 17 2V3H7V2C7 1.45 6.55 1 6 1C5.45 1 5 1.45 5 2V3H4C2.9 3 2 3.9 2 5V21C2 22.1 2.9 23 4 23H20C21.1 23 22 22.1 22 21V5C22 3.9 21.1 3 20 3ZM19 21H5C4.45 21 4 20.55 4 20V8H20V20C20 20.55 19.55 21 19 21Z"
                                            fill="#333333" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_607_612">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <span class="nav-link-text ms-1">จัดการกิจกรรม</span>
                        </a>
                    </li>
                @endif
            @endforeach
            @foreach (Auth::user()->accessRights as $accessRight)
                @if ($accessRight->name == 'timetable-management' && $accessRight->status == '1')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('calendar') ? 'active' : '' }}"
                            href="{{ route('calendar.index') }}">
                            <div
                                class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_607_627)">
                                        <path
                                            d="M16 10H8C7.45 10 7 10.45 7 11C7 11.55 7.45 12 8 12H16C16.55 12 17 11.55 17 11C17 10.45 16.55 10 16 10ZM19 3H18V2C18 1.45 17.55 1 17 1C16.45 1 16 1.45 16 2V3H8V2C8 1.45 7.55 1 7 1C6.45 1 6 1.45 6 2V3H5C3.89 3 3 3.9 3 5V19C3 20.1 3.89 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM18 19H6C5.45 19 5 18.55 5 18V8H19V18C19 18.55 18.55 19 18 19ZM13 14H8C7.45 14 7 14.45 7 15C7 15.55 7.45 16 8 16H13C13.55 16 14 15.55 14 15C14 14.45 13.55 14 13 14Z"
                                            fill="#333333" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_607_627">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <span class="nav-link-text ms-1">จัดการตารางเรียน / สอน</span>
                        </a>
                    </li>
                @endif
            @endforeach
            @foreach (Auth::user()->accessRights as $accessRight)
                @if ($accessRight->name == 'prefix-management' && $accessRight->status == '1')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('prefix') ? 'active' : '' }}"
                            href="{{ route('prefix.index') }}">
                            <div
                                class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                                  </svg>
                            </div>
                            <span class="nav-link-text ms-1">จัดการคำนำหน้า</span>
                        </a>
                    </li>
                @endif
            @endforeach
            @foreach (Auth::user()->accessRights as $accessRight)
                @if ($accessRight->name == 'faculty-major-management' && $accessRight->status == '1')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('faculty') ? 'active' : '' }}"
                            href="{{ route('faculty.index') }}">
                            <div
                                class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="" class="bi bi-building-fill-gear" viewBox="0 0 16 16">
                                    <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7.256A4.5 4.5 0 0 0 12.5 8a4.5 4.5 0 0 0-3.59 1.787A.5.5 0 0 0 9 9.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .39-.187A4.5 4.5 0 0 0 8.027 12H6.5a.5.5 0 0 0-.5.5V16H3a1 1 0 0 1-1-1zm2 1.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3 0v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                                    <path d="M11.886 9.46c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                                  </svg>
                            </div>
                            <span class="nav-link-text ms-1">จัดการคณะ / สาขา</span>
                        </a>
                    </li>
                @endif
            @endforeach
            @foreach (Auth::user()->accessRights as $accessRight)
                @if ($accessRight->name == 'subject-management' && $accessRight->status == '1')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('subject') ? 'active' : '' }}"
                            href="{{ route('subject.index') }}">
                            <div
                                class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="" class="bi bi-book-half" viewBox="0 0 16 16">
                                    <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                                  </svg>
                            </div>
                            <span class="nav-link-text ms-1">จัดการรายวิขา</span>
                        </a>
                    </li>
                @endif
            @endforeach
            @foreach (Auth::user()->accessRights as $accessRight)
                @if ($accessRight->name == 'room-management' && $accessRight->status == '1')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('room') ? 'active' : '' }}"
                            href="{{ route('room.index') }}">
                            <div
                                class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                  </svg>
                            </div>
                            <span class="nav-link-text ms-1">จัดการห้องเรียน / สถานที่</span>
                        </a>
                    </li>
                @endif
            @endforeach
            @foreach (Auth::user()->accessRights as $accessRight)
            @if ($accessRight->name == 'room-management' && $accessRight->status == '1')
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('bugrepor') ? 'active' : '' }}"
                        href="{{ route('bugrepor.index') }}">
                        <div
                            class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-bug-fill text-danger" viewBox="0 0 16 16">
                                <path d="M4.978.855a.5.5 0 1 0-.956.29l.41 1.352A5 5 0 0 0 3 6h10a5 5 0 0 0-1.432-3.503l.41-1.352a.5.5 0 1 0-.956-.29l-.291.956A5 5 0 0 0 8 1a5 5 0 0 0-2.731.811l-.29-.956z"/>
                                <path d="M13 6v1H8.5v8.975A5 5 0 0 0 13 11h.5a.5.5 0 0 1 .5.5v.5a.5.5 0 1 0 1 0v-.5a1.5 1.5 0 0 0-1.5-1.5H13V9h1.5a.5.5 0 0 0 0-1H13V7h.5A1.5 1.5 0 0 0 15 5.5V5a.5.5 0 0 0-1 0v.5a.5.5 0 0 1-.5.5zm-5.5 9.975V7H3V6h-.5a.5.5 0 0 1-.5-.5V5a.5.5 0 0 0-1 0v.5A1.5 1.5 0 0 0 2.5 7H3v1H1.5a.5.5 0 0 0 0 1H3v1h-.5A1.5 1.5 0 0 0 1 11.5v.5a.5.5 0 1 0 1 0v-.5a.5.5 0 0 1 .5-.5H3a5 5 0 0 0 4.5 4.975"/>
                            </svg>

                        </div>
                        <span class="nav-link-text ms-1">แจ้งข้อผิดพลาด</span>
                    </a>
                </li>
            @endif
        @endforeach
            {{-- @foreach (Auth::user()->accessRights as $accessRight)
                @if ($accessRight->name == 'groupchat-management' && $accessRight->status == '1')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('groupchat') ? 'active' : '' }}"
                            href="{{ route('groupchat.index') }}">
                            <div
                                class="border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_48_517)">
                                        <path
                                            d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.59 20 4 16.41 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 16.41 16.41 20 12 20ZM11 16H13V18H11V16ZM12.61 6.04C10.55 5.74 8.73 7.01 8.18 8.83C8 9.41 8.44 10 9.05 10H9.25C9.66 10 9.99 9.71 10.13 9.33C10.45 8.44 11.4 7.83 12.43 8.05C13.38 8.25 14.08 9.18 14 10.15C13.9 11.49 12.38 11.78 11.55 13.03C11.55 13.04 11.54 13.04 11.54 13.05C11.53 13.07 11.52 13.08 11.51 13.1C11.42 13.25 11.33 13.42 11.26 13.6C11.25 13.63 11.23 13.65 11.22 13.68C11.21 13.7 11.21 13.72 11.2 13.75C11.08 14.09 11 14.5 11 15H13C13 14.58 13.11 14.23 13.28 13.93C13.3 13.9 13.31 13.87 13.33 13.84C13.41 13.7 13.51 13.57 13.61 13.45C13.62 13.44 13.63 13.42 13.64 13.41C13.74 13.29 13.85 13.18 13.97 13.07C14.93 12.16 16.23 11.42 15.96 9.51C15.72 7.77 14.35 6.3 12.61 6.04Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_48_517">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <span class="nav-link-text ms-1">จัดการกลุ่มแชท</span>
                        </a>
                    </li>
                @endif
            @endforeach --}}
        </ul>
    </div>
</aside>
