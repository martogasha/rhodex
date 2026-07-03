<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            padding: 10px;
            height: 200px; /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .button{
            height: 50px;
            width: 100px;
            right: 500px;
        }
        .text{
            height: 100px;
            width: 250px;
        }
        #row{
            padding-left: 250px;
            padding-top:100px;
        }
    </style>
</head>
<body>

<div class="row" id="row">
    <div class="column" >
        <h2 style="left: 100px">Contact Us</h2>
        <div class="row">
       <input placeholder="Name">
        </div>
        <br>
        <div class="row">
            <input placeholder="Email">
        </div>
        <br>
        <div class="row">
            <textarea class="text" placeholder="Message"></textarea>
        </div>
        <br>
        <button class="button">Send it</button>

    </div>
    <div class="column">
       <img src="{{asset('images/coursehero.jpg')}}" style="height: 350px">
        <p>Nulla arcu torto, mattis in diam eget, hendrerit vulputate ligula.</p>
    </div>
</div>

</body>
</html>
