<!DOCTYPE html>
<html lang="en">
@include('layout.header')
@include('layout.styles')

<style>
/* Initial styles for small screens */
@media (max-width: 1023px) {
  .image-container {
    display: none; /* Hide the image on small screens */
  }

  .fallback-message {
    display: block; /* Show the alternative message on small screens */
  }
}

/* Additional styles for screens larger than 768 pixels */
@media (min-width: 1024px) {
  .fallback-message {
    display: none; /* Hide the alternative message on screens larger than 768 pixels */
  }
}

</style>
<div class="image-container">

    <body class="g-sidenav-show   bg-gray-100"  >
        <div class="min-height-300 bg- position-absolute w-100" style="background-color:#FFFFFF"></div>
        @include('layout.sidebar')
        <main class="main-content position-relative border-radius-lg ">
            @include('layout.navbar')
            <div class="container-fluid" id="animation">
                @yield('content')
                @include('layout.footer')
            </div>
        </main>
        @include('layout.plugin')
        @include('layout.scripts')
    </body>
  </div>

  <div class="fallback-message">
    <div style="background-color: #6882A8;height: 100vh">\
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-6 text-center" style="background-color: #6882A8;">
                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 24 24" fill="none">
                    <path d="M12.0001 5.98999L19.5301 19H4.47012L12.0001 5.98999ZM2.74012 18C1.97012 19.33 2.93012 21 4.47012 21H19.5301C21.0701 21 22.0301 19.33 21.2601 18L13.7301 4.98999C12.9601 3.65999 11.0401 3.65999 10.2701 4.98999L2.74012 18ZM11.0001 11V13C11.0001 13.55 11.4501 14 12.0001 14C12.5501 14 13.0001 13.55 13.0001 13V11C13.0001 10.45 12.5501 9.99999 12.0001 9.99999C11.4501 9.99999 11.0001 10.45 11.0001 11ZM11.0001 16H13.0001V18H11.0001V16Z" fill="red"/>
                  </svg>
                <h3 style="color: red">

                    Sorry Screen not supported</h3>
            </div>
        </div>    </div>

  </div>



</html>
