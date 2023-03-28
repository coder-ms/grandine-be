@extends('layouts.admin')

@section('content')
{{-- <div class="container p-3 create-section">
    <h2>MODIFICA PRATICA: {{$practice->plate}}</h2>
    <form action="{{route('admin.practices.update', $practice->slug)}}" method="POST" enctype="multipart/form-data" class="p-4">
        @csrf
        @method('PUT')
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-auto" type="button" role="tab" aria-controls="pills-auto" aria-selected="true">Auto</button> 
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-client-1" type="button" role="tab" aria-controls="pills-client"  aria-selected="false">Cliente pt. 1</button> 
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-client-2" type="button" role="tab" aria-controls="pills-client"  aria-selected="false">Cliente pt.2</button> 
            </li>
        </ul> --}}
        <!-- Tabs content -->
        <div class="tab-content" id="pills-tabContent">

            {{-- DATI AUTO --}}
            {{-- <div class="tab-pane tab-height fade show active" id="pills-auto" role="tab-panel" aria-labelledby="pills-auto-tab">
                <div class="mb-3">
                    <label for="plate" class="form-label">Targa<span>*</span></label>
                    <input type="text" class="form-control @error('plate') is-invalid @enderror" value="{{old('plate', $practice->plate)}}" id="plate" name="plate" required maxlength="7" minlength="7">
                    @error('plate')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* es. AA111BB</div>
                </div>

                <div class="mb-3">
                    <label for="model" class="form-label">Modello<span>*</span></label>
                    <input type="text" class="form-control @error('model') is-invalid @enderror" value="{{old('model', $practice->model)}}" id="model" name="model" required maxlength="50" minlength="3">
                    @error('model')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* es. Tesla Model 3</div>
                </div>

                <div class="mb-3">
                    <label for="color" class="form-label">Colore <span>*</span></label>
                    <input type="text" class="form-control @error('model') is-invalid @enderror" value="{{old('color', $practice->color)}}" id="color" name="color" required maxlength="50" minlength="3">
                    @error('color')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* es. Rosso Scuro</div>
                </div>

                <div class="mb-3">
                    <label for="immatricolation" class="form-label">Immatricolazione <span>*</span></label>
                    <input type="number" class="form-control @error('model') is-invalid @enderror" value="{{old('immatricolation', $practice->immatricolation)}}" id="immatricolation" name="immatricolation" min="1900" max="2023">
                    @error('immatricolation')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* es. 1999</div>
                </div>
            </div> --}}

            {{-- DATI CLIENTE --}}
            {{-- <div class="tab-pane fade tab-height" id="pills-client-1" role="tab-panel" aria-labelledby="pills-client-tab-1">
                <div class="mb-3">
                    <label for="owner" class="form-label">Nome <span>*</span></label>
                    <input type="text" class="form-control @error('owner') is-invalid @enderror" value="{{old('owner', $practice->owner)}}" id="owner" name="owner" required maxlength="50" minlength="3">
                    @error('owner')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* Minimo 3 caratteri e massimo 50 caratteri</div>
                </div>

                <div class="mb-3">
                    <label for="tax_id_code" class="form-label">Codice Fiscale<span>*</span></label>
                    <input type="text" name="tax_id_code" id="tax_id_code" class="form-control  @error('tax_id_code') is-invalid @enderror" value="{{old('tax_id_code', $practice->tax_id_code)}}" required maxlength="16" minlength="16">
                    @error('tax_id_code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">*es. SRCCRS56E12CL219J</div>
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label">Telefono <span>*</span></label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control  @error('phone_number') is-invalid @enderror" value="{{old('phone_number', $practice->phone_number)}}" required maxlength="10" minlength="10">
                    @error('phone_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email <span>*</span></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email', $practice->email)}}" id="email" name="email" required maxlength="100" minlength="3">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


            </div> --}}

            {{-- DATI CLIENTE --}}
            {{-- <div class="tab-pane fade tab-height" id="pills-client-2" role="tab-panel" aria-labelledby="pills-client-tab">

                <div class="mb-3">
                    <label for="birthplace" class="form-label">Nato/a a<span>*</span></label>
                    <input type="text" name="birthplace" id="birthplace" class="form-control  @error('birthplace') is-invalid @enderror" value="{{old('birthplace', $practice->birthplace)}}" required minlength="2" maxlength="255">
                    @error('birthplace')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* es. Torino(TO), Piemonte, ITALIA</div>
                </div>

                <div class="mb-3">
                    <label for="birth" class="form-label">Nato/a il<span>*</span></label>
                    <input type="text" name="birth" id="birth" class="form-control  @error('birth') is-invalid @enderror" value="{{old('birth', $practice->birth)}}" required maxlength="10" minlength="10">
                    @error('birth')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* es. 2000-10-29</div>
                </div>

                <div class="mb-3">
                    <label for="residence" class="form-label">Residenza<span>*</span></label>
                    <input type="text" name="residence" id="residence" class="form-control  @error('residence') is-invalid @enderror" value="{{old('residence', $practice->residence)}}" required minlength="2" maxlength="255">
                    @error('residence')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* es. Via Spineta 111, Salerno(SA), Campania, ITALIA</div>
                </div>
            </div>


        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
        <button type="reset" id="reset" class="btn btn-danger text-white">Resetta</button> --}}
@endsection