@extends('welcome')

@section('content')
    {!! Form::open() !!}
    <!---   Field --->
        <div class="form-group">
            {!! Form::label('name','用户名') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','密码') !!}
            {!! Form::text('password',null,['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('登录') !!}
    {!! Form::close() !!}
@endsection