<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Client</title>
    <style>
        .container {
            width: 50%;
            border: 1px solid;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            background: #638caf;
        }

        .container .child1 {
            width: 20%;
            display: inline-block;
            float: left;
        }
        .container .child2 {
            width: 80%;
            display: inline-block;
            float: right;
            text-align: start;
        }

        .clear {
            clear: both;
        }
        .overflow{
            overflow: hidden;
        }
        .text-start{
            text-align: start;
        }

    </style>
</head>

<body>
    <div class="container">
        <h3 class="overflow"> <span class="child1">Name:</span> <span class="child2">{{ $details['name'] }}</span> </h3>
        <hr>
        <div class="clear"></div>
        <h3 class="overflow"> <span class="child1">Email:</span> <span class="child2"> {{ $details['email'] }}</span></h3>
        <hr>
        <div class="clear"></div>
        <p class="overflow"> <span class="child1"><strong> Message:</strong></span> <span class="child2"> 
                {{ $details['message'] }}.</span> </p>
        <div class="clear"></div>
    </div>
</body>

</html>
