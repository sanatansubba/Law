@extends('admin.includes.admin_design')

@section('title') Testimonial Management - {{ config('app.name', 'Laravel') }} @endsection

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <h5 class="page-title">Testimonial Management</h5>
                            <ul class="breadcrumb ml-2">
                                <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">View All Testimonials</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto text-right">
                        <a href="{{ route('testimonial.add') }}" class="btn btn-primary add-button" style="color: white"><i class="feather-plus"></i> </a>
                    </div>
                </div>
            </div>

            @include('admin.includes._message')

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-stripped" id="type-datatable">
                                    <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Message</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('js')
    <script>
        $('#type-datatable').DataTable({
            processing: true,
            serverSide: true,
            sorting: true,
            searchable: true,
            responsive: true,
            ajax: "{{ route('table.testimonial') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'image', name: 'image',
                    render: function (data, type, full, meta){
                        if(data){
                            return "<img src={{ URL::to('/') }}/public/uploads/testimonial/" + data + " width='70' >";
                        }
                        return "<img src={{ URL::to('/') }}/public/default/noimage.jpg" + " width='70' >";
                    }
                },
                {data: 'name', name: 'name'},
                {data: 'position', name: 'position'},
                {data: 'info', name: 'info'},
                {data: 'action', name: 'action', orderable: false},
            ]
        });
    </script>

    <script>
        $('body').on('click', '.btn-delete', function (event) {
            event.preventDefault();

            var SITEURL = '{{ URL::to('') }}';

            var id = $(this).attr('rel');
            var deleteFunction = $(this).attr('rel1');
            swal({
                    title: "Are You Sure? ",
                    text: "You will not be able to recover this record again",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, Delete it!"
                },
                function () {
                    window.location.href =  SITEURL + "/admin/" + deleteFunction + "/" + id;
                });
        });
    </script>
@endsection
