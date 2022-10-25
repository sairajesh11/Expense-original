<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="C:\Users\info\Desktop\form\New folder\favicon.png" type="image/x-icon">
        <title>Twenty20 systems</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Styles -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                /* text-align: center; */
                font-family: Arial;
            }

            .title {
                font-size: 30px;
                /* position : absolute;  left: 20px; bottom: auto;
                padding: 10px; */
                color: black;
                font-family: Arial;
            }

            .links > a {
                color: black;
                padding: 0 25px;
                font-size: 13px;
                top: 100px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }


        </style>
    </head>
    <body>
<!-- Navigation Bar -->

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <a style="font-family: 'Arial'; font-size: 16px" class="navbar-brand" href="/">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item">
        <a style="font-family: 'Arial'; font-size: 16px;" class="navbar-brand" href="/form">Request form</a>
      </li>
      <li class="nav-item">
        <a style="font-family: 'Arial'; font-size: 16px;" class="navbar-brand" href="/contact">Receipt form</a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link " href="/expenses" >Expenses</a> -->
        <a style="font-family: 'Arial'; font-size: 16px; position : absolute;  right: 80px;" class="navbar-brand" href="{{ route('signout') }}">Sign out</a>

      </li>
    </ul>
  </div>
</nav>

        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))

            @endif -->
    <!-- <br>
    <div class="content">
        <div class="title m-b-md">
            Expense history
            
        </div>
    </div> -->
    
        


        
        <br>
        <h2  style="font-family: 'Cambria'; font-size: 25px; ">Expense history</h2>
        <table class="table table-sm" border = "5" style='font-family:"Arial", Courier, monospace; font-size:100%'>
          <!-- <table class="table" border = "8"> -->
            <thead class="table-dark">
              <tr>
                <th scope="col">No</th>
                <!-- <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th> -->
                <th scope="col">Expense</th>
                <th scope="col">Amount</th>
                <th scope="col">Currency</th>
                <th scope="col">Employee ID</th>
                <th scope="col">Date of expense</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $key=>$items )
                <tr>
                    <td>{{ $data->firstItem() + $key }}</td>
                    <!-- <th scope="row">{{ ++$key }}</th> -->
                    <!-- <td>{{ $items->email }}</td>
                    <td>{{ $items->empname }}</td>
                    <td>{{ $items->phone }}</td> -->
                    <td>{{ $items->expense }}</td>
                    <td>{{ $items->amount }}</td>
                    <td>{{ $items->currency }}</td>
                    <td>{{ $items->empid }}</td>
                    <td>{{ $items->date }}</td>
                  </tr>
                
                @endforeach
            </tbody>
          </table>
          {{$data->links()}}

                
        
    </body>
</html>