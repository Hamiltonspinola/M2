<x-app-layout>
    @include('../_partials/header')

    <div class="container mt-10">
        <div class="mb-3">
            <form action="{{ route('group.store') }}" method="post">
                @csrf
                <label for="formGroupExampleInput" class="form-label">Nome do Grupo:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Digite o nome do grupo">
                <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
            </form>
        </div>
    </div>
</x-app-layout>