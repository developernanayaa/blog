@extends('layouts.theme')

@section('working_area')
    <div class="col-lg-8 col-lg-offset-2">
        <div class="portlet">
            <div class="portlet-heading bg-primary">
                <h3 class="portlet-title">
                    <a href="/article/{{$article->id}}">{{$article->title}}</a>
                </h3>

                <div class="portlet-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="zmdi zmdi-refresh"></i></a>
                    <a data-toggle="collapse" data-parent="#accordion1" href="ui-cards.html#bg-primary1"><i class="zmdi zmdi-minus"></i></a>
                    <a href="ui-cards.html#" data-toggle="remove"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="bg-primary1" class="panel-collapse collapse in">
                <div class="portlet-body">
                    <div class="">{{$article->created_at->diffForHumans()}} by user {{$article->id}}</div>
                    <hr>
                    {{$article->body}}

                    <hr>
                    <span>Written by: {{$article->user->name}}</span> <span class="text-right"><a href="">Comment</a></span>

                </div>

            </div>
        </div>
        @include('comments.frame')

    </div>
@endsection