<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        @include('includes.navbar')
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer id="footer" class="footer dark-background">
        @include('includes.footer')
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>
