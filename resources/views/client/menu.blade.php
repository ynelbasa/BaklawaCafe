@extends('layouts.client')

@section('content')
    <section class="menu-section">
        <div class="container">
            <h2>Our Food Menu</h2>
            <p>Original Lebanese Cuisines</p>
        </div>
    </section>
    <section id="our_menu" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <ul class="nav nav-tabs menu_tab mb-4" id="myTab" role="tablist">
                    @foreach($menuTypes as $menuType)
                        <li class="nav-item">
                            <a class="nav-link {{ $type === $menuType->id ? 'active' : '' }}"
                               href="{{ url("menu?type=$menuType->id" ) }}">
                                {{ $menuType->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            @if( count($menuItems) > 0)
                <div class="d-flex flex-wrap">
                    @foreach($menuItems as $menuItem)
                        <div class="single_menu col-md-6">
                            <img src="{{ $menuItem->thumbnail_path }}" alt="meat"/>
                            <div class="menu_content">
                                <h4>{{ $menuItem->name }} <span>$ {{ $menuItem->price }}</span></h4>
                                <p>{{ $menuItem->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
