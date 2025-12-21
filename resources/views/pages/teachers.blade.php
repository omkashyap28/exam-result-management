@extends("layouts.admin_layout")

@section("page-title")
  Admin - Teachers
@endsection

@section("dynamic-section")
  <div class="w-full mt-5">
    <div class="flex justify-between items-center">
      <h1 class="text-3xl font-semibold tracking-wide mb-5">
        Teachers
      </h1>
    </div>
    <div>
      <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
          <thead class="bg-gray-200">
            <tr>
              <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Phone</th>
              <th class="border border-gray-300 px-4 py-2 text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr class="hover:bg-gray-100">
                <td class="border border-gray-300 px-4 py-2">{{$user->name}}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $user->contact }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">
                  <a href="#" class="text-blue-600 hover:underline">View</a> |
                  <a href="#" class="text-orange-600 hover:underline">Edit</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection