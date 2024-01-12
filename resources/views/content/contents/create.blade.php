<style>
    .modal-content {
        padding: 2%;
        height: 96.5vh;
        border: #ced4da;
        box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
    }

    .modal.fade.show {
        background-color: #ffffff;
    }
</style>
<div class="modal fade" id="CreateContent" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_607_617)">
                            <path
                                d="M18 12C18 12.55 18.45 13 19 13H21C21.55 13 22 12.55 22 12C22 11.45 21.55 11 21 11H19C18.45 11 18 11.45 18 12Z"
                                fill="#333333" />
                            <path
                                d="M16.59 16.82C16.26 17.26 16.35 17.87 16.79 18.19C17.32 18.58 17.88 19 18.41 19.4C18.85 19.73 19.47 19.64 19.79 19.2C19.79 19.19 19.8 19.19 19.8 19.18C20.13 18.74 20.04 18.12 19.6 17.8C19.07 17.4 18.51 16.98 17.99 16.59C17.55 16.26 16.93 16.36 16.6 16.8C16.6 16.81 16.59 16.82 16.59 16.82Z"
                                fill="#333333" />
                            <path
                                d="M19.81 4.81C19.81 4.8 19.8 4.8 19.8 4.79C19.47 4.35 18.85 4.26 18.42 4.59C17.89 4.99 17.32 5.41 16.8 5.81C16.36 6.14 16.28 6.76 16.61 7.19C16.61 7.2 16.62 7.2 16.62 7.21C16.95 7.65 17.56 7.74 18 7.41C18.53 7.02 19.09 6.59 19.62 6.19C20.05 5.87 20.13 5.25 19.81 4.81Z"
                                fill="#333333" />
                            <path
                                d="M8 9H4C2.9 9 2 9.9 2 11V13C2 14.1 2.9 15 4 15H5V18C5 18.55 5.45 19 6 19C6.55 19 7 18.55 7 18V15H8L13 18V6L8 9Z"
                                fill="#333333" />
                            <path d="M15.5 12C15.5 10.67 14.92 9.46999 14 8.64999V15.34C14.92 14.53 15.5 13.33 15.5 12Z"
                                fill="#333333" />
                        </g>
                        <defs>
                            <clipPath id="clip0_607_617">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    เพิ่มประกาศและข่าวสาร
                </h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="contentForm" action="{{ route('content.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-2">
                            <div class="mb-3 text-start">
                                <label for="formFileSm" class="form-label">รูปภาพหน้าปก</label>
                                <input type="file" class="form-control form-control-sm" name="image" id="image"
                                    accept="image/*" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 text-start">
                                        <label for="" class="form-label">หมวดหมู่<span style="color: red"> *
                                            </span></label>
                                        <select class="form-control form-control-sm" id="" name="category_id">
                                            <option value="ec7c4578-24c9-45df-8e28-5309798b44f4">ข่าวสาร</option>
                                            <option value="ec7c4578-24c9-45df-8e28-5309798b44f4">ข่าวประกาศ</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3 text-start">
                                        <label for="" class="form-label">แสดงผลหน้าแรก</label>
                                        <select class="form-control form-control-sm" id="" name="status">
                                            <option selected value="0">ไม่ใช้งาน</option>
                                            <option value="1">ใช่งาน</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 text-start">
                                <label for="" class="form-label">หัวข้อ<span style="color: red"> *
                                    </span></label>
                                <input type="text" class="form-control form-control-sm" id="" name="title"
                                    placeholder="" required>
                            </div>
                            <div class="mb-3 text-start">
                                <label for="" class="form-label">รายละเอียด<span style="color: red"> *
                                    </span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="noneBtn" class="btn btn-xs bg-gradient-secondary"
                    data-bs-dismiss="modal">ยกเลิก</button>

                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

                <script>
                    $(document).ready(function () {
                        $("#contentForm").submit(function () {
                            // Disable the submit button
                            $("#submitBtn").attr("disabled", true);

                            // Hide the "ยกเลิก" button
                            $("#noneBtn").css('display', 'none');

                            $("#noneBtn1").css('display', 'none');


                            // Show loading indicator
                            $("#loadingIndicator").show();
                        });
                    });
                </script>

                <button type="submit" id="noneBtn1" class="btn btn-xs text-light font-weight-bolder"
                    style="background-color: #1D4F89">บันทึก</button>

                <!-- Loading indicator (you can customize this according to your needs) -->
                <div id="loadingIndicator" style="display: none;">
                    Loading...
                </div>
            </div>
            </form>
            </div>

    </div>
</div>
