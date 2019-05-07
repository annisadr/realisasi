<li class="dropdown divider-vertical">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">
    Login <span class="caret"></span>
</a>

    <div class="dropdown-menu" style="padding:10px;min-width:1000px;">
        <div style="margin:17px">
            <form action="config/loginproses.php" method="POST" role="form" class="form-horizontal">
                <div class="form-group input-group">
                    <span class="input-group-addon" id="label-name"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" name="username" class="form-control" aria-describedby="label-name" placeholder="Username">
                </div>

                <div class="form-group input-group">
                    <span class="input-group-addon" id="label-pass"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" name="password" class="form-control" aria-describedby="label-pass" placeholder="Password">
                </div>

                <div class="form-group">
                    <input type="submit" role="button" name="login" class="form-control btn btn-success" value="Login">
                </div>

				<div class="form-group">
                    <a href="index.php?page=signup" class="form-control btn btn-success">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</li>


    .dropdown .dropbtn {
      cursor: pointer;
      font-size: 16px;    
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }
    .navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
      background-color: #2b5988;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    .dropdown-content a:hover {
      background-color: #ddd;
    }
    .show {
      display: block;
    }