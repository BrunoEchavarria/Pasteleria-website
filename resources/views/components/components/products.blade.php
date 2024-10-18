<div id="products" class="container-fluid products">
    <div class="d-sm-flex justify-content-around">
        <h2 class="col-lg-6 m-auto text-white products-title pt-5 d-flex col-md-12">
            Comprá tus productos favoritos
        </h2>
        <div class=" d-none d-sm-flex col-lg-5">
            
        </div>
    </div>
    
    <div class="row row-cols-1 row-cols-lg-4 d-flex justify-content-around g-4 py-5 mx-5">
        <div class="col ">
            <div class="card-producto card card-cover h-100 overflow-hidden rounded-2 shadow-lg" style="background-color:white; border: solid 1px black">
                <div class="d-flex flex-column h-100 p-5 text-white text-shadow-1">
                    <a class="text-dark" href="{{route('nuestros-productos.index')}}">
                        <h4 class="mb-4 display-6 lh-1 fw-bold">Conocé nuestras variedades de tortas!</h4>
                        <p>Torta comun o especial, con el relleno que más te guste!</p>
                    </a>
                </div>
          </div>
        </div>
  
        <div class="col">
            <div class="card-producto card card-cover h-100 overflow-hidden rounded-2 shadow-lg" style="background-color:white; border: solid 1px black">
                <div class="d-flex flex-column h-100 p-5 text-white text-shadow-1">
                    <a class="text-dark" href="{{route('nuestros-productos.index')}}">
                        <h4 class="mb-4 display-6 lh-1 fw-bold">Conocé nuestra mesa dulce!</h4>
                        <p>Variedad en alfajores, pastafrolas, tarta de coco, tarta frutal y tarta bombón.</p>
                    </a>
                </div>
            </div>
        </div>
  
        <div class="col">
            <div class="card-producto card card-cover h-100 overflow-hidden rounded-2 shadow-lg" style="background-color:white; border: solid 1px black">
                <div class="d-flex flex-column h-100 p-5 text-shadow-1">
                    <a class="text-dark" href="{{route('nuestros-productos.index')}}">
                        <h4 class="mb-4 display-6 lh-1 fw-bold">Conocé nuestras variedades de tartas!</h4>
                        <p>Tartas frutales, de manzana, bombón y de coco.</p>
                    </a>  
                </div>
          </div>
        </div>
      </div>

      <div class="container text-center mt-3">
        <a class="btn-white m-auto" href="{{route('nuestros-productos.index')}}">Explorá todos nuestros productos!</a>
    </div>
</div>
