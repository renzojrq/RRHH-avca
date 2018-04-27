<section class="applications py-5" id="application">
  <div class="container">          
    <div class="card-deck">
      <div class="card">  
        <div class="card-header">Pasantes</div>      
        <img class="card-img-top" src="{{ asset('images/interns.jpg') }}" alt="Pasantes">
        <div class="card-img-overlay d-flex align-items-end justify-content-center">
          <p class="card-text">
            <button type="button" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#pasantesModal">
              <i class="fa fa-plus"></i>
              Información
            </button>
            @include('modals.landing.pasantes')
          </p>
        </div>
      </div>
      <div class="card">
        <div class="card-header">Aprendices</div>
        <img class="card-img-top" src="{{ asset('images/learning.jpg') }}" alt="Aprendices">
        <div class="card-img-overlay d-flex align-items-end justify-content-center">
          <p class="card-text">
            <button type="button" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#aprendicesModal">
              <i class="fa fa-plus"></i>
              Información
            </button>
            @include('modals.landing.aprendices')
          </p>
        </div>        
      </div>
      <div class="card">
        <div class="card-header">Técnicos</div>
        <img class="card-img-top" src="{{ asset('images/technic.jpeg') }}" alt="T[ecnicos">
        <div class="card-img-overlay d-flex align-items-end justify-content-center">
          <p class="card-text">
            <button type="button" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#tecnicosModal">
              <i class="fa fa-plus"></i>
              Información
            </button>
            @include('modals.landing.tecnicos')
          </p>
        </div>        
      </div>
      <div class="card">
        <div class="card-header">Profesionales</div>
        <img class="card-img-top" src="{{ asset('images/professional.jpeg') }}" alt="Profesional">
        <div class="card-img-overlay d-flex align-items-end justify-content-center">
          <p class="card-text">
            <button type="button" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#profesionalesModal">
              <i class="fa fa-plus"></i>
              Información
            </button>
            @include('modals.landing.profesionales')
          </p>
        </div>        
      </div>
    </div>
  </div>
</section>