<div class="mt-5">
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card mx-auto my-5 shadow-lg p-3 mb-5 bg-white rounded w-75">
        <h3 class="card-header d-flex justify-content-center">Cadastrar</h3>

        <div class="card-body">
            <form wire:submit.prevent="store">
        
                <div class="mb-3">
                    <label for="ambiente" class="form-label">Id do Ambiente</label>
                
                    <select class="form-select"  id="ambiente_id" wire:model.defer="ambiente">
                        <option hidden>Selecione o Ambiente que o sensor sera instalado</option>
                        @foreach($ambientes as $ambiente)
                            <option value={{$ambiente->id}}> {{$ambiente->nome}} </option>
                        @endforeach 
                    </select>

                <div class="mb-3">
                    <label for="codigo" class="form-label">codigo</label>
                    <input type="codigo" class="form-control" id="codigo" placeholder="Insira o codigo do sensor" wire:model.defer="codigo">
                    @error('codigo') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                
                <div class="mb-3">
                    <label for="tipo" class="form-label">tipo</label>
                    <input type="tipo" class="form-control" id="tipo" wire:model.defer="tipo">
                    @error('tipo') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                   
                <div class="mb-3">
                    <label for="descricao" class="form-label">descricao</label>
                    <input type="descricao" class="form-control" id="descricao" wire:model.defer="descricao">
                    @error('descricao') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                
                    <select class="form-select @error('status') is-invalid @enderror" id="status" wire:model.defer="status">
                        <option hidden>Status</option>
                        <option value="1">ativo</option>
                        <option value="0">inativo</option>
                    </select>
                    

                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark w-75 p-3">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
</div>