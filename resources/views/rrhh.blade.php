<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Landing RRHH</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fa-svg-with-js.css') }}">
  <link rel="stylesheet" href="{{ asset('css/rrhh.css') }}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  {{-- Header --}}
  @include('partials.landing.header')

  <main>

    {{-- About --}}
    @include('partials.landing.about')

    {{-- Proceso de seleccion --}}
    @include('partials.landing.selection')

    {{-- Seccion de postulaciones --}}
    @include('partials.landing.applications')

    {{-- Contactenos --}}
    @include('partials.landing.contact')    

    
  </main>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      // Select all links with hashes
      $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
          // On-page links
          if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
            && 
            location.hostname == this.hostname
          ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
              // Only prevent default if animation is actually gonna happen
              event.preventDefault();
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000, function() {
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                  return false;
                } else {
                  $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                  $target.focus(); // Set focus again
                };
              });
            }
          }
        });
    });
  </script>
</body>
</html>