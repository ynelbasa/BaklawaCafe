@extends('layouts.dashboard')

@section('content')
    <div class="bg-baklawa-green header-sm text-center">
        <img src="/images/logo.png" class="my-3" alt="Logo" height="80"/>
    </div>
    <div class="p4 content">
        <div class="bg-white p-4 box-shadow rounded-lg">
            <h2 class="text-dark">Menu</h2>
            <span class="float-right p-2">
                <i class="fas fa-search"></i>
                <i class="fas fa-filter ml-2"></i>
            </span>
            <br>
            <div class="table-responsive">
                <table class="table table-hover ">
                    <thead class="text-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Menu Item</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Menu Type</th>
                        <th scope="col">Enabled</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($menuItems as $menuItem)
                        <tr>
                            <td>1</td>
                            <td><img
                                    src="https://i.imgur.com/lYKUORL.jpg"
                                    width="40px"
                                    height="40px"
                                    class="mr-2 rounded-circle menu-icon"
                                />
                                {{ $menuItem->name }}
                            </td>
                            <td>{{ $menuItem->description }}</td>
                            <td>$
                                {{ $menuItem->price }}</td>
                            <td>
                                {{ $menuItem->name }}</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $menuItems->links() }}</div>
        </div>
    </div>
@endsection
