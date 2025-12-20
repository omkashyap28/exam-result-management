@extends("layouts.layout")

@section("page-title")
  Result
@endsection

@section("dynamic-section")
  <div class="flex justify-center items-center h-screen w-full">
    <div class="p-7 rounded-md bg-white shadow-2xl">
      <h1 class="text-3xl font-semibold tracking-wide mb-5">
        Result
      </h1>
      <form action="#" method="GET" class="space-y-5">
        <input type="text" name="student_id" id="student_id" max="14" placeholder="Student id" aria-required=""
          class="block w-74 rounded-md border border-gray-800  focus:border-blue-500 outline-none px-3 py-2">
        <input type="date" name="student_dob" id="student_dob" placeholder="Student DOB" required
          class="block w-74 rounded-md border border-gray-800  focus:border-blue-500 outline-none px-3 py-2">
        <button type="submit"
          class="block w-74 rounded-md text-xl text-white bg-blue-500 hover:bg-blue-400 outline-none px-3 py-2">
          Search
        </button>

      </form>
    </div>
  </div>
@endsection