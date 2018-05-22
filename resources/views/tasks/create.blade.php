@extends('layouts.app')

@section('content')
<h1>タスク新規作成ページ</h1>

    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="row">
        <div class="col-xs-12">
        <div class="col-sm-offset-2 col-sm-8"></div>
　　　　<div class="col-md-offset-2 col-md-8"></div>
　　　　<div class="col-lg-offset-3 col-sm-6"></div>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
        <div class="form-group">
           {!! Form::label('status', 'ステータス:') !!}
           {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
           {!! Form::label('content', 'タスク:') !!}
           {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
    
    {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
   
    </div>
    </div>

@endsection