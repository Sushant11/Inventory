@extends('layouts.master')
@section('title')
    <title>Guard | Tracker</title>
@endsection
@section('metatags')
    {{--Here goes all the meta information for index page--}}
@endsection
@section('styles')
    <link rel="stylesheet" href="{{url('css/guard.css')}}">
    <link rel="stylesheet" href="{{url('css/frontend.css')}}">
@endsection
@section('content')
    @include('layouts.gnavbar')
    <div class="main center-align">

        <div ><h4 class="txtclr">Choose One Equiptment</h4></div>

        <div class="row center-align">
            <div class="col l4 s12 m4 ">
                <a href="#tt">
                    <div class="card hoverable" >
                        <div class="center-block">
                            <img src="images/tt.png" style="height: 250px;width:250px;padding:20px">
                    </div>
                    <div class="card-action">
                        <h4 style="color:grey">Table Tennis</h4>
                    </div>
                    </div>
                </a>
            </div>
            <div class="col l4 s12 m4 ">
                <a href="#bb">
                    <div class="card hoverable" >
                        <div class="center-block">
                            <img src="images/bb.png" style="height: 250px;width:250px;padding:20px">
                    </div>
                    <div class="card-action">
                        <h4 style="color:grey">BasketBall</h4>
                    </div>
                    </div>
                </a>
            </div>
            <div class="col l4 s12 m4">
                <a href="#foot">
                    <div class="card hoverable " >
                        <div class="center-block">
                            <img src="images/foot.png" style="height: 250px;width:250px;padding:20px">
                        </div>
                        <div class="card-action">
                            <h4 style="color:grey">Football</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
{{------------Modal----------------}}
        <!-- Modal Structure -->
        <div id="tt" class="modal">
            <div class="modal-content">
                <h4><em>Table Tennis</em></h4>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s4">
                                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                <label for="first_name"> Name</label>
                            </div>
                            <div class="input-field col s4">
                                <?php
                                date_default_timezone_set("Asia/Katmandu");
                                echo "From " . date("h:i:sa");
                                ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Enter</a>
            </div>
        </div>
        <div id="bb" class="modal bottom-sheet">
            <div class="modal-content">
                <h4>Modal Header</h4>
                <p>A bunch of text</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>
        <div id="foot" class="modal bottom-sheet">
            <div class="modal-content">
                <h4>Modal Header</h4>
                <p>A bunch of text</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>
{{---------------------------}}

        <div class="center-block " style="margin-top: 50px;">
            <a class="waves-effect hoverable waves-light btn-large" style="background-color: #2E86C1"><i class="material-icons left">list</i>View Current List</a>

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