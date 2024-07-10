<x-layout>
    <x-header>Create Job</x-header>
    <x-panel>

    <x-forms.form class="flex flex-col" method="POST" action="/jobs" >
        <x-forms.input name="title" class="py-1 px-7"  label="title" placholder="CRO"></x-forms.input>
        <x-forms.input name="salary" class="py-1 px-7"  label="salary" placeholder="$50,000 USD"></x-forms.input>
        <x-forms.input name="location" class="py-1 px-7"  label="location"></x-forms.input>
        <x-forms.select  name="schedule" label="choose schedule">
            <option value="">--Please choose an option--</option>
            <option value="Full Time">Full Time</option>
            <option value="Freelance" >Freelance</option>
            <option value="Part Time">Part Time</option>
        </x-forms.select>
        <x-forms.input name="url" class="py-1 px-7"  label="url"></x-forms.input>
        <x-forms.divider></x-forms.divider>
        <x-forms.checkbox label="feature (costs Extra)" name="featured"></x-forms.checkbox>
        <x-forms.input class="py-1 px-7" label="Tags (comma seperated)" name="tags" placeholder="laracasts, video, education"></x-forms.input>
        <x-forms.button  class="mx-auto" >create</x-forms.button>
    </x-forms.form>
    </x-panel>
</x-layout>
