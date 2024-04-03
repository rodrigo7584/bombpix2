<?php include 'head.php'?>
<div class="page-marketplace">
  <aside class="menu-marketplace">
    <img src="./img/logo-2.png" alt="" class="logo" />
    <button class="btn-lang">
      <img src="./img/icon-globe.png" alt="" />
      <!-- <div class="langs">
        <a href="?lang=en">English</a>
        <a href="?lang=pt">Português</a>
        <a href="?lang=zh">马达林</a>
        <a href="?lang=es">Español</a>
      </div> -->
    </button>
    <a href="#" class="btn btn-tutorial">TUTORIAL</a>
    <nav>
      <ul class="menu-list">
        <li class="item multi-items">
          <div class="item-content">
            <img src="./img/icon-house.png" alt="" class="icon" />
            Loja
          </div>
          <ul class="multi-item-list">
            <li>
              <a href="#">Farm</a>
            </li>
            <li>
              <a href="#">PvP</a>
            </li>
            <li>
              <a href="#">Aventura</a>
            </li>
        </li>
      </ul>
      </li>
      <li class="item multi-items">
        <div class="item-content">
          <img src="./img/icon-control.png" alt="" class="icon" />
          Jogar agora
        </div>
        <ul class="multi-item-list">
          <li>
            <a href="#">Farm</a>
          </li>
          <li>
            <a href="#">PvP</a>
          </li>
          <li>
            <a href="#">Aventura</a>
          </li>
        </ul>
      </li>
      <li class="item">
        <a href="#" class="item-content">
          <img src="./img/icon-user.png" alt="" class="icon" />
          Minha conta
        </a>
      </li>
      <li class="item multi-items">
        <div class="item-content">
          <img src="./img/icon-paper.png" alt="" class="icon" />
          Whitepaper
        </div>
        <ul class="multi-item-list">
          <li>
            <a href="#">Pt</a>
          </li>
          <li>
            <a href="#">En</a>
          </li>
          <li>
            <a href="#">Es</a>
          </li>
          <li>
            <a href="#">Ch</a>
          </li>
        </ul>
      </li>
      <li class="item">
        <a href="#" class="item-content">
          <img src="./img/icon-box.png" alt="" class="icon" />
          Lands
        </a>
      </li>
      </ul>
    </nav>
    <div class="data">
      <ul>
        <li>
          <img src="./img/icon-user-2.png" alt="" class="icon" />
          <p><span>Amigos: </span>83</p>
        </li>
        <li>
          <img src="./img/icon-coins.png" alt="" class="icon" />
          <p><span>Saldo: </span>0000,00</p>
        </li>
      </ul>
    </div>
    <a href="#" class="btn">
      <img src="./img/icon-wallet.png" alt="" />
      DEPOSITAR
    </a>
  </aside>
  <main class="main-marketplace">
    <img src="./img/floor.png" alt="" class="floor bg-element">
    <img src="./img/cloud.png" class="cloud-1 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-2 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-3 bg-element" alt="" />
    <div class="topo">
      <div class="title-marketplace">
        <h1 class="text-gradient">marketplace</h1>
      </div>
      <button class="mobile-aside">
        <img src="./img/btn-mobile.svg" alt="" class="icon-menu">
        <img src="./img/btn-close.svg" alt="" class="icon-close">
      </button>
    </div>
    <h2 class="text-normal">
      O jogo explosivo que transforma suas vitórias em riquezas reais!
      <!-- <p> <?php

      foreach($translations['box'] as $item){
        print_r($item);
      };
      
      ?></p> -->
    </h2>

    <div class="boxes">
      <?php for ($i=0; $i < 8; $i++) { 
        ?>
      <div class="box">
        <div class="image">
          <img src="./img/bau-azul.gif" alt="" />
        </div>
        <div class="content">
          <h3 class="text-bold">Baú ultra normal</h3>
          <h4 class="text-normal">Rendimento até 30%</h4>
          <div class="details">
            <div class="value">
              <p class="text-normal">Valor</p>
              <p class="text-value"><span>10</span> usdt</p>
            </div>
            <a href="#" class="btn">
              <img src="./img/icon-chart.png" alt="" class="icon" />
              COMPRAR
            </a>
          </div>
        </div>
      </div>
      <?php  }?>
    </div>
  </main>
</div>
<?php include 'foot.php'?>