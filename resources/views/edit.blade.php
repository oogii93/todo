@extends('layouts.app')
@section('title', 'edit Task')



@section('content')
    @include('form', ['task' => $task])

@endsection
