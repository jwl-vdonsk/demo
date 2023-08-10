<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-20">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register New User</h1>

                <form method="POST" action="/register" class="mt-10">
                    @csrf
                    <x-form.input name="username" type="username" autocomplete="username"/>
                    <x-form.input name="email" type="email" autocomplete="email"/>
                    <x-form.input name="name" type="name" autocomplete="name"/>
                    <x-form.input name="password" type="password" autocomplete="new-password"/>

                    <x-form.button>Submit</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
