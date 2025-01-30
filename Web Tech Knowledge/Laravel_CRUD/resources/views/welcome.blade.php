<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                                        <!--
                        Anchor Tag (`<a>`):
                        - This is a hyperlink that redirects the user to another page when clicked.
                        - `href`: Specifies the URL or route the link points to.
                        - `{{ url('/UploadPage') }}`: This is a Blade directive that generates the full URL for the `/UploadPage` route.
                        - `url()`: A Laravel helper function that generates a full URL based on the given path.
                        - `/UploadPage`: The route defined in your `web.php` file that points to the `UploadDataController@index` method.
                        - "Upload Page": The text displayed as the clickable link.
                    -->
                    <a href="{{ route('upload-page') }}">Upload Page</a>
                </div>
            </div>
        </div>
    </body>
</html>
