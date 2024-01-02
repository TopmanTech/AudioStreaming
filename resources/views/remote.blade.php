@extends('base')

@section('title', 'AudioStreaming - Remote Controller')

@push('scripts')
    @vite(['resources/assets/js/remote/app.ts'])
@endpush
