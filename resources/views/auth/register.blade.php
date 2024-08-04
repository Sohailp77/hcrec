<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf




{{-- 
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div> --}}
 <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="flex w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="flex w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="email" />
            </div>

            {{-- <div>
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" class="block w-full mt-1" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
            </div> --}}

            {{-- <div>
                 <x-label for="temp_address" value="{{ __('Temporary Address') }}" />
                <textarea id="temp_address" name="temp_address" rows="1" class="block w-full mt-1 border-green-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-900 dark:focus:border-green-600 focus:ring-green-500 dark:focus:ring-green-600 my-custom-class" required autocomplete="address">{{ old('temp_address') }}</textarea>
            </div>

            <div class="mt-4">
                <x-label for="per_address" value="{{ __('Permanent Address') }}" />
                <textarea id="per_address" name="per_address" rows="1"class="block w-full mt-1 border-green-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-900 dark:focus:border-green-600 focus:ring-green-500 dark:focus:ring-green-600 my-custom-class" required autocomplete="address">{{ old('per_address') }}</textarea>
            </div>

            <div>
                <x-label for="pin_code" value="{{ __('Pin Code') }}" />
                <x-input id="pin_code" class="block w-full mt-1" type="text" name="pin_code" :value="old('pin_code')" required autocomplete="postal-code" />
            </div>

            <div>
                <x-label for="gender" value="{{ __('Gender') }}" />
                <select id="gender" name="gender" class="block w-full mt-1 border-green-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-900 dark:focus:border-green-600 focus:ring-green-500 dark:focus:ring-green-600 my-custom-class">
                    <option value="M" @if(old('gender') == 'M') selected @endif>Male</option>
                    <option value="F" @if(old('gender') == 'F') selected @endif>Female</option>
                    <option value="O" @if(old('gender') == 'O') selected @endif>Others</option>
                </select>
            </div> --}}

            <div>
                <x-label for="dob" value="{{ __('Date of Birth') }}" />
                <x-input id="date_birth" class="block w-full mt-1" type="date" name="date_birth" :value="old('date_birth')" required autocomplete="bday" />
            </div>

            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>




            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
