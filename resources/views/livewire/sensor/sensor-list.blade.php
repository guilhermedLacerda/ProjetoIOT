<div class="container-fluid py-3">
    <div class="card shadow-lg bg-white rounded"> 
        <h3 class="card-header d-flex justify-content-center">Lista de Sensores</h3>
        <div class="card-body">

        
            <a href="{{ route('sensor.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Sensor</a>

      
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

           
            <div class="card mb-3 p-2">
                <div class="card-body p-2"> 
                    <div class="row mb-3 align-items-center"> 
                        <div class="col-md-5">
                            <input type="text" class="form-control form-control-sm" placeholder="Buscar Sensores..."
                                wire:model.live='search'>
                        </div>
                        <div class="col-md-2"> 
                            <select wire:model.live="perPage" class="form-select form-select-sm">
                                <option value="15">15 por página</option>
                                <option value="25">25 por página</option>
                                <option value="50">50 por página</option>
                                <option value="100">100 por página</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>Ambiente</th>
                        <th>Tipo</th>
                        <th class="w-25">Descricao</th> 
                        <th>Codigo</th>
                        <th style="width: 120px;">Status</th> 
                        <th style="width: 150px;">Ações</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sensors as $sensor)
                        <tr>
                            <td>{{ $sensor->ambiente_id }}</td>
                            <td>{{ $sensor->tipo }}</td>
                            <td>{{ $sensor->descricao }}</td>
                            <td>{{ $sensor->codigo }}</td>
                            <td>
                                <div class="form-check form-switch d-flex align-items-center m-0">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="sensorSwitch{{ $sensor->id }}" wire:click="BotaoLed({{ $sensor->id }})"
                                        {{ $sensor->status == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label ms-2" for="sensorSwitch{{ $sensor->id }}">
                                        {{ $sensor->status == 1 ? 'Ligado' : 'Desligado' }}
                                    </label>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('sensor.edit', $sensor->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <a href="{{ route('sensor.delete', $sensor->id) }}" class="btn btn-sm btn-danger mt-1 mt-md-0">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
           
            <div class="mt-3"> 
                {{ $sensors->links() }}
            </div>
        </div>
    </div>
</div>