<?php
function Person()
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
    // script
    echo '
    <script>
        function person(){
            window.location.href += "&research=1";
        }
    </script>
    ';
    // main
    echo '
<section class="content" data-aos="flip-left"
data-aos-easing="ease-out-cubic"
data-aos-duration="2000">
<h1>เลือกอาจารย์ที่ปรึกษา</h1>
    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row d-flex align-items-stretch">
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            Digital Strategist
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Nicole Pearson</b></h2>
                                    <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/133736677_5085662461451531_8570146526618106091_n.jpg?_nc_cat=111&ccb=2&_nc_sid=09cbfe&_nc_ohc=J62UTWi0EsYAX_QGA__&_nc_ht=scontent.fbkk5-3.fna&oh=4f9e262480351db159c11c1045eac03a&oe=6030C06B" alt="" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a style = "curser: pointer;" onclick="person()" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> เลือกที่ปรึกษา
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            Digital Strategist
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Nicole Pearson</b></h2>
                                    <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/133736677_5085662461451531_8570146526618106091_n.jpg?_nc_cat=111&ccb=2&_nc_sid=09cbfe&_nc_ohc=J62UTWi0EsYAX_QGA__&_nc_ht=scontent.fbkk5-3.fna&oh=4f9e262480351db159c11c1045eac03a&oe=6030C06B" alt="" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a style = "curser: pointer;" onclick="person()" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> เลือกที่ปรึกษา
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            Digital Strategist
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Nicole Pearson</b></h2>
                                    <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/133736677_5085662461451531_8570146526618106091_n.jpg?_nc_cat=111&ccb=2&_nc_sid=09cbfe&_nc_ohc=J62UTWi0EsYAX_QGA__&_nc_ht=scontent.fbkk5-3.fna&oh=4f9e262480351db159c11c1045eac03a&oe=6030C06B" alt="" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a style = "curser: pointer;" onclick="person()" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> เลือกที่ปรึกษา
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            Digital Strategist
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Nicole Pearson</b></h2>
                                    <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/133736677_5085662461451531_8570146526618106091_n.jpg?_nc_cat=111&ccb=2&_nc_sid=09cbfe&_nc_ohc=J62UTWi0EsYAX_QGA__&_nc_ht=scontent.fbkk5-3.fna&oh=4f9e262480351db159c11c1045eac03a&oe=6030C06B" alt="" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a style = "curser: pointer;" onclick="person()" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> เลือกที่ปรึกษา
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            Digital Strategist
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Nicole Pearson</b></h2>
                                    <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/133736677_5085662461451531_8570146526618106091_n.jpg?_nc_cat=111&ccb=2&_nc_sid=09cbfe&_nc_ohc=J62UTWi0EsYAX_QGA__&_nc_ht=scontent.fbkk5-3.fna&oh=4f9e262480351db159c11c1045eac03a&oe=6030C06B" alt="" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a style = "curser: pointer;" onclick="person()" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> เลือกที่ปรึกษา
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            Digital Strategist
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Nicole Pearson</b></h2>
                                    <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/133736677_5085662461451531_8570146526618106091_n.jpg?_nc_cat=111&ccb=2&_nc_sid=09cbfe&_nc_ohc=J62UTWi0EsYAX_QGA__&_nc_ht=scontent.fbkk5-3.fna&oh=4f9e262480351db159c11c1045eac03a&oe=6030C06B" alt="" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a style = "curser: pointer;" onclick="person()" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> เลือกที่ปรึกษา
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <nav aria-label="Contacts Page Navigation">
                <ul class="pagination justify-content-center m-0">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                </ul>
            </nav>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->

</section>
    ';
    
}
?>

