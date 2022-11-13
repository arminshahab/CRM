<x-guest-layout>
  <x-auth-card>
    <x-slot name="logo">
      <a href="/">
        <x-application-logo class="h-20 w-20 fill-current text-gray-500" />
      </a>
    </x-slot>

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div>
        <x-input-label for="first_name" :value="__('First Name')" />

        <x-text-input id="first_name" class="mt-1 block w-full" type="text" name="first_name" :value="old('first_name')"
          autofocus />

        <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>

      <div class="mt-4">
        <x-input-label for="last_name" :value="__('Last Name')" />

        <x-text-input id="last_name" class="mt-1 block w-full" type="text" name="last_name" :value="old('last_name')" />

        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
      </div>

      <div class="mt-4">
        <x-input-label for="address" :value="__('Address')" />

        <x-text-input id="address" class="mt-1 block w-full" type="text" name="address" :value="old('address')" />

        <x-input-error :messages="$errors->get('address')" class="mt-2" />
      </div>

      <div class="mt-4">
        <x-input-label for="phone_number" :value="__('Phone Number')" />

        <x-text-input id="phone_number" class="mt-1 block w-full" type="text" name="phone_number"
          :value="old('phone_number')" />

        <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
      </div>

      <!-- Email Address -->
      <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />

        <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" />

        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <!-- Password -->
      <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="mt-1 block w-full" type="password" name="password"
          autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <!-- Confirm Password -->
      <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="mt-1 block w-full" type="password"
          name="password_confirmation" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
      </div>

      <div class="mt-4 flex items-center justify-end">
        <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
          {{ __('Already registered?') }}
        </a>

        <x-primary-button class="ml-4">
          {{ __('Register') }}
        </x-primary-button>
      </div>
    </form>
  </x-auth-card>
</x-guest-layout>
