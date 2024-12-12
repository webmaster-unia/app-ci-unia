<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    data-layout="vertical"
    data-topbar="light"
    data-sidebar="dark"
    data-sidebar-size="lg"
    data-sidebar-image="none"
    data-preloader="disable"
    data-theme="minimal"
    data-theme-colors="default"
    data-sidebar-visibility="show"
    data-layout-style="default"
    data-layout-width="fluid"
    data-layout-position="fixed"
    data-body-image="none"
    data-sidebar-user-show
>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'SIEPG Matricula' }}</title>

    <meta
        content="Sistema de Matricula de la Escuela de Posgrado de la Universidad Nacional de Ucayali"
        name="description"
    />
    <meta content="Escuela de Posgrado UNU" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('files/imagenes/logo-epg.png') }}" />

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Sweet Alert css-->
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Tabler Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    <!-- Animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body>
    <script>
        var defaultThemeMode = 'light';
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute('data-bs-theme')) {
                themeMode = document.documentElement.getAttribute('data-bs-theme');
            } else {
                if (localStorage.getItem('data-bs-theme') !== null) {
                    themeMode = localStorage.getItem('data-bs-theme');
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            document.documentElement.setAttribute('data-bs-theme', themeMode);
        }
    </script>

    {{ $slot }}

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- JS Confetti -->
    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>

    <!-- Sweet Alerts js -->
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        function themeToggle(theme) {
            if (theme === 'dark') {
                document.documentElement.setAttribute('data-bs-theme', 'dark');
                localStorage.setItem('data-bs-theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-bs-theme', 'light');
                localStorage.setItem('data-bs-theme', 'light');
            }
        }

        document.addEventListener('livewire:navigated', () => {
            // event listener for modal
            window.addEventListener('modal', event => {
                $(event.detail.modal).modal(event.detail.action)
            })

            // event listener for confetti
            window.addEventListener('confetti', event => {
                const jsConfetti = new JSConfetti()
                jsConfetti.addConfetti()
            })

            // event listener for toast
            window.addEventListener('toast', event => {
                var colors = {
                    'success': '#00bd9d',
                    'error': '#f06548',
                    'warning': '#ffbc0a',
                    'info': '#32ccff',
                }
                Toastify({
                    text: event.detail.mensaje,
                    className: event.detail.tipo,
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "bottom", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        padding: "20px",
                        borderRadius: "5px",
                        backgroundColor: colors[event.detail.tipo],
                    }
                }).showToast();
            })

            // event listener for confirm sweetalert
            window.addEventListener('confirm', event => {
                var colors = {
                    'success': '#00bd9d',
                    'error': '#f06548',
                    'warning': '#ffbc0a',
                    'info': '#32ccff',
                    'question': '#25a0e2',
                }
                Swal.fire({
                    title: event.detail.titulo,
                    text: event.detail.mensaje,
                    icon: event.detail.tipo,
                    iconColor: colors[event.detail.tipo],
                    showCancelButton: event.detail.mostrarBotonCancelar,
                    confirmButtonColor: colors[event.detail.tipo],
                    cancelButtonColor: colors['error'],
                    confirmButtonText: 'Aceptar',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch(event.detail.metodo, event.detail.parametros)
                    }
                })
            })
        });
    </script>
</body>

</html>
