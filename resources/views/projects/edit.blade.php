<x-app-layout>

  <div class="p-5 dark:text-white">
    <h1 class="mb-3 text-xl font-bold">Update Project</h1>
    <form method="POST" action="{{ route('projects.update', $project->id) }}">
      @csrf
      @method('PUT')
      {{-- title --}}
      <div class="mb-3">
        <label for="title" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Title</label>
        <input type="text" id="title" name="title"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Title" value="{{ old('title', $project->title) }}">
        @error('title')
          <p class="mt-1 text-xs text-red-400"> {{ $message }}</p>
        @enderror
      </div>

      {{-- description --}}
      <div class="mb-3">
        <label for="description"
          class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
        <textarea id="description" name="description" rows="6"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Description">{{ old('description', $project->description) }}</textarea>
        @error('description')
          <p class="mt-1 text-xs text-red-400"> {{ $message }}</p>
        @enderror
      </div>

      {{-- deadline --}}
      <div class="mb-3">
        <label for="deadline" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Deadline</label>
        <input type="date" id="deadline" name="deadline"
          class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Deadline" value="{{ old('deadline', $project->deadline) }}">
        @error('deadline')
          <p class="mt-1 text-xs text-red-400"> {{ $message }}</p>
        @enderror
      </div>

      {{-- user --}}
      <div class="mb-3">
        <label for="user_id" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Assigned
          User</label>
        <select id="user_id" name="user_id"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
          <option value="">-- select user</option>
          @foreach ($users as $id => $name)
            <option value="{{ $id }}" @selected($id == old('user_id', $project->user_id))>{{ $name }}</option>
          @endforeach
        </select>
        @error('user_id')
          <p class="mt-1 text-xs text-red-400"> {{ $message }}</p>
        @enderror
      </div>

      {{-- client --}}
      <div class="mb-3">
        <label for="client_id" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Assigned
          Client</label>
        <select id="client_id" name="client_id"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
          <option value="">-- select client</option>

          @foreach ($clients as $id => $name)
            <option value="{{ $id }}" @selected($id == old('client_id', $project->client_id))>{{ $name }}</option>
          @endforeach
        </select>
        @error('client_id')
          <p class="mt-1 text-xs text-red-400"> {{ $message }}</p>
        @enderror
      </div>

      {{-- status --}}
      <div class="mb-6">
        <label for="status" class="mb-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Status</label>
        <select id="status" name="status"
          class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
          <option value="">-- select status</option>

          @foreach (App\Models\Project::STATUS as $status)
            <option value="{{ $status }}" @selected($status == old('status', $project->status))>{{ $status }}</option>
          @endforeach
        </select>
        @error('status')
          <p class="mt-1 text-xs text-red-400"> {{ $message }}</p>
        @enderror
      </div>

      <button type="submit"
        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Update</button>
    </form>
  </div>

</x-app-layout>
