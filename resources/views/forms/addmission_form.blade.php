@extends("layouts.admin_layout")

@section("page-title")
  Admission - Student
@endsection

@section("dynamic-section")
  <div class="w-full my-5">
    <h1 class="text-3xl font-semibold tracking-wide mb-5">
      Addmission
    </h1>
    <div>
      <form action="{{ route("addmission_save") }}" method="GET">

        @php
          // global $roll_number;
          function generateRollNumber()
          {
            date_default_timezone_set("Asia/Kolkata");
            return date("mHis");

          }
        @endphp
        <!-- Student Details -->
        <div class="col-span-1 md:col-span-2">
          <h2 class="text-xl font-semibold mb-4">Student Details</h2>
        </div>

        <div class="relative">
          <label class="block text-sm font-medium mb-2">Roll number</label>
          <input type="number" name="roll_number" value="{{generateRollNumber()}}" readonly
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            required>
          <!-- <button class="absolute right-2 top-1/2" type="button" onclick="{{ generateRollNumber() }}">
                <i class="fa-solid fa-arrows-rotate"></i>
              </button> -->
        </div>
        <div>
          <label class="block text-sm font-medium mb-2">Full Name</label>
          <input type="text" name="student_name"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            required>
        </div>

    </div>

    <div>
      <label class="block text-sm font-medium mb-2">Date of Birth</label>
      <input type="date" name="dob"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        required>
    </div>

    <div>
      <label class="block text-sm font-medium mb-2">Gender</label>
      <select name="gender"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
    </div>

    <div>
      <label class="block text-sm font-medium mb-2">Email</label>
      <input type="email" name="student_email"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        required>
    </div>

    <div>
      <label class="block text-sm font-medium mb-2">Phone Number</label>
      <input type="tel" name="student_contact"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        required>
    </div>

    <div>
      <label class="block text-sm font-medium mb-2">Passport Size Photo</label>
      <input type="file" name="student_photo" accept="image/*"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
    </div>

    <!-- Guardian Details -->
    <div class="col-span-1 md:col-span-2">
      <h2 class="text-xl font-semibold mb-4 mt-6">Guardian Details</h2>
    </div>

    <div>
      <label class="block text-sm font-medium mb-2">Guardian Name</label>
      <input type="text" name="guardian_name"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        required>
    </div>

    <div>
      <label class="block text-sm font-medium mb-2">Relationship</label>
      <select name="relation"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        required>
        <option value="father" selected>Father</option>
        <option value="grand_father">Grand Father</option>
        <option value="mother">Mother</option>
        <option value="grand_mother">Grand Mother</option>

      </select>
    </div>

    <div>
      <label class="block text-sm font-medium mb-2">Guardian Email</label>
      <input type="email" name="guardian_email"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        required>
    </div>

    <div>
      <label class="block text-sm font-medium mb-2">Guardian Phone</label>
      <input type="tel" name="guardian_contact"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        required>
    </div>

    <div>
      <label class="block text-sm font-medium mb-2">Address</label>
      <input type="text" name="address"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        required>
    </div>

    <div>
      <label class="block text-sm font-medium mb-2">City</label>
      <input type="text" name="city"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        required>
    </div>

    <div class="mt-4 mb-6">
      <input type="checkbox" id="chk_box" required>
      <label for="chk_box" class="select-none">
        I agree to the terms and conditions of student admission
      </label>
    </div>

    <!-- Submit Button -->
    <div class="col-span-1 md:col-span-2">
      <button type="submit"
        class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition">Submit
        Admission</button>
    </div>
  </div>
  </form>

  @if ($errors->any())
    <ul>
      @foreach ($errors as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>

  @endif

  </div>
  </div>
@endsection