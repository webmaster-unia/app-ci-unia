<?php

use function Livewire\Volt\{state};

//

?>

<div style="height: 100vh;">
    <div class="row h-100 g-0">
        <div class="col-12 col-lg-6 col-xl-7 d-none d-lg-block">
            <div
                class="h-100"
                style="
                    background-image: url('{{ asset('files/imagenes/bg-auth.webp') }}');
                    background-size: cover;
                    background-position: center;
                "
            ></div>
        </div>
        <div class="col-12 col-lg-6 col-xl-5 d-flex flex-column justify-content-center animate__animated animate__fadeIn">
            <div
                class="container py-5 px-3 px-lg-5 d-flex flex-column justify-content-center align-items-center"
                style="max-width: 500px;"
            >
                <div class="text-center mb-4">
                    <img
                        src="{{ asset('files/imagenes/logo-epg.png') }}"
                        alt="logo"
                        height="110"
                    />
                </div>
                <h4 class="text-center mb-3" style="font-weight: 700;">
                    Escuela de Posgrado
                </h4>
                <p class="text-center text-muted mb-5">
                    Bienvenido al sistema de matricula de la Escuela de Posgrado de la Universidad Nacional de Ucayali.
                </p>
                <form class="row g-3" wire:submit="ingresar">
                    <div class="col-12">
                        <label for="correoElectronico" class="form-label">
                            Correo Electrónico
                        </label>
                        <input
                            type="email"
                            class="form-control @if ($errors->has('correoElectronico')) is-invalid @endif"
                            id="correoElectronico"
                            wire:model="correoElectronico"
                            placeholder="example@unu.edu.pe"
                        >
                        @error('correoElectronico')
                            <span class="form-text text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="contrasena">
                            Contraseña
                        </label>
                        <div
                            class="input-group"
                            x-data="{ modoPassword: 'password' }"
                        >
                            <input
                                x-bind:type="modoPassword"
                                class="form-control @if ($errors->has('contrasena')) is-invalid @endif"
                                id="contrasena"
                                wire:model="contrasena"
                                placeholder="********"
                            >
                            <div class="input-group-text">
                                <a
                                    class="link-secondary cursor-pointer"
                                    x-on:click="modoPassword == 'password' ? modoPassword = 'text' : modoPassword = 'password'"
                                >
                                    <i class="ti ti-eye fs-4 align-middle" x-show="modoPassword == 'password'" x-cloak></i>
                                    <i class="ti ti-eye-off fs-4 align-middle" x-show="modoPassword == 'text'" x-cloak></i>
                                </a>
                            </div>
                        </div>
                        @error('contrasena')
                            <span class="form-text text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 mt-5">
                        <button
                            type="submit"
                            class="btn btn-primary btn-load w-100"
                            wire:loading.attr="disabled"
                            wire:target="ingresar"
                        >
                            <span
                                wire:loading
                                wire:target="ingresar"
                                class="spinner-border flex-shrink-0 align-middle"
                                role="status"
                            >
                                <span class="visually-hidden">Loading...</span>
                            </span>
                            <span wire:loading.class="ms-1">Ingresar</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
