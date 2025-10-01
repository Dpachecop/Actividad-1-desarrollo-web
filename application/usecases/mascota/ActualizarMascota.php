<?php

namespace Src\application\usecases;

use Src\Domain\Entities\Mascota;
use Src\domain\repositories\IMascotaRepository;

class ActualizarMascota{
    private IMascotaRepository $repostiorio;

    public function __Construct(IMascotaRepository $repostiorio){
        $this->repostiorio = $repostiorio;
    }

    public function execute(Mascota $mascota): void{
        $this->repostiorio->actualizar($mascota);
    }


}