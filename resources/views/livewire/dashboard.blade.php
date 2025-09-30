<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Painel De Monitoramento</h4>
        <small class="text-muted">Atualizado há 2 minutos</small>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted">Temperatura</h6>
                        <h3 class="fw-bold text-danger">50ºC</h3>
                    </div>
                    <i class="bi bi-thermometer-half fs-2 text-danger"></i>
                </div>


            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted">Umidade</h6>
                        <h3 class="fw-bold text-primary">50%</h3>
                        <div class="progress mt-2" style="height: 5px;">
                            <div class="progress-bar bg-primary" style="width: 50%; "></div>
                        </div>
                    </div>
                    <i class="bi bi-moisture fs-2 text-primary"></i>
                </div>


            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted">Luminosidade</h6>
                        <h3 class="fw-bold text-warning">500</h3>
                    </div>
                    <i class="bi bi-lightbulb fs-2 text-warning"></i>
                </div>


            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted">Último Registro</h6>
                        <h4 class="fw-bold text-success">21/08/2025 15:30</h4>
                    </div>
                    <i class="bi bi-clock-history fs-2 text-success"></i>
                </div>


            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white">
                    <h6 class="mb-0">Histórico de Temperatura</h6>
                </div>
                <div class="card-body">
                    <canvas id="graficoTemperatura" height="200"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white">
                    <h6 class="mb-0">Sensores por Tipo</h6>
                </div>
                <div class="card-body">
                    <canvas id="graficoSensores" height="200"></canvas>
                </div>
            </div>
        </div>

    </div>


</div>
