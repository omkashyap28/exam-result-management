@extends("layouts.layout")

@section("page-title")
  Home
@endsection

@section("dynamic-section")
  <section class="mx-auto mt-5 py-20">
      <div class="w-full sm:w-3/4 md:w-2/4">
          <h2 class="text-4xl font-bold text-slate-800 mb-4">
              Fast & Secure Exam Result Management
          </h2>
          <p class="text-slate-600 mb-6">
              View results instantly, manage students easily, and ensure accuracy with our
              modern exam result management system.
          </p>

          <div class="flex gap-4">
              <a href="#" class="bg-indigo-600 text-white px-6 py-3 rounded-xl shadow hover:bg-indigo-700">
                  View Result
              </a>
          </div>
      </div>

  </section>

  <!-- Features -->
  <section class="bg-white py-16">
      <div class="max-w-7xl mx-auto px-6">
          <h3 class="text-3xl font-bold text-center text-slate-800 mb-12">
              System Features
          </h3>

          <div class="grid md:grid-cols-3 gap-8">
              <div class="p-6 rounded-2xl shadow-sm hover:shadow-md transition">
                  <h4 class="text-xl font-semibold mb-2 text-indigo-600">
                      Student Results
                  </h4>
                  <p class="text-slate-600">
                      Students can check their results online using roll number.
                  </p>
              </div>

              <div class="p-6 rounded-2xl shadow-sm hover:shadow-md transition">
                  <h4 class="text-xl font-semibold mb-2 text-emerald-600">
                      Admin Panel
                  </h4>
                  <p class="text-slate-600">
                      Admin can add, update, and publish exam results securely.
                  </p>
              </div>

              <div class="p-6 rounded-2xl shadow-sm hover:shadow-md transition">
                  <h4 class="text-xl font-semibold mb-2 text-rose-600">
                      Accurate & Fast
                  </h4>
                  <p class="text-slate-600">
                      Ensures fast access and accurate result processing.
                  </p>
              </div>
          </div>
      </div>
  </section>
@endsection