
<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">

<div class="container">
 <div class="item">
<div class="card">
  <div class="card-details">
    <p class="text-title">Card title</p>
    <p class="text-body">Here are the details of the card</p>
  </div>
<div class="card-button">
    <x-link href="{{ route('form') }}"   class="-mr-16 ms-4">
        {{ __('Apply') }}
    </x-link>
</div>
</div>
</div>

<div class="item">
<div class="card">
  <div class="card-details">
    <p class="text-title">Card title</p>
    <p class="text-body">Here are the details of the card</p>
  </div>
<x-link class="ms-4" href="{{route('form')}}">
{{ __('Apply') }}
</x-link>
</div>
</div>

<div class="item">
<div class="card">
<div class="card-details">
    <p class="text-title">Card title</p>
    <p class="text-body">Here are the details of the card</p>
  </div>
<x-link class="ms-4" href="{{route('form')}}">
{{ __('Apply') }}
</x-link>
</div>
</div>

<div class="item">
<div class="card">
<div class="card-details">
    <p class="text-title">Card title</p>
    <p class="text-body">Here are the details of the card</p>
  </div>
<x-link class="ms-4" href="{{route('form')}}">
{{ __('Apply') }}
</x-link>
</div>
</div>

<div class="item">
<div class="card">
<div class="card-details">
    <p class="text-title">Card title</p>
    <p class="text-body">Here are the details of the card</p>
  </div>
<x-link class="ms-4" href="{{route('form')}}">
{{ __('Apply') }}
</x-link>
</div>
</div>

<div class="item">
<div class="card">
<div class="card-details">
    <p class="text-title">Card title</p>
    <p class="text-body">Here are the details of the card</p>
  </div>
<x-link class="ms-4" href="{{route('form')}}">
{{ __('Apply') }}
</x-link>
</div>
</div>

</div>


{{-- <div class="container">
 <div class="item">
<div class="card">
</div>
</div>

<div class="item">
<div class="card">
</div>
</div>

<div class="item">
<div class="card">
</div>
</div>
</div> --}}



</x-app-layout>
