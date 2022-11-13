<x-app-layout>
  <div class="container mx-auto px-6">
    <div class="flex justify-end">
      <button class="mt-3 rounded bg-green-500 px-5 py-1.5 text-white hover:bg-green-600">Create Task</button>
    </div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Tasks List
    </h2>
    <!-- New Table -->
    <div class="shadow-xs w-full overflow-hidden rounded-lg">
      <div class="w-full overflow-x-auto">
        <table class="whitespace-no-wrap w-full">
          <thead>
            <tr
              class="border-b bg-gray-50 text-left text-xs font-semibold uppercase tracking-wide text-gray-500 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400">
              <th class="px-4 py-3">TITLE</th>
              <th class="px-4 py-3">ASSIGNED TO</th>
              <th class="px-4 py-3">CLIENT</th>
              <th class="px-4 py-3">DEADLINE</th>
              <th class="px-4 py-3">STATUS</th>
              <th class="px-4 py-3"></th>
            </tr>
          </thead>
          <tbody class="divide-y bg-white dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($tasks as $task)
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3 text-sm">{{ $task->title }}</td>
                <td class="px-4 py-3 text-sm">{{ $task->user->full_name }}</td>
                <td class="px-4 py-3 text-sm">{{ $task->client->contact_name }}</td>
                <td class="px-4 py-3 text-sm">{{ $task->deadline }}</td>
                <td class="px-4 py-3 text-sm">{{ $task->status }}</td>
                <td class="px-4 py-3 text-sm">
                  <div class="flex space-x-1">
                    <button class="rounded bg-green-500 px-3 py-1 text-white hover:bg-green-600">Edit</button>
                    <button class="rounded bg-red-500 px-3 py-1 text-white hover:bg-red-600">Delete</button>
                  </div>
                </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <div>

        <p class="mt-10"> {{ $tasks->links() }}</p>
      </div>
    </div>

</x-app-layout>
