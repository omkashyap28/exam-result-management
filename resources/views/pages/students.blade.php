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
      <div class="h-[80vh] overflow-auto border border-gray-300 rounded-lg shadow">
        <table class="w-full border-collapse border border-gray-300">
          <thead class="bg-gray-200 sticky top-0">
            <tr>
              <th class="border border-gray-300 px-4 py-2 text-left">Roll number</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Gender</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Contact</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Gardian name</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Relation</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Gardian Contact</th>
              <th class="border border-gray-300 px-4 py-2 text-left">Gardian Email</th>
              <th class="border border-gray-300 px-4 py-2 text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($students as $student)
              <tr class="hover:bg-gray-100">
                <td class="border border-gray-300 px-4 py-2">{{$student->roll_number}}</td>
                <td class="border border-gray-300 px-4 py-2">{{$student->student_name}}</td>
                <td class="border border-gray-300 px-4 py-2">{{$student->gender}}</td>
                <td class="border border-gray-300 px-4 py-2">{{$student->student_contact }}</td>
                <td class="border border-gray-300 px-4 py-2">{{$student->student_email}}</td>
                <td class="border border-gray-300 px-4 py-2">{{$student->guardian_name}}</td>
                <td class="border border-gray-300 px-4 py-2">{{$student->relation}}</td>
                <td class="border border-gray-300 px-4 py-2">{{$student->guardian_contact}}</td>
                <td class="border border-gray-300 px-4 py-2">{{$student->guardian_email}}</td>
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