{{-- <button class="btn btn-icon btn-2 btn-xs btn bg-gradient-success my-auto" type="button" data-bs-toggle="modal{{$content->id}}"
    data-bs-target="#ShowContent">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill"
        viewBox="0 0 16 16">
        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
    </svg>
</button> --}}
<!-- Modal -->
{{-- <div class="modal fade" id="ShowContent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h1 class="modal-title fs-5" id="staticBackdropLabel">

                </h1>
            </div>
            <div class="modal-body">

            </div>

        </div>
    </div>
</div> --}}

<style>
    .modal-backdrop.show {
        opacity: 0;
    }

    .modal-dialog {
        max-width: 100%;
        margin: 0;
        /* margin-left: 300px; */
        margin: 1rem 1rem 1rem 18rem;
    }

    .modal-content {
        padding: 2%;
        height: auto;
    }

    .modal-backdrop {
        position: unset;
    }

    .modal-body {
        position: none;
        flex: none;
        padding: none;
    }
</style>


<div class="modal fade" id="ShowContentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><button type="button" class="btn btn bg-gradient-danger btn-xs mx-2" data-bs-dismiss="modal">Close</button>

                <h1 class="modal-title fs-5" id="ShowContentModalLabel"></h1>
            </div>
            <div class="modal-body">

            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn bg-gradient-danger btn-xs" data-bs-dismiss="modal">Close</button>
            </div> --}}
        </div>

    </div>
</div>
<script>
$(document).ready(function() {
    // Check if DataTables is already initialized on the table
    if (!$.fn.DataTable.isDataTable('#content-table')) {
        // Initialize DataTables
        $('#content-table').DataTable({
            // DataTable configuration options
        });
    }

    // Handle the click event for the "show-content" button
    $('#content-table').on('click', '.show-content', function() {
        var contentId = $(this).data('id');
        var contentTitle = $(this).data('title');
        var thumbnailImage = $(this).data('thumbnail_image');
        var description = $(this).data('description');
        var numberClicks = $(this).data('number_clicks');
        var status = $(this).data('status');
        var categoryId = $(this).data('category_id');
        var publishedDate = $(this).data('published_date');
        var createdAt = $(this).data('created_at');
        var createdBy = $(this).data('created_by');
        var updatedAt = $(this).data('updated_at');
        var updatedBy = $(this).data('updated_by');

        // Set modal title and content based on data attributes
        $('#ShowContentModalLabel').text(contentTitle);
        $('#ShowContentModal .modal-body').html(`
    <div class="row">
        <div class="col-md-12">
            <div class="card card-profile card-plain">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <a href="javascript:;">
                            <div class="position-relative">
                                <div class="blur-shadow-image">
                                    <img class="w-100 rounded-3 shadow-lg" src="${thumbnailImage}">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 ps-0 my-auto">
                        <div class="card-body text-left">
                            <div class="p-md-0 pt-3">
                                <h5 class="font-weight-bolder mb-0">${contentTitle}</h5>
                                <p class="text-uppercase text-sm font-weight-bold mb-2">${description}</p>
                            </div>
                            <p>View (${numberClicks})</p>
                            <p>Status
                                ${status === true ? (
                                    '<span class="badge bg-gradient-success">Active</span>'
                                ) : (
                                    '<span class="badge bg-gradient-secondary">inactive</span>'
                                )}
                            </p>
                            <p>Category At ${categoryId}</p>
                            <p>Published Date ${moment(publishedDate).locale('th').format('LLLL')}</p>
                            <p>Created At ${moment(createdAt).locale('th').format('LLLL')}</p>
                            <p>Created By ${createdBy !== null ? createdBy : ' '}</p>
                            <p>Updated At ${moment(updatedAt).locale('th').format('LLLL')}</p>
                            <p>Updated By ${updatedBy !== null ? updatedBy : ' '}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
`);

        // Show the modal
        $('#ShowContentModal').modal('show');
    });
});

</script>

