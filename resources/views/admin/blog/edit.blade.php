@extends('admin.includes.admin_design')

@section('title') Blog Management - {{ config('app.name', 'Laravel') }} @endsection

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <h5 class="page-title">Blog Management</h5>
                            <ul class="breadcrumb ml-2">
                                <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                                <li class="breadcrumb-item active">Edit Blog</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto text-right">
                        <a href="{{ route('blog.index') }}" class="btn btn-primary add-button"><i class="feather-eye"></i></a>
                    </div>
                </div>
            </div>

                @include('admin.includes._message')

            <form action="{{ route('blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="blog_title">Under Category <span class="text-danger">*</span>  </label>
                                            <select name="category_id" id="category_id" class="form-control">
                                                <option selected disabled>Select Category </option>
                                                @foreach($categories as $cat)
                                                    <option value="{{ $cat->id }}" {{ $cat->id == $blog->category_id ? 'selected' : '' }}>{{ $cat->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                         <div class="col-md-8">
                                             <div class="form-group">
                                                 <label for="blog_title">Blog Title <span class="text-danger">*</span>  </label>
                                                 <input type="text" class="form-control" placeholder="Please Enter Blog Title" name="blog_title" id="blog_title" value="{{ $blog->blog_title }}">
                                             </div>
                                         </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="blog_content">Blog Content <span class="text-danger">*</span>  </label>
                                            <textarea name="blog_content" id="summernote-editor" cols="30" rows="10" class="form-control">
                                                {{ $blog->blog_content }}
                                            </textarea>
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image">Thumbnail Image <span class="text-danger">*</span>  </label>
                                            <input type="file" class="form-control" placeholder="Please Enter Service Image" name="image" id="image" accept="image/*" onchange="readURL(this);">
                                        </div>

                                        <div class="col-md-12" style="margin-bottom: 20px">
                                            <img src="{{ asset('public/uploads/blog/'.$blog->image) }}" alt="" id="one" width="300">
                                        </div>
                                    </div>

                                    <br>

                                        <div class="col-md-12">
                                            <h4>SEO Settings</h4>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="seo_title">SEO Title  </label>
                                                <input type="text" class="form-control" placeholder="Please Enter SEO Title" name="seo_title" id="seo_title" value="{{ $blog->seo_title }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="seo_subtitle">SEO Sub Title  </label>
                                                <input type="text" class="form-control" placeholder="Please Enter SEO Sub Title" name="seo_subtitle" id="seo_subtitle" value="{{ $blog->seo_subtitle }}">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="seo_keywords">SEO Keywords  </label>
                                                <input type="text" class="form-control" placeholder="Please Enter SEO keywords" name="seo_keywords" id="seo_keywords" value="{{ $blog->seo_keywords }}">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="seo_description">SEO Description  </label>
                                                <input type="text" class="form-control" placeholder="Please Enter SEO Description" name="seo_description" id="seo_description" value="{{ $blog->seo_description }}">
                                            </div>
                                        </div>





                                    <div class="col-md-12">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success text-center">Update Blog</button>
                                        </div>
                                    </div>


                                </div>

                        </div>
                    </div>
                </div>

            </div>
            </form>
        </div>
    </div>





@endsection

@section('js')


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


    <script type="text/javascript">
        function readURL(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e){
                    $("#one").attr('src', e.target.result).width(300);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


    <script>
        $(document).ready(function() {
            $('#summernote-editor').summernote({
                height: 200
            });
        });
    </script>

@endsection
