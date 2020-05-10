<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <title>Simple Task</title>
    <style>
        html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Lato';
                font-weight: 100;
                height: 100vh;
                margin: 0;
        }

        .title {
                font-size: 64px;
        }

        .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
        }

        .center {
            align-item: center;
        }
    </style>
</head>
<body id="app-layout">
    <div class="header flex-center title">
        List
    </div>
    <br/>
    <div class="input center">
        <form role="form" method="POST" action="{{ url('task/'.$Laravel->id.'/edit' )}}">
            {{ csrf_field() }}
            {{ method_field('POST') }}

            <div class="form-group">
                Previous Name
                <input disabled type="text" name="oldName" value="{{ $Laravel->name }}">
                <br/>
                New Name
                <input type="text" name="newName" placeholder="New Name">
            </div>
            <br/>
            <div class="form-group">
                <button type="submit">Update</button>
            </div>
        </form>
        <form role="form" action="{{ url('/') }}">
            <button type="submit">Cancel</button>
        </form>
    </div>
</body>
</html>