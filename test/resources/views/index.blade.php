@extends('layouts.master')
@section('title')
    <title>Inventory Tracker</title>
@endsection
@section('metatags')
    {{--Here goes all the meta information for index page--}}
   @endsection
@section('styles')
    <link rel="stylesheet" href="{{url('css/frontend.css')}}">
@endsection

@section('content')
    @include('layouts.navbar')

    <div class="main center-align">
        <div class="row center-align">
            <div class="col l4 s6 m6 offset-l2">
                <div class="card hoverable">
                    <div class="card-image">
                        <i class="material-icons txtclr" style="font-size: 200px;">security</i></a>
                    </div>
                    <div class="card-action">
                        <a href="#modal1"><h4>GUARD</h4></a>
                    </div>
                </div>
            </div>
            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="fa fa-hashtag prefix" aria-hidden="true" style="color:#2E86C1"></i>
                                    <input id="icon_prefix" type="text" class="validate" style="color:#2E86C1">
                                    <label for="icon_prefix" style="color:#2E86C1">ID</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="fa fa-key prefix" aria-hidden="true" style="color:#2E86C1"></i>
                                    <input id="icon_key" type="password" class="validate" style="color:#2E86C1">
                                    <label for="icon_key" style="color:#2E86C1">Password</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer left">
                    <a href="guard" class="modal-action modal-close waves-effect btn-flat">Log In</a>
                </div>
            </div>
            <div class="col l4 s6 m6 ">
                <div class="card hoverable">
                    <div class="card-image">
                        <i class="material-icons txtclr" style="font-size: 200px;">person</i></a>
                    </div>
                    <div class="card-action center-align">
                        <a href="#modal2"><h4>USER</h4></a>
                    </div>
                </div>
            </div>
            <div id="modal2" class="modal">
                <div class="modal-content">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="fa fa-envelope-o prefix" aria-hidden="true" style="color:#2E86C1"></i>
                                    <input id="icon_prefix" type="text" class="validate" style="color:#2E86C1">
                                    <label for="icon_prefix" style="color:#2E86C1">Mail</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="fa fa-key prefix" aria-hidden="true" style="color:#2E86C1"></i>
                                    <input id="icon_key" type="tel" class="validate" style="color:#2E86C1">
                                    <label for="icon_key" style="color:#2E86C1">Password</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer left">
                    <a href="book" class="modal-action modal-close waves-effect btn-flat">Log In</a>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });
    </script>
@endsection