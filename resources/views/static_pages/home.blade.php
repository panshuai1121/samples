@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello EveryBody</h1>
    <p>
      舞动，将从这里开始。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
  </div>
@stop
