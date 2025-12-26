@extends("layouts.teacher_layout")

@section("page-title")
  Teacher - Upload Marks
@endsection

@section("dynamic-section")
  <div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-8">Upload Student Marks</h1>

    <form action="#" method="GET" class="bg-white shadow-md rounded-lg p-8 w-3/4 mx-auto">
      @csrf

      <div class="mb-6">
        <label class="block text-gray-700 font-bold mb-2">Select Class
          <input type="text" name="student_id" id="student_id"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Roll number">
      </div>
      <div class="mb-6">
        <div class="flex justify-between">
          <label class="block text-gray-700 font-bold mb-2">
            Subject
            <input type="text" name="subject" required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Subject">
          </label>
          <label class="block text-gray-700 font-bold mb-2">
            Marks
            <input type="text" name="subject" required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter student Marks">
          </label>
        </div>
        <div class="flex justify-between">
          <label class="block text-gray-700 font-bold mb-2">
            Subject
            <input type="text" name="subject" required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Subject">
          </label>
          <label class="block text-gray-700 font-bold mb-2">
            Marks
            <input type="text" name="subject" required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter student Marks">
          </label>
        </div>
        <div class="flex justify-between">
          <label class="block text-gray-700 font-bold mb-2">
            Subject
            <input type="text" name="subject" required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Subject">
          </label>
          <label class="block text-gray-700 font-bold mb-2">
            Marks
            <input type="text" name="subject" required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter student Marks">
          </label>
        </div>
        <div class="flex justify-between">
          <label class="block text-gray-700 font-bold mb-2">
            Subject
            <input type="text" name="subject" required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Subject">
          </label>
          <label class="block text-gray-700 font-bold mb-2">
            Marks
            <input type="text" name="subject" required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter student Marks">
          </label>
        </div>
        <div class="flex justify-between">
          <label class="block text-gray-700 font-bold mb-2">
            Subject
            <input type="text" name="subject" required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Subject">
          </label>
          <label class="block text-gray-700 font-bold mb-2">
            Marks
            <input type="text" name="subject" required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter student Marks">
          </label>
        </div>
        <div class="flex justify-between">
          <label class="block text-gray-700 font-bold mb-2">
            Subject
            <input type="text" name="subject" required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Subject">
          </label>
          <label class="block text-gray-700 font-bold mb-2">
            Marks
            <input type="text" name="subject" required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Enter student Marks">
          </label>
        </div>
      </div>


      <div class="flex gap-4">
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Upload
          Marks</button>
        <a href="#" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-6 rounded-lg">Cancel</a>
      </div>
    </form>
  </div>
@endsection