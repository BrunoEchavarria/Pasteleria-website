<x-app-layout>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <style>
        a{
            text-decoration: none;
        }
    </style>

    @include('components.components.hero-about')

    <div class="container d-flex flex-column-reverse flex-md-row-reverse justify-content-around pb-md-5 px-md-0">
        <div class="text-content col-md-5 d-flex flex-column justify-content-md-center align-items-center align-items-md-start p-3">
            <h2 class="title- acercade mt-4 mt-sm-0">
                En Date el gusto elaboramos productos desde 2012.
            </h2>
            <p>
                Todo comenzó como una idea y desde entonces nos centramos en brindarte lo mejor para que te sientas a gusto con nuestros
                productos además brindarte la mejor experiencia para vos y para con quien desees compartir y disfrutar de nuestros riquísimos productos.
            </p>
        </div>
        <div class="img-content col-md-6 col-lg-5"> 
            <img src="/img/acercade.jpg" alt="Imagen ilustrativa de un pastel">
        </div>
    </div>
    
        <div class="insights mb-5">
            <div class="gradient container-fluid d-flex flex-column justify-content-center align-items-center text-white" style="height:350px">
                <H3 style="font-size: 40px">Todavia no probaste nuestros productos?</H3>
                <p>Disfruta de una experiencia placentera  y gratificante junto con aquellas personas a quienes más querés.</p>
                <a class="btn btn-danger" href="{{route('nuestros-productos.index')}}">Nuestros productos!</a>
            </div>
        </div>

    <div class="container d-flex flex-column-reverse flex-md-row justify-content-around pt-6 mt-6 pt-md-0 pb-md-5 px-md-0">
        <div class="text-content col-md-5 d-flex flex-column justify-content-md-center align-items-center align-items-md-start">
            <h2 class="title- acercade mt-4 mt-sm-0">
                Elegimos los mejores ingredientes para brindarte la mejor experiencia.
            </h2>
            <p>
                Todo comenzó como una idea y desde entonces nos centramos en brindarte lo mejor para que te sientas a gusto con nuestros
                productos además brindarte la mejor experiencia para vos y para con quien desees compartir y disfrutar de nuestros riquísimos productos.
            </p>
        </div>
        <div class="img-content col-md-6 col-lg-5"> 
            <img src="/img/acercade.jpg" alt="Imagen ilustrativa de un pastel">
        </div>
    </div>
    @include('components.components.footer')
    
</x-app-layout>