<x-app-layout>
    @include('../_partials/header')
  
      <div class="container mt-10">
          @if ($errors->any())
              <div class="alert alert-danger">
                  
                  @foreach ($errors->all() as $error)
                      <p>{{ $error }}</p>    
                  @endforeach
                  
              </div>
          @endif
          <div class="mb-3">
              <form action="{{ route('group.update', $groups->name) }}" method="post">
                  @csrf
                  @method('PUT')
                  <label for="formGroupExampleInput" class="form-label">Nome da grupo:</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Digite o nome do grupo" value="{{ $groups->name ?? '' }}">
                  <button type="submit" class="btn btn-primary mt-2">Editar</button>
              </form>
          </div>
      </div>
  </x-app-layout>
  