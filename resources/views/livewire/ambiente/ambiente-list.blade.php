<div class="mt-5">
    <div class="card mx-auto my-5 shadow-lg p-3 mb-5 bg-white rounded w-75">
        <h3 class="card-header d-flex justify-content-center">Lista de Ambientes</h3>
        <div class="card-body">
            <a href="{{ route('ambiente.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Ambiente</a>
            <table class="table table-bordered table-striped">

                @if(session()->has('message'))
                <div class="alert alert-success">{{ session('message')}}</div>
            @endif

             <div class="card">
                 <div class="card-body">
                     <div class="row-mb-3">
                         <div class="col-md-6">
                             <input type="text" class="form-control" placeholder="Buscar Ambientes..." wire:model.live='search'>
                            </div>
                            <div class="col-md-3 mt-1">
                                <select wire:model.live="perPage" class="form-select">
                                    <option value="10">10 por página</option>
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
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ambientes as $ambiente)
                    <tr>
                        <td>{{ $ambiente->nome }}</td>
                        <td>{{ $ambiente->descricao }}</td>
                        <td>{{ $ambiente->status }}</td>
                        <td>
                            {{-- <a href="{{ route('funcionario.edit', $ambiente->id) }}" class="btn btn-sm btn-warning">Editar</a> --}}
                            {{-- <a href="{{ route('funcionario.delete', $ambiente->id) }}" class="btn btn-sm btn-danger">Excluir</a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-5">
                {{$ambientes->links()}}
            </div>
        </div>
    </div>
</div>