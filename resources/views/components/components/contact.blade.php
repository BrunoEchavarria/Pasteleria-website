<x-app-layout>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      </head>

    <style>
        a{
            text-decoration: none;
        }
    </style>

      <x-slot name="header">
              <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Contactanos') }}
              </h2>
      </x-slot>

    <div class="container-fluid py-5">
        <div class="container contacto">
            <div style="background-color: #ff01014f; border: solid 2px;" class="row m-3 mb-4 p-sm-3 mt-lg-3 pb-5 mb-lg-4 mb-xl-5 rounded-2">
                <!-- Page title -->
                <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                  <h1 class="p-4 p-md-0 mb-md-4 text-center">Información de contacto</h1>
                  <div class="contenedor d-none d-lg-flex flex-column justify-content-center">
                    <p class="txtContacto d-flex"> <img style="width: 22px;margin-right: 15px;" src="/img/icons/phone.svg" alt="">+543482-123456</p>
                    <p class="txtContacto d-flex"><img style="width: 25px;margin-right: 15px;" src="/img/icons/mail.svg" alt="">dateelgusto@correo.com</p>
                    <p class="txtContacto d-flex"><img style="width: 18px;margin-right: 15px;" src="/img/icons/location.svg" alt="">Reconquista, Santa Fe, <br>Argentina.</p>
          
                  </div>
                </div>
          
                <!-- Contact form -->
                <form class="formulario col-md-8" id="form">
            
                  <!-- Grupo: Nombre -->
                  <div class="formulario__grupo field" id="grupo__nombre">
                    <label for="from_name" class="formulario__label">Nombre</label>
                    <div class="formulario__grupo-input">
                      <input type="text" class="formulario__input" name="from_name" id="from_name" placeholder="John Doe" fdprocessedid="1qeoqp">
                      <i class="formulario__validacion-estado fas fa-times-circle" aria-hidden="true"></i>
                    </div>
                    <p class="formulario__input-error">Debe completar con su nombre y apellido.</p>
                  </div>
            
                  <!-- Grupo: Correo Electronico -->
                  <div class="formulario__grupo field" id="grupo__correo">
                    <label for="email" class="formulario__label">Correo Electrónico</label>
                    <div class="formulario__grupo-input">
                      <input type="text" class="formulario__input" name="email" id="email" placeholder="correo@correo.com" fdprocessedid="klxwdf">
                      <i class="formulario__validacion-estado fas fa-times-circle" aria-hidden="true"></i>
                    </div>
                    <p class="formulario__input-error">Complete el Correo. El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
                  </div>
            
                  <!-- Grupo: Teléfono -->
                  <div class="formulario__grupo field" id="grupo__telefono">
                    <label for="phone" class="formulario__label">Teléfono</label>
                    <div class="formulario__grupo-input">
                      <input type="text" class="formulario__input" name="phone" id="phone" placeholder="4491234567" fdprocessedid="li8ive">
                      <i class="formulario__validacion-estado fas fa-times-circle" aria-hidden="true"></i>
                    </div>
                    <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
                  </div>
                  
                  <div class="formulario-grupo field" id="grupo__texto">
                    <label for="message" class="formulario__label">Escribe tu mensaje</label>
                    <textarea type="text" class="formulario__texto w-100" name="message" id="message"></textarea>
                  </div>
          
                  <div class="formulario__mensaje" id="formulario__mensaje">
                    <p><i class="fas fa-exclamation-triangle" aria-hidden="true"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                  </div>
            
                  <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <input class="formulario__btn" type="submit" id="button" value="Enviar email" fdprocessedid="eac8x8">
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                  </div>
                </form>
              </div>
        </div>
    </div>
    @include('components.components.footer')
</x-app-layout>