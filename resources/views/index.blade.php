<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold fs-1 text-gray-800">Excel Export</h2>
    </x-slot>
    <div class="d-flex justify-content-end">
        <a href="#" class="btn btn-primary">Download as Excel</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>