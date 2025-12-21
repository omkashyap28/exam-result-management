@extends("layouts.teacher_layout")

@section("page-title")
  Teacher - Dashboard
@endsection

@section("dynamic-section")
<div class="min-h-screen bg-gray-50 p-8">
    <div class="max-w-7xl mx-auto">
      <!-- Header -->
      <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Welcome, {{ $user->name }}</h1>
        <p class="text-gray-600 mt-2">Manage your classes and student results</p>
      </div>

      <!-- Stats Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
          <h3 class="text-gray-500 text-sm font-medium">Total Classes</h3>
          <p class="text-3xl font-bold text-gray-900 mt-2">12</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
          <h3 class="text-gray-500 text-sm font-medium">Total Students</h3>
          <p class="text-3xl font-bold text-gray-900 mt-2">285</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
          <h3 class="text-gray-500 text-sm font-medium">Pending Submissions</h3>
          <p class="text-3xl font-bold text-gray-900 mt-2">24</p>
        </div>
      </div>

      <!-- Quick Actions -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow p-6">
          <h2 class="text-xl font-bold text-gray-900 mb-4">Quick Actions</h2>
          <div class="space-y-3">
            <a href=""
              class="block bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg text-center transition">Create
              Exam</a>
            <a href="{{ route("marks_form") }}"
              class="block bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg text-center transition">Upload
              Results</a>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
          <h2 class="text-xl font-bold text-gray-900 mb-4">Recent Activities</h2>
          <ul class="space-y-3 text-gray-700 text-sm">
            <li>• Result submitted for Class 10-A</li>
            <li>• Exam created: Mathematics Final</li>
            <li>• 15 students completed quiz</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection