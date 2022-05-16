@extends('layouts.main')

@section ('title', 'Trains')

@section('main-content')
   <main class="container">
       <div class="row">
           <div class="col-12 d-flex justify-content-center gap-3 py-2 flex-wrap">
               @foreach ($trains as $train) 
                    <a class="text-decoration-none text-dark" href="{{route("trains.show", $train->id)}}">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Azienda: {{$train->azienda}}</h5>
                                <p class="card-text fw-bold">Parte da <span class="fw-normal">{{$train->stazione_di_partenza}}</span></p>
                                <p class="card-text fw-bold">Arriva a <span class="fw-normal">{{$train->stazione_di_arrivo}}</span></p>
                                <p class="card-text fw-bold">Parte alle <span class="fw-normal">{{$train->orario_di_partenza}}</span></p>
                                <p class="card-text fw-bold">Arriva alle <span class="fw-normal">{{$train->orario_di_arrivo}}</span></p>
                                <p class="card-text fw-bold">Codice: <span class="fw-normal">{{$train->codice_treno}}</span></p>
                                <p class="card-text fw-bold">Status: <span class="fw-normal">{{($train->in_orario) ? 'In orario' : 'Cancellato'}}</span></p>
                            </div>
                        </div>
                    </a>
               @endforeach
           </div>
       </div>
   </main>
@endsection