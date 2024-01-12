<style>
    a{
        font-size: 12px;
    }
</style>
<div class="wrapper d-flex align-items-stretch">
    <!-- Sidebar -->
    <nav id="sidebar">

        <!-- Custom menu button -->
        <div class="custom-menu" style="z-index: 2">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
        <div class="p-4 pt-5">
            <!-- Logo and navigation menu -->
            <h6>
                {{-- <div href="#" class="text-light">Backoffice</div> --}}
            </h6>
            <ul class="list-unstyled components mb-5">
                <li class="">
                    <a href="{{ route('dashboard-index') }}" class="{{ request()->is('user') ? 'active' : '' }}"
                        data-section="section1">Dashboard</a>
                </li>
                <!-- Home submenu -->
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">User Management</a>
                    <ul class="collapse list-unstyled {{ request()->is('user') ? 'show' : '' }}" id="homeSubmenu">
                        <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a href="{{ route('user.index') }}" data-section="section1">Student</a>
                        </li>
                        <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a href="{{ route('user.index') }}" data-section="section1">Professor</a>
                        </li>
                        <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a href="{{ route('user.index') }}" data-section="section1">Alumni</a>
                        </li>
                        <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a href="{{ route('user.index') }}" data-section="section1">Administrator</a>
                        </li>
                        <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a href="{{ route('user.index') }}" data-section="section1">Set Permissions</a>
                        </li>
                        {{-- <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#CreateUser">Create</a>
                        </li> --}}
                        {{-- <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#importUser">Import</a>
                        </li> --}}
                        {{-- <li class="">
                            <a href="{{ route('prefix.index') }}" class="{{ request()->is('prefix') ? 'active' : '' }}"
                                data-section="section1">Prefix</a>
                        </li> --}}
                    </ul>
                </li>
                <li>
                    <a href="#homeSubmenu6" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Group Management</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu6">
                        <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a href="{{ route('user.index') }}" data-section="section1">Subject</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Calendar</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu1">
                        <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a href="{{ route('calendar.index') }}" data-section="section1">Timetable</a>
                        </li>
                        <li class="">
                            <a href="" data-section="section1">Activity</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">News and Announcements</a>
                    <ul class="collapse list-unstyled {{ request()->is('category','content') ? 'show' : '' }} " id="homeSubmenu3">
                        <li class=" {{ request()->is('category') ? 'active' : '' }} ">
                            <a href="{{ route('category.index') }}" data-section="section1">Category</a>
                        </li>
                        <li class="{{ request()->is('content') ? 'active' : '' }}">
                            <a href="{{ route('content.index') }}" data-section="section1">List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">System management</a>
                    <ul class="collapse list-unstyled {{ request()->is('prefix') ? 'show' : '' }} " id="homeSubmenu4">
                        <li class="{{ request()->is('prefix') ? 'active' : '' }}">
                            <a href="{{ route('prefix.index') }}"
                                data-section="section1">Prefix</a>                        </li>
                        <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a href="{{ route('user.index') }}" data-section="section1">Faculity/Major</a>
                        </li>
                        <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a href="{{ route('user.index') }}" data-section="section1">Classroom</a>
                        </li>
                        <li class="{{ request()->is('user') ? 'active' : '' }}">
                            <a href="{{ route('user.index') }}" data-section="section1">Subject</a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="">
                    <a href="{{ route('calendar.index') }}" class="{{ request()->is('calendar') ? 'active' : '' }}"
                        data-section="section1">Calendar</a>
                </li>
                <li class="">
                    <a href="{{ route('content.index') }}" class="{{ request()->is('content') ? 'active' : '' }}"
                        data-section="section1">Content</a>
                </li>
                <li class="">
                    <a href="{{ route('category.index') }}" class="{{ request()->is('category') ? 'active' : '' }}"
                        data-section="section1">Category</a>
                </li> --}}
                {{-- <li class="">
                    <a href="{{ route('uploadfile.index') }}"
                        class="{{ request()->is('uploadfile') ? 'active' : '' }}"
                        data-section="section1">Upload File</a>
                </li> --}}
                <li>
                    {{-- <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Basic information</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#" data-section="section5">Page 1</a>
                        </li>
                        <li>
                            <a href="#" data-section="section6">Page 2</a>
                        </li>
                        <li>
                            <a href="#" data-section="section7">Page 3</a>
                        </li>
                    </ul> --}}
                </li>
            </ul>

        </div>
    </nav>


    <div id="content" class="p-4 p-md-5 pt-5">
        <div class="container-fluid">
            @yield('content')
        </div>

        {{-- <div id="section0" class="section" style="opacity: 0;">
        @include('dashboard.dashboard')
    </div>
    <div id="section1" class="section" style="opacity: 0;">
        @include('section1')
    </div>

    <div id="section2" class="section" style="opacity: 0;">
        @include('section2')
    </div>

    <div id="section3" class="section" style="opacity: 0;">
        <h2 class="mb-4">Section 3</h2>
        <p>Content for section 3 goes here.</p>
    </div>


<script>
        function delay(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }

                    const sections = document.querySelectorAll('.section');
        sections.forEach((section, index) => {
            section.style.animation = 'fade-in 1s forwards';
            delay(30000 * (index + 1)).then(() => {
                section.style.opacity = '1';
            });
        });
    </script>

    <style>
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style> --}}
    </div>
