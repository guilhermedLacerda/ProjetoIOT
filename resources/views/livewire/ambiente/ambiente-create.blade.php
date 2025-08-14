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
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Insira o nome do ambiente" wire:model.defer="nome">
                    @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">descricao</label>
                    <input type="text" class="form-control" id="descricao" placeholder="Descreva o Ambiente" wire:model.defer="descricao">
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