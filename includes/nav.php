<header class="main-header">
  <a href="#" class="logo">
    <span class="logo-mini"><b>T</b>PS</span>
    <span class="logo-lg"><b>Trans </b>Proc Sys</span>

  </a>
  <nav class="navbar navbar-static-top">
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="images/default-user.png" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $_SESSION["username"]; ?></span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img src="images/default-user.png" class="img-circle" alt="User Image">
              <p>
                <?php echo $_SESSION["username"]; ?>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="./logout_parse.php" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
