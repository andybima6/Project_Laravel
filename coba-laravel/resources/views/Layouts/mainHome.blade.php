<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width= device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel = "stylesheet" href = "css/style.css">
        <title> WPU Blog | </title>

    </head>
    <body>
    <header>
      <h1>Andy Nugraha</h1>
    </header>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <main>
      <section class="fade-in">
        <h2>About Me</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum nisl nec elit dictum fringilla. Nulla sollicitudin felis vel ipsum rutrum, vitae consectetur elit dapibus. Fusce eu enim aliquet, varius nulla ac, malesuada sapien.</p>
      </section>
      <section class="slide-in">
        <h2>Recent Work</h2>
        <ul>
          <li><a href="#">Project 1</a></li>
          <li><a href="#">Project 2</a></li>
          <li><a href="#">Project 3</a></li>
        </ul>
      </section>
    </main>
    <footer>
      <p>&copy; 2023</p>
    </footer>
    
    @include('partials.navbar')
<div class = "container mt-4">
        @yield('containerss')
    </div>
    
    <script src="js/script.js"></script>
    <img src = "img/onepiece.jpg" alt = "Luffy" width = "500">
    </body>
</html>