<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">name</th>
                                <th scope="col">mail</th>
                                <th scope="col">phone</th>
                                <th scope="col">title</th>
                                <th scope="col">address</th>
                                <th scope="col">age</th>
                            </tr>
                        </thead>
                        @foreach($employees as $Employee)
                        <tbody>

                            <tr>
                                <th scope="row">{{ $Employee->name }}</th>
                                <td>{{ $Employee->mail }}</td>
                                <td>{{ $Employee->phone }}</td>
                                <td>{{ $Employee->title }}</td>
                                <td>{{ $Employee->address }}</td>
                                <td>{{ $Employee->age }}</td>
                            </tr>

                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
