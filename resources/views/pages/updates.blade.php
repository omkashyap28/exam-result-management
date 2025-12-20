@extends("layouts.layout")

@section("page-title")
  Student Update
@endsection

@section("dynamic-section")
  <div class="w-full mt-18 min-h-104">
    <h1 class="text-3xl font-semibold tracking-wide mb-5">
      Latest Updates
    </h1>
    <ul>
      <li class="w-full px-4 py-2">
        <div class="flex justify-between itmes-center px-4 py-2 bg-zinc-200">
          <a href="#">
            Exam result release
          </a>
          <span>
            20/Dec/2025
          </span>
        </div>
      </li>
      <li class="w-full px-4 py-2">
        <div class="flex justify-between itmes-center px-4 py-2 bg-zinc-200">
          <a href="#">
            Exam dates release
          </a>
          <span>
            02/Dec/2025
          </span>
        </div>
      </li>
    </ul>
  </div>
@endsection