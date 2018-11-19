@extends('layouts.master')
@section('content')
    <!-- content -->
    <div class="wrapper wrapper-content  animated fadeInRight blog">
        <div class="row">
            <div class="col-lg-16">
                @foreach ($results as $result)
                    <div class="ibox">
                        <div class="ibox-content">
                            <a href="{{route('blog.show', $result->id)}}" class="btn-link">
                                <h2>
                                    {{$result->title}}
                                </h2>
                            </a>
                            <div class="small m-b-xs">
                                <strong>{{$result->user->name}}</strong> <span class="text-muted"><i
                                            class="fa fa-clock-o"></i> {{$result->created_at}}</span>
                            </div>
                            <p>
                                {!! $result->content !!}
                            </p>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="{{route('blog.show', $result->id)}}"
                                               class="btn btn-info btn-block ">View</a>
                                        </div>
                                        @auth
                                            <div class="col-md-4">
                                                @if(Auth::user()->id === $result->user_id)
                                                    <a href="{{route('blog.edit', $result->id)}}"
                                                       class="btn btn-primary btn-block">Edit</a>
                                                @endif

                                            </div>
                                            <div class="col-md-4">
                                                <form action="{{route('blog.delete', $result->id)}}" method="post">
                                                    {{ csrf_field() }}
                                                    <button class="btn btn-danger btn-block">Delete</button>
                                                </form>

                                            </div>
                                        @endauth
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                <a href="{{ $results->links() }}" aria-controls="DataTables_Table_0" data-dt-idx="4"
                   tabindex="0">Next</a>
            </div>
        </div>
    </div>
@endsection