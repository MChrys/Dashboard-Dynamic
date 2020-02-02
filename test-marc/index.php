<!DOCTYPE html>
<html lang="en">
  <head>
    <title>A gridstack.js dashboard</title>
    <link
      rel="stylesheet"
      href="https://bootswatch.com/3/paper/bootstrap.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.4.0/gridstack.css"/>
    <link rel="stylesheet" href="style/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.0/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.4.0/gridstack.all.js"></script>
    <script src="js/dashboard.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>

    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gridstack@0.5.5/dist/gridstack.all.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </head>


</html>

<body>


  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Dynamique Dashboard</h2>
      </div>
    </div>

  

    <div class="row">

      <div class="col-md-2 d-none d-md-block">
        <div class="newWidget grid-stack-item" id="newW">
          <div class="card-body grid-stack-item-content">
            <div style="padding: 5px; margin-bottom: 15px;" class="text-center">
              <div>
                <ion-icon name="add-circle" style="font-size: 400%"></ion-icon>
              </div>
              <div>
                <span>Add a new widget</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-2 d-none d-md-block">
        <div class="grid-stack-item" id="lock">
          <div class="card-body grid-stack-item-content">
            <div style="padding: 5px; margin-bottom: 15px;" class="text-center">
              <div>
                <ion-icon name="lock" style="font-size: 400%"></ion-icon>
              </div>
              <div>
                <span>Lock</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-2 d-none d-md-block">
        <div class="grid-stack-item" id="unlock">
          <div class="card-body grid-stack-item-content">
            <div style="padding: 5px; margin-bottom: 15px;" class="text-center">
              <div>
                <ion-icon name="md-unlock" style="font-size: 400%"></ion-icon>
              </div>
              <div>
                <span>Unlock</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="row">
    <div class="col-sm-12 well">
      <!-- gridstack.js elements go here -->
      <div class="grid-stack" id="grid-stack">

      </div>
    </div>
  </div>





</body>
