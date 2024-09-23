<div id="products" class="container-fluid products">
    <div class="d-sm-flex justify-content-around">
        <h2 class="col-lg-6 m-auto text-white products-title pt-5 pb-3 d-flex col-md-12">
            Comprá tus productos favoritos
        </h2>
        <div class=" d-none d-sm-flex col-lg-5">
            
        </div>
    </div>
    
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5 mx-5">
        <div class="col ">
            <div class="card-producto card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/torta-products.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <a href="{{route('nuestros-productos.index')}}">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold ">Conocé nuestras variedades de tortas!</h3>
                    </a>
                </div>
          </div>
        </div>
  
        <div class="col">
            <div class="card-producto card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/mesadulce-products.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <a href="{{route('nuestros-productos.index')}}">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Conocé nuestra mesa dulce!</h3>
                    </a>
                </div>
            </div>
        </div>
  
        <div class="col">
            <div class="card-producto card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/torta2-products.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <a href="{{route('nuestros-productos.index')}}">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Conocé nuestras variedades de tartas!</h3>
                    </a>  
                </div>
          </div>
        </div>
      </div>

      <div class="container text-center mt-3">
        <a class="btn-white m-auto" href="{{route('nuestros-productos.index')}}">Explorá todos nuestros productos!</a>
    </div>
</div>
