<x-layout>
    <x-header>Register</x-header>
    <x-panel class=" flex flex-col items-center justify-center w-1/2 my-2 mx-auto ">
        <x-forms.form method="POST" class="mb-5" id="register_form" action="/register">
            <x-forms.input :label="'name'" :name="'name'" class="py-1 px-2"
          ></x-forms.input>
            <x-forms.input :label="'email'" :name="'email'" class="py-1 px-2" palceholder="email@example.com..."
                type="email"></x-forms.input>
                <x-forms.input :label="'confirm email'" :name="'email_confirmation'" class="py-1 px-2" palceholder="email@example.com..."
                type="email"></x-forms.input>
                <x-forms.input :label="' password'" :name="'password'" class="py-1 px-2" type="password"></x-forms.input>

            <x-forms.input :label="'confirm password'" :name="'password_confirmation'" class="py-1 px-2" type="password"></x-forms.input>
        </x-forms.form>
        <x-forms.button class=" bg-white/10 hover:bg-white/25" form="register_form"
            value="submit">Submit</x-forms.button>
    </x-panel>
</x-layout>
