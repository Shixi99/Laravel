<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="css/app.css">
    <title>Students</title>  
</head>

<body>

    <div>
        <table class="rwd-table">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Name </th>
                    <th> Surname </th>
                    <th> Age </th>
                </tr>
            </thead>
        </table>
    </div>
    
    <div>
        <table class="rwd-table">
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td> {{$student->ID}} </td>
                    <td> {{$student->Name}} </td>
                    <td> {{$student->Surname}} </td>
                    <td> {{$student->Age}} </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
                 
    <!--===============================================================================================-->
    {{-- <script src="js/main.js"></script> --}}
    
    </body>


</html>