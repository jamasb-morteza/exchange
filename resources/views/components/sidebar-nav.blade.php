<ul class="c-sidebar-nav ps ps--active-y">
    <x-sidebar-nav-group title="احراز هویت" iclass="fa fa-lock">
        <x-slot name="items">
            <x-sidenav-item
                iclass="fa fa-user"
                title="کاربران"
                href="{{route('users.index')}}"
                :selected="$attributes['selected-side-nav']==='users'"
            />

            <x-sidenav-item
                iclass="fa fa-shield"
                title="نقش‌ها"
                href="{{route('users.create')}}"
                :selected="$attributes['selected-side-nav']==='roles'"
            />
        </x-slot>
    </x-sidebar-nav-group>
</ul>
<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
