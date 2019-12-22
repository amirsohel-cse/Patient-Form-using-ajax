<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DaktarDekhao</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family:sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>


<div class="flex-center position-ref full-height">
{{--    @if (Route::has('login'))--}}
{{--        <div class="top-right links">--}}
{{--            <a href="{{ url('/login') }}">Login</a>--}}
{{--            <a href="{{ url('/register') }}">Register</a>--}}
{{--        </div>--}}
{{--    @endif--}}

    <div class="content">
        <h1 align="center title">Welcome to Dakhtar Dekhao</h1>
        <br>
        <br>
        <div data-toggle="modal" data-target="#modal" class="title m-b-md">
            Click to Register Patient
        </div>
    </div>
</div>

<!-- Modal  -->
<div id="modal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title font-weight-bold"> Patient Register </h1>
            </div>
            <div class="modal-body" style="background-color: white">
                <form class="form-horizontal" role="form" method="post" action="{{URL::to('/save')}}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label class="font-weight-bold"> Name</label>
                            <input type="text" name="name" placeholder="Enter First Name Here.." class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label class="font-weight-bold">Date of Birth</label>
                            <input class="form-control" name="date" type="date" value="2019-12-20" id="example-date-input">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label class="font-weight-bold"> Disease</label>
                            <textarea class="form-control" name="disease" rows="3" id="comment"></textarea>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label class="font-weight-bold">Cell :</label>
                            <input class="form-control" type="number" name="cell" value="42" id="example-number-input">                       </div>
                    </div>
                    <div class="row">
                        <div class="align-middle font-weight-bold flex-center"><span style="font-size: xx-large">Location</span></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label class="font-weight-bold"> Division</label>
                            <select class="form-control" id="div" name="div_id">
                                <option value="">-Select option-</option>
                                @foreach($divisions as $row)
                                    <option value="{{$row->id}}">{{$row->div_name}}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="col-sm-4 form-group">
                            <label class="font-weight-bold"> District</label>
                            <select class="form-control" id="dis" name="dis_id">
                                <option value="">-Select option-</option>

                            </select>
                        </div>
                        <div class="col-sm-4 form-group">
                            <label class="font-weight-bold"> Thana </label>
                            <select class="form-control" id="tha" name="thana_id">
                                <option value="">-Select option-</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary btn-block btn-lg">
                                <b>Submit</b>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

//Ajax code
<script>
    $(function () {
        var division=$('select[name="div_id"]'),
            district = $('select[name="dis_id"]'),
            thana =$('select[name="thana_id"]');

        division.change(function () {
            var id = $(this).val();
            if(id){
                $.ajax({
                    url: '/district?id=' + id,
                    type: 'get',
                    contentType: 'application/json',
                    success: function (data, textStatus, jQxhr ) {
                        $('#dis').html('');
                        $('#dis').append(`<option value="">Select an option----</option>`);
                       for (item  of data){
                            $('#dis').append(`<option value="${item.id}">${item.dis_name}</option>`);
                        }


                    },
                   error: function (jqXhr, textStatus, error) {
                       console.log("this is error ---: ", error);
                   }
                });
            }

        });

        $('#dis').change(function () {
            var selectedDis = $('#dis option:selected').val();
            if(selectedDis  && selectedDis != ''){
                $.ajax({
                    url: '/thana?id=' + selectedDis,
                    type: 'get',
                    contentType: 'application/json',
                    success: function (data, textStatus, jQxhr ) {
                     //   console.log("this is success ---: ", data);
                        $('#tha').html('');
                        $('#tha').append(`<option value="">Select an option----</option>`);
                        for (item  of data){
                            $('#tha').append(`<option value="${item.id}">${item.thana_name}</option>`);
                        }


                    },
                    error: function (jqXhr, textStatus, error) {
                        console.log("this is error ---: ", error);
                    }
                });
            }
            console.log(selectedDis);
        })



    })
</script>
</body>
</html>