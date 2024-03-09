<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event-Driven-Programming</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="./assets/js/search.js"></script>
  
</head>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="https://www.google.com/imgres?imgurl=https%3A%2F%2Fpng.pngtree.com%2Fpng-vector%2F20221211%2Fourmid%2Fpngtree-d-location-map-icon-logo-symbol-vector-design-clipart-transparent-background-png-image_6520891.png&tbnid=mkN_3nJ4pqwwSM&vet=12ahUKEwjRt5PSvuGEAxXZlK8BHfUbA2YQMyggegUIARDAAQ..i&imgrefurl=https%3A%2F%2Fpngtree.com%2Fso%2Fmap-logo&docid=hDrb2hFj-_K0cM&w=360&h=360&q=map%20logo&ved=2ahUKEwjRt5PSvuGEAxXZlK8BHfUbA2YQMyggegUIARDAAQ">
      <img src="./assets/img/log.png"  alt="Use data to see photos" style="width:50px;" class="rounded-pill"> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item active"> 
          <a class="nav-link" href="#dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./registration.php">Registration</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class= "form-control me-2" onkeyup="search(this.value)" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
      </div>
  </div>
</nav>

<div class="container padding:2px">
  <p class= "h2 mt-3">Dashboard</p>
  <p>You can view all the Records here.</p>
  <div class= "card mt-3">
    <div class= "card body">
     <table class= "table table-bordered table-hover">
      <thead >
        <tr>
          <th width= "150" style="text-align: center">Region No.</th>
          <th style = "text-align: left; padding-left: 10px" >Regions</th>
          <th width= "50" style= "text-align:center">Action</th>
        </tr>
      </thead>
      <tbody id="results">
      </tbody>
     </table>
    </div>
    <div class= "card-footer">
      ---
     </div>
  </div>
</div>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modal header</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        Modal body..
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>