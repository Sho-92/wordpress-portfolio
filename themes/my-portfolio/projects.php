<?php
/* Template Name: Custom Projects Page */
?>

<?php get_header(); ?>    
<main class="p-0">

      <!-- 英語コンテンツ -->
      <div class="content en">
          <section id="projects-en" class="p-4">
              <h2 class="text-4xl text-center font-bold">Projects</h2>
              <div class="tab-switch mt-8">
                <button onclick="switchTab('frontend')" class="tab-button">Front-End</button>
                <button onclick="switchTab('backend')" class="tab-button">Back-End</button>
              </div>
      
              <!-- フロントエンドプロジェクト -->
              <div class="project-category-page frontend" style="display: block;">
                <div class="project-gallery-wrapper">
                  <h2 class="text-3xl font-bold">Front-End</h2>  
                  <div class="project-gallery">
                      <div class="project-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background-index.png" alt="Project 1">
                        <h3>SHO's Portfolio</h3>
                        <div class="project-detail">
                          <p>This application was created to showcase my projects and skills.
                             Through this site, I aim to highlight my technical skills and creativity via my work.
                             Additionally, I utilize this opportunity to promote personal growth by learning and implementing new technologies and design trends.
                          </p>
                          <p>* Front-End : HTML5, CSS3, Tailwind CSS, JavaScript<br>
                             * Third-party Services : Formspree<br>
                          </p>
                          <p>* GitHub Pages : <a href="https://sho-92.github.io/my-portfolio/" class="text-blue-500 hover:underline">https://sho-92.github.io/my-portfolio/</a></p>
                          <p>* GitHub Repository : <a href="https://github.com/Sho-92/my-portfolio.git" class="text-blue-500 hover:underline">https://github.com/Sho-92/my-portfolio.git</a></p>
                        </div>
                    </div>
                    <div class="project-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafe-website.png" alt="Project 2">
                      <h3>Cafe "KISSA" Website</h3>
                      <div class="project-detail">
                        <p>This is the homepage for a fictional caf&#233; named "KISSA.
                           " It features a clean design with intuitive UI/UX by incorporating product images and a YouTube video for visual engagement.
                           Designed for individuals and small business owners looking to develop a cost-effective homepage with essential functionality. 
                          </p>
                        <p>* Front-End : HTML5, CSS3, JavaScript<br>
                        </p>
                        <p>* GitHub Pages : <a href="https://sho-92.github.io/cafe-website/" class="text-blue-500 hover:underline">https://sho-92.github.io/cafe-website/</a></p>
                        <p>* GitHub Repository : <a href="https://github.com/Sho-92/cafe-website.git" class="text-blue-500 hover:underline">https://github.com/Sho-92/cafe-website.git</a></p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <!-- バックエンドプロジェクト -->
              <div class="project-category-page backend" style="display: none;">
                <div class="project-gallery-wrapper">
                  <h2 class="text-3xl font-bold">Back-End</h2>  
                  <div class="project-gallery">
                      <div class="project-item">
                        <a href="#" class="open-modal" data-video-src="<?php echo get_template_directory_uri(); ?>/assets/images/mytrip.mp4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mytrip.png" alt="Project 1"></a>
                        <h3>My Trip</h3>
                        <div class="project-detail">
                          <p>This app is designed to simplify travel schedule management.
                            It is allow users to manage their schedules, transportation, accommodation, and checklists, categorized by each trip.
                            All the necessary travel management features are combined into one convenient platform.</p>
                          <p>* Front-End : HTML5, Bootstrap5, Bootstrap Icons, FontAwesome6, FullCalendar, JavaScript<br>
                            * Back-End : Laravel 11, SQLite<br>
                            * API Integration : Google Maps API
                          </p>
                          <p>* GitHub Repository : <a href="https://github.com/Sho-92/MyTrip-app.git" class="text-blue-500 hover:underline">https://github.com/Sho-92/MyTrip-app.git</a></p>
                          <p>* Preview the App : <a href="#" class="open-modal text-blue-500 hover:underline" data-video-src="<?php echo get_template_directory_uri(); ?>/assets/images/mytrip.mp4">Watch Now</a></p>
                        </div>
                      </div>   
                    </div>
                </div>                  
              </div>
          </section>
      </div>

      <!-- 日本語コンテンツ -->
      <div class="content ja" style="display: none;">
          <section id="projects-ja" class="p-4">
            <h2 class="text-4xl text-center font-bold">Projects</h2>
              <div class="tab-switch mt-8">
                <button onclick="switchTab('frontend')" class="tab-button">フロントエンド</button>
                <button onclick="switchTab('backend')" class="tab-button">バックエンド</button>
              </div>
      
              <!-- フロントエンドプロジェクト -->
              <div class="project-category-page frontend" style="display: block;">
                <div class="project-gallery-wrapper">
                  <h2 class="text-3xl font-bold">Front-End</h2>  
                  <div class="project-gallery">
                      <div class="project-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background-index.png" alt="Project 1">
                        <h3>SHO's Portfolio</h3>
                        <div class="project-detail">
                          <p>こちらは自身のプロジェクトやスキルを紹介するために作成しました。
                             このサイトでは、自身の作品を通じて技術的なスキルとクリエイティビティをアピールします。 
                             また、個人的な成長を促進するために、新しい技術やデザインのトレンドを学び実践する機会として利用しています。
                          </p>
                           <p>* Front-End : HTML5, CSS3, Tailwind CSS, JavaScript<br>
                              * Third-party Services : Formspree<br>
                           </p>
                           <p>* GitHub Pages : <a href="https://sho-92.github.io/my-portfolio/" class="text-blue-500 hover:underline">https://sho-92.github.io/my-portfolio/</a></p>
                           <p>* GitHub リポジトリ : <a href="https://github.com/Sho-92/my-portfolio.git" class="text-blue-500 hover:underline">https://github.com/Sho-92/my-portfolio.git</a></p>
                        </div>
                    </div>
<div class="project-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafe-website.png" alt="Project 2">
                        <h3>Cafe "KISSA" Website</h3>
                        <div class="project-detail">
                          <p>架空のカフェ「KISSA」をテーマにしたホームページです。
                             商品紹介にイメージ画像とYouTube動画を組み合わせ、シンプルながらもユーザーインターフェース（UI）とユーザー体験（UX）を意識したデザインを実現しました。
                             低コストで必要最低限の機能を備えたホームページ開発を希望する個人や小規模事業者向けに設計されたサンプル作品です。
                          </p>
                           <p>* Front-End : HTML5, CSS3, JavaScript<br>
                           </p>
                           <p>* GitHub Pages : <a href="https://sho-92.github.io/cafe-website/" class="text-blue-500 hover:underline">https://sho-92.github.io/cafe-website/</a></p>
                           <p>* GitHub リポジトリ : <a href="https://github.com/Sho-92/cafe-website.git" class="text-blue-500 hover:underline">https://github.com/Sho-92/cafe-website.git</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- バックエンドプロジェクト -->
              <div class="project-category-page backend" style="display: none;">
                <div class="project-gallery-wrapper">
                  <h2 class="text-3xl font-bold">Back-End</h2>  
                  <div class="project-gallery">
                      <div class="project-item">
                        <a href="#" class="open-modal" data-video-src="<?php echo get_template_directory_uri(); ?>/assets/images/mytrip.mp4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mytrip.png" alt="Project 1"></a>
                        <h3>My Trip</h3>
                        <div class="project-detail">
                          <p>このアプリは、旅行スケジュール管理を簡素化するために設計されています。
                            ユーザーが旅行ごとにスケジュール、交通手段、宿泊施設、チェックリストを管理できるようになっています。
                            すべての必要な旅行管理機能が一つの便利なプラットフォームに統合されています。</p>
                          <p>* フロントエンド : HTML5, Bootstrap5, Bootstrap Icons, FontAwesome6, FullCalendar, JavaScript<br>
                             * バックエンド : Laravel 11, SQLite<br>
                             * API 統合 : Google Maps API
                          </p>
                          <p>* GitHub リポジトリ : <a href="https://github.com/Sho-92/MyTrip-app.git" class="text-blue-500 hover:underline">https://github.com/Sho-92/MyTrip-app.git</a></p>
                          <p>* 紹介動画 : <a href="#" class="open-modal text-blue-500 hover:underline" data-video-src="<?php echo get_template_directory_uri(); ?>/assets/images/mytrip.mp4">今すぐ見る</a></p>
                        </div>
                      </div>   
                    </div>
                </div>                  
              </div>
            </section>
        </div>
    </main>
<?php get_footer(); ?>