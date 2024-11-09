<?php
/* Template Name: Custom Home Page */
?>


<?php get_header(); ?>
<main class="p-0 bg-shared">
      <div class="content en">
          <section class="hero-section">
                <div class="hero-overlay">
                    <h2 class="font-bold">Welcome<br> to<br> My<br> Portfolio</h2>                    
                </div>
          </section>
            
          <section id="projects-en">
              <h2 class="text-4xl font-bold text-center">Projects</h2>
                <div class="project-gallery">
                    <div class="project-category">
                        <h2 class="font-bold text-center">Front-End Developer</h2>
                        <div class="project-items-container">
                            <div class="project-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background-index.png" alt="Project 1" class="project-image">
                            </div>
                            <!-- 追加のプロジェクト --> 
                          　<div class="project-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafe-website.png" alt="Project 2" class="project-image">
                            </div>
                        </div>
                    </div>
                    <div class="project-category mt-8">
                        <h2 class="font-bold text-center">Back-End Developer</h2>
                        <div class="project-items-container">
                            <div class="project-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mytrip-logo.png" alt="Project 1" class="project-image">

                            </div>
                            <!-- 追加のプロジェクト -->
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="<?php echo get_permalink(get_page_by_path('projects')); ?>" class="text-white hover:underline ">See More</a>    
                </div>
            </section>
    
            <section id="about-en">
                <div class="about-container">
                    <h2 class="custom-about"><a href="<?php echo get_permalink(get_page_by_path('about')); ?>"> Who Am I ? </a></h2> 
                    <p class="mt-8 text-white">Learn more about my background and skills.</p>
                </div>
            </section>
    
            <section id="contact-en">
                <div class="contact-container">
                    <h2 class="custom-contact"><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">I’d Love to Hear From You !</a></h2>
                    <p class="mt-8 text-white">If you have any questions, feel free to contact me here.</p>
                </div>
            </section>
        </div>
            
        <div class="content ja" style="display: none;">
            <section class="hero-section">
                <div class="hero-overlay">
                    <h2 class="font-bold">Welcome<br> to<br> My<br> Portfolio</h2>                    
                </div>
            </section>
            
            <section id="projects-ja">
                <h2 class="text-4xl font-bold text-center">Projects</h2>
                <div class="project-gallery">
                    <div class="project-category">
                        <h2 class="font-bold text-center">フロントエンド</h2>
                        <div class="project-items-container">
                            <div class="project-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background-index.png" alt="Project 2" class="project-image">
                            </div>
                            <!-- 追加のプロジェクト -->
                            <div class="project-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafe-website.png" alt="Project 2" class="project-image">
                            </div>
                        </div>
                    </div>
                    <div class="project-category mt-8">
                        <h2 class="font-bold text-center">バックエンド</h2>
                        <div class="project-items-container">
                            <div class="project-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mytrip-logo.png" alt="Project 1" class="project-image">
                            </div>
                            <!-- 追加のプロジェクト -->
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="<?php echo get_permalink(get_page_by_path('projects')); ?>" class="text-white hover:underline ">詳細はこちら</a>    
                </div>
            </section>

            <section id="about-ja">
                <div class="about-container">
                    <h2 class="custom-about"><a href="<?php echo get_permalink(get_page_by_path('about')); ?>"> Who Am I ? 　　　　</a></h2>
                    <p class="mt-8 text-white">Learn more about my background and skills.</p>
                </div>
            </section>
    
            <section id="contact-ja">
                <div class="contact-container">
                    <h2 class="custom-contact"><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">I’d Love to Hear From You !</a></h2>
                    <p class="mt-8 text-white">If you have any questions, feel free to contact me here.</p>
                </div>
            </section>
        </div>
</main>
<?php get_footer(); ?>

