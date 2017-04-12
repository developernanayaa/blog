@extends('layouts.theme')

@section('working_area')

    <div class="col-lg-6">
        <div class="card-box col-md-offset-3">
            {!! Form::open(['route'=>'article.store','class'=>'form form-horizontal']) !!}
            <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                {!! Form::label('title','Title',null,['class'=>'control-label']) !!}
                {!! Form::text('title',null,['class'=>'form-control' ]) !!}
                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
                </div>
            <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">

            {!! Form::label('desc','Description',null,['class'=>'control-label']) !!}
                {!! Form::text('description',null,['class'=>'form-control']) !!}
                @if ($errors->has('description'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                @endif
                </div>
            <div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">

            {!! Form::label('body','Body',null,['class'=>'control-label']) !!}
                {!! Form::textarea('body',null,['class'=>'form-control']) !!}
                @if ($errors->has('body'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                @endif
            </div>
                {!! Form::submit('Create Article',['class'=>'btn btn-primary btn-lg btn-block']) !!}


            {!! Form::close() !!}

        </div>
    </div>



    @endsection