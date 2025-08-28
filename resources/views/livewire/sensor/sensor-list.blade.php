<div class="mt-5">
    <div class="card mx-auto my-5 shadow-lg p-3 mb-5 bg-white rounded w-75">
        <h3 class="card-header d-flex justify-content-center">Lista de Sensores</h3>
        <div class="card-body">
            <a href="{{ route('sensor.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Sensor</a>
            <table class="table table-bordered table-striped">

                @if(session()->has('message'))
                <div class="alert alert-success">{{ session('message')}}</div>
            @endif

             <div class="card">
                 <div class="card-body">
                     <div class="row-mb-3">
                         <div class="col-md-6">
                             <input type="text" class="form-control" placeholder="Buscar Sensores..." wire:model.live='search'>
                            </div>
                            <div class="col-md-3 mt-1">
                                <select wire:model.live="perPage" class="form-select">
                                    <option value="15">15 por página</option>
                                    <option value="25">25 por página</option>
                                    <option value="50">50 por página</option>
                                    <option value="100">100 por página</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <thead>
                    <tr>
                        <th>Ambiente</th>
                        <th>Tipo</th>
                        <th>Descricao</th>
                        <th>Codigo</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sensors as $sensor)
                    <tr>
                        <td>{{ $sensor->ambiente_id }}</td>
                         <td>{{ $sensor->tipo }}</td>
                          <td>{{ $sensor->descricao }}</td>
                        <td>{{ $sensor->codigo }}</td>
                        <td>{{ $sensor->status }}</td>
                        <td>
                            <a href="{{ route('sensor.edit', $sensor->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <a href="{{ route('sensor.delete', $sensor->id) }}" class="btn btn-sm btn-danger">Excluir</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-5">
                {{$sensors->links()}}
            </div>
        </div>
    </div>
</div>