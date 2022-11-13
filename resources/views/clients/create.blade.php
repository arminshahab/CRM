<x-app-layout>

  <div class="p-5 dark:text-white">
    <h1 class="mb-3 text-xl font-bold">Create Client</h1>
    <form method="POST" action="{{ route('clients.store') }}">
      @csrf
      {{-- contact information --}}
      <h1 class="my-2">Contact Information</h1>
      {{-- name --}}
      <div class="mb-3">
        <label for="contact_name" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
        <input type="text" id="contact_name" name="contact_name"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Contact Name" value="{{ old('contact_name') }}">
        @error('contact_name')
          <p class="mt-1 text-xs text-red-400"> {{ $message }}</p>
        @enderror
      </div>

      {{-- phone --}}
      <div class="mb-3">
        <label for="contact_phone_number" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Phone
          Number</label>
        <input type="number" id="contact_phone_number" name="contact_phone_number"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Phone Number" value="{{ old('contact_phone_number') }}">
        @error('contact_phone_number')
          <p class="mt-1 text-xs text-red-400"> {{ $message }}</p>
        @enderror
      </div>

      {{-- email --}}
      <div class="mb-3">
        <label for="contact_email" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
        <input type="email" id="contact_email" name="contact_email"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Contact Email" value="{{ old('contact_email') }}">
        @error('contact_email')
          <p class="mt-1 text-xs text-red-400"> {{ $message }}</p>
        @enderror
      </div>

      {{-- company information --}}
      <h1 class="my-2 mt-10">Company Information</h1>

      {{-- name --}}
      <div class="mb-3">
        <label for="company_name" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Company
          Name</label>
        <input type="text" id="company_name" name="company_name"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Company Name" value="{{ old('company_name') }}">
        @error('company_name')
          <p class="mt-1 text-xs text-red-400"> {{ $message }}</p>
        @enderror
      </div>

      {{-- address --}}
      <div class="mb-3">
        <label for="company_address" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Company
          Address</label>
        <input type="text" id="company_address" name="company_address"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Company Address" value="{{ old('company_address') }}">
        @error('company_address')
          <p class="mt-1 text-xs text-red-400"> {{ $message }}</p>
        @enderror
      </div>

      {{-- city --}}
      <div class="mb-3">
        <label for="company_city" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Company
          City</label>
        <input type="text" id="company_city" name="company_city"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Company City" value="{{ old('company_city') }}">
        @error('company_city')
          <p class="mt-1 text-xs text-red-400"> {{ $message }}</p>
        @enderror
      </div>

      {{-- zip --}}
      <div class="mb-7">
        <label for="company_zip" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Company
          Zip</label>
        <input type="number" id="company_zip" name="company_zip"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Company Zip" value="{{ old('company_zip') }}">
        @error('company_zip')
          <p class="mt-1 text-xs text-red-400"> {{ $message }}</p>
        @enderror
      </div>

      <button type="submit"
        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Create</button>
    </form>
  </div>

</x-app-layout>
