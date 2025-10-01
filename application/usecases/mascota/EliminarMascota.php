<?php

namespace Src\application\usecases;

use Src\Domain\Entities\Mascota;
use Src\Domain\Repositories\IMascotaRepository;

class EliminarMascota{
    private IMascotaRepository $repositorio;

    public function __Construct(IMascotaRepository $repositorio){
        $this->repositorio = $repositorio;
    }

    public function execute(Mascota $mascota): void {
        $this->repositorio->eliminar($mascota);
    }
}