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
          <div class="scroll" data-aos="zoom-in">
            <h2 class="text-outline">de onde vem as</h2>
            <h2 class="text-gradient" data-texto="Bombcoins?">
              bombcoins?
            </h2>
            <button href="#" class="btn" data-button-modal="modal-char-where">ver todos</button>
            <dialog class="dialog-modal" data-dialog-modal="modal-char-where">
              <div class="dialog-content">
                <div class="main-title">
                  <h4 class="text-gradient">
                    de onde vem as bombcoins?
                  </h4>
                </div>
                <div class="char-container">
                  <div class="char-content">
                    <p class="text-bold">
                      Bombcoins, a moeda explosiva, tem sua origem envolta em mistério.
                      Surge de um mundo virtual onde a inovação tecnológica se entrelaça
                      com a criatividade humana, desafiando fronteiras e criando uma
                      revolução financeira única. Explore esse universo digital onde cada
                      transação é uma explosão de possibilidades, moldando o futuro das
                      finanças de maneira inovadora e emocionante.
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
  <?php
        $chars = [
          'cavaleiro' => [
              'type1' => [
                  'name' => 'cavaleiro <br> aprendiz',
                  'description' => 'O cavaleiro Aprendiz exibe notável força física,
                  trajando uma imponente armadura decorada com explosivas runas ancestrais.',
                  'img' => 'cavaleiro01'
              ],
              'type2' => [
                'name' => 'cavaleiro <br> lendário',
                'description' => 'O cavaleiro da Fúria possi uma força física impressionante e veste
                uma armadura imponente adornada com runas ancestrais de explosão.',
                'img' => 'cavaleiro02'
              ],
          ],
          'jogador' => [
            'type1' => [
                'name' => 'jogador <br> várzea',
                'description' => 'O jogador várzea exibe habilidades destacadas no jogo, adapta-se facilmente a diferentes estratégias e possui ua mentalidade altamente competitiva.',
                'img' => 'jogador01'
            ],
            'type2' => [
              'name' => 'jogador <br> profissional',
              'description' => 'O jogador profissional possui habilidade excepcionais no jogo, adaptabilidade a diferentes estratégias e mentalidade competitiva.
              Vest um uniforme esportivo de alta tecnologia e equipamento de última geração.',
              'img' => 'jogador02'
            ],
          ],
          'aventureiro' => [
            'type1' => [
              'name' => 'cowboy <br> errante',
              'description' => 'O Cowboy errante possui habilidades em montaria e destreza no manejo de cordas. vestido com um chapéu de abas largas e um poncho empoeirado.',
              'img' => 'aventureiro01'
            ],
            'type2' => [
              'name' => 'cowboy <br> justiceiro',
              'description' => 'O Cowboy Justiciero possui habilidades em montaria, destreza no manejo de cordas, 
              coragem e resistência física. Vestido com um chapéu de abas largas e um poncho empoeirado',
              'img' => 'aventureiro02'
            ],
          ],
          'bruxa' => [
            'type1' => [
              'name' => 'bruxa <br> ESTUDANTE',
              'description' => 'A bruxa estudante é versada em magia mestra de rituais e dotada de habilidades místicas. Ela
              veste um elegante vestido roxo e desloca-se no ar com uma vassoura voadora. ',
              'img' => 'bruxa01'
            ],
            'type2' => [
              'name' => 'bruxa <br> ACADÊMICA',
              'description' => 'A bruxa acadêmica possui estudo aprofundado de magia, domínio de rituais, conhecimento extenso
              de poções e habilidades místicas. Veste um vestido com detalhes ricos em runas mágicas.',
              'img' => 'bruxa02'
            ],
          ],
          'ninja' => [
            'type1' => [
              'name' => 'ninja <br> DESAFIANTE',
              'description' => 'O ninja desafiante incorpora habilidade furtivas, emprega um detonador silencioso e veste um traje azul clássico.',
              'img' => 'ninja01'
            ],
            'type2' => [
              'name' => 'ninja <br> ESPECIALISTA',
              'description' => 'O ninja especialista inclui habilidades de stealh, veste um traje moderno misturando tecnologia avançada e tradição.',
              'img' => 'ninja02'
            ],
          ],
          'felino' => [
            'type1' => [
              'name' => 'Felino ',
              'description' => 'Conheça o ágil e astuto "Felino", um mestre das sombras e dos movimentos furtivos. Com sua agilidade felina e olhar
              penetrante, ele desliza pela arena lançando bombas com precisão mortal. Seus reflexos rápidos e sua habilidade de se esgueirar 
              pelas passagens mais estreitas o tornam um adversário formidável, capaz de surpreender até mesmo os mais experientes.',
              'img' => 'felino01'
            ],
            'type2' => [
              'name' => 'rei das <br> feras',
              'description' => 'Adentre a arena com o imponente "Rei das Feras", cujo rugido ecoa pela selva do BombPIX, 
              inspirando temor em seus oponentes. Com sua majestosa juba e poderosas garras, ele domina o campo de batalha, 
              liderando com ferocidade e coragem. Sua presença imponente é um símbolo de poder e liderança, enquanto ele protege 
              sua terra com feroz determinação.',
              'img' => 'felino02'
            ],
          ],
        ];
      ?>
  <section class="bombers" id="bombers">
    <div class="container">
      <div class="row">
        <h2 class="text-gradient">bombers</h2>
        <div class="swiper-bombers swiper-bombpix">
          <div class="button-prev">
            <img src="./img/btn-arrow.svg" alt="" />
          </div>
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php foreach($chars as $char){?>
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
  <?php 
        $chests = [
          'ultra-comum'=>[
            'tipo'=>'ultra comum',
            'cor'=>'verde-claro',        
          ],
          'comum'=>[
            'tipo'=>'comum',
            'cor'=>'vermelho',        
          ],
          'raro'=>[
            'tipo'=>'raro',
            'cor'=>'azul',        
          ],
          'epico'=>[
            'tipo'=>'épico',
            'cor'=>'verde-escuro',        
          ],
          'lendario'=>[
            'tipo'=>'lendário',
            'cor'=>'marrom',        
          ],
          'mitico'=>[
            'tipo'=>'mítico',
            'cor'=>'roxo',        
          ],
          'ultra-mitico'=>[
            'tipo'=>'ultra mítico',
            'cor'=>'rosa',        
          ],
          'diamante'=>[
            'tipo'=>'diamante',
            'cor'=>'amarelo',        
          ],
        ]
    ?>
  <section class="marketplace" id="marketplace">
    <img src="./img/tree-2.png" alt="" class="tree">
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
                <?php foreach($chests as $chests){?>
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
          <a href="#" class="btn">
            ver todos
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
  <?php
      $questions =[
        [
          'question'=> 'O que é o Bomb PIX?',
          'answer'=> 'Prepare-se para uma experiência de jogo revolucionária que combina a emoção do clássico
          Bomberman com uma pitada única de oportunidades financeiras: apresentamos o Bomb
          PIX! Aqui, cada explosão não é apenas uma estratégia, é uma chance de acumular
          riquezas reais.<br><br>
          Desbloqueie novos personagens e habilidades emocionantes ao abrir LuckBoxes. Cada
          abertura é uma oportunidade de descobrir um tesouro que impulsionará sua jornada rumo à
          riqueza.<br><br>
          Junte-se à revolução do Bomb PIX e transforme suas explosões em uma viagem
          emocionante para o sucesso financeiro. Está pronto para detonar, ganhar e dominar? O
          campo de batalha aguarda você!<br><br>
          '
        ],
        [
          'question'=> 'Como posso iniciar?',
          'answer'=> 'Você está prestes a embarcar em uma jornada emocionante rumo à fortuna no Bomb PIX, e
          o primeiro passo é tão empolgante quanto uma explosão estratégica! Aqui está como você
          pode iniciar sua aventura:<br><br>
          Faça seu depósito Explosivo: antes de entrar na arena, faça um depósito para adquirir sua
          primeira Luckbox. Essa será a chave para desbloquear personagens incríveis e começar
          sua jornada com estilo.<br><br>
          Explore o marketplace Dinâmico: visite o marketplace e explore uma variedade de
          LuckBoxes disponíveis para compra. Cada uma delas guarda segredos únicos e a
          promessa de desbloquear personagens de diferentes raridades.
          Escolha sua sorte: selecione a LuckBox que mais chama sua atenção. Cada uma é uma
          oportunidade de descobrir um novo boneco que pode ser a chave para a sua estratégia
          vitoriosa.<br><br>
          Abra-a em "Meus Itens": após a compra, vá até "Meus Itens" e abra sua LuckBox para
          revelar o personagem surpresa. Cada abertura é uma emoção única, e seu novo boneco
          aparecerá orgulhosamente na sua coleção.<br><br>
          Descubra a raridade: observe a raridade do seu novo personagem. Raridades mais altas
          podem trazer habilidades únicas e estratégias avançadas para as suas explosões na arena.
          Pronto para Explodir e Vencer: com seu novo boneco em mãos, você está pronto para
          enfrentar desafios explosivos, acumular riquezas e dominar a arena do Bomb PIX.
          A aventura no Bomb PIX está apenas começando. Faça seu depósito, adquira sua primeira
          LuckBox e descubra as possibilidades explosivas que o aguardam. Está pronto para
          detonar seu caminho para a vitória? 💥🎮<br><br>'
        ],
        [
          'question'=> 'Quais os modos de jogo?',
          'answer'=> 'Modo FARM: "Riqueza Explosiva" - Faça fortuna com cada explosão!<br><br>
          Prepare-se para uma experiência explosiva diferente de tudo que você já viu! No modo
          "Riqueza Explosiva", cada bomba que você detona não apenas destrói blocos, mas
          também desencadeia uma chuva de lucros. Entre na arena, estrategicamente coloque suas
          bombas e torne-se o magnata da explosão!<br><br>
          Como funciona:<br>
          - Bombardeio lucrativo: cada bloco explodido libera moedas e recursos valiosos. Faça
          chover dinheiro enquanto cria o caos na arena!<br>
          - Explosão estratégica: Planeje sua abordagem para maximizar seus ganhos. Adicione mais
          personagens ao campo de batalha e aumente o acúmulo de riquezas.<br>
          - Recolha suas recompensas ao final do farm e libere um novo mapa, podendo explodir até
          2 mapas por dia.<br><br>
          O farm leva o tempo de 1 hora e seu intervalo para início de um novo mapa é de 11 horas. 
          Lembre-se sempre de que é necessário recolher seus ganhos antes de iniciar um novo mapa.
          <br><br>
          Modo de jogo PVP: "Explosão Royale" - Sobreviva e prospere na arena explosiva! (EM
          BREVE)<br><br>
          Prepare-se para a batalha mais intensa e explosiva que você já experimentou! No Modo
          "Explosão Royale", a sobrevivência é a chave e cada explosão conta. Entre na arena,
          enfrente outros jogadores e torne-se o último explosivo de pé para reivindicar todas as
          riquezas!<br><br>
          Como Funciona:<br>
          - Batalha Explosiva: enfrente jogadores de todo o mundo em uma arena cheia de blocos e
          perigos explosivos. As bombas estão voando, e apenas o mais astuto sobreviverá.
          - Lucro Compartilhado: cada explosão gera lucros que são compartilhados entre os
          jogadores sobreviventes. Quanto mais jogadores você eliminar, mais riquezas você
          acumula!<br>
          - Zona de Perigo: fique atento à zona de perigo, que se estreita ao longo do tempo,
          forçando os jogadores a se confrontarem em espaços cada vez menores.<br><br>
          '
        ],
        [
          'question'=>'Quais são as caixas e bonecos disponíveis?',
          'answer'=>'Preparado para elevar seu jogo e impulsionar suas vitórias para novas alturas no Bomb
          PIX? Apresentamos uma seleção incrível de baús, cada um guardando segredos exclusivos
          e personagens poderosos! Escolha o seu e veja como suas explosões se transformam em
          lucros reais:<br><br>
          Baú Comum - Jogador de Futebol:<br>
          🌟 Personagem: desperte seu espírito esportivo com o jogador de futebol várzea a
          profissional.<br>
          💸 Ganhos mensais: impulsione seus lucros com ganhos de 20% a 40% ao mês.<br><br>
          Baú Raro - Cowboy:<br>
          🌟 Personagem: sinta o clima do velho oeste com o cowboy errante e justiceiro.<br>
          💸 Ganhos mensais:impulsione seus lucros com ganhos de 30% a 40% ao mês.<br><br>
          Baú Épico - Cavaleiro:<br>
          🌟 Personagem: abra caminho para a vitória com o cavaleiro aprendiz e lendário.<br>
          💸 Ganhos mensais: impulsione seus lucros com ganhos de 40% a 50% ao mês.<br><br>
          Baú Lendário - Ninja:<br>
          🌟 Personagem: mergulhe nas sombras com o misterioso ninja desafiante e especial.<br>
          💸 Ganhos mensais: colha lucros excepcionais de 40% a 50% mensais.<br>
          🎁 Evento: caixa disponível em eventos do game.<br><br>
          Baú Mítico - Bruxa:<br>
          🌟 Personagem: desperte o poder mágico da bruxa estudante e acadêmica.<br>
          💸 Ganhos mensais: maximize seus ganhos com incríveis 50% a 60% ao mês.<br>
          🎁 Evento: caixa disponível em eventos do game.<br><br>
          Esses baús são apenas o começo! Fique de olho nos baús de eventos Lendário e Mítico,
          que serão lançados em breve, trazendo personagens ainda mais extraordinários para
          impulsionar suas explosões e seus ganhos. Descubra a grandeza que aguarda você - qual
          baú você vai escolher primeiro?<br><br>'
        ],
        [
          'question'=>'Como compro e abro uma caixa?',
          'answer'=>'Embarque na jornada de explosões e fortuna no Bomb PIX adquirindo nossas exclusivas
          LuckBoxes. É simples, emocionante e o primeiro passo para se tornar um mestre explosivo!<br><br>
          Passo a passo para adquirir seu baú:<br><br>
          Faça um depósito explosivo: efetue um depósito no valor mínimo da LuckBox desejada.
          Aceitamos PIX, USDT e BUSD (criptomoedas), proporcionando flexibilidade para sua
          jornada explosiva.<br><br>
          Acesse o Marketplace: com seu depósito confirmado, vá até a aba MARKETPLACE. Aqui,
          você encontrará uma seleção irresistível de LuckBoxes, cada uma guardando personagens
          únicos e oportunidades incríveis.<br><br>
          Escolha seu baú e compre: selecione a LuckBox dos seus sonhos e clique em COMPRAR.
          Seu depósito será convertido em uma chave para desbloquear explosões emocionantes e
          recompensas lucrativas.<br><br>
          Abra seu baú em "Meus Itens": após a compra, vá até a aba MEUS ITENS. Aqui, você verá
          seus bonecos conquistados e as LuckBoxes disponíveis para abertura. Clique em ABRIR e
          assista à animação emocionante enquanto seu personagem é revelado.
          Domine a arena com seus novos personagens: agora que seu personagem está disponível,
          leve-o para a arena e domine as explosões! Cada boneco traz habilidades únicas e
          estratégias para ajudá-lo a acumular ainda mais riquezas.<br><br>
          Gerencie seus itens com facilidade: na página MEUS ITENS, você pode verificar quais
          bonecos já possui, quais LuckBoxes estão prontas para abrir e planejar sua estratégia
          explosiva.<br><br>
          Está pronto para transformar seus depósitos em oportunidades explosivas? Adquira suas
          LuckBoxes agora, desbloqueie personagens incríveis e prepare-se para uma jornada
          emocionante no Bomb PIX! 💣🚀💰<br><br>
          '
        ],
        [
          'question'=>'Como funciona o jogo?',
          'answer'=>'Se você está pronto para uma experiência de jogo única, o Bomb PIX é o lugar certo! Aqui
          está um guia passo a passo para mergulhar no mundo explosivo e começar a acumular
          riquezas:<br><br>
          Modo FARM: "Riqueza Explosiva" - Faça fortuna com cada explosão!<br><br>
          Adquira sua LuckBox: para começar, adquira uma LuckBox e desbloqueie seu primeiro
          personagem. Cada personagem traz suas habilidades únicas para a arena explosiva.<br><br>
          Monte sua equipe de ataque: no modo farm, você tem a chance de ter até 20 personagens
          para o seu time dentro do mapa. Caso tenha mais de 20, selecione sabiamente quem
          participará da jornada do seu farm.<br><br>
          Venda ou troque no marketplace: se seu time estiver lotado, venda ou troque os bonecos
          excedentes no marketplace. Isso não apenas otimiza sua estratégia, mas também oferece
          oportunidades de lucro para você e para outros jogadores.<br><br>
          Quebre blocos estrategicamente: a cada 6 horas, duas vezes ao dia, inicie o modo farm e
          veja seus personagens em ação. Estrategicamente, quebre os blocos para acumular
          ganhos e fortuna.<br><br>
          Recolha os ganhos e reinicie: ao final do farm, entre no jogo, recolha seus ganhos e
          prepare-se para a próxima rodada. Você pode fazer isso duas vezes ao dia, maximizando
          suas oportunidades de lucro.<br><br>
          Modo de jogo PVP: "Explosão Royale" - Sobreviva e prospere na arena explosiva!<br><br>
          Escolha seu campeão: no modo PVP, selecione o personagem que competirá contra outros
          jogadores. Cada escolha é estratégica, pois suas vitórias significam lucros reais.<br><br>
          Sobreviva e lucre: sobreviva às explosões dos outros jogadores para ficar com os lucros
          gerados por todas as explosões. Estratégia e agilidade são essenciais para dominar a
          competição.<br><br>
          Aposte nas salas: dentro do jogo, explore as salas de apostas. Selecione suas preferidas e
          coloque suas fichas, adicionando uma camada extra de emoção e oportunidade de ganhos.<br><br>
          Agora que você conhece os caminhos para o sucesso no Bomb PIX, entre na arena e
          comece a sua jornada para se tornar um mestre explosivo! 💣🎮💰<br><br>'
        ],
        [
          'question'=>'Quantas contas posso ter?',
          'answer'=>'Sem Limites para Sua Explosiva Jornada no Bomb PIX!<br><br>
          Quando se trata de explorar o mundo do Bomb PIX, não acreditamos em limites! Aqui está
          a notícia emocionante: não há restrições no número de contas que você pode ter. Cada
          jogador tem a liberdade de criar e acessar quantas contas desejar, tudo isso sem
          complicações.<br><br>
          Crie diferentes estratégias e times para maximizar suas chances de sucesso em cada
          conta, experimentando novos personagens, estratégias e modos de jogo em cada conta,
          adicionando uma camada extra de diversidade à sua experiência.<br><br>
          Acesse todas as suas contas da mesma rede, sem complicações. Desfrute da conveniência
          de gerenciar suas explosões e riquezas em um só lugar.<br><br>
          '
        ],
        [
          'question'=>'Como posso retirar meus lucros?',
          'answer'=>'Preparado para transformar seus ganhos virtuais em dinheiro real? Aqui está tudo o que
          você precisa saber sobre os saques no Bomb PIX:<br><br>
          Todas as segundas-feiras: é o dia da semana para colher os frutos de suas explosões
          estratégicas. Marque as segundas-feiras no calendário e prepare-se para encher sua conta
          bancária com ganhos reais.<br><br>
          Valor mínimo de R$50: para garantir que seus saques sejam sempre significativos,
          estabelecemos um valor mínimo de R$50. Assim, você pode aproveitar ao máximo seus
          lucros explosivos.<br><br>
          Taxa de 4%: uma pequena taxa de 4% será aplicada para cobrir os custos de
          processamento. É uma pequena contribuição para garantir que seus ganhos cheguem até
          você de forma eficiente.<br><br>
          Prazo de 2 horas úteis: após solicitar um saque, seus ganhos estarão em sua conta em até
          2 horas úteis. Rápido, fácil e direto, para que você possa aproveitar seus lucros sem
          demora.<br><br>
          No Bomb PIX, a cada segunda-feira é uma oportunidade de transformar sua habilidade
          explosiva em dinheiro real. Continue detonando, acumulando e colhendo os frutos da sua
          maestria no jogo. 💣💰<br><br>'
        ]
      ];
    ?>
  <section class="faq">
    <img src="./img/bomb-2.png" alt="" class="bomb" />
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-gradient">faq</h2>
          <?php foreach($questions as $question){?>
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