@extends('admin.app')
@section('container')
<div class="uk-flex">
    <div class="uk-width-1-6@xl uk-width-1-5@l uk-width-1-5@s uk-visible@m">
        <div class="uk-height-viewport" uk-sticky>
            @include('admin.components.side-navbar')
        </div>
    </div>
    <div class="uk-width-expand">
        <div class="uk-flex uk-flex-right">
            <div class="uk-width-expand container">
                <div class="wrapper">
                    @include('admin.components.header-navbar')
                    @yield('wrapper')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection