<x-main>

    <main style="height: 3500px; padding: 5rem; ">

        @foreach($corsi as $corsospec)
        <div class="card" style="width: 100%; margin: auto;">
            <img src="{{$corsospec['img']}}" class="card-img-top" alt="..." style="height: auto;">
            <div class="card-body" style="text-align: center;">
                <h5 class="card-title">{{$corsospec['name']}}</h5>
                <p class="card-text">...</p>
                <a href="{{route('dettagliocorso', ['refcorso'=>$corsospec['name']])}}" class="btn btn-primary">{{$corsospec['name']}}</a>
            </div>
        </div>
        @endforeach





    </main>

</x-main>