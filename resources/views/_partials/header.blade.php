<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cadastrar</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('city.create')}}">Cidade</a></li>
                <li><a class="dropdown-item" href="{{ route('group.create') }}">Grupo</a></li>
                <li><a class="dropdown-item" href="{{ route('campaign.create') }}">Campanha</a></li>
                <li><a class="dropdown-item" href="#">Desconto</a></li>
                <li><a class="dropdown-item" href="#">Produto</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('city.index') }}">Cidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('group.index') }}">Grupos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('campaign.index') }}">Campanhas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Descontos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Produtos</a>
            </li>
          </ul>
    </h2>
</x-slot>