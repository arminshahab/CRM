<x-app-layout>
  <div class="container mx-auto px-6">
    <div class="flex justify-end">
      <a href="{{ route('clients.create') }}" class="mt-3 rounded bg-green-500 px-5 py-1.5 text-white hover:bg-green-600">Create Client</a>
    </div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Client List
    </h2>
    <!-- New Table -->
    <div class="shadow-xs w-full overflow-hidden rounded-lg">
      <div class="w-full overflow-x-auto">
        <table class="whitespace-no-wrap w-full">
          <thead>
            <tr
              class="border-b bg-gray-50 text-left text-xs font-semibold uppercase tracking-wide text-gray-500 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400">
              <th class="px-4 py-3">COMPANY</th>
              <th class="px-4 py-3">ZIP</th>
              <th class="px-4 py-3">ADDRESS</th>
              <th class="px-4 py-3"></th>
            </tr>
          </thead>
          <tbody class="divide-y bg-white dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($clients as $client)
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3 text-sm">{{ $client->company_name }}</td>
                <td class="px-4 py-3 text-sm">{{ $client->company_zip }}</td>
                <td class="px-4 py-3 text-sm">{{ $client->company_address }}</td>

                <td class="px-4 py-3 text-sm">
                  <div class="flex space-x-1">
                    <a href="{{ route('clients.edit', $client->id) }}"
                      class="rounded bg-green-500 px-3 py-1 text-white hover:bg-green-600">Edit</a>
                      <form action="{{ route('clients.destroy', $client->id) }}" method="POST" onsubmit="return confirm('are you sure?')">
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

        <p class="mt-10"> {{ $clients->links() }}</p>
      </div>
    </div>

</x-app-layout>
