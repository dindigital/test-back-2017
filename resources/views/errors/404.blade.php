@extends('layouts.app')

@section('content')
<h1>{{ $exception->getMessage() }}</h1>
@endsection