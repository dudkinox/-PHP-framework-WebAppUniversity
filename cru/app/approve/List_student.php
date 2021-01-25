<?php
function List_student()
{
    // head
    echo '
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6" data-aos="fade-down" data-aos-delay="700">
                <h1 class="m-0 text-dark">หัวข้อวิจัยที่ขออนุมัติ</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">
                            Approve
                        </a>
                    </li>
                    <li class="breadcrumb-item active">อนุมัติ</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>    
    ';
    // main
    echo '
    <div class="card" data-aos="flip-left" data-aos-delay = "1000">
    <div class="card-header">
        <h3 class="card-title">รายการที่นักศึกษาขออนุมัติ</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>หัวข้อ</th>
                    <th>ชื่อ - สกุล</th>
                    <th>อาจารย์ที่ปรึกษา</th>
                    <th>ไฟล์เอกสาร</th>
                    <th>สถานะ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>หุ่นยนต์แม่บ้าน</td>
                    <td>นาย ศุภณัฐ
                        ชินราช
                    </td>
                    <td>อาจารย์ ชื่อ - สกุล</td>
                    <td><img src="https://img.icons8.com/dusk/30/000000/pdf.png"/></td>
                    <td><span id = "approve_status"><p>อนุมัติเเล้ว</p></span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>    
    ';
    // comment teacher
    echo '
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">ความคิดเห็นจากอาจารย์</h3>

            <div class="card-tools">
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="mailbox-read-info">
                <h5>Message Subject Is Placed Here</h5>
                <h6>From: support@adminlte.io
                    <span class="mailbox-read-time float-right">15 Feb. 2015 11:03 PM</span>
                </h6>
            </div>
            <!-- /.mailbox-read-info -->
            <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                        <i class="far fa-trash-alt"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                        <i class="fas fa-reply"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                        <i class="fas fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                    <i class="fas fa-print"></i></button>
            </div>
            <!-- /.mailbox-controls -->
            <div class="mailbox-read-message">
                <p>Hello John,</p>

                <p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird
                    on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical
                    master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack
                    gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon
                    asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu
                    blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American
                    Apparel.</p>

                <p>asfesadfef</p>

                <p>sdgdfsgdfgr</p>

                <p>Skateboard artisan letterpress before they sold out High Life messenger bag. Bitters chambray
                    leggings listicle, drinking vinegar chillwave synth. Fanny pack hoodie American Apparel twee. American
                    Apparel PBR listicle, salvia aesthetic occupy sustainable Neutra kogi. Organic synth Tumblr viral
                    plaid, shabby chic single-origin coffee Etsy 3 wolf moon slow-carb Schlitz roof party tousled squid
                    vinyl. Readymade next level literally trust fund. Distillery master cleanse migas, Vice sriracha
                    flannel chambray chia cronut.</p>

                <p>Thanks,<br>Jane</p>
            </div>
            <!-- /.mailbox-read-message -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer bg-white">
            <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                <li>
                    <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>

                    <div class="mailbox-attachment-info">
                        <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Sep2014-report.pdf</a>
                        <span class="mailbox-attachment-size clearfix mt-1">
                            <span>1,245 KB</span>
                            <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                        </span>
                    </div>
                </li>
                <li>
                    <span class="mailbox-attachment-icon"><i class="far fa-file-word"></i></span>

                    <div class="mailbox-attachment-info">
                        <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> App Description.docx</a>
                        <span class="mailbox-attachment-size clearfix mt-1">
                            <span>1,245 KB</span>
                            <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                        </span>
                    </div>
                </li>
                <li>
                    <span class="mailbox-attachment-icon has-img"><img src="../bootstrap/dist/img/photo1.png" alt="Attachment"></span>

                    <div class="mailbox-attachment-info">
                        <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo1.png</a>
                        <span class="mailbox-attachment-size clearfix mt-1">
                            <span>2.67 MB</span>
                            <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                        </span>
                    </div>
                </li>
                <li>
                    <span class="mailbox-attachment-icon has-img"><img src="../bootstrap/dist/img/photo2.png" alt="Attachment"></span>

                    <div class="mailbox-attachment-info">
                        <a href="#" class="mailbox-attachment-name"><i class="fas fa-camera"></i> photo2.png</a>
                        <span class="mailbox-attachment-size clearfix mt-1">
                            <span>1.9 MB</span>
                            <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                        </span>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.card-footer -->
        <div class="card-footer">
            <div class="float-right">
                <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Reply</button>
                <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward</button>
            </div>
            <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button>
            <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
</div>    
    ';
}

?>
