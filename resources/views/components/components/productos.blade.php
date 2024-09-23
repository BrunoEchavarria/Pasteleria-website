<x-app-layout>
        <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </head>

        <style>
        a{
                text-decoration: none;
        }
        </style>
        <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Nuestros productos') }}
                </h2>
        </x-slot>
        
        <div class="container row my-5 d-flex w-100 justify-content-around m-auto">
                @foreach ($productos as $producto)
                        <div class="container  col-10 col-md-5 col-lg-3 m-lg-3 p-0 mb-4">
                                <div class="card-products">
                                        <div style="background-image: url('/img/{{$producto->imagen}}'); width:350px; height:300px; background-size: cover"></div>
                                        <div class="card__content">
                                                <p class="">
                                                        {{$producto->descripcion}}
                                                </p>
                                                <p>
                                                       $ {{$producto->precio}}
                                                </p>
                                                <a class="btn-card" href="https://wa.me/3482331920">Comprar</a>
                                        </div>
        
                                </div>
                                <div class="container">                  
                                        <h5 class="text-center pt-4 text-bold ">
                                                {{$producto->nombre}}
                                        </h5>
                                </div>
                        </div>
                @endforeach
                {!! $productos->links() !!}
        </div>

        @include('components.components.footer')
</x-app-layout>
