@extends('layouts.master')

@section('content')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Institute</div>
            <div class="ms-auto"><button class="btn btn-primary radius-30 mt-2 mt-lg-0" data-bs-toggle="modal" data-bs-target="#addInstituteModal">
                <i class="bx bxs-plus-square"></i>Add Institute</button></div>
        </div>
        <!--end breadcrumb-->
      
        <div class="card">
            <div class="card-body" id="show_institutes">
            </div>
        </div>

        @include('Institute/modal/add_institute')

    </div>
</div>
<!--end page wrapper -->

@endsection

@push('scripts')

<script>

$(document).ready(function() {
    // Get All institute function call
     fetchAllInstitute();
 
    // Get All Institute function
		function fetchAllInstitute(){
		$.ajax({
		url: '{{ route('institutedata') }}',
		method: 'get',
		success: function(res){
		    $("#show_institutes").html(res);
		}
		});
		}

    // Add Institute Code
	$("#instituteForm").submit(function(e){
        e.preventDefault();
        const fd = new FormData(this);
        $("#btnsave").text('Adding...');
        $.ajax({
            url: '{{ route('save') }}',
            method: 'post',
            data: fd,
            cache: false,
            processData: false,
            contentType: false,
            success: function(res){
                console.log(res);
                if(res.status == 200){
                    toastr.success('Data Save Successfully');
                    fetchAllInstitute();
                }
                $("#btnsave").text('SAVE');
                $("#instituteForm")[0].reset();
                $("#addInstituteModal").modal('hide');
            },
            error: function (request, status, error) {
                toastr.error(request.responseText);
                fetchAllInstitute();
                $("#btnsave").text('SAVE');
            $("#instituteForm")[0].reset();
            $("#addInstituteModal").modal('hide');
            }

        });
	});
});

</script>

@endpush