<div>
    <x-auth-validation-errors :errors="$errors" class="mb-4"/>
    <form action="{{route('currencies.store')}}" method="post">
        @csrf
        <div class="form-group">
            <x-label :value="__('Title')" for="title"/>
            <x-input name="title" :value="old('title')" id="title"/>
        </div>
        <div class="form-group">
            <x-label value="Title" for="title"/>
            <x-input name="title" id="title"/>
            <x-input-error for="title"/>
        </div>
    </form>
</div>
