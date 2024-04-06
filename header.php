<section class="main-menu">
  <div class="container">
    <div class="row">
      <header class="menu">
        <a href="#" class="logo-header">
          <img src="./img/logo.png" alt="" />
        </a>
        <nav>
          <button class="btn-mobile-menu">
            <img src="./img/btn-mobile.svg" alt="" />
          </button>
          <ul>
            <li>
              <a href="index.php#hero">
                <?php echo isset($translations['header']['item1']) ? $translations['header']['item1'] : '404' ?>
              </a>
            </li>
            <li>
              <a href="index.php#roadmap">
                <?php echo isset($translations['header']['item2']) ? $translations['header']['item2'] : '404' ?>
              </a>
            </li>
            <li class="menu-subitems">
              <button>
                <?php echo isset($translations['header']['item3']) ? $translations['header']['item3'] : '404' ?>
              </button>
              <ul>
                <li>
                  <a href="https://bombpix.gitbook.io/bombpix" target="_blank">
                    <img src="./img/brasil.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="https://bombpix.gitbook.io/bombpix-en/" target="_blank">
                    <img src="./img/estados-unidos.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="https://bombpix.gitbook.io/bombpix-es/" target="_blank">
                    <img src="./img/espanha.png" alt="">
                  </a>
                </li>
                <li>
                  <a href="https://bombpix.gitbook.io/bombpix-en/" target="_blank">
                    <img src="./img/china.png" alt="">
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="index.php#bombers">
                <?php echo isset($translations['header']['item4']) ? $translations['header']['item4'] : '404' ?>
              </a>
            </li>
            <li>
              <a href="marketplace.php">
                <?php echo isset($translations['header']['item5']) ? $translations['header']['item5'] : '404' ?>
              </a>
            </li>
            <a href="https://marketplace.bombpix.net/register" class="btn btn-play">
              <?php echo isset($translations['header']['item6']) ? $translations['header']['item6'] : '404' ?>
            </a>
            <a href="https://marketplace.bombpix.net/login" class="btn btn-play">
              <?php echo isset($translations['header']['item7']) ? $translations['header']['item7'] : '404' ?>
            </a>
          </ul>
        </nav>
      </header>
    </div>
  </div>
</section>