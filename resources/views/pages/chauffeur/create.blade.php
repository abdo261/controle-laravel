<x-layout title="Create">
    <h1>Noveau Cheffeur </h1>
    <form action="{{ route('chauffeur.store') }}" method="post">
        @method('POST')
        @csrf
        <div class="form-input">
            <label for="nom">Nome</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ @old('nom') }}">
            @error('nom')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-input">
            <label for="prénom">Prénome</label>
            <input type="text" class="form-control" id="prénom" name="prénom" value="{{ @old('prénom') }}">
            @error('prénom')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-input">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ @old('age') }}">
            @error('age')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-input">
            <label for="numéro_permis">Numéro Permis</label>
            <input type="text" class="form-control" id="numéro_permis" name="numéro_permis"
                value="{{ @old('numéro_permis') }}">
            @error('numéro_permis')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-input">
            <label for="type_permis">type_permis</label>
            <select class="form-select" name="type_permis" id="type_permis" value="{{ @old('type_permis') }}">
                <option value="">choisure le type</option>
                @foreach (['A', 'B', 'C', 'D', 'E'] as $item)
                    <option value={{ $item }}>{{ $item }}</option>
                @endforeach
            </select>
            @error('type_permis')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-input">
            <label for="voiture_id">voiture</label>
            <select class="form-select" name="voiture_id" id="voiture_id" value="{{ @old('voiture_id') }}">
                <option value="">choisure voiture</option>
                @foreach ($voitures as $voiture)
                    <option value={{ $voiture->id }}>{{ $voiture->immatricule }}</option>
                @endforeach
            </select>
            @error('voiture_id')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class=" d-flex justify-content-end mt-2 gap-3">
            <a  class="btn btn-danger" href="{{route('chauffeur.index')}}">anuller</a>
            <button type="submit" class="btn btn-success">Crée</button>
        </div>
    </form>
</x-layout>
