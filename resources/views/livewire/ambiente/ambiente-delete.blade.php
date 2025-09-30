<div class="mt-5">
    
    @if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
    @else
    
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    <div class="card mx-auto my-5 shadow-lg p-3 mb-5 bg-white rounded w-50">
        <h3 class="card-header d-flex justify-content-center">Excluir Ambiente</h3>
        <div class="card-body text-center">
            <p>Tem certeza que deseja excluir o Ambiente <strong>{{ $nome }}</strong>?</p>
            <form wire:submit.prevent="delete">
                <button type="submit" class="btn btn-danger me-2">Sim, excluir</button>
                <a href="{{ route('ambiente.list') }}" class="btn btn-secondary">Cancelar</a>
            </form>
            @endif
        </div>
    </div>
</div>