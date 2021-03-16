<?php
function Content()
{
    echo '
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">My Calendar</span>
                    <span class="text-muted mt-1 font-weight-bold font-size-sm">Upcoming Events &amp; Happenings</span>
                </h3>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-success font-weight-bold py-3 px-6">
                        <i class="ki ki-plus icon-1x mr-2"></i>New Event</a>
                </div>
            </div>
            <div class="card-body pt-10">
                <div id="kt_calendar"></div>
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>    
    ';
}
