<button class="btn btn-icon btn-3 btn-xs btn bg-gradient-primary" type="button" data-bs-toggle="modal"
    data-bs-target="#CreateContent">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill"
        viewBox="0 0 16 16">
        <path
            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
    </svg>
</button>
<!-- Modal -->
<div class="modal fade" id="CreateContent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-plus-circle-fill text-primary gradient-primary" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg>
                </h1>
                <form id="form1" action="{{ route('content.store') }}" method="POST">

                    <div class="">
                        <button type="button" class="btn btn bg-gradient-danger btn-xs"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn btn-outline-success  btn-xs">Save</button>
                        <button type="submit" class="btn btn bg-gradient-primary btn-xs" id="loadingButton">Save &
                            Public</button>
                    </div>
            </div>
            <div class="modal-body">
                <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
                @csrf
                <div class="form-group">
                    <label for="title">Catagory<label for="*" class="text-danger">*</label>
                    </label>
                    <select class="form-control form-control-sM" name="category_id">
                        <option selected>Please select a category.</option>
                        <option value="ec7c4578-24c9-45df-8e28-5309798b44f4">announce</option>
                        <option value="ec7c4578-24c9-45df-8e28-5309798b44f4">news</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title<label for="*" class="text-danger">*</label></label>
                    <input type="text" class="form-control form-control-sm" id="title" name="title"
                        maxlength="100">
                    <label id="charCount" style="color: black;">100</label><label>Characters remaining</label>
                </div>
                <script>
                    const inputField = document.getElementById("title");
                    const charCount = document.getElementById("charCount");

                    function updateCharCount() {
                        const remaining = 100 - inputField.value.length;
                        charCount.textContent = remaining;
                        if (remaining < 20) {
                            charCount.style.color = "red";
                        } else {
                            charCount.style.color = "black";
                        }
                    }
                    inputField.addEventListener("input", updateCharCount);
                    updateCharCount();
                </script>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1" checked>
                    <label class="form-check-label" for="inlineRadio1"><span
                            class="badge bg-gradient-primary">URL</span></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                        value="option3" disabled>
                    <label class="form-check-label" for="inlineRadio3"><span class="badge bg-gradient-light">FILE
                            (disabled) </span></label>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="thumbnail_image">Thumbnail URL<label for="*"
                                    class="text-danger">*</label></label>
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" id="thumbnail_image"
                                    name="thumbnail_image" placeholder="Enter a valid URL">
                            </div>
                            <div class="input-group-append text-end mt-1">
                                <button id="pasteButton" class="btn  btn-2 btn bg-gradient-primary btn-xs"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-clipboard-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M10 1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1Zm-5 0A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5v-1Zm-2 0h1v1A2.5 2.5 0 0 0 6.5 5h3A2.5 2.5 0 0 0 12 2.5v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2Z" />
                                    </svg>
                                </button>
                            </div>
                            <span id="urlValidationMessage" style="color: red;"></span>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="form-group">
                            <label for="thumbnail_image"></label>
                            <div class="card p-1">
                                <div id="imagePreview" class="vor"></div>
                                <span id="imageErrorMessage" style="color: red;"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    const thumbnailImageInput = document.getElementById("thumbnail_image");
                    const urlValidationMessage = document.getElementById("urlValidationMessage");
                    const imagePreview = document.getElementById("imagePreview");
                    const imageErrorMessage = document.getElementById("imageErrorMessage");
                    const pasteButton = document.getElementById("pasteButton");

                    function validateURL(input) {
                        const urlPattern = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;
                        return urlPattern.test(input);
                    }

                    function handleImageURL(url) {
                        if (validateURL(url)) {
                            urlValidationMessage.textContent = "";
                            thumbnailImageInput.style.borderColor = "";
                            imageErrorMessage.textContent = "";
                            const img = new Image();
                            img.src = url;
                            img.alt = "Thumbnail Preview";
                            img.style.maxWidth = "300px";
                            img.style.maxHeight = "300px";
                            img.onerror = function() {
                                imageErrorMessage.textContent = "Image load error";
                                imageErrorMessage.style.color = "red";
                                imagePreview.innerHTML = "";
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Image Load Error',
                                    text: 'There was an error loading the image.',
                                });
                            };
                            imagePreview.innerHTML = "";
                            imagePreview.appendChild(img);
                        } else {
                            thumbnailImageInput.style.borderColor = "red";
                            imagePreview.innerHTML = "";
                            imageErrorMessage.textContent = "";
                            Swal.fire({
                                icon: 'error',
                                title: 'Invalid URL',
                                text: 'Please enter a valid URL for the image.',
                            });
                        }
                    }
                    pasteButton.addEventListener("click", function() {
                        navigator.clipboard.readText().then(function(pastedText) {

                            thumbnailImageInput.value = pastedText;
                            handleImageURL(pastedText);
                        }).catch(function(error) {
                            console.error('Failed to read clipboard data: ', error);
                        });
                    });
                    thumbnailImageInput.addEventListener("input", function() {
                        const inputValue = thumbnailImageInput.value;
                        handleImageURL(inputValue);
                    });
                </script>
                <div class="form-group">
                    <label for="editor">Description<label for="*" class="text-danger">*</label></label>
                    @csrf
                    <div id="editor-container">
                        <div id="editor44" name="description" class="rounded">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                </form>
            </div>
            <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var quill = new Quill('#editor44', {
                        theme: 'snow',
                        modules: {
                            toolbar: [

                                [{
                                    header: [1, 2, 3, 4, 5, 6, false]
                                }],
                                ['bold', 'italic', 'underline', 'strike'],
                                [{
                                    list: 'ordered'
                                }, {
                                    list: 'bullet'
                                }],

                                ['link'],
                                ['image'],

                            ],
                        }
                    });
                    var form = document.querySelector("#form1");
                    form.addEventListener("submit", function(event) {
                        event.preventDefault();
                        var editorContent = quill.root.innerHTML;
                        var hiddenInput = document.createElement("input");
                        hiddenInput.setAttribute("type", "hidden");
                        hiddenInput.setAttribute("name", "description");
                        hiddenInput.setAttribute("value", editorContent);
                        form.appendChild(hiddenInput);
                        form.submit();
                    });
                });
            </script>
        </div>
    </div>
</div>
</div>
