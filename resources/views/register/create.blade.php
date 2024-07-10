<x-layout>
    <x-header>Register</x-header>
    <x-panel class=" flex flex-col items-center justify-center w-1/2 my-2 mx-auto ">
        <x-forms.form method="POST" class="mb-5" id="register_form" action="/register" enctype="multipart/form-data">
            <x-forms.input :label="'name'" :name="'name'" class="py-1 px-7"
          ></x-forms.input>
            <x-forms.input :label="'email'" :name="'email'" class="py-1 px-7" palceholder="email@example.com..."
                type="email"></x-forms.input>
                <x-forms.input :label="'confirm email'" :name="'email_confirmation'" class="py-1 px-7" palceholder="email@example.com..."
                type="email"></x-forms.input>
                <x-forms.input :label="' password'" :name="'password'" class="py-1 px-7" type="password"></x-forms.input>

            <x-forms.input :label="'confirm password'" :name="'password_confirmation'" class="py-1 px-7" type="password"></x-forms.input>

            <x-forms.divider></x-forms.divider>

            <x-forms.input class="py-1 px-7" label="Employer Name" name="employer"></x-forms.input>
            <x-forms.input  class="py-1 px-2" label="Employer logo" name="logo" type="file"></x-forms.input>

        </x-forms.form>
        <x-forms.button class=" bg-white/10 hover:bg-white/25" form="register_form"
            value="submit">Submit</x-forms.button>
    </x-panel>
</x-layout>
