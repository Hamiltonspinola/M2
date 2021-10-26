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
          @if(session('errorCity'))
                <div class="alert alert-danger">
                    <p>{{session('errorCity')}}</p>
                </div>
          @endif
          <div class="mb-3">
              <form action="{{ route('groupCity.store') }}" method="post">
                  @csrf
                  <label for="city" class="form-label">Nome da cidade</label>
                  <select name="city" id="city" class="form-select form-select-sm">
                      @foreach ($cities as $city)
                      <option value="{{ $city->id }}">{{ $city->name }}</option>
                      @endforeach
                  </select>
                  
                  <label for="group" class="form-label">Nome do grupo</label>
                  <select name="group" id="group" class="form-select form-select-sm">
                      @foreach ($groups as $group)
                      <option value="{{ $group->id }}">{{ $group->name }}</option>
                      @endforeach
                  </select>
                  <button type="submit" class="btn btn-primary mt-3">Inserir</button>
              </form>
          </div>
      </div>
  </x-app-layout>
  