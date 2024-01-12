@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card p-4">
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-4">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                    </svg>
                                </span>
                                <input class="form-control form-control-sm" placeholder="ค้นหา" type="text" disabled>
                            </div>
                        </div>
                        <div class="col-2">
                            <select class="form-control form-control-sm" id="exampleFormControlSelect1" disabled>
                                <option>อัปเดตล่าสุด</option>
                            </select>
                        </div>
                        <div class="col text-end">
                            @include('subject.create')
                            <button class="btn btn-icon btn-3 btn-xs btn-primary my-auto"
                                style="background-image: linear-gradient(310deg, #6882A8 0%, #003569 100%);" type="button"
                                data-bs-toggle="modal" data-bs-target="#CreateSubject">
                                <span class="btn-inner--icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_857_1798)">
                                            <path
                                                d="M15.0001 10.8333H10.8334V15C10.8334 15.4583 10.4584 15.8333 10.0001 15.8333C9.54175 15.8333 9.16675 15.4583 9.16675 15V10.8333H5.00008C4.54175 10.8333 4.16675 10.4583 4.16675 9.99999C4.16675 9.54166 4.54175 9.16666 5.00008 9.16666H9.16675V4.99999C9.16675 4.54166 9.54175 4.16666 10.0001 4.16666C10.4584 4.16666 10.8334 4.54166 10.8334 4.99999V9.16666H15.0001C15.4584 9.16666 15.8334 9.54166 15.8334 9.99999C15.8334 10.4583 15.4584 10.8333 15.0001 10.8333Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_857_1798">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="btn-inner--text">เพิ่มรายวิชา</span>
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0 table-hover">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        ลำดับ</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        รหัสวิชา</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        ชื่อวิชา</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        อัปเดตเมื่อ</th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                        อัปเดตโดย
                                    </th>
                                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($Subject as $data)
                                <tr style="background-color: {{ $loop->iteration <= 1 ? '#f6f9fc' : 'transparent' }}">
                                    <td> <span class="text-secondary text-sm opacity-7">{{ $loop->iteration }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-sm opacity-7">{{ $data->code }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-sm opacity-7">{{ $data->name }}</span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-sm opacity-7">
                                            {{ \Carbon\Carbon::parse($data->updated_at)->addYears(543)->format('d/m/Y H:i:s') }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-secondary text-sm opacity-7"> N/A </span>
                                    </td>
                                    <td class="text-end">
                                        {{-- @include('room.read') --}}
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-icon btn-3 btn-xs btn-primary btn-xs my-auto"
                                                style="background-color: #6882A8" data-bs-toggle="modal"
                                                data-bs-target="#EditSubject{{ $data->id }}">
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
                                                    </svg>
                                                </span>
                                                <span class="btn-inner--text">แก้ไข</span>
                                            </button>

                                            @include('subject.edit')

                                            @include('subject.delete')
                                        </div>


                                    </td>
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
