@if ($errors->any())
    {{-- <div {{ $attributes }}>
        <div class="font-medium text-red-600 dark:text-red-400">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="mt-3 text-sm text-red-600 list-disc list-inside dark:text-red-400">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> --}}

<div {{ $attributes->merge(['class' => 'p-4 bg-red-800 bg-opacity-75 border border-red-700 rounded-md transition duration-300 ease-in-out hover:bg-red-800 ']) }}>
    <div class="flex items-center">
        <svg class="w-5 h-5 mr-2 text-red-100 dark:text-red-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-1.414-1.414L12 9.172l-4.95-4.95-1.414 1.414L9.172 12l-4.95 4.95 1.414 1.414L12 14.828l4.95 4.95 1.414-1.414L14.828 12l4.95-4.95z" />
        </svg>
        <div class="font-medium text-red-100 dark:text-red-200">{{ __('Whoops! Something went wrong.') }}</div>
    </div>

    <ul class="mt-3 space-y-1 text-sm text-red-100 list-disc list-inside dark:text-red-200">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>


@endif
