@extends("layouts.admin_layout")

@section("page-title")
  Admin - Student
@endsection

@section("dynamic-section")
  <div class="w-full mt-5">
    <h1 class="text-3xl font-semibold tracking-wide mb-5">
      Student
    </h1>
    <div>
      <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
          <thead class="bg-gray-200">
            <tr>
              <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Subject</th>
              <th class="border border-gray-300 px-4 py-2 text-center">Today's Attendance</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Phone</th>
              <th class="border border-gray-300 px-4 py-2 text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hover:bg-gray-100">
              <td class="border border-gray-300 px-4 py-2">Hariom Kashyap</td>
              <td class="border border-gray-300 px-4 py-2">kashyap@gmail.co</td>
              <td class="border border-gray-300 px-4 py-2">Computer</td>
              <td class="border border-gray-300 px-4 py-2 text-center">
                Present
              </td>
              <td class="border border-gray-300 px-4 py-2">9315211914</td>
              <td class="border border-gray-300 px-4 py-2 text-center">
                <a href="#" class="text-blue-600 hover:underline">View</a> |
                <a href="#" class="text-orange-600 hover:underline">Edit</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection