<x-app-layout>
  <div class="container mx-auto grid px-6">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Users
    </h2>
    <!-- New Table -->
    <div class="shadow-xs w-full overflow-hidden rounded-lg">
      <div class="w-full overflow-x-auto">
        <table class="whitespace-no-wrap w-full">
          <thead>
            <tr
              class="border-b bg-gray-50 text-left text-xs font-semibold uppercase tracking-wide text-gray-500 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400">
              <th class="px-4 py-3">Client</th>
              <th class="px-4 py-3">Amount</th>
              <th class="px-4 py-3">Status</th>
              <th class="px-4 py-3">Date</th>
            </tr>
          </thead>
          <tbody class="divide-y bg-white dark:divide-gray-700 dark:bg-gray-800">
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <!-- Avatar with inset shadow -->
                  <div class="relative mr-3 hidden h-8 w-8 rounded-full md:block">
                    <img class="h-full w-full rounded-full object-cover"
                      src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                      alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold">Hans Burger</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                      10x Developer
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm">$ 863.45</td>
              <td class="px-4 py-3 text-xs">
                <span
                  class="rounded-full bg-green-100 px-2 py-1 font-semibold leading-tight text-green-700 dark:bg-green-700 dark:text-green-100">
                  Approved
                </span>
              </td>
              <td class="px-4 py-3 text-sm">6/10/2020</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

</x-app-layout>
