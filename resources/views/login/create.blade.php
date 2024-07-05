<x-layout>
    <x-header>Login</x-header>
    <x-panel class=" flex flex-col items-center justify-center w-1/2 my-2 mx-auto ">
        <x-forms.form method="POST" class="mb-5" id="register_form" action="/login">
            <x-forms.input :label="'email'" :name="'email'" class="py-1 px-7" palceholder="email@example.com..."
                type="email"></x-forms.input>
                <x-forms.input :label="'password'" :name="'password'" class="py-1 px-7" type="password"></x-forms.input>
        </x-forms.form>
        <x-forms.button class=" bg-white/10 hover:bg-white/25" form="register_form"
            value="submit">Login</x-forms.button>
    </x-panel>
</x-layout>
