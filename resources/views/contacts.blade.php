<x-main>
    <div class="container py-4">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
        <form method="POST" action="{{route('send')}}">
            @method('POST')
            @csrf
            <div class="mb-3">
                <label class="form-label" for="firstname">Nome</label>
                <input class="form-control" type="text" placeholder="Mario" name="firstname" id="firstname" value="{{old('firstname')}}"/>
                @error('firstname')
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="secondname" >Cognome</label>
                <input class="form-control" type="text" placeholder="Rossi" name="secondname" id="secondname" value="{{old('secondname')}}"/>
                @error('secondname')
                @enderror
            </div>

            <!--  -->
            <div class="mb-3">
                <label class="form-label" for="phonenumber">Telefono</label>
                <input class="form-control" type="text" placeholder="+39 666 555 9999" name="phonenumber" id="phonenumber" value="{{old('phonenumber')}}"/>
            </div>
  
            <!--  -->
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="text" placeholder="MarioRossi@example.com" name="email" id="email" value="{{old('email')}}"/>
            </div>
    
            <!-- -->
            <div class="mb-3">
                <label class="form-label" >Messaggio</label>
                <textarea class="form-control" type="text" placeholder="Messaggio" style="height: 10rem;" name="message"></textarea>
            </div>

            <!--  -->
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Invia</button>
            </div>

        </form>
</div>
</x-main>