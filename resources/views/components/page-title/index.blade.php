@props([
    'title' => 'Título de la página'
])

<div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
    <h4 class="mb-sm-0">{{ $title }}</h4>
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            {{ $slot }}
        </ol>
    </div>
</div>
