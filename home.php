<?php include('header.php'); ?>

<header>
    <h2><a href="javascript:void(0)">Profil</a></h2>
    <h1><a href="javascript:void(0)">Notification</a></h1>
    <h2><a href="javascript:void(0)">Accueil</a></h2>
</header>
<main>
  <div class="content">
    <div class="infoUser_wrapper">
      <div class="image_wrapper">
        <div class="image"></div>
      </div>
      <div class="name_user">
        Philippe Caziet
      </div>
      <div class="action_button_wrapper">
        <button class="button action_button" type="button" name="button">
          Proposer un trajet
        </button>
        <button class="button action_button" type="button" name="button">
          Urgence
        </button>
      </div>
    </div>
    <div class="list">
      <button class="button time_button" type="button" name="button">
        Matin
      </button>
      <button class="button time_button" type="button" name="button">
        Après-midi
      </button>
      <ul>
        <li class="driver_wrapper">
          <img class="image" src="" alt="">
          <div class="name">
            Clement
          </div>
          <div class="driver_price_depart_wrapper">
            <div class="driver_depart">
              8:15
            </div>
            <div class="driver_price">
              3 €
            </div>
          </div>
        </li>
        <li class="driver_wrapper">
          <img class="image" src="" alt="">
          <div class="name">
            Clement
          </div>
          <div class="driver_price_depart_wrapper">
            <div class="driver_depart">
              8:15
            </div>
            <div class="driver_price">
              3 €
            </div>
          </div>
        </li>
        <li class="driver_wrapper">
          <img class="image" src="" alt="">
          <div class="name">
            Clement
          </div>
          <div class="driver_price_depart_wrapper">
            <div class="driver_depart">
              8:15
            </div>
            <div class="driver_price">
              3 €
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</main>


<?php include('footer.php');
