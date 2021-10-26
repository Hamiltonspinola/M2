<x-app-layout>
    @include('../_partials/header')
    @if(session('message'))
        <div class="alert alert-success">
            <p>{{session('message')}}</p>
        </div>
    @endif
    <div class="container mt-10">
        <div class="mb-3">
            <form action="{{ route('campaignGroup.store') }}" method="post">
                @csrf

                <label for="group" class="form-label">Nome da campanha</label>
                <select name="status" id="status" class="form-select form-select-sm">
                    @foreach ($campaigns as $campaign)
                        <option value="{{ $campaign->id }}">{{ $campaign->name }}</option>
                    @endforeach
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