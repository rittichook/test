<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Backoffice-BlokChat</title>
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai+Looped:wght@300;500&family=Noto+Sans+Thai:wght@400;900&family=Noto+Serif+Thai&display=swap" rel="stylesheet">
</head>
<style>
    * {
        font-family: 'Noto Sans Thai', sans-serif;
font-family: 'Noto Sans Thai Looped', sans-serif;
    }
    .avatar-xl {
	width: 101.155px !important;
	height: 101.155px !important;
    }
    </style>

<body>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">

                                <div class="card-header pb-0 text-start">
                                    <div class="row">
                                        <div class="col-3 my-auto">
                                            <img src="https://res.cloudinary.com/dsxvhnxol/image/upload/v1696910599/uti3mdfxzwprlkfvg0rk.png"
                                                class="avatar avatar-xl">
                                        </div>
                                        <div class="col mt-3 mx-4">
                                            <span class="font-weight-bold" style="font-size: 20px">วิทยาลัยเทคโนโลยีสยาม
                                            </span><p>Siam Technology College</p>
                                        </div>
                                    </div>
                                    <p class="mb-0 mt-5 text-center" style="font-size: 24px">เข้าสู่ระบบ</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <div class="input-group mb-4">
                                                <span class="input-group-text">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 20 21" fill="none">
                                                        <path d="M9.99996 16.835C7.91663 16.835 6.07496 15.7683 4.99996 14.1683C5.02496 12.5017 8.33329 11.585 9.99996 11.585C11.6666 11.585 14.975 12.5017 15 14.1683C14.449 14.9887 13.7048 15.661 12.8329 16.126C11.961 16.591 10.9881 16.8345 9.99996 16.835ZM9.99996 5.00166C10.663 5.00166 11.2989 5.26505 11.7677 5.73389C12.2366 6.20273 12.5 6.83862 12.5 7.50166C12.5 8.1647 12.2366 8.80058 11.7677 9.26942C11.2989 9.73827 10.663 10.0017 9.99996 10.0017C9.33692 10.0017 8.70103 9.73827 8.23219 9.26942C7.76335 8.80058 7.49996 8.1647 7.49996 7.50166C7.49996 6.83862 7.76335 6.20273 8.23219 5.73389C8.70103 5.26505 9.33692 5.00166 9.99996 5.00166ZM9.99996 2.50166C8.90561 2.50166 7.82198 2.71721 6.81093 3.13599C5.79988 3.55478 4.88122 4.16861 4.1074 4.94243C2.5446 6.50524 1.66663 8.62485 1.66663 10.835C1.66663 13.0451 2.5446 15.1647 4.1074 16.7275C4.88122 17.5014 5.79988 18.1152 6.81093 18.534C7.82198 18.9528 8.90561 19.1683 9.99996 19.1683C12.2101 19.1683 14.3297 18.2903 15.8925 16.7275C17.4553 15.1647 18.3333 13.0451 18.3333 10.835C18.3333 6.22666 14.5833 2.50166 9.99996 2.50166Z" fill="#515151"/>
                                                      </svg>

                                                </span>
                                                <input class="form-control form-control-lg" placeholder="ชื่อผู้ใช้งาน" type="text" name="username" >
                                              </div>
                                            </div>


                                            <div class="mb-3">
                                                <div class="input-group mb-4">
                                                    <span class="input-group-text">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 20 21" fill="none">
                                                            <path d="M15 7.50166H16.6667C16.8877 7.50166 17.0996 7.58945 17.2559 7.74573C17.4122 7.90201 17.5 8.11398 17.5 8.33499V18.335C17.5 18.556 17.4122 18.768 17.2559 18.9242C17.0996 19.0805 16.8877 19.1683 16.6667 19.1683H3.33333C3.11232 19.1683 2.90036 19.0805 2.74408 18.9242C2.5878 18.768 2.5 18.556 2.5 18.335V8.33499C2.5 8.11398 2.5878 7.90201 2.74408 7.74573C2.90036 7.58945 3.11232 7.50166 3.33333 7.50166H5V6.66832C5 5.34224 5.52678 4.07047 6.46447 3.13279C7.40215 2.19511 8.67392 1.66832 10 1.66832C11.3261 1.66832 12.5979 2.19511 13.5355 3.13279C14.4732 4.07047 15 5.34224 15 6.66832V7.50166ZM13.3333 7.50166V6.66832C13.3333 5.78427 12.9821 4.93642 12.357 4.3113C11.7319 3.68618 10.8841 3.33499 10 3.33499C9.11594 3.33499 8.2681 3.68618 7.64298 4.3113C7.01786 4.93642 6.66667 5.78427 6.66667 6.66832V7.50166H13.3333ZM9.16667 12.5017V14.1683H10.8333V12.5017H9.16667ZM5.83333 12.5017V14.1683H7.5V12.5017H5.83333ZM12.5 12.5017V14.1683H14.1667V12.5017H12.5Z" fill="#515151"/>
                                                          </svg>
                                                        </i></span>
                                                    <input class="form-control form-control-lg" placeholder="รหัสผ่าน" type="password" name="password">
                                                    <span class="input-group-text">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 20 16" fill="none">
                                                            <path d="M5.72753 12.1092C4.19003 11.0175 2.97336 9.59749 2.28586 8.70082C2.09362 8.4533 1.98926 8.14881 1.98926 7.83541C1.98926 7.522 2.09362 7.21751 2.28586 6.96999C3.53003 5.34582 6.51503 2.00166 10 2.00166C11.5634 2.00166 13.025 2.67416 14.275 3.56332" stroke="#515151" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M11.775 6.07416C11.5436 5.83888 11.2679 5.65175 10.9638 5.52356C10.6597 5.39537 10.3332 5.32866 10.0032 5.32728C9.67319 5.3259 9.34617 5.38987 9.041 5.51551C8.73583 5.64114 8.45856 5.82595 8.22517 6.05929C7.99179 6.29262 7.80691 6.56985 7.6812 6.87498C7.55549 7.18012 7.49145 7.50713 7.49275 7.83714C7.49406 8.16716 7.56069 8.49365 7.6888 8.79779C7.81692 9.10192 8.00398 9.37768 8.23921 9.60916M3.33337 14.5017L16.6667 1.16832M8.33337 13.4217C8.87438 13.5827 9.43558 13.6658 10 13.6683C13.485 13.6683 16.47 10.3242 17.7142 8.69999C17.9064 8.45225 18.0106 8.14757 18.0105 7.83401C18.0103 7.52046 17.9058 7.21588 17.7134 6.96832C17.2761 6.3979 16.807 5.85259 16.3084 5.33499" stroke="#515151" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                          </svg>
                                                    </span>
                                                  </div>
                                                </div>
                                        <div>
                                            <p class="text-end" style="color: #1D4F89">ลืมรหัสผ่าน ?</p>
                                        </div>
                                        {{-- <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div> --}}
                                        <div class="text-center">
                                            <button type="submit" <button type="button" id="loadingButton"
                                                class="btn btn-lg btn  btn-lg w-100 mt-2 mb-0 text-white" style="background-color: #1D4F89">เข้าสู่ระบบ
                                                </button>
                                        </div>
                                    </form>
                                    @include('layout.scripts')
                                    @if (session('error'))
                                        <script>
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Oops...',
                                                text: 'The username or password is incorrect.',
                                                footer: 'Please contact the system administrator.'
                                            })
                                        </script>
                                    @endif
                                    @if (session('connection_failed'))
                                        <script>
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Oops...',
                                                text: 'Error: Database connection failed.',
                                                footer: 'Please contact the system administrator.'
                                            })
                                        </script>
                                    @endif
                                    @if (session('access'))
                                        <script>
                                            Swal.fire({
                                                position: 'top-center',
                                                icon: 'error',
                                                title: 'No access rights',
                                                showConfirmButton: false,
                                                timer: 1500
                                            })
                                        </script>
                                    @endif
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    {{-- <p class="mb-4 text-sm mx-auto">
                                        Don't have an account?
                                        <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign
                                            up</a>
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative  h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-color: #003569">
                                {{-- <div style="background-image: url('https://res.cloudinary.com/dsxvhnxol/image/upload/v1695195074/mfjnfivbopaihkfimzpu.png');
                                background-size: cover;">

                                </div> --}}
{{-- <img src="../assets/img/Group 130.png" alt=""> --}}
<img src="{{ asset('/assets/img/Group130.png') }}" alt="Example Image">

                            {{-- <span class="mask  opacity"></span> --}}
                            <h4 class="mt-5 text-white font-weight-bolder position-relative"><img class=" rounded-3"
                                    src="" alt=""></h4>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>

</body>

</html>
