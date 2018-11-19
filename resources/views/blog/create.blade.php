@extends('layouts.master')
@section('content')
    <div class="error">
        @if($errors->any())
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        @endif
    </div>
    <form class="form-horizontal" method="POST" action="{{route('blog.store')}}" role="form"
          enctype="multipart/form-data">
        {{ csrf_field() }}
        <H2>Tạo Blog </H2>
        <div class="form-group"><label class="col-sm-2 control-label">{{__('blog.title')}}</label>
            <div class="col-sm-5"><input type="text" name="title" class="form-control"></div>
        </div>
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{__('blog.content')}}</h5>
            </div>
            <div class="ibox-content no-padding">
                <div class="col-sm-10 ">
                    <textarea name="content" class="summernote">
                    </textarea>
                </div>
            </div>
            <div class="ibox-content">
                <button class="btn btn-sm btn-primary " type="submit"><strong>LƯU</strong></button>
            </div>
        </div>
    </form>

@endsection