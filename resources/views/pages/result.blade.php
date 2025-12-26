@extends('layouts.layout')

@section('page-title')
@endsection

@section('dynamic-section')
  @php
    $res = $result[0];
  @endphp
  <div class="max-w-2xl mx-auto mt-10 bg-white shadow-lg rounded-lg p-8">
    <h1 class="text-3xl font-bold text-center text-blue-700 mb-6">Exam Result</h1>
    <div class="mb-4">
      <p class="text-lg"><span class="font-semibold">Student ID:</span> {{$res->student_id}}</p>
      <p class="text-lg"><span class="font-semibold">Name:</span> {{$res->student_name}}</p>
      <p class="text-lg"><span class="font-semibold">Guadian Name:</span> {{$res->guardian_name}}</p>
      <p class="text-lg"><span class="font-semibold">Date of Birth:</span> {{$res->dob}}</p>
      <p class="text-lg"><span class="font-semibold">Adress:</span> {{ $res->address . ", " . $res->city }}</p>
      <p class="text-lg"><span class="font-semibold">Session:</span> {{ $res->exam_year }}</p>

    </div>
    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
      <thead>
        <tr>
          <th class="py-2 px-4 border-b text-left">Subject</th>
          <th class="py-2 px-4 border-b text-left">Marks Obtained</th>
          <th class="py-2 px-4 border-b text-left">Total Marks</th>
          <th class="py-2 px-4 border-b text-left">Grade</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="py-2 px-4 text-left">{{ $res->subject_name }}</td>
          <td class="py-2 px-4 text-left">{{ $res->marks_obtained }}</td>
          <td class="py-2 px-4 text-left">100</td>
          <td class="py-2 px-4 text-left">{{ $res->grade }}</td>
        </tr>
      </tbody>
    </table>
    <div class="mt-6 text-center">
      <p class="text-xl font-semibold">Total: 100 / {{ $res->marks_obtained }}</p>
      <p class="text-lg mt-2">Result: {{$res->status}}</p>
    </div>

    <div class="flex justify-evenly items-center mt-10">
      <a href="{{ route("print_result", $res->student_id) }}">
        <button class="px-2 py-1 rounded text-xl font-semibold bg-green-700 text-white">
          Print
        </button>
      </a>

    </div>
  </div>
@endsection