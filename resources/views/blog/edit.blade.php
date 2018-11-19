@extends('layouts.master')
@section('content')
    <form class="form-horizontal" method="POST" action="{{route('blog.update')}}" role="form"
          enctype="multipart/form-data">
        {{ csrf_field() }}
        <H2>Sửa Blog </H2>
        <div class="form-group"><label class="col-sm-2 control-label">Tiêu Đề</label>
            <input type="hidden" id="blogId" name="id" value="{{$results->id}}">
            <div class="col-sm-5"><input type="text" name="title" class="form-control" value="{{$results->title}}">
            </div>
        </div>
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Nội Dung</h5>
            </div>
            <div class="ibox-content no-padding">
                <div class="col-sm-10 ">
                    <textarea name="content" class="summernote">
                        {{ $results->content }}
                    </textarea>
                </div>
            </div>
            <div class="ibox-content">
                <div>
                    <button class="btn btn-sm btn-primary " type="submit"><strong>Luu</strong></button>
                </div>
            </div>
        </div>
        </div>
    </form>
@endsection