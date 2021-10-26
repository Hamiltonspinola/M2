<x-app-layout>
    @include('../_partials/header')

    <div class="card">
        
        <table class="condensed">
            <div class="card-header">
                @foreach ($groups as $g)
                    <h3 class="card-title">{{ $g->name }}</h3>
                @endforeach
                <thead>
                    <tr>
                        <td>
                            <h4 class="ml-3">Cidades</h4>
                        </td>
                    </tr>
                </thead>
            </div>

            <div class="card-body">
                <tbody>
                    @foreach ($cities as $city)
                    <th>
                        <td>
                            <h5 class="ml-3">{{ $city->name }}</h5>
                        </td>
                    </th>
                    @endforeach
                </tbody>
            </div>
            </table>
        </div>
    </div>
  </x-app-layout>