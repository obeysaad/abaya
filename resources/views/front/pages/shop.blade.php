@extends('layouts.front')

@section('content')

@livewire('category', ['id' => $id])
@endsection
