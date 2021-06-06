<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">ส่งเอกสารวิจัย บทที่1-5</h3>
        </div>
    </div>
    <!--begin::Form-->
    <form action="Exam/API.php?project=1" method="POST" enctype="multipart/form-data">
        <div class=" card-body">
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12 text-lg-right">อัพโหลดไฟล์</label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <div class="dropzone dropzone-default dropzone-primary">
                        <div class="dropzone-msg dz-message needsclick">
                            <h1 class="dropzone-msg-title">อัพโหลดที่นี่</h1>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file" name="file">
                                            <label class="custom-file-label" for="file">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-light-primary mr-2">บันทึก</button>
                </div>
            </div>
        </div>
    </form>
    <!--end::Form-->
</div>