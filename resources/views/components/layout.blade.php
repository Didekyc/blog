<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">

    <div class="top-right links">
        <a href="http://localhost/login" class="text-xs font-bold uppercase">Login</a>
        <a href="http://localhost/register" class="text-xs font-bold uppercase mr-3">Register</a>
    </div>
    
    {{ $slot }}
    
</section>
</body>
