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
<div class="modal fade" id="EditPrefix{{ $data->id }}" tabindex="-1" role="dialog" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path
                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                    </svg> แก้ไขรายวิชา
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('prefix.update', $data->id) }}" method="POST">
                    @method('PUT')
                    @csrf <div class="mb-3 text-start">
                        <label for="" class="form-label"> คำนำหน้าชื่อ (TH)<span style="color: red"> *
                            </span></label>
                        <input type="text" class="form-control form-control-sm" id="" name="name"
                           value="{{$data->name}}"  placeholder="">
                    </div>
                    <div class="mb-3 text-start">
                        <label for="" class="form-label"> คำนำหน้าชื่อ (EN)<span style="color: red"> *
                            </span></label>
                        <input type="text" class="form-control form-control-sm" id="" name="name_e"
                        value="{{$data->name_e}}" placeholder="" required>
                    </div>
                    <div class="mb-3 text-start">
                      <label for="" class="form-label">สถานะ<span style="color: red"> * </span></label>
                      <select class="form-control form-control-sm" id="exampleFormControlSelect1">

                          <option @if ($data->status == 1) selected @endif>ใช้งาน</option>
                          <option @if ($data->status == 0) selected @endif>ไม่ใช้งาน</option>



                      </select>
                  </div>


            </div>
            <div class="modal-footer">
                <div class="row"></div>
                <button type="button" class="btn btn-xs bg-gradient-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="submit" class="btn btn-xs text-light font-weight-bolder"
                    style="background-color: #1D4F89">บันทึก</button>
            </div>
            </form>
        </div>
    </div>
</div>
