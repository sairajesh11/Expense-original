<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <link rel="shortcut icon" href="C:\Users\info\Desktop\form\New folder\favicon.png" type="image/x-icon">
    <title>Expense form</title>
    <!-- library bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- library js validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/js/validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    

</head>
<body>
    <style>
        .error {
            color: red;
            border-color: red;
        }

    </style>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item">
        <a class="navbar-brand" href="/form">Request form</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="/contact">Receipt form</a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link " href="/expenses" >Expenses</a> -->
        <a style="position : absolute;  right:0;" class="navbar-brand" href="{{ route('signout') }}">Logout</a>

      </li>
    </ul>
  </div>
</nav>


    <div class="container">
        <br><br>
        <h1><center>Expense request form</center></h1>
        <span id="message_error"></span>
        <hr><br>
        <form id="validate" action="{{ route('form/save') }}" method="post">
        
        
            
            @csrf   
            <table id="emptbl" class="table table-bordered border-primar">
                <thead class="table-dark">
                    <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Phone</th> 
                        <th>Expense</th>
                        <th>Amount</th>
                        <th>Currency</th>
                        <th>Employee ID</th>
                        <th>Date of expense</th> 
                    </tr>
                </thead>
                
                <tbody>
                    <tr> 
                        <td id="col0"><input type="text" class="form-control" name="email[]" placeholder="Enter your Email" required></td>
                        <td id="col1"><input type="text" class="form-control" name="empname[]" placeholder="Enter your name" required></td> 
                        <td id="col2"><input type="tel" class="form-control" name="phone[]" placeholder="Enter your phone" required></td> 
                        <td id="col3"> 
                            <select class="form-control" name="expense[]" id="exp" required> 
                                <option selected disabled>-- Select --</option> 
                                <option value="Gym">Gym</option>
                                <option value="Accomodation">Accomodation</option>
                                <option value="Internet">Internet</option>
                                <option value="Internet">Food</option>
                                <option value="Internet">Cleint expense</option>
                            </select> 
                        </td>
                        <td id="col4"><input type="text" class="form-control" name="amount[]" placeholder="Enter your amount" required></td>
                        <td id="col5"> 
                            <select class="form-control" name="currency[]" id="currency" required> 
                                <option selected disabled>-- Select --</option> 
                                <option value="INR(₹)">INR(₹)</option>
                                <option value="USD($)">USD($)</option>
                            </select> 

                        <td id="col6"><input type="text" class="form-control" name="empid[]" placeholder="Enter your employee id" required></td> 
                        <td id="col7"><input type="date" class="form-control" name="date[]" placeholder="Date of expense" required></td> 


                    </tr>
                </tbody>  
            </table> 

            @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table>
                <br>
                <tr>
                    <td><button type="button" class="btn btn-sm btn-info" onclick="addRows()">Add</button></td>
                    <td><button type="button" class="btn btn-sm btn-danger" onclick="deleteRows()">Remove</button></td>
                    <td><button type="submit" class="btn btn-sm btn-success">Save</button></td> 
                </tr>  
            </table>
        </form>
        


        <!-- <td><button type="button" style="position : absolute; top:0; left:0;" class="btn btn-sm btn-info" href="http://localhost:8000/dashboard">Back</button></td> -->

        <!-- <a style="position : absolute; top: 8px; left: 8px;" class="btn btn-sm btn-info" href="http://localhost:8000/dashboard">Back</a> -->


    <!-- <nav class="navbar navbar-light navbar-expand-lg mb-5">
        <div class="container">
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="btn btn-sm btn-danger" href="{{ route('signout') }}" style="position: absolute; right: 0;">Logout</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @yield('content') 




     </div> --> 
     </div>

    <script>
        function addRows()
        { 
            var table = document.getElementById('emptbl');
            var rowCount = table.rows.length;
            var cellCount = table.rows[0].cells.length; 
            var row = table.insertRow(rowCount);
            for(var i =0; i <= cellCount; i++)
            {
                var cell = 'cell'+i;
                cell = row.insertCell(i);
                var copycel = document.getElementById('col'+i).innerHTML;
                cell.innerHTML=copycel;
                if(i == 7)
                { 
                    var radioinput = document.getElementById('col7').getElementsByTagName('input'); 
                    for(var j = 0; j <= radioinput.length; j++)
                    { 
                        if(radioinput[j].type == 'radio')
                        { 
                            var rownum = rowCount;
                            radioinput[j].name = 'gender['+rownum+']';
                        }
                    }
                }
            }
        }

        function deleteRows()
        {
            var table = document.getElementById('emptbl');
            var rowCount = table.rows.length;
            if(rowCount > '2')
            {
                var row = table.deleteRow(rowCount-1);
                rowCount--;
            }else{
                alert('There should be atleast one row');
            }
        }
    </script>
    <!-- alert blink text -->
    <script>
        function blink_text()
        {
            $('#message_error').fadeOut(700);
            $('#message_error').fadeIn(700);
        }
        setInterval(blink_text,1000);
    </script>
    <!-- script validate form -->
    <script>
        $('#validate').validate({
            reles: {
                'email[]': {
                    required: true,
                'empname[]': {
                    required: true,
                },
                'phone[]': {
                    required:true,
                },
                'expense[]': {
                    required:true,
                'amount[]': {
                    required: true,
                'currency[]': {
                    required: true,
                'empid[]': {
                    required: true,
                'date[]': {
                    required: true,
                              
                
                },
            },
            messages: {
                'email[]' : "Please input file*",
                'empname[]' : "Please input file*",
                'phone[]' : "Please input file*",
                'expense[]' : "Please input file*",
                'amount[]' : "Please input file*",
                'currency[]' : "Please input file*",
                'empid[]' : "Please input file*",
                'date[]' : "Please input file*",
                
            },
        });
    </script>

</body>
</html>

