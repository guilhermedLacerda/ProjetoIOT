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
            <h3 class="card-header d-flex justify-content-center">Editar Ambiente</h3>
            <div class="card-body">
                <form wire:submit.prevent="update">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome"
                            wire:model.defer="nome" placeholder="Insira o nome">
                        @error('nome')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label">descricao</label>
                        <input type="text" class="form-control" id="descricao" placeholder="Descreva o Ambiente" wire:model.defer="descricao">
                        @error('descricao') <span class="text-danger">{{ $message }}</span> @enderror
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