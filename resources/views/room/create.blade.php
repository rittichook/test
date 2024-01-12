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
<div class="modal fade" id="CreateRoom" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                    </svg> เพิ่มห้องเรียน / สถานที่
                </h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('room.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 text-start">
                        <label for="" class="form-label">อาคาร</label>
                        <input type="text" class="form-control form-control-sm" id="" placeholder=""
                            disabled>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="" class="form-label">ชั้น</label>
                        <input type="text" class="form-control form-control-sm" id="" placeholder=""
                            disabled>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="" class="form-label">หมายเลขห้อง<span style="color: red"> * </span></label>
                        <input type="text" class="form-control form-control-sm" id="" name="name"
                            placeholder="" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="exampleFormControlTextarea1">รายละเอียด</label>
                        <textarea class="form-control" id="" name="detail" rows="3"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-xs bg-gradient-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="submit" class="btn btn-xs text-light font-weight-bolder"
                    style="background-color: #1D4F89">บันทึก</button>
            </div>
            </form>
        </div>
    </div>
</div>

