<?php

namespace Src\domain\repositories;

use Src\domain\entities\Mascota;

/**
 * Puerto (Interfaz) para la persistencia de Mascotas
 */

interface IMascotaRepository{
    public function crear(Mascota $mascota): void;
    public function consultar(int $id): ?Mascota;
    public function actualizar(Mascota $mascota): void;
    public function eliminar(int $id): void;
    public function listar(): array;
}
