<x-main>

  <main style="height: 1500px;">
    <div class="container my-5">
      <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg" style="background-image: url('https://images.unsplash.com/photo-1544033527-b192daee1f5b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'); background-repeat: no-repeat; background-size: cover;">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis">PUSH & GRIND</h1>
          <p class="lead" style="font-weight: bold; color: rgba(100%, 0%, 0%, 1.0);">Affidati ai migliori professionisti per spingere nei tuoi allenamenti e per raggiungere i tuoi obiettivi. Ogni corso ti darà gli strumenti necessari per farti crescere al meglio e alzare il tuo livello. Tutto il resto dipende da te! PUSH & GRIND!
          </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
              <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">
                <a class="nav-link" href="{{route('corsidisponibili')}}">Guarda i corsi!</a>
              </button>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="bootstrap-docs.png" alt="" width="720">
        </div>
      </div>
    </div>
  </main>

</x-main>