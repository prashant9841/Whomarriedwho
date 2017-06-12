
    <section id="about"> <!-- Start about -->
      <div class="about-content wow fadeIn" data-wow-delay="2s">
        <div class="container"> <!-- Container -->
        <?php 
            wp_reset_query(); ?>
        <?php echo $post->post_title; ?>
          <h2>Studio PurLit</h2> <!-- Your name or agency name here -->
          <p class="large"><?php echo types_render_field('addresss'); ?></p> <!-- Your address -->
          <p class="small">Queen Street East</p> <!-- Your website -->
          <br>
          <p class="large"> We let the quality of our work speak for us. </p> <!-- Tell more about you -->
          <p class="atext">Studio PurLit is a state of the art Media Production facility in the heart of Toronto’s finance core. Our roster consists of the best fashion photographers, graphic designers, visual effects artists, post-production visual FX gurus and sound engineers.  We are creative, clean and professional studio driven towards creating portfolio for artists, capturing moments to remember at weddings and events as well as providing with fun and relaxed photography shoots with shutterbug enthusiasts. When needed to go a step further we also provide Technology, Branding, and Media Solutions. We aim to provide our team, clients, and society with an exceptional level of engagement experience via projects that relate to clients interest – encompassed by creativity and innovation.</p>
        </div>
      </div> <!-- End container -->
    </section> <!-- End about -->