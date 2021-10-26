<x-app-layout>
    @include('../_partials/header')
    @if(session('message'))
        <div class="alert alert-success">
            <p>{{session('message')}}</p>
        </div>
    @endif
    <div class="container mt-10">
        <div class="mb-3">
            <form action="{{ route('city.store') }}" method="post">
                @csrf
                <label for="formGroupExampleInput" class="form-label">Nome da cidade:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Digite o nome da cidade">
                <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
            </form>
        </div>
    </div>
</x-app-layout>