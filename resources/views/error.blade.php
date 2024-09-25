<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Responsive 404 Not Found Page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="{{ asset('css/error.css') }}">
  </head>
<body>
    <div class="center">
        <section class="error">
                <h1 class="error__title">404</h1>
                <h2 class="error__type">Page not found</h2>
                <p class="error__cta">We’re sorry, the page you have looked for does not exist in our database! Maybe go to our</p>
                <a class="error__link error__link--blue" href="#" target="_blank">home page</a> 
        </section>
    </div>
    <div class="astronaut">
        <img src="https://images.vexels.com/media/users/3/152639/isolated/preview/506b575739e90613428cdb399175e2c8-space-astronaut-cartoon-by-vexels.png" alt="" class="src">
    </div>
    <script src="{{ asset('js/error.js') }}"></script>
</body>
</html>