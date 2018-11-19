@extends('layouts.master')
@section('content')
    <div class="form-group"><
        <div class="col-sm-5">
            <h3>{{$results->title}}</h3>
        </div>
    </div>
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Nội Dung</h5>
        </div>
        <div class="ibox-content no-padding">
            <div class="col-sm-10 ">
                <div>
                    {!! $results->content !!}
                </div>
            </div>
        </div>
        <div class="ibox-content">
            <div>
                <a class="btn btn-primary" href="{{route('blog.home')}}">Back to List</a>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('js/pages/blog.js') }}"></script>
@endsection