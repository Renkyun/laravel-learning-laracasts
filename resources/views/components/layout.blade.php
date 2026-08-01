@props([
  'title' => 'Laracasts'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <style>
    nav > a {
      color: blue;
    }
    </style>
</head>
<body>
  <nav>
    <a href="/">Home</a>
    <a href="/about">About Us</a>
    <a href="/contact">Contact</a>
  </nav>

 <main>
  {{ $slot }}  
 </main>

</body>
</html>