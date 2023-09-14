@extends('layouts.master')

@section('content')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Institute</div>
            <div class="ms-auto"><button class="btn btn-primary radius-30 mt-2 mt-lg-0" data-bs-toggle="modal" data-bs-target="#addDesignationModal">
                <i class="bx bxs-plus-square"></i>Add Institute</button></div>
        </div>
        <!--end breadcrumb-->
      
        <div class="card">
            <div class="card-body" id="show_institutes">
                {{-- <div class="d-lg-flex align-items-center mb-4 gap-3">                  
                </div>
                <div class="table-responsive" id="instituteTableId">
                    <table id="instituteTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>logo</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Website</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- Table rows dynamically generated in your Django view -->
                        </tbody>
                    </table>
                </div> --}}
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
 
     // Get All institute function
    //  function fetchAllInstitute() {
    //      axios.get("institutedata/")
    //          .then(function (res) {
    //              $('#instituteTable').DataTable({
    //                  "bDestroy": true,
    //                  data: res.data,
    //                  columns: [
    //                      { data: 'ID' },
    //                      { data: 'Logo' },
    //                      { data: 'Name' },
    //                      { data: 'Address' },
    //                      { data: 'Email' },
    //                      { data: 'Phone' },
    //                      { data: 'Website' },
    //                      { data: 'Action' }
    //                  ]
    //              });
    //          })
    //          .catch(function (err) {
    //              console.log(err);
    //          });
    //  }
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
});

</script>

@endpush