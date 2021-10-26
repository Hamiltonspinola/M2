<x-app-layout>
  @include('../_partials/header')

  <div class="header">
    @if(session('message'))
      <div class="alert alert-success">
          <p>{{session('message')}}</p>
      </div>
    @endif

    @if(session('removeCity'))
        <div class="alert alert-success">
          <p>{{session('removeCity')}}</p>
        </div>
    @endif
    <div class="mt-2 mb-2 ml-3">
      <a href="{{ route('groupCity.create') }}">
          <button class="btn btn-dark">Inserir Cidades em Grupos</button>
      </a>
    </div>
  </div>
  <div class="body">
    <table class="table table-dark table-hover">
      <thead class="table-active">
        <tr>
            <td><h5>Cidades</h5></td>
            <td><h5>Campanhas</h5></td>
            <td><h5>Ações</h5></td>
        </tr>
      </thead>

      <tbody>
          
          <tr>
            @foreach ($groups as $group)
            <td>{{ $group->name }}</td>
            @endforeach

            @foreach ($campaigns as $campaign)
            <td>              
              {{ $campaign->name }}
            </td>
            @endforeach
            
            @foreach ($groups as $group)
            <td>
              <div class="row">
                  <div class="col-md-2 mt-2">
                    <a href="{{ route('group.edit', $group->name) }}">
                        <button class="btn btn-success">Editar</button>
                    </a>
                  </div>
                  <div class="col-md-2">
                      <form method="POST" action="{{ route('group.destroy', $group->name) }}" class="form-group mt-2">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">Excluir</button>
                      </form>
                  </div>
                  
                  <div class="col-md-2 mt-2">
                    <a href="{{ route('group.show', $group->id) }}">
                        <button class="btn btn-success">Ver</button>
                    </a>
                  </div>
              </div>              
            </td>
            @endforeach            
          </tr>   
        
      </tbody>

    </table>
  </div>
</x-app-layout>