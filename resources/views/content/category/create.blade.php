<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mx-1 mb-1" data-bs-toggle="modal"
    data-bs-target="#CreateCategory">
    สร้าง
</button>
<!-- Modal -->
<div class="modal fade" id="CreateCategory" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Create User</h1>
                <span type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</span>
            </div>
            <div class="modal-body">
                <div id="myDiv">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('category.store') }}" class="row g-3 needs-validation" novalidate>
                                @csrf
                                <div class="col-md-3">
                                    <x-form-input name="category_name" value="" id=""
                                        type="" labelClass="label-bold label-red">
                                        หัวข้อ
                                    </x-form-input>
                                    <input name="status" value="TRUE" id=""
                                    type="hidden" labelClass="label-bold label-red">
                                </div>
                                </div>
                                <div class="col-md-12 justify-content-md-end">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <x-button type="submit" class="btn-primary mx-1 mb-2 mt-2">บันทึก</x-button>
                                        {{-- <x-button href="{{ url()->previous() }}" class="btn-danger  mx-1 mb-2 mt-2">กลับ</x-button> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>


