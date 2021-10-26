<x-app-layout>
    @include('../_partials/header')
    @if(session('message'))
        <div class="alert alert-success">
            <p>{{session('message')}}</p>
        </div>
    @endif
    <div class="container mt-10">
        <div class="mb-3">
            <form action="{{ route('campaign.store') }}" method="post">
                @csrf
                <label for="formGroupExampleInput" class="form-label">Nome da campanha:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Digite o nome da campanha">

                <label for="status" class="form-label">Deseja ativar a campanha</label>
                <select name="status" id="status" class="form-select form-select-sm">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>

                <label for="group" class="form-label">Nome do grupo</label>
                  <select name="group" id="group" class="form-select form-select-sm">
                      @foreach ($groups as $group)
                      <option value="{{ $group->id }}">{{ $group->name }}</option>
                      @endforeach
                  </select>
                <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
            </form>
        </div>
    </div>
</x-app-layout>