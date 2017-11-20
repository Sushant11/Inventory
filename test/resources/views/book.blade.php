@extends('layouts.master')
@section('title')
    <title>Book Venue</title>
@endsection
@section('metatags')
    {{--Here goes all the meta information for index page--}}
@endsection
@section('styles')
    <link rel="stylesheet" href="{{url('css/book.css')}}">
    <link rel="stylesheet" href="{{url('css/frontend.css')}}">
@endsection
@section('content')
    @include('layouts.gnavbar')
    <div class="main center-align">

        <div ><h4 class="txtclr">Choose Venue</h4></div>

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
                            <div class="input-field col s6 l6">
                                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                <label for="first_name"> Name</label>
                            </div>
                            <div class="col s6 l6">
                                <div class="time">
                                    <h5>
                                        <?php
                                        date_default_timezone_set("Asia/Katmandu");
                                        echo "From: " . date("h:i:sa");
                                        ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="center-block" >
                            <a class="waves-effect waves-light btn" style="background-color: #2E86C1;margin-top: 10px;">Save</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div id="bb" class="modal">
            <div class="modal-content">
                <h4><em>Basketball</em></h4>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6 l6">
                                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                <label for="first_name"> Name</label>
                            </div>
                            <div class="col s6 l6">
                                <div class="time">
                                    <h5>
                                        <?php
                                        date_default_timezone_set("Asia/Katmandu");
                                        echo "From: " . date("h:i:sa");
                                        ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="center-block" >
                            <a class="waves-effect waves-light btn" style="background-color: #2E86C1;margin-top: 10px;">Save</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div id="foot" class="modal">
            <div class="modal-content">
                <h4><em>Football</em></h4>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6 l6">
                                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                <label for="first_name"> Name</label>
                            </div>
                            <div class="col s6 l6">
                                <div class="time">
                                    <h5>
                                        <?php
                                        date_default_timezone_set("Asia/Katmandu");
                                        echo "From: " . date("h:i:sa");
                                        ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="center-block" >
                            <a class="waves-effect waves-light btn" style="background-color: #2E86C1;margin-top: 10px;">Save</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        {{---------------------------}}
        <div class="center-block " style="margin-top: 50px;">
            <a class="waves-effect hoverable waves-light btn-large" style="background-color: #2E86C1" href="list"><i class="material-icons left">list</i>View Current List</a>

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
        $('.timepicker').pickatime({
            default: 'now', // Set default time: 'now', '1:30AM', '16:30'
            fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
            twelvehour: true, // Use AM/PM or 24-hour format
            donetext: 'OK', // text for done-button
            cleartext: 'Clear', // text for clear-button
            canceltext: 'Cancel', // Text for cancel-button
            autoclose: false, // automatic close timepicker
            ampmclickable: true, // make AM PM clickable
            aftershow: function(){} //Function for after opening timepicker
        });
    </script>
@endsection
