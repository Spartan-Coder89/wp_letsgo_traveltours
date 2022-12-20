<?php get_header(); ?>

<main>
    <div id="inner_page_banner" style="background-image: url('../common/images/inner_page_banner.jpg');">
      <section class="main_wrap">
        <h1><?php echo get_the_title($post->ID); ?></h1>
      </section>
      <div class="overlay"></div>
    </div>

    <div id="details" class="single_wrap">
      <div class="top">
        <div class="featured_img" style="background-image: url('../common/images/img_placeholder.jpg');"></div>
        <ul class="detail_list">
          <li>
            <p class="label">Location:</p>
            <p class="value">Alaska, United States of America</p>
          </li>
          <li>
            <p class="label">Flight:</p>
            <p class="value">FSC - Full Service Carrier</p>
          </li>
          <li>
            <p class="label">Board and Lodging:</p>
            <p class="value">5 Star</p>
          </li>
          <li>
            <p class="label">Meals:</p>
            <p class="value">Full board meals</p>
          </li>
          <li>
            <p class="label">Tour Guide:</p>
            <p class="value">Visa processing fee is free of charge</p>
          </li>
          <li>
            <p class="label">Visa:</p>
            <p class="value">Visa processing fee is free of charge</p>
          </li>
        </ul>
      </div>
      <div class="description">
        <p class="label">Description</p>
        <p>
          Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. 
          In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. 
          Donec sed lacinia diam. Donec auctor id purus ac scelerisque. 
          Sed ac nulla at dui luctus consequat. Maecenas dictum maximus purus sed tincidunt.
        </p>
      </div>
    </div>

    <div id="video_promotion" class="main_wrap">
      <video src="../common/video/vid_placeholder.mp4" controls></video>
    </div>

    <section id="key_highlights" class="single_wrap">
      <h2>Key Highlights</h2>
      <ul class="highlights">
        <li class="highlight">
          <img src="../common/images/single_page/ico_check.png" alt="">
          <span>
            Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, 
            scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. 
          </span>
        </li>
        <li class="highlight">
          <img src="../common/images/single_page/ico_check.png" alt="">
          <span>
            Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, 
            scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.  
            Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, 
            scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.
          </span>
        </li>
        <li class="highlight">
          <img src="../common/images/single_page/ico_check.png" alt="">
          <span>
            Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, 
            scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. 
          </span>
        </li>
      </ul>
    </section>

    <section id="itenerary" class="single_wrap">
      <h2>Itenerary</h2>
      <div id="tabs">
        <div class="tabs_nav">
          <div class="day active" data-day="1">
            Day 1
          </div>
          <div class="day" data-day="2">
            Day 2
          </div>
          <div class="day" data-day="3">
            Day 3
          </div>
          <div class="day" data-day="4">
            Day 4
          </div>
        </div>
        <div class="itenerary_list">
          <ol id="day_1" class="show">
            <li>
              Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, 
              scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. 
            </li>
            <li>
              Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, 
              scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.  
              Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, 
              scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.
            </li>
            <li>
              Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, 
              scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. 
            </li>
          </ol>
          <ol id="day_1">
            <li>
              Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, 
              scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam2.
            </li>
            <li>
              Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, 
              scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.  
              Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, 
              scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam2.
            </li>
            <li>
              Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, 
              scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam2. 
            </li>
          </ol>
        </div>
      </div>
    </section>

    <div id="call_to_action">
      <div class="single_wrap">
        <section>
          <h2>Ready To Go?</h2>
          <p>Click the button to book your destination</p>
        </section>
        <a href="" class="cta_btn">BOOK YOUR TRIP NOW</a>
      </div>
    </div>
  </main>

<?php get_footer(); ?>