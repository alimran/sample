<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?=base_url()?>home">K-Luncheon</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="<?=base_url()?>home">Home</a></li>
      <li class=""><a href="<?=base_url()?>shop">Shops</a></li>
      <li class=""><a href="<?=base_url()?>favourite">Favourites</a></li>
      <li class=""><a href="<?=base_url()?>order">Order</a></li>
    </ul>
    &nbsp;
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> <?=$this->session->loggedUser->username?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#"><i class="glyphicon glyphicon-list"></i> My Orders</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="<?=base_url()?>logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-right">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter keyword">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>
  </div>
</nav>