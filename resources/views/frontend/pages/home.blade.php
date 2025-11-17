@extends('frontend.layouts.frontend')

@section('title', 'Home')

@push('frontend-styles')
<style>
    .btn-primary {
        background-color: #2b3036;
        border-color: #007bff;
    }
</style>
@endpush

@section('frontend-content')

    asdsadasdsadasdasdsa
    <button class="btn btn-sm btn-primary">HOme page</button>

    
@endsection

@push('frontend-scripts')
    <script>
        console.log("Home page loaded");
    </script>
@endpush
