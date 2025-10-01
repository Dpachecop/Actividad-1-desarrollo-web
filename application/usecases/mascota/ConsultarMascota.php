<?php

namespace Src\application\usecases;

use Src\Domain\Entities\Mascota;
use Src\domain\repositories\IMascotaRepository;

class ConsultarMascota{
    private IMascotaRepository $repositorio;


    public function __Construct(IMascotaRepository $repositorio){
        $this->repositorio = $repositorio;
    }

    public function execute(Mascota $mascota): void{
        $this->repositorio->consultar($mascota);
    }


}