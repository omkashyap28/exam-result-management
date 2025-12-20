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
      <form action="#" method="get">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Student Details -->
          <div class="col-span-1 md:col-span-2">
            <h2 class="text-xl font-semibold mb-4">Student Details</h2>
          </div>

          <div>
            <label class="block text-sm font-medium mb-2">Full Name</label>
            <input type="text" name="student_name"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              required>
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
            <input type="email" name="email"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              required>
          </div>

          <div>
            <label class="block text-sm font-medium mb-2">Phone Number</label>
            <input type="tel" name="phone"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              required>
          </div>

          <div>
            <label class="block text-sm font-medium mb-2">Passport Size Photo</label>
            <input type="file" name="student_photo" accept="image/*"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              required>
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
            <select name="gender"
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
            <input type="tel" name="guardian_phone"
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

          <div>
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
    </div>
  </div>
@endsection