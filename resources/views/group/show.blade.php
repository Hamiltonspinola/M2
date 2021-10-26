<x-app-layout>
    @include('../_partials/header')

    <div class="card">
        
        <table class="table table-dark table-hover">
            <div class="card-header">
                    <h3 class="card-title">{{ $group->name }}</h3>
                <thead>
                    <tr>
                        <td>
                            <h4 class="ml-3">Cidades</h4>
                        </td>
                        <td>
                            <h4 class="ml-3">Ações</h4>
                        </td>
                    </tr>
                </thead>
            </div>

            <div class="card-body">
                <tbody>
                    @foreach ($cities as $city)
                    <tr>
                        
                        <td class="border border-white">
                            <h5 class="ml-3">{{ $city->name }}</h5>
                        </td>
                        <td>
                            <form action="{{ route('groupCity.destroy', $city->name) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Excluir">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </div>
            </table>
            <div class="d-flex justify-content-center">
                {{$cities->links()}}
           </div>
        </div>
  </x-app-layout>