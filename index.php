<!-- on ouvre les balises php, on inclut le header 
via le dossier partials  -->

<?php
include "./partials/header.php";
?>
<!--Section jean-->
<main>

  <!-- on appel le dossier include avec les fonctions ainsi
on appel la fonction dd -->
  <?php
  include "./include/fonctions.php";
  echo dd(5);
  ?>
  <section id="items">
    <div id="titre">
      <h3>8 items</h3>
    </div>
    <div id="shop">
      <!--tout l'ensemble du site-->
      <!--jean 1-->
      <div class="imgJean">
        <img src="./assets/img/jeans1.jpg" alt="" />
        <h3>Ripped Skinny Jeans</h3>
        <h4>$24.99</h4>
      </div>

      <!--jean 2-->
      <div class="imgJean">
        <img src="./assets/img/jeans2.jpg" alt="" />
        <h3 id="mega">Mega Ripped Jeans</h3>
        <h4>$19.99</h4>
        <h4 class="etiquette">New</h4>
      </div>

      <!--jean 3-->
      <div class="imgJean">
        <img src="./assets/img/jeans3.jpg" alt="" />
        <div>
          <h3>Washed Skinny Jeans</h3>
          <h4>$20.50</h4>
        </div>
      </div>

      <!--jean 4-->
      <div class="imgJean">
        <img src="./assets/img/jeans4.jpg" alt="" />
        <h3>Washed Skinny Jeans</h3>
        <h4>$20.50</h4>
      </div>

      <!--jean 3, 2eme-->
      <div class="imgJean">
        <img src="./assets/img/jeans3.jpg" alt="" />
        <div>
          <h3>Washed Skinny Jeans</h3>
          <h4>$20.50</h4>
        </div>
      </div>

      <!--jean 4, 2eme-->
      <div class="imgJean">
        <img src="./assets/img/jeans4.jpg" alt="" />
        <h3>Washed Skinny Jeans</h3>
        <h4>$20.50</h4>
      </div>

      <!--jean 1, 2eme-->
      <div class="imgJean">
        <img src="./assets/img/jeans1.jpg" alt="" />
        <h3>Ripped Skinny Jeans</h3>
        <h4 id="price">$24.99</h4>
        <h4 class="etiquette">Sale</h4>
      </div>

      <!--jean 2, 2eme-->
      <div class="imgJean">
        <img src="./assets/img/jeans2.jpg" alt="" />
        <h3 id="mega">Mega Ripped Jeans</h3>
        <h4>$19.99</h4>
      </div>
    </div>
  </section>

  <!-- Section subscribe avec formulaire etc -->

  <!-- on ouvre les balises php, on inclut la section subscribe 
via le dossier partials  -->

  <?php
  include "./partials/subscribe.php";
  ?>
</main>
<!-- on ouvre les balises php, on inclut le footer 
via le dossier partials  -->

<?php
include "./partials/footer.php";
?>
</body>

</html>