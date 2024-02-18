<!DOCTYPE html>
<html x-data="data" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Scripts -->
    <script src="{{ asset('js/init-alpine.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/nepali-datepicker.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    @stack('styles')

</head>

<body>
    <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        @include('layouts.navigation')
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        @include('layouts.navigation-mobile')
        <div class="flex flex-col flex-1 w-full">
            @include('layouts.top-menu')
            <main class="h-full w-full overflow-x-auto">
                <div class="container px-4 mx-auto grid">
                    @if (isset($header))
                        <h2 class="my-6 text-2xl font-semibold text-gray-700">
                            {{ $header }}
                        </h2>
                    @endif

                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
    <script>
        var uploadFileUrl = '{{ route('admin.file.upload') }}';
    </script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    @include('sweetalert::alert')
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/init/sweetAlert2.js') }}"></script>
   <script src="{{ asset('js/nepali-date-picker.min.js') }}" type="text/javascript"></script>
   <script type="text/javascript">
    $(document).ready(function () {
        $("#nepali-datepicker").nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
        
        });
    });
</script>

    @stack('scripts')
</body>

</html>
