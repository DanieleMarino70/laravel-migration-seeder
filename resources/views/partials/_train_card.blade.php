<div class="col-12 card">
    <div class="row">
        {{-- <div class="col bg-dark text-warning">
            <p>Azienda</p>
            <p>{{ $train->agency }}</p>
        </div> --}}
        <div class="col">
            <p>Stazione di Partenza</p>
            <p>{{ $train->departure_station }}</p>
        </div>
        <div class="col">
            <p>Stazione di Arrivo</p>
            <p>{{ $train->arrival_station }}</p>
        </div>
        <div class="col">
            <p>Carrozza</p>
            <p>{{ $train->wagons_number }}</p>
        </div>
        <div class="col">
            <p>Codice CP</p>
            <p>{{ $train->train_code }}</p>
        </div>
        <div class="col">
            <p>Orario partenza</p>
            <p>{{ $train->departure_time }}</p>
        </div>
        <div class="col">
            <p>Orario arrivo</p>
            <p>{{ $train->arrival_time }}</p>
        </div>
    </div>
</div>