<?php
function Research()
{
    // head
    echo '
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6" data-aos="fade-down" data-aos-delay="700">
                <h1 class="m-0 text-dark">หัวข้อวิจัย</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">
                            Research topic
                        </a>
                    </li>
                    <li class="breadcrumb-item active">หัวข้อวิจัย</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>    
    ';
    // main
    echo '
<section class="content" data-aos="flip-left"
data-aos-easing="ease-out-cubic"
data-aos-duration="2000">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">แบบฟอร์มเสนอหัวข้อ</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Project Name</label>
                        <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Project Description</label>
                        <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputClientCompany">Input File PDF</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputProjectLeader">Name - Lastname</label>
                        <input type="text" id="inputProjectLeader" class="form-control">
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">ดาวโหลดรูปแบบ</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group" id = "pdf">
                        <img src="https://img.icons8.com/dusk/64/000000/pdf.png"/>
                    </div>
                    <div class="form-group" id = "word">
                        <img src="https://img.icons8.com/dusk/64/000000/word.png"/>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="#" class="btn btn-secondary">ย้อนกลับ</a>
            <input type="submit" value="Create new Porject" class="btn btn-success">
        </div>
    </div>
</section>
    ';
}
