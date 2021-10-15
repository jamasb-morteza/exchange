<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <a href="/">
            <x-application-logo class="c-sidebar-brand-minimized" width="40"/>
            <x-application-logo class="c-sidebar-brand-full" width="50"/>
        </a>
    </div>
    <x-sidebar-nav selected-side-nav="{{$attributes['selected-side-nav']??''}}"/>
</div>
