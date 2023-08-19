<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Vote</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script>
        var $url = {!! json_encode(url('/')) !!};
    </script>
    <style>
       input[type="radio"]{
            display: none;
        }
        label {
            position: relative;
            color: #6459cf;
            font-family: "Poppins", sans-serif;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.8em;
            border: 3px solid #6459cf;
            padding: 1em 2em;
            border-radius: 0.5em;
        }
        label::before{
            content: "";
            height: 2em;
            width: 2em;
            border: 3px solid #6459cf;
            border-radius: 50%;
        }
        input[type="radio"]:checked + label::before{
            height: 2em;
            width: 2em;
            border: 0.45em solid white;
            background-color: #6459cf;
        }
        input[type="radio"]:checked + label{
            background-color: #6459cf;
            color: white;
        }
      div{
            /* margin-left: auto; */
        margin-top: 300px;
        text-align: center;
      }


    </style>


</head>

<body>
    
    <div>
         <h1>Vote Time!</h1>
         <br>
        <form action="{{url('/vote/create/'.$contents->id)}}" method="POST">
            @csrf
            <input type="radio" id="like_checkbox" name="vote_checkbox" value="Like">
            <label for="like_checkbox">Like</label>

            <input type="radio" id="Unlike_checkbox" name="vote_checkbox" value="Unlike">
            <label for="Unlike_checkbox">Unlike</label><br>
            <br>




               <pre style="font-family: sans-serif "><button type="submit" class="btn btn-sm btn-primary">Save</button>   <a href="{{ url('/content') }}"" role="button" class="btn btn-sm btn-danger">Back</a> </pre>


        </form>
</div>
</body>






