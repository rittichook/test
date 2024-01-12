@extends('layouts.master')
@section('content')
    <div id="myDiv">
        <h3>Category Management</h3>
        @include('content.category.create-category')
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">หัวข้อ</th>
                    <th scope="col">สถานะ</th>
                    <th scope="col">จัดการ</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($rows as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->category_name ?? '-' }}</td>
                        <td>
                            @if ($row->status == '1')
                                <span class="text-success">active</span>
                            @else
                                <span class="text-secondary">inactive</span>
                            @endif
                        </td>
                        <td>
                            @include('content.category.destroy-category')
                        </td>
                    <tr>
                @endforeach --}}
            </tbody>
        </table>
        <div class="pagination">
            <ul class="pagination">
                <li class="page-item disabled">
                </li>
            </ul>
        </div>
    </div>
    </div>
@endsection













{{-- <x-sweet-alert
    :show="true"
    title="Hello!"
    text="This is a basic SweetAlert!"
    icon="error"
></x-sweet-alert> --}}
{{-- <x-sweet-alert
    :show="true"
    title="Hello!"
    text="This is a basic SweetAlert!"
    icon="success"
></x-sweet-alert> --}}
