<x-app-layout>

  <div class="p-5 dark:text-white">
    <h1 class="mb-3 text-xl font-bold">Create User</h1>
    <form method="POST" action="{{ route('users.store') }}">
      @csrf
      {{-- first name --}}
      <div class="mb-3">
        <label for="first_name" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">First Name</label>
        <input type="text" id="first_name" name="first_name"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="First Name">
          @error('first_name')
           <p class="text-xs text-red-400 mt-1"> {{ $message }}</p>
          @enderror
      </div>

      {{-- last name --}}
      <div class="mb-3">
        <label for="last_name" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Last Name</label>
        <input type="text" id="last_name" name="last_name"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Last Name">
          @error('last_name')
           <p class="text-xs text-red-400 mt-1"> {{ $message }}</p>
          @enderror
      </div>

      {{-- email --}}
      <div class="mb-3">
        <label for="email" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
        <input type="email" id="email" name="email"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Email">
          @error('email')
           <p class="text-xs text-red-400 mt-1"> {{ $message }}</p>
          @enderror
      </div>

      {{-- address --}}
      <div class="mb-3">
        <label for="address" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
        <input type="text" id="address" name="address"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Address">
          @error('address')
           <p class="text-xs text-red-400 mt-1"> {{ $message }}</p>
          @enderror
      </div>

      {{-- phone --}}
      <div class="mb-7">
        <label for="phone_number" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Phone
          Number</label>
        <input type="number" id="phone_number" name="phone_number"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Phone Number">
          @error('phone_number')
           <p class="text-xs text-red-400 mt-1"> {{ $message }}</p>
          @enderror
      </div>

      <button type="submit"
        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Create</button>
    </form>
  </div>

</x-app-layout>
