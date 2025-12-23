<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield("page-title")</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  @vite(["resources/css/app.css", "resources.js.app.js"])
</head>

<body>

  <div class="w-full">
    <div>
      <header class="w-full sticky top-0 left-0 bg-blue-600">
        <nav class="container mx-auto px-4 sm:px-12 md:px-18 lg:px-26 py-3">
          <div class="flex justify-between items-center w-full">
            <a href="#" class="text-2xl tracking-wide font-semibold">
              Logo
            </a>
            <div class="flex gap-3 items-center">
            <a href="{{ route("home") }}"
                class="text-[17px] tracking-wide font-semibold  text-gray-100 hover:text-black">HOME</a>
              <a href="{{ route("result") }}"
                class="text-[17px] tracking-wide font-semibold  text-gray-100 hover:text-black">RESULTS</a>
              <a href="{{ route("updates") }}"
                class="text-[17px] tracking-wide font-semibold  text-gray-100 hover:text-black">UPDATES</a>
              <a href="{{ route("admin_dashboard") }}"
                class="text-[16px] tracking-wide font-semibold text-gray-100 hover:text-black">DASHBOARD</a>
              <a href="{{ route("teachers") }}"
                class="text-[16px] tracking-wide font-semibold text-gray-100 hover:text-black">TEACHERS</a>
              <a href="{{ route("student") }}"
                class="text-[16px] tracking-wide font-semibold text-gray-100 hover:text-black">STUDENTS</a>
              <a href="{{ route("admission") }}"
                class="text-[16px] tracking-wide font-semibold text-gray-100 hover:text-black">ADMISSIONS</a>
              <a href="{{ route("logout") }}"
                class="bg-white px-2 py-1 rounded ml-4 text-lg tracking-wide font-semibold text-blue-500">
                Logout
              </a>
            </div>
          </div>
        </nav>
      </header>
    </div>
    <div class="container mx-auto px-4 sm:px-12 md:px-18 lg:px-26">
      @yield("dynamic-section")
    </div>
  </div>

</body>

</html>