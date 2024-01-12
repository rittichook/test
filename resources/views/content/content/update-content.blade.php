<div class="modal fade" id="EditContentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="EditContentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editContentForm" action="" method="POST">
                @csrf
                @method('PUT')



            <div class="modal-header justify-content-start">
                <button type="button" class="btn btn-danger btn-xs" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-xs mx-2" data-bs-dismiss="modal">Update</button>
                <h5 class="modal-title" id="EditContentModalLabel"></h5>
            </div>
            <div class="modal-body">
                <!-- Modified HTML for the category select element -->
                {{-- <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe" name="status">
                    <label class="form-check-label" for="rememberMe">Topic</label>
                </div> --}}

                <div class="form-group">
                    <label for="category">Active<span class="text-danger">*</span></label>
                    <select class="form-control form-control-sm category" name="active" id="activeSelect">
                        <!-- <option> elements will be dynamically added here -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="category">Category<span class="text-danger">*</span></label>
                    <select class="form-control form-control-sm category" name="category" id="categorySelect">
                        <!-- <option> elements will be dynamically added here -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="newTitle">Title<span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="newTitle" name="newTitle"
                        maxlength="100">
                    <small class="text-muted">Characters remaining: <span id="newCharCount">100</span></small>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="thumbnail_image">Thumbnail URL<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm thumbnail_image"
                                name="thumbnail_image" placeholder="Enter a valid URL">
                            <div class="input-group-append text-end mt-1">
                                <button id="pasteButton" class="btn btn-2 btn bg-gradient-primary btn-xs" type="button"
                                    onclick="handlePaste()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-clipboard-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M10 1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1Zm-5 0A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5v-1Zm-2 0h1v1A2.5 2.5 0 0 0 6.5 5h3A2.5 2.5 0 0 0 12 2.5v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2Z" />
                                    </svg>
                                </button>
                            </div>
                            <script>
                                function handlePaste() {
                                    // Use the Clipboard API to read text from the clipboard
                                    navigator.clipboard.readText().then(function(pastedText) {
                                        // Handle the pasted text here, e.g., set it as the value of an input field
                                        var thumbnailImageField = document.querySelector('.thumbnail_image');
                                        thumbnailImageField.value = pastedText;

                                        // Update the image preview based on the pasted URL
                                        updateImagePreview();
                                    }).catch(function(error) {
                                        // Handle errors if reading clipboard data fails
                                        console.error('Failed to read clipboard data: ', error);

                                    });
                                }

                                function updateImagePreview() {
                                    var imageUrl = thumbnailImageField.value;
                                    var previewImage = document.getElementById('previewImage');
                                    var urlValidationMessage = document.getElementById('urlValidationMessage');

                                    // Clear any previous validation message
                                    urlValidationMessage.textContent = "";

                                    // Create a new Image element to check image loading
                                    var tempImage = new Image();

                                    tempImage.onload = function() {
                                        // Image loaded successfully
                                        previewImage.src = imageUrl; // Update the preview image's source
                                    };

                                    tempImage.onerror = function() {
                                        // Image loading failed
                                        urlValidationMessage.textContent = "Invalid URL";
                                        previewImage.src = ""; // Clear the preview image

                                        // Show a SweetAlert error message for image loading errors
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Image Error',
                                            text: 'Failed to load the image. Please check the URL or provide an alternative image.',
                                        });
                                    };

                                    // Set the source of the temporary image to trigger the onload or onerror event
                                    tempImage.src = imageUrl;
                                }

                                function isValidUrl(url) {
                                    // You can implement a URL validation function here if needed
                                    // For a basic example, you can check if the URL starts with "http://" or "https://"
                                    return url.startsWith('http://') || url.startsWith('https://');
                                }

                                // Add an event listener to the "thumbnail_image" input field to update the preview in real-time
                                var thumbnailImageField = document.querySelector('.thumbnail_image');
                                thumbnailImageField.addEventListener('input', updateImagePreview);
                            </script>
                            <span id="urlValidationMessage" style="color: red;"></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center">
                            <div class="card p-1">
                                <div id="imagePreview" class="vor">
                                    <img id="previewImage" src="" alt="Thumbnail Preview"
                                        style="max-width: 100%; max-height: 200px;">
                                </div>
                                <span id="imageErrorMessage" style="color: red;"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
                <div id="editor-container mt-2">
                    <div id="editor" name="description" class="rounded"></div>
                </div>
                <!-- Submit button -->
            </form>

            </div>
        </div>
    </div>
</div>

<!-- ... (previous HTML code) ... -->

<script>
    $(document).ready(function () {
        if (!$.fn.DataTable.isDataTable('#content-table')) {
            $('#content-table').DataTable({});
        }

        var quill; // Declare the Quill instance variable outside the click event handler

        $('#content-table').on('click', '.edit-content', function () {
            var contentTitle = $(this).data('title');
            var thumbnailImage = $(this).data('thumbnail_image');
            var categoryId = $(this).data('category_id');
            var Status = $(this).data('status');
            var contentDescription = $(this).data('description');
// Assuming you have already obtained the 'content_id' value
var content_id = $(this).data('id');

// Generate the route URL with the 'contentId' parameter
var routeUrl = "{{ route('content.update', ['content' => ':contentId']) }}";
routeUrl = routeUrl.replace(':contentId', content_id);

// Get the form element
var editContentForm = document.getElementById('editContentForm');

// Update the form's action attribute
editContentForm.setAttribute('action', routeUrl);

// Now the form's action will be updated with the correct content_id



            // Check the checkbox if Status is true, uncheck it if Status is false
            $('#rememberMe').prop('checked', Status);

            $('#EditContentModalLabel').text(contentTitle);

            // Clear existing options in the category select element
            $('#categorySelect').empty();

            // Dynamically add options to the category select element
            $('#categorySelect').append($('<option>', {
                value: categoryId,
                text: 'Announce'
            }));
            $('#categorySelect').append($('<option>', {
                value: categoryId,
                text: 'News'
            }));

            var Status = $(this).data('status');

$('#activeSelect').empty();

// Dynamically add options to the category select element
$('#activeSelect').append($('<option>', {
    value: 'TRUE',
    text: 'active'
}));
$('#activeSelect').append($('<option>', {
    value: 'FALSE',
    text: 'inactive'
}));

// Set the selected option based on the Status value
$('#activeSelect').val(Status === true ? 'TRUE' : 'FALSE');




            // Set the selected category based on the categoryId
            $('#categorySelect').val(categoryId);

            $('#newTitle').val(contentTitle);

            $('.thumbnail_image').val(thumbnailImage);

            // Show the modal
            $('#EditContentModal').modal('show');

            var newInputField = document.getElementById("newTitle");
            var newCharCount = document.getElementById("newCharCount");

            function updateNewCharCount() {
                var remaining = 100 - newInputField.value.length;
                newCharCount.textContent = remaining;
                newCharCount.style.color = remaining < 20 ? "red" : "black";
            }

            newInputField.addEventListener("input", updateNewCharCount);
            updateNewCharCount();

            // Update the preview image based on the "thumbnail_image" input field
            var thumbnailImageField = document.querySelector('.thumbnail_image');
            var previewImage = document.getElementById('previewImage');
            var urlValidationMessage = document.getElementById('urlValidationMessage');

            function updateImagePreview() {
                var imageUrl = thumbnailImageField.value;
                previewImage.src = imageUrl; // Update the preview image's source
                urlValidationMessage.textContent = ""; // Clear any previous validation message
            }

            // Update image preview when the modal is shown
            $('#EditContentModal').on('shown.bs.modal', function () {
                updateImagePreview();
            });

            // Update image preview when the "thumbnail_image" input field changes
            thumbnailImageField.addEventListener("input", function () {
                updateImagePreview();
            });

            // Initialize Quill editor only if it doesn't already exist
            if (!quill) {
                quill = new Quill('#editor', {
                    theme: 'snow', // 'snow' is one of the built-in themes
                    modules: {
                        toolbar: [
                            ['bold', 'italic', 'underline', 'strike'],
                            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                            ['link', 'image'],
                            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                            ['clean']
                        ]
                    }
                });
            }

            // Set the content of the Quill editor to the stored contentDescription
            quill.root.innerHTML = contentDescription;

            // Add an event listener to update the hidden input field on form submission
            var form = document.querySelector("#editContentForm");
            form.addEventListener("submit", function (event) {
                event.preventDefault();
                var editorContent = quill.root.innerHTML;
                var hiddenInput = document.createElement("input");
                hiddenInput.setAttribute("type", "hidden");
                hiddenInput.setAttribute("name", "description");
                hiddenInput.setAttribute("value", editorContent);
                form.appendChild(hiddenInput);
                form.submit();
            });
// Toggle between 0 and 1 when clicking the checkbox
// Update the hidden input field based on checkbox state
// $('#rememberMe').change(function () {
//     var status = $(this).is(':checked') ? 1 : 0;
//     $('#rememberMe').val(status);
// });



        });

        // Clear Quill editor when the modal is closed
        $('#EditContentModal').on('hidden.bs.modal', function () {
            if (quill) {
                quill.root.innerHTML = ''; // Clear the editor's content
            }
        });
    });
    </script>
