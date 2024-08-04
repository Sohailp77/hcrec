
<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{-- <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg"> --}}
            <div class="overflow-hidden sm:rounded-lg">


<div class="container">
 <div class="item">
<div class="card">
        <button class="mail">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg> --}}
        </button>
       <div class="profile-pic">
      <br/>
    <svg version="1.1" id="svg2" width="666.66669" height="666.66669" viewBox="0 0 666.66669 666.66669" xmlns="http://www.w3.org/2000/svg">
        <image  href="{{ asset('images/Draft.png') }}" alt="{{ __('') }}" width="116%" height="60%" transform="scale('0.9')" />
    </svg>
</div>

        <div class="bottom">
            <div class="content">
                <span class="name">Draft</span>
                <span class="about-me">Lorem ipsum dolor sit amet consectetur adipisicinFcls </span>
            </div>
           <div class="bottom-bottom">
            <div class="social-links-container">
                {{-- <span class="button_2" href="{{route('form')}}"> Draft  </span> --}}
            </div>
            <a class="button" href="{{route('form')}}">Draft</a>
           </div>
        </div>
    </div>
</div>

<div class="item">
<div class="card">
        <button class="mail">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg> --}}
        </button>
       <div class="profile-pic">
      <br/>
    <svg version="1.1" id="svg2" width="666.66669" height="666.66669" viewBox="0 0 666.66669 666.66669" xmlns="http://www.w3.org/2000/svg">
        <image  href="{{ asset('images/jobnew.png') }}" alt="{{ __('') }}" width="106%" height="65%" />
    </svg>
</div>

        <div class="bottom">
            <div class="content">
                <span class="name">Job Vaccancy</span>
                <span class="about-me">Lorem ipsum dolor sit amet consectetur adipisicinFcls </span>
            </div>
           <div class="bottom-bottom">
            <div class="social-links-container">
                {{-- <span class="button_2" href="{{route('form')}}"> Job Vaccancy  </span> --}}
            </div>
            <a class="button" href="{{route('form')}}">Job Vaccancy </a>
           </div>
        </div>
    </div>
</div>

<div class="item">
<div class="card">
        <button class="mail">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg> --}}
        </button>
       <div class="profile-pic">
      <br/>
    <svg version="1.1" id="svg2" width="666.66669" height="666.66669" viewBox="0 0 666.66669 666.66669" xmlns="http://www.w3.org/2000/svg">
        <image  href="{{ asset('images/pending.png') }}" alt="{{ __('') }}" width="106%" height="65%" />
    </svg>
</div>

        <div class="bottom">
            <div class="content">
                <span class="name">Pending Application</span>
                <span class="about-me">Lorem ipsum dolor sit amet consectetur adipisicinFcls </span>
            </div>
           <div class="bottom-bottom">
            <div class="social-links-container">
                {{-- <span class="button_2" href="{{route('form')}}"> Pending Application  </span> --}}
            </div>
            <a class="button" href="{{route('form')}}">Pending Application </a>
           </div>
        </div>
    </div>
</div>

<div class="item">
<div class="card">
        <button class="mail">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg> --}}
        </button>
       <div class="profile-pic">
      <br/>
       
    <svg version="1.1" id="svg2" width="666.66669" height="666.66669" viewBox="0 0 666.66669 666.66669" xmlns="http://www.w3.org/2000/svg">
        <image  href="{{ asset('images/rejected.png') }}" alt="{{ __('') }}" width="106%" height="60%" />
    </svg>
</div>

        <div class="bottom">
            <div class="content">
                <span class="name">Rejected Application</span>
                <span class="about-me">Lorem ipsum dolor sit amet consectetur adipisicinFcls </span>
            </div>
           <div class="bottom-bottom">
            <div class="social-links-container">
                {{-- <span class="button_2" href="{{route('form')}}"> Rejected Application  </span> --}}
            </div>
            <a class="button" href="{{route('form')}}">Rejected Application </a>
           </div>
        </div>
    </div>

</div>

<div class="item">
<div class="card">
        <button class="mail">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg> --}}
        </button>
       <div class="profile-pic">
       &nbsp;

    <svg version="1.1" id="svg2" width="666.66669" height="666.66669" viewBox="0 0 666.66669 666.66669" xmlns="http://www.w3.org/2000/svg">
        <image  href="{{ asset('images/complete.png') }}" alt="{{ __('') }}" width="106%" height="70%" />
    </svg>
</div>

        <div class="bottom">
            <div class="content">
                <span class="name">Processed Application</span>
                <span class="about-me">Lorem ipsum dolor sit amet consectetur adipisicinFcls </span>
            </div>
           <div class="bottom-bottom">
            <div class="social-links-container">
                {{-- <span class="button_2" href="{{route('form')}}"> Processed Application  </span> --}}
            </div>
            <a class="button" href="{{route('form')}}">Processed Application </a>
           </div>
        </div>
    </div>

</div>

</div>

</x-app-layout>
