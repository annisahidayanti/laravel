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

        .position-ref {
                position: relative;
        }

        .height {
                height: 50vh;
        }
    </style>
</head>
<body id="app-layout">
    <div class="header flex-center title">
         List
    </div>
    <br/>
    <div class="content position-ref height">
        <div class="panel-heading flex-center">
            <b>New Task</b>
        </div>

        <div class="panel-body flex-center">
            <!-- New Task Form -->
            <form action="{{ url('/task')}}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Task Name -->
                <div class="form-group">
                    Task Name
                    <input type="text" name="name" id="task-name" placeholder="Task Name">
                    <button type="submit" class="btn btn-default">
                          <i>Add Task</i>
                    </button>
                </div>
            </form>
        </div>
        <br/>
        @if (count($Laravel) > 0)
            <div class="panel-heading flex-center">
                <b>Current Tasks</b>
            </div>
            <div class="panel-body flex-center">
                <table>
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($Laravel as $task)
                            <tr>
                                <td class="table-text">
                                    <div>
                                        {{ $task->name }}
                                    </div>
                                </td>
                                <td>
                                    <form action="{{ url('task/'.$task->id.'/edit') }}">
                                        {{ csrf_field() }}
                                        {{ method_field('GET') }}
                                        <button type="submit">
                                            <i>Edit</i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form method="POST" action="{{ url('task/'.$task->id) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('POST') }}
                                        <button type="submit">
                                            <i>Delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</body>
</html>