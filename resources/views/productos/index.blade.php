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
            {{ __('Agregar productos') }}
        </h2>
    </x-slot>

    <div class="py-12 overflow-x-scroll">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="table-container p-4 overflow sm:rounded-lg">
                <div class="d-flex justify-content-between">
                    <a class="btn-pink m-0" href="{{route('productos.create')}}">Crear</a>
                    <form class="container d-flex col-11 col-md-5 col-lg-4 me-0" role="search">
                        <input name="buscarpor" class="form-control me-2 " type="search" placeholder="Buscar producto" aria-label="Search" value="{{ $buscarpor }}">
                        <button class="btn-pink m-0 " type="submit">Buscar</button>
                    </form>
                </div>

                <table class="table mt-4 p-6 bg-white shadow-md overflow-x-scroll">
                    <thead>
                      <tr>
                        <th style="display: none;">ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Imagenes</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                          <td style="display: none;">{{$producto->id}}</td>
                          <td>{{$producto->nombre}}</td>
                          <td>{{$producto->descripcion}}</td>
                          <td>{{$producto->precio}}</td>
                          <td>
                              <img src="/img/{{$producto->imagen}}" width="100px">
                          </td>
                          <td class="border px-4 py-2">
                              <div class="rounded-lg d-flex justify-content-center" role="group">
                                  {{-- boton editar --}}
                                  <a class="inline-flex items-center px-2 py-2 bg-blue-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500" href="{{route('productos.edit', $producto->id)}}">Editar</a>
                                  {{-- boton borrar --}}
                                  <form action="{{route('productos.destroy', $producto->id)}}" method="POST" class="formEliminar">
                                      @csrf
                                      @method('DELETE')
                                      <button class="inline-flex items-center px-2 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500" type="submit">Eliminar</button>
                                  </form>
                              </div>
                          </td>   
                        </tr>
                            
                        @endforeach
                    </tbody>
                  </table>
                <div>
                    {!! $productos->links() !!}
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>

<script>
    (function () {
  'use strict'
  //debemos crear la clase formEliminar dentro del form del boton borrar
  //recordar que cada registro a eliminar esta contenido en un form  
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {        
          event.preventDefault()
          event.stopPropagation()        
          Swal.fire({
                title: '¿Confirma la eliminación del registro?',        
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#7695FF',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                }
            })                      
      }, false)
    })
})()
</script>