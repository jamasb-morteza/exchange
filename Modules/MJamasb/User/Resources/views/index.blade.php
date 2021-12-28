<x-adminlte-layout>
    <x-slot name="header">
        <x-adminlte.content-haeder :sub-header="__('Users')">
            <x-slot name="breadcrumbs">
                <x-adminlte.breadcrumpb-item title="Dashboard" href="{{route('dashboard')}}"/>
                <x-adminlte.breadcrumpb-item title="Currency"/>
            </x-slot>
        </x-adminlte.content-haeder>
    </x-slot>
    <x-slot name="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <livewire:currency::currency-table/>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-adminlte-layout>
