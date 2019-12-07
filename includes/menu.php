<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">SISTEMA</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#itensNav" aria-controls="itensNav"
    aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="itensNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $conf['url'] ?>/Views/contact/">Home
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
    </ul>
    <span class="navbar-text">
      Olá <?php echo $_SESSION['name_user']?>
      <a class="ml-4" href="<?php echo $conf['url'] ?>/Controllers/logout.php">Sair</a>
    </span>
  </div>
</nav>