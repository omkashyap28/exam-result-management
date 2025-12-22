@extends('layouts.layout')

@section('dynamic-section')
  <div class="max-w-2xl mx-auto mt-10 bg-white shadow-lg rounded-lg p-8">
    <h1 class="text-3xl font-bold text-center text-blue-700 mb-6">Exam Result</h1>
    <div class="mb-4">
      <p class="text-lg"><span class="font-semibold">Name:</span> {{$user->student_name}}</p>
      <p class="text-lg"><span class="font-semibold">Guadian Name:</span> {{$user->guardian_name}}</p>
      <p class="text-lg"><span class="font-semibold">Roll No:</span> {{$user->roll_number}}</p>
      <p class="text-lg"><span class="font-semibold">Date of Birth:</span> {{$user->dob}}</p>
      <p class="text-lg"><span class="font-semibold">Class:</span> 12</p>
      <p class="text-lg"><span class="font-semibold">Adress:</span> {{ $user->address . ", " . $user->city }}</p>

    </div>
    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
      <thead>
        <tr>
          <th class="py-2 px-4 border-b text-left">Subject</th>
          <th class="py-2 px-4 border-b text-left">Marks Obtained</th>
          <th class="py-2 px-4 border-b text-left">Total Marks</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="py-2 px-4 text-left">English</td>
          <td class="py-2 px-4 text-left">40</td>
          <td class="py-2 px-4 text-left">100</td>
        </tr>
        <tr>
          <td class="py-2 px-4 text-left">English</td>
          <td class="py-2 px-4 text-left">40</td>
          <td class="py-2 px-4 text-left">100</td>
        </tr>
        <tr>
          <td class="py-2 px-4 text-left">English</td>
          <td class="py-2 px-4 text-left">40</td>
          <td class="py-2 px-4 text-left">100</td>
        </tr>
        <tr>
          <td class="py-2 px-4 text-left">English</td>
          <td class="py-2 px-4 text-left">40</td>
          <td class="py-2 px-4 text-left">100</td>
        </tr>
        <tr>
          <td class="py-2 px-4 text-left">English</td>
          <td class="py-2 px-4 text-left">40</td>
          <td class="py-2 px-4 text-left">100</td>
        </tr>
      </tbody>
    </table>
    <div class="mt-6 text-center">
      <p class="text-xl font-semibold">Total: 0 / 0</p>
      <p class="text-lg mt-2">Result: PASS</p>
    </div>

    <div class="flex justify-evenly items-center mt-10">
      <a href="{{ route("result_route") }}" download="{{ route("result_route") }}">
        <button class="px-2 py-1 rounded text-xl font-semibold bg-blue-500 text-white">
          Download
        </button>
      </a>
      <button class="px-2 py-1 rounded text-xl font-semibold bg-green-700 text-white">
        Print
      </button>

    </div>
  </div>
@endsection