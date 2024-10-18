<x-app-layout>
        <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Nuestros productos') }}
                </h2>
        </x-slot>

        <div class="container m-auto row">
                <form class="container d-flex col-11 col-md-5 col-lg-4 pt-3 me-0" role="search">
                        <input name="buscarpor" class="form-control me-2 " type="search" placeholder="Buscar producto" aria-label="Search" value="{{ $buscarpor }}">
                        <button class="btn-pink m-0 " type="submit">Buscar</button>
                </form> 
        </div>
        <div class="container row my-2 d-flex w-100 justify-content-between m-auto">
                @foreach ($productos as $producto)
                        <div class="container col-10 col-md-5 col-lg-3 m-lg-3 p-0 mb-4">
                                <div class="card-products">
                                        <div style="background-image: url('/img/{{$producto->imagen}}'); width:350px; height:300px; background-size: cover"></div>
                                        <div class="card__content">
                                                <div class="container d-flex flex-column justify-content-around w-100 h-100">
                                                        <p class="card__description">
                                                                {{$producto->descripcion}}
                                                        </p>
                                                        <p class="card__price">
                                                             Precio: ${{$producto->precio}}
                                                        </p>
                                                        <div class="container d-flex justify-content-center">
                                                                <a class="btn-white m-0" href="https://api.whatsapp.com/send?phone=3482331920&text=Hola, me comunico desde la pagina web porque quiero realizar un pedido.">Comprar</a>
                                                        </div>
                                                </div>
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
