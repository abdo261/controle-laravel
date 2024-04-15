<x-layout title="Home">
    <div class="d-flex align-items-center justify-content-between">
        <h1>Chauffeur List</h1>
        <a href="" class="btn btn-primary"> Noveau Chauffer</a>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Numéro Permis </th>
                    <th> Type Permis </th>
                    <th> CIN </th>
                    <th> Véhicule </th>
                    <th> </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($chauffeurs as $chauffeur)
                    <tr>
                        <td>{{ $chauffeur->id }}</td>
                        <td>{{ $chauffeur->nom }}</td>
                        <td>{{ $chauffeur->prénom }}</td>
                        <td>{{ $chauffeur->numéro_permis }}</td>
                        <td>{{ $chauffeur->type_permis }}</td>
                        <td>{{ $chauffeur->cin }}</td>
                        <td></td>
                        <td>
                            <div class="d-flex align-items-center gap-1">
                                <a href="" class="btn btn-primary btn-sm"> afficher</a>
                                <a href="" class="btn btn-warning btn-sm"> edité</a>
                                <a href="" class="btn btn-danger btn-sm">supprimer</a>
                            </div>

                        </td>
                        {{-- <td>{{$chauffeur->voiture->immatricule}}</td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $chauffeurs->links() }}
    </div>

</x-layout>
