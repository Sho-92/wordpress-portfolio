<?php
/* Template Name: custom Contact Page */
?>

<?php get_header(); ?>   

<main class="p-0 bg-contact">
    <div class="content en">
        <section id="contact-en" class="contact-section">
          <h2 class="text-4xl font-bold">Contact</h2>
          <form action="https://formspree.io/f/xanyydaa" method="POST">
            <label>
              <input type="email" name="email" autocomplete="email" placeholder="Your email :">
            </label>
            <label>
              <textarea name="message" placeholder="Please provide details about your inquiry or project."></textarea>
            </label>
            <!-- your other form fields go here -->
            <p>If you have any questions, feel free to contact me here.</p>
            <button type="submit" class="submit-button">Send</button>
          </form>
        </section>    
    </div>

    <div class="content ja" style="display: none;">

      <section id="contact-js" class="contact-section">
        <h2 class="text-4xl font-bold">Contact</h2>
        <form action="https://formspree.io/f/xanyydaa" method="POST">
          <label>
            <input type="email" name="email" autocomplete="email" placeholder="あなたのメールアドレス：">
          </label>
          <label>
            <textarea name="message" placeholder="ご質問やプロジェクトについての詳細をお知らせください。"></textarea>
          </label>
          <!-- your other form fields go here -->
          <p>ご質問がある場合は、こちらからお気軽にお問い合わせください。</p>
          <button type="submit" class="submit-button">送信</button>
        </form>

      </section>
    </div>

  </main>

<?php get_footer(); ?> 
