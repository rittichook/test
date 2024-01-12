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
<div class="modal fade" id="CreateSubject" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" class="bi bi-book-half" viewBox="0 0 16 16">
                        <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                      </svg> เพิ่มรายวิชา
                </h6>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('subject.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 text-start">
                        <label for="" class="form-label">รหัสวิชา<span style="color: red"> * </span></label>
                        <input type="text" class="form-control form-control-sm" id="" name="code" placeholder=""
                            >
                    </div>
                    <div class="mb-3 text-start">
                        <label for="" class="form-label">ชื่อวิชา<span style="color: red"> * </span></label>
                        <input type="text" class="form-control form-control-sm" id="" name="name"
                            placeholder="" required>
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

