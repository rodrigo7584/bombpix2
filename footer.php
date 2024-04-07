<footer>
  <div class="container">
    <div class="row">
      <div class="conteudo">
        <div class="area-logo">
          <a href="index.php">
            <img src="./img/logo-2.png" alt="" class="logo" />
          </a>
        </div>
        <nav>
          <ul>
            <li>
              <a href="index.php#hero">
                <?php echo isset($translations['footer']['menu_item1']) ? $translations['footer']['menu_item1'] : '404' ?>
              </a>
            </li>
            <li>
              <a href="index.php#roadmap">
                <?php echo isset($translations['footer']['menu_item2']) ? $translations['footer']['menu_item2'] : '404' ?>
              </a>
            </li>
            <li>
              <a href="index.php#whitepaper">
                <?php echo isset($translations['footer']['menu_item3']) ? $translations['footer']['menu_item3'] : '404' ?>
              </a>
            </li>
            <li>
              <a href="index.php#bombers">
                <?php echo isset($translations['footer']['menu_item4']) ? $translations['footer']['menu_item4'] : '404' ?>
              </a>
            </li>
            <li>
              <a href="index.php#marketplace">
                <?php echo isset($translations['footer']['menu_item5']) ? $translations['footer']['menu_item5'] : '404' ?>
              </a>
            </li>
            <li>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=11956864044">
                <?php echo isset($translations['footer']['menu_item6']) ? $translations['footer']['menu_item6'] : '404' ?>
              </a>
            </li>
            <li>
              <a target="_blank" href="./doc/bombpix-pt.pdf">
                <?php echo isset($translations['footer']['menu_item7']) ? $translations['footer']['menu_item7'] : '404' ?>
              </a>
            </li>
            <li>
              <a href="#">
                <?php echo isset($translations['footer']['menu_item8']) ? $translations['footer']['menu_item8'] : '404' ?>
              </a>
            </li>
          </ul>
        </nav>
        <form action="#">
          <h2>
            <?php echo isset($translations['footer']['form_contact_title']) ? $translations['footer']['form_contact_title'] : '404' ?>
          </h2>
          <div class="form-row">
            <input type="text" placeholder="<?php echo isset($translations['footer']['form_contact_input_name']) ? $translations['footer']['form_contact_input_name'] : '404' ?>" />
            <input type="email" placeholder="<?php echo isset($translations['footer']['form_contact_input_email']) ? $translations['footer']['form_contact_input_email'] : '404' ?>" />
          </div>
          <textarea placeholder="<?php echo isset($translations['footer']['form_contact_input_message']) ? $translations['footer']['form_contact_input_message'] : '404' ?>"></textarea>
          <button class="btn" type="submit">
            <?php echo isset($translations['footer']['form_contact_button']) ? $translations['footer']['form_contact_button'] : '404' ?>
          </button>
        </form>
      </div>
    </div>
  </div>
</footer>