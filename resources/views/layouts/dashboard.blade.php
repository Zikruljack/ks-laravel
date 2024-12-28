<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/datatables/datatables.min.css">

    @stack('styles')
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            @include('layouts.header')

            <!-- Main content area -->
            <main class="flex-1 p-6">
                {{-- breadcrumb --}}
                @yield('breadcrumb')
                <!-- Add your main content here -->
                @yield('content')
            </main>
            @include('layouts.footer')
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/libs/datatables/datatables.min.js"></script>
    @stack('scripts')

    <script>
        // Toggle notification dropdown
        document.querySelector('.relative button').addEventListener('click', function() {
            this.nextElementSibling.classList.toggle('hidden');
        });

        // Toggle profile dropdown
        document.querySelector('.relative.ml-4 button').addEventListener('click', function() {
            this.nextElementSibling.classList.toggle('hidden');
        });
    </script>
</body>

</html>
