@extends('layouts.app')

@section('content')
    <div class="flex-1 h-full">
        <the-chat :current-user="{{ auth()->id() }}"></the-chat>
    </div>
@endsection
