<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Questa Pagina è stata creata da Rodrigo Fantechi">
    <meta name="keywords" content="Rodrigo,Fantechi,Webpage">
    <meta name="author" content="Rodrigo Fantechi">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>


    <header id="site_header">
        <nav class="nav justify-content-center bg-dark ">
            <a class="nav-link text-light" href="{{route('home')}}">Home</a>
            <a class="nav-link text-light" href="{{route('about')}}">About</a>
            
        </nav>
    </header>
    <!-- /#site_header -->
    <main id="site_main">
        <div class="container text-center pt-5">
            <h1>{{$title}}</h1>
        </div>
    </main>
    <!-- /#site_main -->
    <footer id="site_footer"></footer>
    <!-- /#site_footer -->



    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>