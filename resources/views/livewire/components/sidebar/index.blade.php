<?php

use function Livewire\Volt\{state};

//

?>

<div>
    <x-sidebar>
        <x-sidebar.title>
            Menu
        </x-sidebar.title>
        <x-sidebar.item
            name="Inicio"
            :route="route('inicio.index')"
            routeIs="inicio.index"
            icon="ti ti-smart-home"
        />

        <x-sidebar.title icon="ri-more-fill" class="mt-2">
            Otros
        </x-sidebar.title>
        {{-- <x-sidebar.item
            name="Mis Matriculas"
            :route="route('matricula.index')"
            routeIs="matricula.*"
            icon="ti ti-folders"
        /> --}}

        {{-- <x-sidebar.item
            name="Matricula"
            icon="ri-folder-5-line"
            routeIs="inicio.*"
        >
            <x-sidebar.subItem
                :route="route('inicio.index')"
                routeIs="inicio.index"
            >
                Inicio
            </x-sidebar.subItem>
            <x-sidebar.subItem
                route="#"
                routeIs="inicio.show"
            >
                Otros
            </x-sidebar.subItem>
        </x-sidebar.item> --}}
    </x-sidebar>
</div>
