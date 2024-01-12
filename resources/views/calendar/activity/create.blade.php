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

    .hidden {
        display: none;
    }
</style>
<div class="modal fade" id="CreateActivity" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">
                    เพิ่มกิจกรรม
                </h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('activity.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 text-start">
                        <label for="" class="form-label">หัวข้อกิจกรรม<span style="color: red"> *
                            </span></label>
                        <input type="text" class="form-control form-control-sm" id="" name="title"
                            placeholder="">
                    </div>
                    <div class="mb-3 text-start">
                        <label for="" class="form-label">รายละเอียดกิจกรรม</label>
                        <input type="text" class="form-control form-control-sm" id="" name="description"
                            placeholder="">
                    </div>
                    {{-- <div class="mb-3 text-start">
                        <label for="" class="form-label">ผู้ดูแลกิจกรรม<span style="color: red"> *
                            </span></label>
                        <input type="text" class="form-control form-control-sm" id="" name="code"
                            placeholder="" disabled>
                    </div> --}}
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 text-start">
                                <label for="" class="form-label">วันที่เริ่มกิจกรรม<span style="color: red"> *
                                    </span></label>
                                <input type="date" class="form-control form-control-sm" id="" name="start_date"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 text-start">
                                <label for="" class="form-label">วันที่สิ้นสุดกิจกรรม<span style="color: red"> *
                                    </span></label>
                                <input type="date" class="form-control form-control-sm" id="" name="end_date"
                                    placeholder="">
                            </div>
                        </div>
                    </div>


                    <div class="mb-3 text-start">
                        <label for="" class="form-label">ผู้เข้าร่วมกิจกรรม<span style="color: red"> * </span></label><br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">ทั้งหมด</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" disabled>
                            <label class="form-check-label" for="inlineRadio2">คณะ</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                            <label class="form-check-label" for="inlineRadio3">สาขา</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4" disabled>
                            <label class="form-check-label" for="inlineRadio4">กำหนดเอง</label>
                        </div>
                    </div>

                    <!-- Content to show/hide based on radio button selection -->
                    <div id="customInput1" class="hidden">
                    </div>

                    <div id="customInput2" class="hidden">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>กรุณาเลือกคณะ</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>                    </div>

                    <div id="customInput3" class="hidden">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>กรุณาเลือกสาขาวิชา</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>                    </div>

                    <div id="customInput4" class="hidden">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            // Attach click event handler to radio buttons
                            $('input[type=radio]').on('change', function () {
                                // Hide all custom input fields initially
                                $('[id^=customInput]').addClass('hidden');

                                // Show custom input field based on the selected radio button
                                var selectedOption = $(this).val();
                                $('#customInput' + selectedOption.slice(-1)).removeClass('hidden');
                            });
                        });
                    </script>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-xs bg-gradient-secondary"
                    data-bs-dismiss="modal">ยกเลิก</button>
                <button type="submit" class="btn btn-xs text-light font-weight-bolder"
                    style="background-color: #1D4F89">บันทึก</button>
            </div>
            </form>
        </div>
    </div>
</div>
