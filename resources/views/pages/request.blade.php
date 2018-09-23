<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Request</title>
</head>
<body>
    <!--  101 below is assumed value of id of user -->
    {!! Form::open(['action' => 'HomeController@store','method' =>'POST']) !!}
        <div class='form-group'>
            {{Form::label('item-name' , 'Item-name')}}
            {{Form::text('item-name', "",['class'=>'form-control','placeholder'=>'Item Name'])}}
        </div>
        <div class='form-group'>
            {{Form::label('count' , 'Count')}}
            {{Form::number('count', "",['class'=>'form-control','placeholder'=>'Count of Item'])}}
        </div>
        {{Form::submit('Place Order',['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
</body>
</html>