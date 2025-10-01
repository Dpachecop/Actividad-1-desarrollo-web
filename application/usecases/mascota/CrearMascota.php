<?php

namespace Src\application\usecases;

use Src\Domain\Entities\Mascota;
use Src\Domain\Repositories\IMascotaRepository;

class CrearMascota{
    private IMascotaRepository $repositorio;

    public function __Construct(IMascotaRepository $repositorio){
        $this->repositorio = $repositorio;
    }

    public function execute(Mascota $mascota): void {
        $this->repositorio->crear($mascota);
    }
}