<x-app-layout>
  @include('../_partials/header')

  <div class="header">
    <div class="mt-2 mb-2 ml-3">
      <a href="{{ route('groupCity.create') }}">
          <button class="btn btn-dark">Inserir Cidades em Grupos</button>
      </a>
    </div>
    <table class="table table-dark">
      <thead class="table-active">
        <tr>
            <td><h5>Cidades</h5></td>
            <td><h5>Ações</h5></td>
        </tr>
        <tr>
            
        </tr>
      </thead>

      <tbody>
          @foreach ($cities as $city)
          <tr>
            <td><h5>{{ $city->name }}</h5></td>
            <td>
                <a href="{{ route('city.edit', $city->name) }}">
                    <button class="btn btn-success">Editar</button>
                </a>
                <form method="POST" action="{{ route('city.destroy', $city->name) }}" class="form-group mt-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Excluir</button>
                </form>
            </td>
          <tr>      
          @endforeach
      </tbody>

    </table>
      <div class="d-flex justify-content-center">
         {{$cities->links()}}
    </div>
  </div>
</x-app-layout>
  
