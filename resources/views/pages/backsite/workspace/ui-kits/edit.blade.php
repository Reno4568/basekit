@extends('layouts.default')

{{-- set title --}}
@section('title', 'Edit - UI Kits')

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
                    <h3 class="content-header-title mb-0 d-inline-block">Edit UI Kits</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('backsite.dashboard.index') }}" onclick="return confirm('Are you sure close this page ?')">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('backsite.ui_kits.index') }}" onclick="return confirm('Are you sure close this page ?')">UI Kits</a>
                                </li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            {{-- forms --}}
            <div class="content-body"><!-- Basic form layout section start -->
                <section id="horizontal-form-layouts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="horz-layout-basic">Form Input</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collpase show">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>Please complete the input <code>required</code>, before you click the submit button.</p>
                                        </div>
                                        <form class="form form-horizontal" action="{{ route("backsite.ui_kits.update", [$ui_kit->id]) }}" method="POST" enctype="multipart/form-data">

                                                @method('PUT')
                                                @csrf

                                                <div class="form-body">

                                                    <h4 class="form-section"><i class="fa fa-edit"></i> Form UI Kits</h4>

                                                    <div class="form-group row {{ $errors->has('id_category') ? 'has-error' : '' }}">
                                                        <label class="col-md-3 label-control">Category <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <select name="id_category" 
                                                                    id="id_category" 
                                                                    class="form-control select2" required>
                                                                    <option value="{{ '' }}" disabled selected>Choose</option>
                                                                @foreach($category as $key => $item_category)
                                                                    <option value="{{ $item_category->id }}" {{ $ui_kit->id_category == $item_category->id ? 'selected' : '' }}>{{ $item_category->name }}</option>
                                                                @endforeach
                                                            </select>

                                                            @if($errors->has('id_category'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('id_category') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="name">Name <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="name" name="name" class="form-control" placeholder="example landing page design or mobile first" value="{{ old('name', isset($ui_kit) ? $ui_kit->name : '') }}" autocomplete="off" required>

                                                            @if($errors->has('name'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('name') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="thumbnail">Thumbnail <code style="color:green;">optional</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <div class="custom-file">
                                                                <input type="file" accept="image/x-png,image/svg,image/jpeg" class="custom-file-input" id="thumbnail" name="thumbnail">
                                                                <label class="custom-file-label" for="thumbnail" aria-describedby="thumbnail">Choose file</label>
                                                            </div>
                                                            
                                                            <p class="text-muted"><small class="text-danger">Can only upload one file. </small><small>Files that can be used are JPEG, SVG & PNG. The maximum file size is only 5 MegaBytes.</small></p>
                                                            
                                                            <img src="
                                                                @if ($ui_kit->thumbnail != "") 
                                                                    @if(File::exists('storage/'.$ui_kit->thumbnail))
                                                                        {{ url(Storage::url($ui_kit->thumbnail)) }}
                                                                    @else
                                                                        {{ asset('/back-design/clients/default/image-not-found.svg') }}
                                                                        {{-- {{ url(Storage::url('app/public/'.$ui_kit->image)) }} --}}
                                                                    @endif
                                                                @else
                                                                    {{ asset('/back-design/clients/default/image-not-found.svg') }}
                                                                @endif "
                                                                alt="thumbnail" class="users-avatar-shadow rounded-circle mr-2" height="100" width="100">
    
                                                            <span id="image-holder"> </span>
    
                                                            @if($errors->has('thumbnail'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('thumbnail') }}</p>
                                                            @endif
    
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="url_file">Name <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="url" id="url_file" name="url_file" class="form-control" placeholder="example url your file" value="{{ old('url_file', isset($ui_kit) ? $ui_kit->url_file : '') }}" autocomplete="off" required>

                                                            @if($errors->has('url_file'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('url_file') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-actions text-right">
                                                    <a href="{{ route('backsite.ui_kits.index') }}" style="width:120px;" class="btn bg-blue-grey text-white mr-1" onclick="return confirm('Are you sure want to close this page? , Any changes you make will not be saved.')">
                                                        <i class="ft-x"></i> Cancel
                                                    </a>
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

        </div>
    </div>
<!-- END: Content-->

@endsection


@push('after-script')

    <script>
        var uploadField = document.getElementById("thumbnail");

        uploadField.onchange = function() {
            if(this.files[0].size > 5100000){
                alert("Your file is too big, the maximum file size is only 5 megabytes");
                this.value = "";
            };
        };

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

@endpush