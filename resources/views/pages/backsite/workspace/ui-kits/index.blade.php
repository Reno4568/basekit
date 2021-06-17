@extends('layouts.default')

{{-- set title --}}
@section('title', 'UI Kits')

@section('content')

<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">

            {{-- error --}}
            @if ($errors->any())
                <div class="alert bg-danger alert-dismissible mb-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- breadcumb --}}
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">UI Kits</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('backsite.dashboard.index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">UI Kits</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            {{-- add card --}}
            @can('ui_kit_create')
                <div class="content-body">
                    <section id="add-home">
                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-header bg-success text-white">
                                        <a data-action="collapse">
                                            <h4 class="card-title text-white">Add Data</h4>
                                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                            <div class="heading-elements">
                                                <ul class="list-inline mb-0">
                                                    <li><a data-action="collapse"><i class="ft-plus"></i></a></li>
                                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="card-content collapse hide">
                                        <div class="card-body card-dashboard">
                                            
                                            <form class="form form-horizontal" action="{{ route('backsite.ui_kits.store') }}" method="POST" enctype="multipart/form-data">

                                                @csrf

                                                <div class="form-body">
                                                    <div class="form-section">
                                                        <p>Please complete the input <code>required</code>, before you click the submit button.</p>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="id_category">Id Category <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="number" id="id_category" name="id_category" class="form-control" placeholder="example input only numeric" value="{{old('id_category')}}" autocomplete="off" required>

                                                            @if($errors->has('id_category'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('id_category') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="name">Name <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="name" name="name" class="form-control" placeholder="example landing page design or mobile first" value="{{old('name')}}" autocomplete="off" required>

                                                            @if($errors->has('name'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('name') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="thumbnail">Thumbnail <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <div class="custom-file">
                                                                <input type="file" accept="image/x-png,image/svg,image/jpeg" class="custom-file-input" id="thumbnail" name="thumbnail" required>
                                                                <label class="custom-file-label" for="thumbnail" aria-describedby="thumbnail">Choose File</label>
                                                            </div>
                                                            
                                                            <p class="text-muted"><small class="text-danger">Can only upload one file. </small><small>Files that can be used are JPEG, SVG & PNG. The maximum file size is only 5 MegaBytes.</small></p>

                                                            <div id="image-holder"> </div>
    
                                                            @if($errors->has('thumbnail'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('thumbnail') }}</p>
                                                            @endif
    
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="url_file">URL File <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="url" id="url_file" name="url_file" class="form-control" placeholder="example url your file" value="{{old('url_file')}}" autocomplete="off" required>

                                                            @if($errors->has('url_file'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('url_file') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-actions text-right">
                                                    <button type="submit" style="width:120px;" class="btn btn-cyan" onclick="return confirm('Are you sure want to save this data ?')">
                                                        <i class="la la-check-square-o"></i> Submit
                                                    </button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            @endcan

            {{-- table card --}}
            @can('ui_kit_table')
                <div class="content-body">
                    <section id="table-home">
                        <!-- Zero configuration table -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">UI Kits List</h4>
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                <!-- <li><a data-action="close"><i class="ft-x"></i></a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="card-content collapse show">
                                        <div class="card-body card-dashboard">

                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered text-inputs-searching default-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Id Category</th>
                                                            <th>Thumbnail</th>
                                                            <th>Name</th>
                                                            <th>URL File</th>
                                                            <th style="text-align:center; width:150px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($ui_kits as $key => $ui_kit)
                                                            <tr data-entry-id="{{ $ui_kit->id }}">
                                                                <td>{{ date("d/m/Y H:i:s",strtotime($ui_kit->created_at)) ?? '' }}</td>
                                                                <td>{{ $ui_kit->id_category ?? '' }}</td>
                                                                <td>
                                                                    <img src="
                                                                        @if ($ui_kit->thumbnail != "") 
                                                                            @if(File::exists('storage/'.$ui_kit->thumbnail))
                                                                                {{ url(Storage::url($ui_kit->thumbnail)) }}
                                                                            @else
                                                                                {{-- {{ url(Storage::url('app/public/'.$ui_kit->image)) }} --}}
                                                                                {{ asset('/back-design/clients/default/image-not-found.svg') }}
                                                                            @endif
                                                                        @else
                                                                            {{ asset('/back-design/clients/default/image-not-found.svg') }}
                                                                        @endif "
                                                                        alt="thumbnail" class="users-avatar-shadow" height="100" width="100">
                                                                </td>
                                                                <td>{{ $ui_kit->name ?? '' }}</td>
                                                                <td><a href="{{ $ui_kit->url_file ?? '#' }}" target="_blank" rel="noopener noreferrer">URL File</a></td>
                                                                <td class="text-center">

                                                                    <div class="btn-group mr-1 mb-1">
                                                                        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                                        <div class="dropdown-menu">
                                                                            @can('ui_kit_show')
                                                                                <a href="#mymodal" 
                                                                                    data-remote="{{ route('backsite.ui_kits.show', $ui_kit->id) }}" 
                                                                                    data-toggle="modal" 
                                                                                    data-target="#mymodal" 
                                                                                    data-title="UI Kits Detail" 
                                                                                    class="dropdown-item">
                                                                                    Show
                                                                                </a>
                                                                            @endcan
                                                                            @can('ui_kit_edit')
                                                                                <a class="dropdown-item" href="{{ route('backsite.ui_kits.edit', $ui_kit->id) }}">
                                                                                    Edit
                                                                                </a>
                                                                            @endcan
                                                                            @can('ui_kit_delete')
                                                                                <form action="{{ route('backsite.ui_kits.destroy', $ui_kit->id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete this data ?');">
                                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                    <input type="submit" class="dropdown-item" value="Delete">
                                                                                </form>
                                                                            @endcan
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                        @empty
                                                            {{-- not found --}}
                                                        @endforelse
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Id Category</th>
                                                            <th>Thumbnail</th>
                                                            <th>Name</th>
                                                            <th>URL File</th>
                                                            <th style="text-align:center; width:150px;">Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>

                                            <hr>

                                            <div class="table-responsive">
                                                <div class="text-center mb-3">
                                                    @if ($ui_kits->hasPages())
                                                        <h4 class="card-title">Pagination Page</h4>
                                                        <p class="mt-1"><code class="text-dark">Page {{ $ui_kits->currentPage() }}</code> & <code>All data {{ $ui_kits->total() }}</code></p>
                                                    @endif
                                                    <nav aria-label="Page navigation">
                                                        @if ($ui_kits->hasPages())
                                                            <ul class="pagination justify-content-center pagination-round">

                                                                {{-- Previous Page Link --}}
                                                                @if ($ui_kits->onFirstPage())
                                                                    <li class="page-item disabled">
                                                                        <a class="page-link" href="#" aria-label="Previous">
                                                                            <span aria-hidden="true"><i class="ft-chevron-left"></i></span>
                                                                            <span class="sr-only"><i class="ft-chevron-left"></i></span>
                                                                        </a>
                                                                    </li>
                                                                @else
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="{{ $ui_kits->previousPageUrl() }}" aria-label="Previous">
                                                                            <span aria-hidden="true"><i class="ft-chevron-left"></i></span>
                                                                            <span class="sr-only"><i class="ft-chevron-left"></i></span>
                                                                        </a>
                                                                    </li>
                                                                @endif

                                                                @if($ui_kits->currentPage() > 2)
                                                                    <li class="page-item"><a class="page-link" href="{{ $ui_kits->url(1) }}">1</a></li>
                                                                @endif

                                                                @if($ui_kits->currentPage() > 3)
                                                                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                                                                @endif

                                                                @foreach(range(1, $ui_kits->lastPage()) as $i)
                                                                    @if($i >= $ui_kits->currentPage() - 1 && $i <= $ui_kits->currentPage() + 1)
                                                                        @if ($i == $ui_kits->currentPage())
                                                                            <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                                                                        @else
                                                                            <li class="page-item"><a class="page-link" href="{{ $ui_kits->url($i) }}">{{ $i }}</a></li>
                                                                        @endif
                                                                    @endif
                                                                @endforeach

                                                                @if($ui_kits->currentPage() < $ui_kits->lastPage() - 3)
                                                                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                                                                @endif

                                                                @if($ui_kits->currentPage() < $ui_kits->lastPage() - 2)
                                                                    <li class="page-item"><a class="page-link" href="{{ $ui_kits->url($ui_kits->lastPage()) }}">{{ $ui_kits->lastPage() }}</a></li>
                                                                @endif

                                                                {{-- Next Page Link --}}
                                                                @if ($ui_kits->hasMorePages())
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="{{ $ui_kits->nextPageUrl() }}" aria-label="Next">
                                                                            <span aria-hidden="true"><i class="ft-chevron-right"></i></span>
                                                                            <span class="sr-only"><i class="ft-chevron-right"></i></span>
                                                                        </a>
                                                                    </li>
                                                                @else
                                                                    <li class="page-item disabled">
                                                                        <a class="page-link" href="#" aria-label="Next">
                                                                            <span aria-hidden="true"><i class="ft-chevron-right"></i></span>
                                                                            <span class="sr-only"><i class="ft-chevron-right"></i></span>
                                                                        </a>
                                                                    </li>
                                                                @endif

                                                            </ul>
                                                        @endif
                                                    </nav>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            @endcan

        </div>
    </div>
<!-- END: Content-->

@endsection


@push('after-script')

    <script>
        jQuery(document).ready(function($){
            $('#mymodal').on('show.bs.modal', function(e){
                var button = $(e.relatedTarget);
                var modal = $(this);

                modal.find('.modal-body').load(button.data("remote"));
                modal.find('.modal-title').html(button.data("title"));
            });
        });

        var uploadField = document.getElementById("thumbnail");

        uploadField.onchange = function() {
            if(this.files[0].size > 5100000){
                alert("Your file is too big, the maximum file size is only 5 megabytes");
                this.value = "";
            };
        };

        $('.default-table').DataTable( {
            "order": [],
            "paging": true,
            "lengthMenu": [ [5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"] ],
            "pageLength": 5
        });

        $("#thumbnail").on('change', function () {
            if (typeof (FileReader) != "undefined") {
                var image_holder = $("#image-holder");
                image_holder.empty();
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("<img />", {
                    "style": "height:100px; width:100px; object-fit:cover;",
                        "src": e.target.result,
                        "class": "users-avatar-shadow rounded mt-25"
                    }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[0]);
            } else {
                alert("This browser does not support File Reader.");
            }
        });
    </script>

    <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button class="btn close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <i class="fa fa-spinner fa spin"></i>
                </div>
            </div>
        </div>
    </div>

@endpush