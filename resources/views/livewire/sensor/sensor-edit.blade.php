<div class="mt-5">

    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @else
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card mx-auto my-5 shadow-lg p-3 mb-5 bg-white rounded w-75">
            <h3 class="card-header d-flex justify-content-center">Editar Sensor</h3>
            <div class="card-body">
                <form wire:submit.prevent="update">
               <div class="mb-3">
                    <label for="ambiente" class="form-label">Id do Ambiente</label>

                    <select class="form-select" id="ambiente_id" wire:model.defer="ambiente">
                        <option hidden>Selecione um ambiente</option>
                        @foreach ($ambientes as $ambiente)
                            <option value={{ $ambiente->id }}> {{ $ambiente->nome }} </option>
                        @endforeach
                    </select>
                    @error('ambiente')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>

                    
                    <div class="mb-3">
                        <label for="codigo" class="form-label">codigo</label>
                        <input type="codigo" class="form-control" id="codigo"
                            placeholder="Insira o codigo do sensor" wire:model.defer="codigo">
                        @error('codigo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                       <div class="mb-3">
                        <label for="tipo" class="form-label">tipo</label>
                        <input type="tipo" class="form-control" id="tipo" wire:model.defer="tipo">
                        @error('tipo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="descricao" class="form-label">descricao</label>
                        <input type="descricao" class="form-control" id="descricao" wire:model.defer="descricao">
                        @error('descricao')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">status</label>

                        <select class="form-select @error('status') is-invalid @enderror" wire:model.defer="status"
                            id="status">
                            <option hidden>Selecione seu cargo</option>
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>

                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark w-75 p-3">Atualizar</button>

                    </div>
                </form>
    @endif
</div>
</div>
</div>