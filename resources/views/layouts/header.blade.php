<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar"
            data-class="c-sidebar-show">
        <span class="c-header-toggler-icon"></span>
    </button>
    <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar"
            data-class="c-sidebar-lg-show" responsive="true">
        <span class="c-header-toggler-icon"></span>
    </button>
    @include('layouts.navigation')
    <div class="c-subheader px-3 py-2">
        <div class="container">
            @if(isset($header_slot))
                {{ $header_slot }}
            @else
                <h2 class="h4 font-weight-bold">
                    {{$attributes['sub-header']}}
                </h2>
            @endif
        </div>
    </div>
</header>
