<?php

require_once("Classes/MascotasAdoptadas/MascotaAdoptada.php");
require_once("Classes/MascotasDisponibles/MascotaDisponible.php");

use MascotaDisponible\MascotaDisponible;
#use MascotasAdoptadas\MascotaAdoptada as MichiAdoptado;
use MascotaAdoptada\MascotaAdoptada;

$mrmichi = new MascotaDisponible("Mr. Michi", "Blanquito", 16);
$michisancio = new MascotaDisponible("Michisancio", "Naranjita", 14);
$michales = new MascotaDisponible("Michales", "Negrito", 15);

$mrmichi_adopted = new MascotaAdoptada("Julito", new DateTime("2022-04-21"), "Retaxito");
$michisancio_adopted = new MascotaAdoptada("Tato", new DateTime("2022-01-15"), "Juanito");
$michales_adopted = new MascotaAdoptada("Miguel", new DateTime("2022-03-05"), "Pedrito");