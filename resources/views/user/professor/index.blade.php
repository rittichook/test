@extends('layout.master')
@section('content')
    <style>
        .pagination {
            float: right;
            --bs-pagination-border-color: #ffffff;
            --bs-pagination-disabled-border-color: #ffffff;

            --bs-pagination-active-bg: #003569;
        }

        .page-item .page-link,
        .page-item span {
            color: #003569;
            font-weight: bold;

        }

        .page-item .page-link,
        .page-item span {
            color: #003569;
            font-weight: bold;

        }

        .page-item.active .page-link,
        .page-item.active span {
            color: #ffffff;
            /* Text color for active page link */
            border: none;
        }
    </style>
    <div class="card">
        <div class="container-fluid">

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="input-group mb-4">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none">
                                    <g clip-path="url(#clip0_190_2531)">
                                        <path
                                            d="M15.5 14H14.71L14.43 13.73C15.63 12.33 16.25 10.42 15.91 8.39002C15.44 5.61002 13.12 3.39002 10.32 3.05002C6.09001 2.53002 2.53002 6.09001 3.05002 10.32C3.39002 13.12 5.61002 15.44 8.39002 15.91C10.42 16.25 12.33 15.63 13.73 14.43L14 14.71V15.5L18.25 19.75C18.66 20.16 19.33 20.16 19.74 19.75C20.15 19.34 20.15 18.67 19.74 18.26L15.5 14ZM9.50002 14C7.01002 14 5.00002 11.99 5.00002 9.50002C5.00002 7.01002 7.01002 5.00002 9.50002 5.00002C11.99 5.00002 14 7.01002 14 9.50002C14 11.99 11.99 14 9.50002 14Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_190_2531">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <input class="form-control form-control" placeholder="ค้นหา" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <select class="form-select form-select" aria-label="Default select example">
                        <option selected>คณะ</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <select class="form-select form-select" aria-label="Default select example">
                            <option selected>สาขา</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <select class="form-select form-select" aria-label="Default select example">
                            <option selected>ชั้นปี</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 text-end">
                    <a href="{{ route('student.create') }}">
                        <button class="btn btn-icon btn-3 btn-primary my-auto btn-sm"
                            style="background-image: linear-gradient(310deg, #6882A8 0%, #003569 100%);" type="button">
                            <span class="btn-inner--icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none">
                                    <g clip-path="url(#clip0_685_226)">
                                        <path
                                            d="M15.0001 10.8333H10.8334V15C10.8334 15.4583 10.4584 15.8333 10.0001 15.8333C9.54175 15.8333 9.16675 15.4583 9.16675 15V10.8333H5.00008C4.54175 10.8333 4.16675 10.4583 4.16675 9.99999C4.16675 9.54166 4.54175 9.16666 5.00008 9.16666H9.16675V4.99999C9.16675 4.54166 9.54175 4.16666 10.0001 4.16666C10.4584 4.16666 10.8334 4.54166 10.8334 4.99999V9.16666H15.0001C15.4584 9.16666 15.8334 9.54166 15.8334 9.99999C15.8334 10.4583 15.4584 10.8333 15.0001 10.8333Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_685_226">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <span class="btn-inner--text">เพิ่มผู้ใช้งาน</span>
                        </button>
                        <button class="btn my-auto btn-outline-primary btn-xs" style="border-color: #003569">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <g clip-path="url(#clip0_207_362)">
                                    <path
                                        d="M6 10C4.9 10 4 10.9 4 12C4 13.1 4.9 14 6 14C7.1 14 8 13.1 8 12C8 10.9 7.1 10 6 10ZM18 10C16.9 10 16 10.9 16 12C16 13.1 16.9 14 18 14C19.1 14 20 13.1 20 12C20 10.9 19.1 10 18 10ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                        fill="#003569" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_207_362">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </button>
                    </a>
                </div>
            </div>
            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th class="text-uppercase text-sm font-weight-bolder text-center">ลำดับ</th>
                            <th class="text-uppercase text-sm font-weight-bolder text-center">รูปโปรไฟล์</th>
                            <th class="text-uppercase text-sm font-weight-bolder ps-2">รหัสนักศึกษา</th>
                            <th class="text-uppercase text-sm font-weight-bolder ps-2">ชื่อ-นามสกุล</th>
                            <th class="text-uppercase text-sm font-weight-bolder ps-2">คณะ</th>
                            <th class="text-uppercase text-sm font-weight-bolder ps-2">สาขา</th>
                            <th class="text-uppercase text-sm font-weight-bolder  text-center">ชั้นปี</th>
                            <th class="text-uppercase text-sm font-weight-bolder text-center">สถานะ</th>
                            <th class="text-uppercase text-sm font-weight-bolder text-center">การจัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr>
                                <td data-bs-toggle="modal" data-bs-target="#showDetail{{ $row->id }}">
                                    <div class="text-center"> <!-- Added mx-auto class for centering -->

                                        <span class="text-secondary text-xs font-weight-bold text-center">
                                            {{ $loop->iteration }}
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1 text-center">
                                        <div class="mx-auto"> <!-- Added mx-auto class for centering -->
                                            @if ($row->avatar)
                                                <img src="{{ $row->avatar }}" class="avatar avatar-sm text-center">
                                            @else
                                                <img src="https://res.cloudinary.com/dsxvhnxol/image/upload/v1695186574/xm9cwjhyijgy3grno37k.png"
                                                    class="avatar avatar-sm">
                                            @endif
                                        </div>
                                    </div>

                                </td>
                                <td data-bs-toggle="modal" data-bs-target="#showDetail{{ $row->id }}">
                                    <span
                                        class="text-secondary text-xs font-weight-bold">{{ $row->student_code ?? '-' }}</span>

                                </td>
                                <td data-bs-toggle="modal" data-bs-target="#showDetail{{ $row->id }}">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $row->first_name ?? '-' }}
                                        {{ $row->last_name ?? '-' }}</span>
                                </td>
                                <td data-bs-toggle="modal" data-bs-target="#showDetail{{ $row->id }}">
                                    <span
                                        class="text-secondary text-xs font-weight-bold">{{ $row->faculty_name ?? '-' }}</span>
                                </td>
                                <td data-bs-toggle="modal" data-bs-target="#showDetail{{ $row->id }}">
                                    <span class="text-secondary text-xs font-weight-bold">
                                        {{ $row->faculty_branch_name ?? '-' }}</span>
                                </td>
                                <td data-bs-toggle="modal" data-bs-target="#showDetail{{ $row->id }}">
                                    <div class="text-center"> <!-- Added mx-auto class for centering -->

                                        <span class="text-secondary text-xs font-weight-bold text-center">
                                            1
                                        </span>
                                    </div>
                                </td>
                                <td data-bs-toggle="modal" data-bs-target="#showDetail{{ $row->id }}">
                                    <div class="d-flex justify-content-center">
                                        @if ($row->status == '1')
                                            <span class="badge bg-gradient-success text-xxs mt-2">
                                                active
                                            </span>
                                        @else
                                            <span class="badge bg-gradient-secondary text-xxs">inactive</span>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('student.show', $row->student_code) }}">
                                            <button class="btn btn-icon btn-3 btn-primary btn-xs my-auto text-center mt-1"
                                                style="background-image: linear-gradient(310deg, #003569 0%, #6882A8 100%);"
                                                type="button">
                                                <span class="btn-inner--icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <g clip-path="url(#clip0_190_2829)">
                                                            <path
                                                                d="M2.25 13.095V15.375C2.25 15.585 2.415 15.75 2.625 15.75H4.905C5.0025 15.75 5.1 15.7125 5.1675 15.6375L13.3575 7.45501L10.545 4.64251L2.3625 12.825C2.2875 12.9 2.25 12.99 2.25 13.095ZM15.5325 5.28001C15.825 4.98751 15.825 4.51501 15.5325 4.22251L13.7775 2.46751C13.485 2.17501 13.0125 2.17501 12.72 2.46751L11.3475 3.84001L14.16 6.65251L15.5325 5.28001Z"
                                                                fill="white" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_190_2829">
                                                                <rect width="18" height="18" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg> </span>
                                                <span class="btn-inner--text">แก้ไข</span>
                                            </button>
                                        </a>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col mt-2">
                    <span>แสดง {{ $rows->firstItem() }} ถึง {{ $rows->lastItem() }} จากทั้งหมด
                        {{ $rows->total() }} รายการ</span>
                </div>

                <div class="col">
                    {{ $rows->links() }}

                </div>
            </div>
        </div>
    </div>
@endsection
