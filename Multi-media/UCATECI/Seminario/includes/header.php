<div class="wrapper">
  <nav>
    <input type="checkbox" id="show-search">
    <input type="checkbox" id="show-menu">
    <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
    <div class="content">
      <div class="logo"><a href="#">Banco De La Vega</a></div>
      <ul class="links">
        <li><a href="index.php">Inicio</a></li>
        <li>
          <a href="#" class="desktop-link">Clientes</a>
          <ul>
            <li><a href="registrarClientes.php">Registrar Clientes</a></li>
            <li><a href="listadoClientes.php">Listado de Clientes</a></li>
          </ul>
        </li>
        <!-- Agregar debajo de esta linea el nuevo menu -->
      </ul>
    </div>
    <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
    <form action="#" class="search-box">
      <input type="text" placeholder="Type Something to Search..." required>
      <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
    </form>
  </nav>
</div>