@extends("layouts.layout")

@section("page-title")
  Login
@endsection

@section("dynamic-section")
  <div class="fixed top-0 left-0  bg-gray-100 z-9 flex justify-center items-center h-screen w-full">
    <div class="p-7 rounded-md bg-white shadow-xl">
      <h1 class="text-3xl font-semibold tracking-wide mb-5">
        Login
      </h1>
      <form action="{{ route("login_user") }}" method="POST" class="space-y-5">
        @csrf
        <input type="text" name="unique_id" id="unique_id" max="14" placeholder="id" aria-required=""
          class="block w-74 rounded-md border border-gray-800  focus:border-blue-500 outline-none px-3 py-2">
        <input type="password" name="password" id="password" placeholder="password" required
          class="block w-74 rounded-md border border-gray-800  focus:border-blue-500 outline-none px-3 py-2">

        <button type="submit"
          class="block w-74 rounded-md text-xl text-white bg-blue-500 hover:bg-blue-400 outline-none px-3 py-2">
          Login
        </button>
      </form>
    </div>
  </div>
@endsection