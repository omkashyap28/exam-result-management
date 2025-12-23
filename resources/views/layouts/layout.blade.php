<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield("page-title")</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  @vite(["resources/css/app.css", "resources/js/app.js"])
</head>

<body>

  <div class="w-full">
    <div>
      <header class="w-full sticky top-0 left-0">
        <nav class="container mx-auto px-4 sm:px-16 md:px-24 lg:px-32 py-3">
          <div class="flex justify-between items-center w-full">
            <a href="#" class="text-2xl tracking-wide font-semibold">
              Logo
            </a>
            <div class="flex gap-3 items-center">
              <a href="{{ route("home") }}"
                class="text-[17px] tracking-wide font-semibold text-gray-900 hover:text-indigo-600">HOME</a>
              <a href="{{ route("result") }}"
                class="text-[17px] tracking-wide font-semibold text-gray-900 hover:text-indigo-600">RESULTS</a>
              <a href="{{ route("updates") }}"
                class="text-[17px] tracking-wide font-semibold text-gray-900 hover:text-indigo-600">UPDATES</a>
            </div>
          </div>
        </nav>
      </header>
    </div>
    <div class="container mx-auto px-4 sm:px-16 md:px-24 lg:px-32">
      @yield("dynamic-section")
    </div>
    <footer class="bg-slate-800 text-slate-300 py-6 text-center">
      © {{ date('Y') }} Exam Result Management System. All rights reserved.
    </footer>
  </div>

</body>

</html>