<?php

use function Livewire\Volt\{state};

//

?>

<div class="row">
    <div class="col-12 animate__animated animate__fadeIn">
        <x-page-title title="Inicio">
            <x-page-title.item active>
                Inicio
            </x-page-title.item>
        </x-page-title>
    </div>
    <div class="col-12 animate__animated animate__fadeIn">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="row g-0">
                    <!-- Bienvenida -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="alert alert-info border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert">
                                    <div class="flex-grow-1 text-truncate">
                                        EPG-UNU
                                    </div>
                                    <div class="flex-shrink-0">
                                        v2
                                    </div>
                                </div>

                                <div class="row align-items-end">
                                    <div class="col-sm-8">
                                        <div class="p-3">
                                            <p class="fs-5 fs-md-10 lh-base">
                                                <b>Bienvenidos al Sistema Integrado de Matricula de la Escuela de Postgrado de la Universidad Nacional de Ucayali.</b>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="px-3">
                                            <img src="assets/images/user-illustarator-2.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-body-->
                        </div>
                    </div>
                    <!-- Carousel -->
                    <div class="col-12">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                            <div class="carousel-inner rounded" role="listbox">
                                <div class="carousel-item active">
                                    <img
                                        class="d-block img-fluid mx-auto rounded w-100"
                                        src="https://images.unsplash.com/photo-1503676382389-4809596d5290?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8dW5pdmVyc2l0eXxlbnwwfHwwfHx8Mg%3D%3D"
                                        alt="First slide"
                                    >
                                </div>
                                <div class="carousel-item">
                                    <img
                                        class="d-block img-fluid mx-auto rounded w-100"
                                        src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dW5pdmVyc2l0eXxlbnwwfHwwfHx8Mg%3D%3D"
                                        alt="Second slide"
                                    >
                                </div>
                                <div class="carousel-item">
                                    <img
                                        class="d-block img-fluid mx-auto rounded w-100"
                                        src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dW5pdmVyc2l0eXxlbnwwfHwwfHx8Mg%3D%3D"
                                        alt="Third slide"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="alert alert-warning border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert">
                            <div class="flex-grow-1 text-truncate">
                                Noticias
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
