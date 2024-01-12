@extends('layout.master')

@section('content')
<style>
    /* Set font size for the DataTable headers (th) */
    #content-table thead th {
        font-size: 16px; /* Adjust the font size as needed */
    }

    /* Set font size for the DataTable cells (td) */
    #content-table tbody td {
        font-size: 12px; /* Adjust the font size as needed */
    }

    /* Set font size for the DataTable pagination */
    #content-table_paginate .paginate_button {
        font-size: 14px; /* Adjust the font size as needed */
    }

    #content-table_paginate .paginate_button.next {
        display: none;
    }

    #content-table_paginate .paginate_button.previous {
        display: none;
    }

    #content-table_paginate .paginate_button {
        font-size: 14px; /* Adjust the font size as needed */
        color: #ffffff; /* Change to the desired font color for inactive pages (white in this example) */
    }

    /* Set font color for the active page number */
    #content-table_paginate .paginate_button.current {
        color: #ff0000; /* Change to the desired font color for the active page number (red in this example) */
    }

    /* Hide the "Next" and "Previous" text in the DataTable pagination */
    #content-table_paginate .paginate_button {
        /* display: none; */
    }

    .page-link.active,
    .active>.page-link {
        color: #ffffff;
        font-weight: 500;
    }

    div.dataTables_wrapper div.dataTables_length select {
        width: 50%;
    }

    div.dataTables_wrapper div.dataTables_info {
        font-size: 12px;
    }

    thead, tbody, tfoot, tr, td, th {
        border-color: inherit;
        border-style: none;
        border-width: 0;
    }

    .title-cell {
        white-space: pre-wrap;
    }
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="row">
    <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="content-table" class="mt-5 table align-items-center mb-0 p-1 table-hover">
                        @include('content.content.create-content')
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 ">#</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">thumbnail_image)</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">TITLE</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">STATUS</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">updated_at</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-5 text-end"></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var contentTable = $('#content-table').DataTable({
            serverSide: true,
            ajax: "{{ route('content.index') }}",
            columns: [
                {
                    data: null,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'thumbnail_image',
                    name: 'thumbnail_image',
                    render: function(data, type, row) {
                        return '<img src="' + data + '" alt="Thumbnail" class="img-thumbnail" width="100" />';
                    }
                },
                {
                    data: 'title',
                    name: 'title',
                    render: function(data) {
                        return '<div class="title-cell">' + data + '</div>';
                    }
                },
                {
                    data: 'status',
                    name: 'status',
                    render: function(data) {
                        if (data === true) {
                            return '<span class="badge bg-gradient-success">Active</span>';
                        } else {
                            return '<span class="badge bg-gradient-secondary">Inactive</span>';
                        }
                    }
                },
                {
                    data: 'updated_at',
                    name: 'updated_at',
                    render: function(data) {
                        return moment(data).format('YYYY-MM-DD HH:mm:ss');
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                            <button class="btn btn-icon btn-2 btn-xs btn bg-gradient-success my-auto show-content"
                                data-toggle="modal"
                                data-target="#ShowContentModal"
                                data-id="${row.content_id}"
                                data-title="${row.title}"
                                data-thumbnail_image="${row.thumbnail_image}"
                                data-description="${row.description}"
                                data-number_clicks="${row.number_clicks}"
                                data-status="${row.status}"
                                data-category_id="${row.category_id}"
                                data-published_date="${row.published_date}"
                                data-created_at="${row.created_at}"
                                data-created_by="${row.created_by}"
                                data-updated_at="${row.updated_at}"
                                data-updated_by="${row.updated_by}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                            </button>
                            <button class="btn btn-icon btn-2 btn-xs btn bg-gradient-warning my-auto edit-content"
                                data-toggle="modal"
                                data-target="#EditContentModal"
                                data-id="${row.content_id}"
                                data-title="${row.title}"
                                data-thumbnail_image="${row.thumbnail_image}"
                                data-description="${row.description}"
                                data-number_clicks="${row.number_clicks}"
                                data-status="${row.status}"
                                data-category_id="${row.category_id}"
                                data-published_date="${row.published_date}"
                                data-created_at="${row.created_at}"
                                data-created_by="${row.created_by}"
                                data-updated_at="${row.updated_at}"
                                data-updated_by="${row.updated_by}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                </svg>
                            </button>
                            <button class="btn btn-icon btn-2 btn-xs btn bg-gradient-danger my-auto delete-content"
                                data-toggle="modal"
                                data-target="#confirmDeleteModal"
                                data-id="${row.content_id}"
                                data-title="${row.title}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </button>
                        `;
                    }
                }
            ]
        });



        // Handle row click event
//         $('#content-table tbody').on('click', 'tr', function() {
//             var rowData = contentTable.row(this).data();
//             $('#ShowContentModalLabel').text(rowData.title);
//             $('#ShowContentModal .modal-body').html(`
//     <div class="row">
//         <div class="col-md-12">
//             <div class="card card-profile card-plain">
//                 <div class="row">
//                     <div class="col-lg-5 mx-auto">
//                         <a href="javascript:;">
//                             <div class="position-relative">
//                                 <div class="blur-shadow-image">
//                                     <img class="w-100 rounded-3 shadow-lg" src="${rowData.thumbnail_image}">
//                                 </div>
//                             </div>
//                         </a>
//                     </div>
//                     <div class="col-lg-12 ps-0 my-auto">
//                         <div class="card-body text-left">
//                             <div class="p-md-0 pt-3">
//                                 <h5 class="font-weight-bolder mb-0">${rowData.title}</h5>
//                                 <p class="text-uppercase text-sm font-weight-bold mb-2">${rowData.description}</p>
//                             </div>
//                             <p>View (${rowData.number_clicks})</p>
//                             <p>Status
//                                 ${rowData.status === true ? (
//                                     '<span class="badge bg-gradient-success">Active</span>'
//                                 ) : (
//                                     '<span class="badge bg-gradient-secondary">inactive</span>'
//                                 )}
//                             </p>
//                             <p>Category At ${rowData.category_id}</p>
//                             <p>Published Date ${moment(rowData.published_date).locale('th').format('LLLL')}</p>
//                             <p>Created At ${moment(rowData.created_at).locale('th').format('LLLL')}</p>
//                             <p>Created By ${rowData.created_by !== null ? rowData.created_by : ' '}</p>
//                             <p>Updated At ${moment(rowData.updated_at).locale('th').format('LLLL')}</p>
//                             <p>Updated By ${rowData.updated_by}</p>
//                             <p>Updated By ${rowData.updated_by !== null ? rowData.created_by : ' '}</p>

//                         </div>
//                     </div>
//                 </div>
//             </div>
//         </div>
//     </div>
// `);
//             $('#ShowContentModal').modal('show');
//         });
    });



</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/th.js"></script>

@include('content.content.destroy-content')
@include('content.content.show-content')
@include('content.content.update-content')

@endsection
