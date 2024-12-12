<?php

use function Livewire\Volt\{state};

//

?>

<div class="dropdown sidebar-user mb-2">
    <button
        type="button"
        class="btn material-shadow-none"
        id="page-header-user-dropdown"
        data-bs-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
    >
        <span class="d-flex align-items-center gap-2">
            {{-- <img
                class="rounded header-profile-user ms-1"
                src="{{ $this->usuario->usuario_estudiante_perfil_url
                    ? asset($this->usuario->usuario_estudiante_perfil_url)
                    : $this->usuario->avatar }}"
                alt="Header Avatar"
            /> --}}
            <span class="text-start">
                <span class="d-block fw-medium sidebar-user-name-text">
                    {{-- {{ $this->usuario->persona->primeros_nombres }} --}} Nombre
                </span>
                <span class="d-block fs-14 sidebar-user-name-sub-text">
                    <i class="ri ri-user-line fs-6 text-success align-baseline"></i>
                    <span class="align-middle text-success">
                        Estudiante
                    </span>
                </span>
            </span>
        </span>
    </button>
    <div class="dropdown-menu dropdown-menu-end">
        <!-- item-->
        <h6 class="dropdown-header">Bienvenido Jamt!</h6>
        <a class="dropdown-item" style="cursor: pointer;" wire:click="logout">
            <i class="ri-logout-circle-line fs-16 align-middle me-1"></i>
            <span class="align-middle">
                Cerrar Sesión
            </span>
        </a>
    </div>
</div>

