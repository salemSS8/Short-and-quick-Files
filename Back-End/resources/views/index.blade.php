<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href=" {{ asset('/css/all.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('/css/aos.css') }}">
  </head>
  <body>

    <h1 class="text-3xl font-bold underline">
      Hello world!
      <i class="fa-solid fa-earth-americas"></i>
    </h1>

    <swiper-container>
      <swiper-slide>Slide 1</swiper-slide>
      <swiper-slide>Slide 2</swiper-slide>
      <swiper-slide>Slide 3</swiper-slide>
    </swiper-container>


    <script src=" {{ asset('/js/all.min.js') }}"></script>
    <script src=" {{ asset('/js/swiper-bundle.min.js') }}"></script>
    <script src=" {{ asset('/js/swiper-element-bundle.min.js') }}"></script>
    <script src=" {{ asset('/js/aos.js') }}"></script>
    <script src=" {{ asset('/js/script.js') }}"></script>
  </body>
</html>