<?php include 'header.php'?>
<main>
  <!-- 
  <section class="hero">
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
          <h1 class="text-shadow">DETONE. ENRIQUEÇA. DOMINE. BOMB PIX:</h1>
          <h2 class="text-normal">
            O jogo explosivo que transforma suas vitórias em riquezas reais!
          </h2>
          <a href="#" class="btn-play">
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
          <div class="scroll">
            <h2 class="text-outline">de onde vem as</h2>
            <h2 class="text-gradient" data-texto="Bombcoins?">
              bombcoins?
            </h2>
            <a href="#" class="btn">ver todos</a>
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
  <div class="division-wood-2">
    <img src="./img/wood.png" alt="" class="wood" />
    <img src="./img/bush.svg" alt="" class="bush" />
  </div>
  <section class="tv">
    <img src="./img/stickers.png" alt="" class="stickers" />
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
  <?php 
    $modes = [
      'farm'=>[
        'modeTitle'=>'modo farm',
        'mainTitle'=>'riqueza explosiva',
        'thumb'=>'farm',
        'title'=>'Riqueza Explosiva: Enriqueça com Explosões!',
        'text'=>'Embarque numa experiência única! 
          Cada bomba detonada no modo "Riqueza Explosiva" não apenas
          destrói blocos, mas também desencadeia uma chuva de lucros. 
          Entre na arena, posicione estrategicamente suas bombas e 
          torne-se o magnata da explosão!',
        'list'=>'
          <li>
          Adicione até 20 personagens por mapa para otimizar seus ganhos.
          </li>
          <li>
          Bombardeio lucrativo: cada bloco explodido libera moedas e recursos valiosos.
          faça chover dinheiro enquanto cria o caos na arena!
          </li>
          <li>
          Explosão estratégica: planeje sua abordagem para maximizar ganhos. aumente o 
          acúmulo de riquezas ao adicionar mais personagens ao campo de batalha.
          </li>
          <li>
          Recolha recompensas após o farm (1 hora) e desbloqueie um novo mapa, podendo 
          explodir até 2 mapas diariamente (intervalo de 11 horas).
          </li>',
      ],
      'pvp'=>[
        'modeTitle'=>'modo pvp',
        'mainTitle'=>'batalha épica',
        'thumb'=>'pvp',
        'title'=>'Explosão Royale: sobreviva e prospere na arena explosiva!',
        'text'=>'Embarque numa experiência única! Cada bomba detonada no modo 
          "Riqueza Explosiva" não apenas destrói blocos, mas também desencadeia
          uma chuva de lucros. Entre na arena, posicione estrategicamente suas 
          bombas e torne-se o magnata da explosão!',
        'list'=>'
          <li>
          Batalha Explosiva: enfrente jogadores de todo o mundo em uma
          arena cheia de blocos e perigos explosivos. As bombas estão voando, e
          apenas o mais astuto sobreviverá.
          </li>
          <li>
          Lucro Compartilhado: cada explosão gera lucros compartilhados entre os 
          jogadores sobreviventes. Quanto mais jogadores você eliminar, mais 
          riquezas você acumula!
          </li>
          <li>
          Lucros e taxas: 80% do prêmio será destinado ao ganhador da partida, 
          enquanto os 20% restantes compreendem a taxa de arena. Destes, 10% são 
          designados para a distribuição até o quinto nível de afiliado do 
          usuário vencedor.
          </li>',
      ],
      'adventure'=>[
        'modeTitle'=>'modo aventura',
        'mainTitle'=>'explosão royale',
        'thumb'=>'adventure',
        'title'=>'Enfrente um espetáculo de explosões contra desafios gigantes!',
        'text'=>'Prepare-se para uma experiência explosiva totalmente nova! Aqui, 
          a ação está além dos blocos - é hora de enfrentar inimigos, lançar bombas 
          estratégicas e desafiar chefões épicos enquanto se aventura pelos níveis
          emocionantes deste modo inovador! 
          <br><br>
          * Cada usuário terá um mapa de níveis no qual poderá efetuar diariamente 
          batalhas com recolhimento de recompensas.',
        'list'=>'
          <li>
          Desafios dinâmicos: embarque em uma jornada cheia de desafios dinâmicos,
          onde cada passo o aproxima de novos inimigos e obstáculos. Lute contra hordas
          de adversários e mostre suas habilidades ao desviar de armadilhas astutas 
          enquanto avança pelos níveis. Cada confronto é uma oportunidade para 
          aprimorar suas táticas explosivas!
          </li>
          <li>
          Inimigos lendários: dos astutos espadachins aos feiticeiros ardilosos, cada 
          nível apresenta inimigos formidáveis prontos para testar suas habilidades. 
          Estrategize e aprimore suas técnicas para superar desafios únicos em cada cenário.
          </li>
          <li>
          Chefões épicos: a verdadeira emoção começa quando você se depara com os chefões
          épicos! Esses titãs impressionantes estão prontos para desafiar até mesmo os 
          jogadores mais habilidosos. Descubra suas fraquezas, desenvolva estratégias 
          épicas e prepare-se para enfrentar um espetáculo de explosões contra esses 
          desafios gigantes!
          </li>'
      ]
    ]
  ?>
  <section class="modes">
    <img src="./img/cloud.png" class="cloud-1 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-2 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-3 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-4 bg-element" alt="" />
    <img src="./img/cloud.png" class="cloud-5 bg-element" alt="" />
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-gradient">modos</h2>
          <div class="scrolls">
            <?php foreach($modes as $modes){?>
            <div class="box-scroll">
              <div class="scroll">
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
 
  -->
  <div class="division-grass-2">
    <img src="./img/grass.png" alt="" class="grass" />
  </div>
  <section class="marketplace">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-gradient">marketplace</h2>
          <div class="swiper-chests swiper-bombpix">
            <div class="button-prev">
              <img src="./img/btn-arrow.svg" alt="" />
            </div>
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="swiper-conteudo">
                    <h3 class="light-green">Baú ultra comum</h3>
                    <img src="./img/chest-light-green.png" alt="">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-conteudo">
                    <h3 class="green">Baú comum</h3>
                    <img src="./img/chest-green.png" alt="">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-conteudo">
                    <h3 class="blue">Baú raro</h3>
                    <img src="./img/chest-blue.png" alt="">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-conteudo">
                    <h3 class="red">Baú épico</h3>
                    <img src="./img/chest-wood.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="button-next">
              <img src="./img/btn-arrow.svg" alt="" />
            </div>
          </div>
          <a href="#" class="btn">
            ver todos
          </a>
        </div>
      </div>
    </div>
  </section>
  <div class="teste">
    <?php
      $chars = [
        'char1' => [
            'type1' => [
                'name' => 'cavaleiro aprendiz',
                'description' => 'descrição 1'
            ],
            'type2' => [
                'name' => 'cavaleiro formado',
                'description' => 'descrição 2'
            ],
            'type3' => [
                'name' => 'cavaleiro top',
                'description' => 'descrição 2'
            ]
        ],
        'char2' => [
            'type1' => [
                'name' => 'bruxa aprendiz',
                'description' => 'descrição 1'
            ],
            'type2' => [
                'name' => 'bruxa formado',
                'description' => 'descrição 2'
            ],
            'type3' => [
                'name' => 'bruxa top',
                'description' => 'descrição 2'
            ]
        ]
      ];
    ?>
    <?php foreach($chars as $char){ ?>
    <div class="char">
      <?php foreach($char as $charType){ ?>
      <h1>
        <?php echo $charType['name'] ?>
      </h1>
      <?php  } ?>
    </div>
    <?php }  ?>
  </div>
  <!-- <section class="bombers">
        <div class="container">
          <div class="row">
            <h2 class="text-gradient">bombers</h2>
            <div class="swiper-bombers swiper-bombpix">
              <div class="button-prev">
                <img src="./img/btn-arrow.svg" alt="" />
              </div>
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="swiper-conteudo">
                      <h3 class="text-outline">Cavaleiro Aprendiz</h3>
                      <p class="text-normal">
                        O cavaleiro Aprendiz exibe notável força física,
                        trajando uma imponente armadura decorada com explosivas
                        runas ancestrais.
                      </p>

                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper-conteudo">
                      <h1>ola2</h1>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper-conteudo">
                      <h1>ola3</h1>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper-conteudo">
                      <h1>ola4</h1>
                    </div>
                  </div>
                </div>
              </div>
              <div class="button-next">
                <img src="./img/btn-arrow.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section> -->
</main>
<?php include 'footer.php'?>