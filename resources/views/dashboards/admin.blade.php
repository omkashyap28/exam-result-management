@extends("layouts.admin_layout")

@section("page-title")
  Admin Dashboard
@endsection

@section("dynamic-section")
  <div class="mt-5">
    <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-5 gap-4 mb-4">
      <div class="bg-blue-500 text-black rounded-lg shadow p-6">
        <h5 class="font-semibold mb-2">Total Teachers</h5>
        <h2 class="text-3xl font-bold">{{ $totalTeachers ?? 0 }}</h2>
      </div>
      <div class="bg-green-500 text-black rounded-lg shadow p-6">
        <h5 class="font-semibold mb-2">Total Students</h5>
        <h2 class="text-3xl font-bold">{{ $totalStudents ?? 0 }}</h2>
      </div>
      <div class="bg-cyan-500 text-black rounded-lg shadow p-6">
        <h5 class="font-semibold mb-2">Average Marks</h5>
        <h2 class="text-3xl font-bold">{{ $averageMarks ?? 0 }}%</h2>
      </div>
      <div class="bg-yellow-500 text-black rounded-lg shadow p-6">
        <h5 class="font-semibold mb-2">Avg Students Attendance</h5>
        <h2 class="text-3xl font-bold">{{ $avgStudentAttendance ?? 0 }}%</h2>
      </div>
      <div class="bg-red-500 text-black rounded-lg shadow p-6">
        <h5 class="font-semibold mb-2">Avg Teachers Attendance</h5>
        <h2 class="text-3xl font-bold">{{ $avgTeacherAttendance ?? 0 }}%</h2>
      </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
      <h5 class="font-semibold mb-4">School Growth</h5>
      <canvas id="growthChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      const ctx = document.getElementById('growthChart').getContext('2d');
      new Chart(ctx, {
        type: 'line',
        data: {
          labels: {!! json_encode($growthLabels ?? []) !!},
          datasets: [{
            label: 'Growth',
            data: {!! json_encode($growthData ?? []) !!},
            borderColor: '#007bff',
            backgroundColor: 'rgba(0, 123, 255, 0.1)',
            tension: 0.4
          }]
        }
      });
    </script>
    </h1>
@endsection