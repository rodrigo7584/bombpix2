<?php include 'head.php'?>
<?php include 'header.php'?>
<main>
  <section class="hero" id="hero">
    <img src="./img/cloud.png" class="cloud-1 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-2 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-3 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-4 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-5 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-6 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-7 bg-element" alt="" />
    <img src="./img/coin.png" class="coin-1 bg-element" alt="" />
    <img src="./img/coin.png" class="coin-2 bg-element" alt="" />
    <img src="./img/coin.png" class="coin-3 bg-element" alt="" />
    <img src="./img/coin.png" class="coin-4 bg-element" alt="" />
    <img src="./img/coin.png" class="coin-5 bg-element" alt="" />
    <img src="./img/explosao.gif" class="bomb bg-element" alt="" />
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="text-shadow">
            <?php echo isset($translations['hero']['title']) ? $translations['hero']['title'] : '404' ?>
          </h1>
          <h2 class="text-normal">
            <?php echo isset($translations['hero']['subtitle']) ? $translations['hero']['subtitle'] : '404' ?>
          </h2>
          <a href="https://marketplace.bombpix.net/login" class="btn-play">
            <img src="./img/btn-play.svg" alt="" />
          </a>
        </div>
      </div>
    </div>
  </section>
  <div class="division-grass">
    <img src="./img/bomb.png" class="bomb" alt="" />
    <img src="./img/grass.png" alt="" class="grass" />
  </div>
  <section class="where">
    <img src="./img/bomb-2.png" class="bomb" alt="" />
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="scroll" data-aos="zoom-in">
            <h2 class="text-outline">
              <?php echo isset($translations['where']['over_title']) ? $translations['where']['over_title'] : '404' ?>
            </h2>
            <h2 class="text-gradient" data-texto="Bombcoins?">
              <?php echo isset($translations['where']['title']) ? $translations['where']['title'] : '404' ?>
            </h2>
            <button href="https://marketplace.bombpix.net/" class="btn" data-button-modal="modal-char-where">
              <?php echo isset($translations['where']['button']) ? $translations['where']['button'] : '404' ?>
            </button>
            <dialog class="dialog-modal" data-dialog-modal="modal-char-where">
              <div class="dialog-content">
                <div class="main-title">
                  <h4 class="text-gradient">
                    <?php echo isset($translations['where']['popup_title']) ? $translations['where']['popup_title'] : '404' ?>
                  </h4>
                </div>
                <div class="char-container">
                  <div class="char-content">
                    <p class="text-bold">
                      <?php echo isset($translations['where']['popup_text']) ? $translations['where']['popup_text'] : '404' ?>
                    </p>
                  </div>
                </div>
                <button class="dialog-close" data-dialog-modal="modal-close">
                  <img src="./img/btn-close.svg" alt="">
                </button>
              </div>
            </dialog>
          </div>
        </div>
        <div class="col">
          <div class="composition">
            <img src="./img/bomb.png" alt="" class="bomb" />
            <img src="./img/pile-coins.png" alt="" class="pile-coins" />
            <img src="./img/pile-coins-2.png" alt="" class="pile-coins-2" />
            <img src="./img/coin.png" class="coin-1" alt="" />
            <img src="./img/coin.png" class="coin-2" alt="" />
            <img src="./img/spark.png" alt="" class="spark-1" />
            <img src="./img/spark.png" alt="" class="spark-1" />
            <img src="./img/spark.png" alt="" class="spark-2" />
            <img src="./img/spark.png" alt="" class="spark-3" />
            <img src="./img/spark.png" alt="" class="spark-4" />
            <img src="./img/spark.png" alt="" class="spark-5" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="division-wood">
    <img src="./img/wood.png" alt="" class="wood" />
    <img src="./img/tree-3.png" alt="" class="tree" />
  </div>
  <section class="bombers" id="bombers">
    <div class="container">
      <div class="row">
        <h2 class="text-gradient">
          <?php echo isset($translations['bomber']['title']) ? $translations['bomber']['title'] : '404' ?>
        </h2>
        <div class="swiper-bombers swiper-bombpix">
          <div class="button-prev">
            <img src="./img/btn-arrow.svg" alt="" />
          </div>
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php foreach($translations['bomber']['bombers'] as $char){?>
              <div class="swiper-slide">
                <div class="swiper-conteudo">
                  <?php foreach($char as $key => $charType){?>

                  <h3 class="text-outline">
                    <?php echo $charType['name']?>
                  </h3>
                  <p class="text-bold">
                    <?php echo $charType['description']?>
                  </p>
                  <?php }; ?>
                  <div class="controls">
                    <button class='prev'>
                      < </button>
                        <button class='next'>
                          >
                        </button>
                  </div>
                  <?php foreach($char as $key => $charType){?>
                  <div class="img-bomber" data-aos="zoom-in">
                    <img src="./img/<?php echo $charType['img']?>.png" alt="">
                  </div>

                  <?php }; ?>
                </div>
              </div>
              <?php }; ?>
            </div>
          </div>
          <div class="button-next">
            <img src="./img/btn-arrow.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="division-wood-2">
    <img src="./img/wood.png" alt="" class="wood" />
    <img src="./img/bush.svg" alt="" class="bush" />
  </div>
  <section class="tv">
    <img src="./img/stickers.png" alt="" class="stickers" data-aos="zoom-out" />
    <img src="./img/bush-2.svg" alt="" class="bush" />
    <div class="container">
      <div class="row">
        <div class="composition">
          <video src="./video/video.mp4" muted autoplay loop></video>
          <img src="./img/tv.png" alt="" class="image-tv" />
          <img src="./img/tv-lines.png" alt="" class="tv-lines" />
        </div>
      </div>
    </div>
  </section>
  <div class="division-wood-3">
    <img src="./img/wood.png" alt="" class="wood" />
  </div>
  <section class="modes">
    <img src="./img/cloud.png" class="cloud-1 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-2 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-3 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-4 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-5 bg-element" alt="" />
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-gradient">
            <?php echo isset($translations['mode']['title']) ? $translations['mode']['title'] : '404' ?>
          </h2>
          <div class="scrolls">
            <?php foreach($translations['mode']['modes'] as $modes){?>
            <div class="box-scroll">
              <div class="scroll" data-aos="flip-up">
                <img src="./img/mode-<?php echo $modes['thumb'];?>.png" alt="" class="thumb">
                <h3 class="text-gradient">
                  <?php echo $modes['mainTitle'];?>
                </h3>
              </div>
              <button class="btn" data-button-modal="modal-char-<?php echo $modes['thumb'];?>">
                <?php echo $modes['thumb'];?>
              </button>
              <dialog class="dialog-modal" data-dialog-modal="modal-char-<?php echo $modes['thumb'];?>">
                <div class="dialog-content">
                  <div class="main-title">
                    <h4 class="text-gradient">
                      <?php echo $modes['modeTitle'];?>
                    </h4>
                  </div>
                  <div class="char-container">
                    <div class="char-content">
                      <h5 class="text-gradient">
                        <?php echo $modes['title'];?>
                      </h5>
                      <p class="text-bold">
                        <?php echo $modes['text'];?>
                      </p>
                    </div>
                    <div class="char-content">
                      <h6 class="text-gradient">
                        Intruções
                      </h6>
                      <ul class="coin-list">
                        <?php echo $modes['list'];?>
                      </ul>
                    </div>
                  </div>
                  <button class="dialog-close" data-dialog-modal="modal-close">
                    <img src="./img/btn-close.svg" alt="">
                  </button>
                </div>
              </dialog>
            </div>
            <?php };?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="division-grass-2">
    <img src="./img/grass.png" alt="" class="grass" />
  </div>
  <section class="marketplace" id="marketplace">
    <img src="./img/tree-2.png" alt="" class="tree">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-gradient">
            <?php echo isset($translations['chest']['title']) ? $translations['chest']['title'] : '404' ?>
          </h2>
          <div class="swiper-chests swiper-bombpix">
            <div class="button-prev">
              <img src="./img/btn-arrow.svg" alt="" />
            </div>
            <div class="swiper">
              <div class="swiper-wrapper">
                <?php foreach($translations['chest']['chests'] as $chests){?>
                <div class="swiper-slide">
                  <div class="swiper-conteudo">
                    <h3 class="<?php echo $chests['cor']?>">
                      baú <?php echo $chests['tipo']?>
                    </h3>
                    <img src="./img/bau-<?php echo $chests['cor']?>.gif" alt="">
                  </div>
                </div>
                <?php }?>
              </div>
            </div>
            <div class="button-next">
              <img src="./img/btn-arrow.svg" alt="" />
            </div>
          </div>
          <a href="https://marketplace.bombpix.net/" class="btn">
            <?php echo isset($translations['chest']['button']) ? $translations['chest']['button'] : '404' ?>
          </a>
        </div>
      </div>
    </div>
  </section>
  <div class="division-wood-4">
    <img src="./img/wood.png" alt="" class="wood" />
    <img src="./img/bush.svg" alt="" class="bush" />
    <img src="./img/card-shuriken.png" alt="" class="card card-shuriken">
    <img src="./img/card-blue-potion.png" alt="" class="card card-blue-potion">
    <img src="./img/card-ninja.png" alt="" class="card card-ninja">
    <img src="./img/card-green-potion.png" alt="" class="card card-green-potion">
    <img src="./img/card-cauldron.png" alt="" class="card card-cauldron">
  </div>
  <section class="faq">
    <img src="./img/bomb-2.png" alt="" class="bomb" />
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-gradient">
            <?php echo isset($translations['faq']['title']) ? $translations['faq']['title'] : '404' ?>
          </h2>
          <?php foreach($translations['faq']['questions'] as $question){?>
          <div class="accordion" data-aos="fade-right">
            <div class="question">
              <p>
                <?php  echo $question['question']?>
              </p>
              <img src="./img/btn-arrow.svg" alt="" />
            </div>
            <div class="answer">
              <div class="content">
                <p>
                  <?php  echo $question['answer']?>
                </p>
              </div>
            </div>
          </div>
          <?php }; ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'footer.php'?>
<?php include 'foot.php'?>