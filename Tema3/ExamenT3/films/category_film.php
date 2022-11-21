<?php include "top.php"; ?>
    <!--
    <div class="alert alert-success">¡Ejemplo mensaje de éxito!</div>
    <div class="alert alert-error">¡Ejemplo mensaje de error!</div>
    -->
    <nav>
        <p><a href="film.php">Volver</a></p>
    </nav>
    <section id="films">
      <h2>Categorías de la pelicula: Nombre de la película</h2>
      <form action="category_film.php" action="post">
        <ul>
          <?php
          $sql = "SELECT name FROM category";
          $result = $link->query($sql);
            $category = $result->fetch_assoc();
            while ($category != null){
              $name = $_GET[$name];
              ?> 
              <li>
            <label>
              <input type="checkbox" name="" id="">
              <?= $name ?>
            </label>
          </li>
              <?php
              $category = $result->fetch_assoc();
            }
            $result->close();
          ?>
          <?php
          if(isset($_GET['id'])){
            $sql = "SELECT category.name FROM film, film_category, category    
            WHERE film.film_id = film_category.film_id AND film_category.category_id ;";
            $result = $link->query($sql);
            $film = $result->fetch_assoc();
          }
          ?>
          <li>
            <label>
              <input type="checkbox" name="" id="">
              Acción
            </label>
          </li>
          <li>
            <label>
              <input type="checkbox" name="" id="">
              Comedia
            </label>
          </li>
          <li>
            <label>
              <input type="checkbox" name="" id="">
              Misterio
            </label>
          </li>
        </ul>
        <p>
          <input type="submit" value="Actualizar">
        </p>
      </form>
    <section>
<?php include "bottom.php"; ?>