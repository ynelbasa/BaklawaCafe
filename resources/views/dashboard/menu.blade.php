@extends('layouts.dashboard')

@section('content')
    <div class="bg-baklawa-green header-sm text-center">
        <img src="/images/logo.png" class="my-3" alt="Logo" height="80"/>
    </div>
    <div class="p4 content">
        <div class="bg-white p-4 box-shadow rounded-lg">
            <h2 class="text-dark">Menu</h2>
            <div class="row">
                <div class="col-sm-3">
                    <h5 class="m-4">Filter by Menu Type</h5>
                </div>
                <div class="col-sm-6">
                    <div class="status-option m-3 row">
                        @foreach($menuTypes as $menuType)
                            <div class="col-sm-2 m-2">
                                <a class="{{ $type === $menuType->id ? 'active' : '' }}"
                                   href="{{ url("/dashboard/menu?type=$menuType->id") }}">{{ $menuType->name }}</a>
                            </div>
                        @endforeach
                        <div class="col-sm-2 m-2">
                            <a class="{{ $type === 0 ? 'active' : '' }}"
                               href="{{ url("/dashboard/menu") }}">All</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3 text-center">
                </div>
            </div>
            <br>
            @if( count($menuItems) === 0)
                <h5 class="text-center m-5">No records found that matches your criteria</h5>
            @endif
            @if( count($menuItems) > 0)
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
                                <td>{{ $menuItem->id }}</td>
                                <td><img
                                        src="{{ $menuItem->thumbnail_path }}"
                                        class="mr-2 rounded-sm menu-icon"
                                        width="12%"
                                    />
                                    {{ $menuItem->name }}
                                </td>
                                <td>{{ $menuItem->description }}</td>
                                <td>$
                                    {{ $menuItem->price }}</td>
                                <td>
                                    {{ $menuItem->menuType }}</td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox"
                                               id="enabledCheckbox_{{$menuItem->id}}"
                                               onchange="updateEnabled({{$menuItem->id}})"
                                            {{ $menuItem->enabled ? 'checked' : '' }}>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $menuItems->appends(['type' => $type > 0 ? $type : null])->links() }}</div>
            @endif
        </div>
    </div>
@endsection
