<?php include 'head.php'?>
<div class="page-marketplace">
  <aside class="menu-marketplace">
    <img src="./img/logo-2.png" alt="" class="logo" />
    <button class="btn-lang">
      <img src="./img/icon-globe.png" alt="" />
      <div class="langs">
        <a href="?lang=en">English</a>
        <a href="?lang=pt">Português</a>
        <a href="?lang=zh">马达林</a>
        <a href="?lang=es">Español</a>
      </div>
    </button>
    <a href="#" class="btn btn-tutorial">
      <?php echo isset($translations['marketplace']['btn_tutorial']) ? $translations['marketplace']['btn_tutorial'] : '404' ?>
    </a>
    <a href="#" class="btn btn-login">
      <?php echo isset($translations['marketplace']['btn_login']) ? $translations['marketplace']['btn_login'] : '404' ?>
    </a>
    <nav>
      <ul class="menu-list">
        <li class="item multi-items">
          <div class="item-content">
            <img src="./img/icon-house.png" alt="" class="icon" />
            <?php echo isset($translations['marketplace']['menu_item1']) ? $translations['marketplace']['menu_item1'] : '404' ?>
          </div>
          <ul class="multi-item-list">
            <li>
              <a href="#">
                <?php echo isset($translations['marketplace']['menu_item1_subitem1']) ? $translations['marketplace']['menu_item1_subitem1'] : '404' ?>
              </a>
            </li>
            <li>
              <a href="#">
                <?php echo isset($translations['marketplace']['menu_item1_subitem2']) ? $translations['marketplace']['menu_item1_subitem2'] : '404' ?>
              </a>
            </li>
            <li>
              <a href="#">
                <?php echo isset($translations['marketplace']['menu_item1_subitem3']) ? $translations['marketplace']['menu_item1_subitem3'] : '404' ?>
              </a>
            </li>
        </li>
      </ul>
      </li>
      <li class="item multi-items">
        <div class="item-content">
          <img src="./img/icon-control.png" alt="" class="icon" />
          <?php echo isset($translations['marketplace']['menu_item2']) ? $translations['marketplace']['menu_item2'] : '404' ?>
        </div>
        <ul class="multi-item-list">
          <li>
            <a href="#">
              <?php echo isset($translations['marketplace']['menu_item2_subitem1']) ? $translations['marketplace']['menu_item2_subitem1'] : '404' ?>
            </a>
          </li>
          <li>
            <a href="#">
              <?php echo isset($translations['marketplace']['menu_item2_subitem2']) ? $translations['marketplace']['menu_item2_subitem2'] : '404' ?>
            </a>
          </li>
          <li>
            <a href="#">
              <?php echo isset($translations['marketplace']['menu_item2_subitem3']) ? $translations['marketplace']['menu_item2_subitem3'] : '404' ?>
            </a>
          </li>
        </ul>
      </li>
      <li class="item">
        <a href="#" class="item-content">
          <img src="./img/icon-user.png" alt="" class="icon" />
          <?php echo isset($translations['marketplace']['menu_item3']) ? $translations['marketplace']['menu_item3'] : '404' ?>
        </a>
      </li>
      <li class="item multi-items">
        <div class="item-content">
          <img src="./img/icon-paper.png" alt="" class="icon" />
          <?php echo isset($translations['marketplace']['menu_item4']) ? $translations['marketplace']['menu_item4'] : '404' ?>
        </div>
        <ul class="multi-item-list">
          <li>
            <a href="https://bombpix.gitbook.io/bombpix" target="_blank">
              <?php echo isset($translations['marketplace']['menu_item4_subitem1']) ? $translations['marketplace']['menu_item4_subitem1'] : '404' ?>
            </a>
          </li>
          <li>
            <a href="https://bombpix.gitbook.io/bombpix-en/" target="_blank">
              <?php echo isset($translations['marketplace']['menu_item4_subitem2']) ? $translations['marketplace']['menu_item4_subitem2'] : '404' ?>
            </a>
          </li>
          <li>
            <a href="https://bombpix.gitbook.io/bombpix-es/" target="_blank">
              <?php echo isset($translations['marketplace']['menu_item4_subitem3']) ? $translations['marketplace']['menu_item4_subitem3'] : '404' ?>
            </a>
          </li>
          <li>
            <a href="https://bombpix.gitbook.io/bombpix-ch/" target="_blank">
              <?php echo isset($translations['marketplace']['menu_item4_subitem4']) ? $translations['marketplace']['menu_item4_subitem4'] : '404' ?>
            </a>
          </li>
        </ul>
      </li>
      <li class="item">
        <a href="#" class="item-content">
          <img src="./img/icon-box.png" alt="" class="icon" />
          <?php echo isset($translations['marketplace']['menu_item5']) ? $translations['marketplace']['menu_item5'] : '404' ?>
        </a>
      </li>
      </ul>
    </nav>
    <div class="data">
      <ul>
        <li>
          <img src="./img/icon-user-2.png" alt="" class="icon" />
          <p>
            <span>
              <?php echo isset($translations['marketplace']['data_item1']) ? $translations['marketplace']['data_item1'] : '404' ?>
            </span>
            83
          </p>
        </li>
        <li>
          <img src="./img/icon-coins.png" alt="" class="icon" />
          <p>
            <span>
              <?php echo isset($translations['marketplace']['data_item2']) ? $translations['marketplace']['data_item2'] : '404' ?>
            </span>
            0000,00
          </p>
        </li>
      </ul>
    </div>
    <a href="#" class="btn">
      <img src="./img/icon-wallet.png" alt="" />
      <?php echo isset($translations['marketplace']['btn_deposit']) ? $translations['marketplace']['btn_deposit'] : '404' ?>
    </a>
  </aside>
  <main class="main-marketplace">
    <img src="./img/floor.png" alt="" class="floor bg-element">
    <img src="./img/cloud.png" class="cloud-1 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-2 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-3 bg-element" alt="" />
    <div class="topo">
      <div class="title-marketplace">
        <h1 class="text-gradient">
          <?php echo isset($translations['marketplace']['page_title']) ? $translations['marketplace']['page_title'] : '404' ?>
        </h1>
      </div>
      <button class="mobile-aside">
        <img src="./img/btn-mobile.svg" alt="" class="icon-menu">
        <img src="./img/btn-close.svg" alt="" class="icon-close">
      </button>
    </div>
    <h2 class="text-normal">
      <?php echo isset($translations['marketplace']['page_subtitle']) ? $translations['marketplace']['page_subtitle'] : '404' ?>
    </h2>
    <div class="boxes">
      <?php foreach($translations['marketplace']['products'] as $product){ 
        ?>
      <div class="box">
        <div class="image">
          <?php 
          echo isset($product['image']) 
          ? '<img src="./img/' . $product['image'] . '.gif" alt="" />' 
          : '404'
          ?>

        </div>
        <div class="content">
          <h3 class="text-bold">
            <?php echo isset($product['name']) ? $product['name'] : '404' ?>
          </h3>
          <h4 class="text-normal">
            <?php echo isset($product['description']) ? $product['description'] : '404' ?>
          </h4>
          <div class="details">
            <div class="value">
              <p class="text-normal">
                Valor
              </p>
              <p class="text-value">
                <span>
                  <?php echo isset($product['value']) ? $product['value'] : '404' ?>
                </span>
                usdt
              </p>
            </div>
            <a href="#" class="btn">
              <img src="./img/icon-chart.png" alt="" class="icon" />
              <?php echo isset($translations['marketplace']['btn_buy']) ? $translations['marketplace']['btn_buy'] : '404' ?>
            </a>
          </div>
        </div>
      </div>
      <?php  }?>
    </div>
  </main>
</div>
<?php include 'foot.php'?>