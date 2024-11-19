@extends('layouts.custom')  <!-- Assuming you're using Breeze or Jetstream -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <x-guest-layout>
    <h1> Smart Inventory System</h1>
    <!-- other content goes here -->
</x-guest-layout>

            </div>
        </div>
    </div>
</div>
@endsection
