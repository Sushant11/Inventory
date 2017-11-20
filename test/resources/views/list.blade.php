@extends('layouts.master')
@section('title')
    <title>List | Tracker</title>
@endsection
@section('metatags')
    {{--Here goes all the meta information for index page--}}
@endsection
@section('styles')
    <link rel="stylesheet" href="{{url('css/list.css')}}">
    <link rel="stylesheet" href="{{url('css/frontend.css')}}">
@endsection
@section('content')
    @include('layouts.gnavbar')

    <div class="main center-align">

        <div ><h4 class="txtclr">Current List</h4></div>

        <div class="list">
            <table class="centered highlight">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Equiptment</th>
                    <th>From</th>
                    <th>Edit</th>
                    <th>Check Out</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Alvin</td>
                    <td>Table Tennis</td>
                    <td> <h5>
                            <?php
                            date_default_timezone_set("Asia/Katmandu");
                            echo date("h:i:sa");
                            ?>
                        </h5></td>
                    <td><a class="waves-effect waves-light btn lstbtn" href="#edit">Edit</a></td>
                    <td><a class="waves-effect waves-light btn lstbtn" href="#remove">Clear</a></td>
                </tr>
                <tr>
                    <td>Alvin</td>
                    <td>Basketball</td>
                    <td> <h5>
                            <?php
                            date_default_timezone_set("Asia/Katmandu");
                            echo  date("h:i:sa");
                            ?>
                        </h5></td>
                    <td><a class="waves-effect waves-light btn lstbtn" href="#edit">Edit</a></td>
                    <td><a class="waves-effect waves-light btn lstbtn" href="#remove">Clear</a></td>
                </tr>
                <tr>
                    <td>Alvin</td>
                    <td>Football</td>
                    <td> <h5>
                            <?php
                            date_default_timezone_set("Asia/Katmandu");
                            echo  date("h:i:sa");
                            ?>
                        </h5></td>
                    <td><a class="waves-effect waves-light btn lstbtn" href="#edit">Edit</a></td>
                    <td><a class="waves-effect waves-light btn lstbtn" href="#remove">Clear</a></td>
                </tr>
                </tbody>
            </table>

            {{---------------modal---------------}}

            <div id="edit" class="modal">
                <div class="modal-content">
                    <h4><em>EDIT</em></h4>
                    <div class="row" >
                        <form class="col s12" style="margin-top: 30px">
                            <div class="row">
                                <div class="input-field col s5 l5">
                                    <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                    <label for="first_name"> CHANGE NAME</label>
                                </div>
                                <div class="input-field col s2 l2">
                                        <select class="icons">
                                            <option value="" disabled selected>Choose</option>
                                            <option value="" data-icon="images/tt.png" class="circle"></option>
                                            <option value="" data-icon="images/bb.png" class="circle"></option>
                                            <option value="" data-icon="images/foot.png" class="circle"></option>
                                        </select>
                                        <label>EQUIPTMENT</label>
                                </div>
                                <div class=" input-field col s5 l5">
                                    <label for="lunchtime" class>Edit Time</label><input id="lunchtime" type="text" class="timepicker">
                                </div>
                            </div>

                            <div class="center-block" >
                                <a class="waves-effect waves-light btn" style="background-color: #2E86C1;margin-top: 10px;">OK</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div id="remove" class="modal">
                <div class="modal-content">
                    <h4><em>CLEAR</em></h4>
                    <div style="margin-top: 80px;">
                        <h5>
                            <?php
                            date_default_timezone_set("Asia/Katmandu");
                            echo "Checkout Time: " . date("h:i:sa");
                            ?>
                        </h5>

                    </div>

                            <div class="center-block" >
                                <a class="waves-effect waves-light btn" style="background-color: #2E86C1;margin-top: 10px;">OK</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            {{-------------------------}}

        <div class="center-block " style="margin-top: 50px;">
            <a class="waves-effect hoverable waves-light btn-large" style="background-color: #2E86C1" href="back"><i class="material-icons left">arrow_back</i>Go Back</a>

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
        $(document).ready(function() {
            $('select').material_select();
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