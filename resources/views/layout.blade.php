<html>
<head>
<title>Expense Manager</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<header><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">        </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      
     
      @if(Session::get('udata'))

      <li class="nav-item">
        <a class="nav-link" href="">{{session::get('udata[uname]')}}</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="createexpense">Add expense</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categorylist">category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="userdashbord">expenselist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="userprofile">profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">logout</a>
      </li>
      @elseif(Session::get('adata'))
      <li class="nav-item">
        <a class="nav-link" href="admindashbord">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="userlist">userlist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="expenselist">expenselist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categorylist">categorylist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">p</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='alogout'>logout</a><li>


      @else
      <li class="nav-item">
        <a class="nav-link" href="createuser">Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ulogin">Login</a>
      </li>

     @endif
          
  
    </ul>
  </div>
</nav></header>
<div class="container">
@yield('content')
</div>
</body>
</html>
