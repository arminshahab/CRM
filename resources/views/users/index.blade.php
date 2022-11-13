<x-app-layout>
  <div class="container mx-auto px-6">
    <div class="flex justify-end">
      <a href="{{ route('users.create') }}"
        class="mt-3 rounded bg-green-500 px-5 py-1.5 text-white hover:bg-green-600">Create User</a>
    </div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Users List
    </h2>
    <!-- New Table -->
    <div class="shadow-xs w-full overflow-hidden rounded-lg">
      <div class="w-full overflow-x-auto">
        <table class="whitespace-no-wrap w-full">
          <thead>
            <tr
              class="border-b bg-gray-50 text-left text-xs font-semibold uppercase tracking-wide text-gray-500 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400">
              <th class="px-4 py-3">ID</th>
              <th class="px-4 py-3">FIRST NAME</th>
              <th class="px-4 py-3">LAST NAME</th>
              <th class="px-4 py-3">EMAIL</th>
              <th class="px-4 py-3">ROLE</th>
              <th class="px-4 py-3"></th>
            </tr>
          </thead>
          <tbody class="divide-y bg-white dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($users as $user)
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3 text-sm">{{ $user->id }}</td>
                <td class="px-4 py-3 text-sm">{{ $user->first_name }}</td>
                <td class="px-4 py-3 text-sm">{{ $user->last_name }}</td>
                <td class="px-4 py-3 text-sm">{{ $user->email }}</td>
                <td class="px-4 py-3 text-xs">
                  @if (20000 % $user->id === 0)
                    <span
                      class="rounded-full bg-green-100 px-2 py-1 font-semibold leading-tight text-indigo-700 dark:bg-indigo-700 dark:text-green-100">
                      Admin
                    </span>
                  @else
                    <span
                      class="rounded-full bg-green-100 px-2 py-1 font-semibold leading-tight text-amber-500 dark:bg-amber-500 dark:text-green-100">
                      User
                    </span>
                  @endif
                </td>
                <td class="px-4 py-3 text-sm">
                  <div class="flex space-x-1">
                    <a href="{{ route('users.edit', $user->id) }}"
                      class="rounded bg-green-500 px-3 py-1 text-white hover:bg-green-600">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                      onsubmit="return confirm('are you sure?')">
                      @csrf
                      @method('DELETE')
                      <button class="rounded bg-red-500 px-3 py-1 text-white hover:bg-red-600">Delete</button>
                    </form>
                  </div>
                </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <div>

        <p class="mt-10"> {{ $users->links() }}</p>
      </div>

    </div>

</x-app-layout>
