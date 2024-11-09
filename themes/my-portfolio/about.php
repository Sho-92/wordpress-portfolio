<?php
/* Template Name: Custom About Page */
?>

<?php get_header(); ?>     

<main class="p-0">
        <div class="content en">           
            <section id="about-en" class="p-4">
                <div class="about-profile-parent">
                    <div class="about-profile mt-8">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portrait.png" alt="portrait" class="rounded-image">
                        <h2 class="text-2xl font-bold mt-8">SHO MAEKAWA</h2>
                        <h2 class="text-2xl font-bold">JAPAN</h2>    
                    </div>
                    <div class="skills mt-8">
                        <h2 class="text-2xl font-bold underline">Technologies Used</h2>
                        <div class="skills-category">
                            <h3 class="text-2xl font-bold">Front-End</h3>
                            <ul>
                                <li>HTML5, CSS3, JavaScript</li>
                                <li>Frameworks : Bootstrap 5, Tailwind CSS</li>
                            </ul>
                            <h3 class="text-2xl font-bold">Back-End</h3>
                            <ul>
                                <li>PHP, Laravel</li>
                                <li>Databases : SQLite, MySQL</li>
                            </ul>
                            <h3 class="text-2xl font-bold">Tools</h3>
                            <ul>
                                <li>Git, GitHub, Visual Studio Code</li>
                                <li>Deployment : GitHub Pages, WordPress</li>
                            </ul>
                            <h3 class="text-2xl font-bold">API</h3>
                            <ul>
                                <li>Google Maps API</li>
                            </ul>
                            <h3 class="text-2xl font-bold">Design Libraries</h3>
                            <ul>
                                <li>Bootstrap Icons, FontAwesome 6</li>
                            </ul>
                        </div>
                    </div>
    
                </div>

                <div class="about-container-parent mt-8">
                    <div class="about-container">
                        <h3 class="text-2xl font-bold">About Me</h3>
                        <div class="about-details">
                            <p>Hello! I am Sho Maekawa from Japan.
                               After working in the healthcare industry for 14 years, I made a career transition into web development.
                               Currently based overseas, I am pursuing opportunities in the intersection of English and IT, leveraging my background to achieve my long-term vision.
                               I began by learning HTML and CSS, and have since acquired foundational skills in web development, including JavaScript and PHP.
                               At present, I am honing my back-end and front-end skills through hands-on projects using Laravel.
                               My ability to adapt to challenging situations, combined with a proactive approach to learning and tackling new challenges, are some of my greatest strengths, and I feel a sense of growth every day.
                               The decision to change careers was driven by a desire to make a positive impact on people's lives through technology.
                               I am committed to continuous learning and look forward to developing as a developer, with the goal of becoming a full-stack developer in the near future.
                            </p>    
                        </div>
                        
                        <p class="text-white mt-8 font-bold hover:underline cursor-pointer" onclick="toggleContent(this)">Learn More</p>
                        
                        <div  class="toggle-content hidden">
                            <h3 class="text-2xl font-bold mt-4">Past Experience</h3>
                            <div class="about-details">
                                <p> I expanded my career from Japan to an international stage, working as an acupuncturist on luxury cruise ships with One Spa World, a global leader in the spa and wellness industry. 
                                    I was nominated as one of the top 20 acupuncturists worldwide, and I excelled not only in the medical field but also in product sales, client acquisition through seminars, and new customer growth.
                                    Additionally, I demonstrated strong sales skills, effectively marketing my expertise and services. 
                                    I also played a key role in training my team, teaching them treatment techniques, sales strategies, and methods to enhance customer satisfaction through psychological approaches. 
                                    These experiences in communication, business, and leadership have significantly contributed to my current career development.
                                </p>     
                            </div>
            
            
                            <h3 class="text-2xl font-bold">Why Did I Choose This Career?</h3>
                            <div class="about-details">
                                <p> Even while working as an acupuncturist in Japan, I had a growing interest in the IT field. 
                                    During my five years working on the front lines globally, I began to contemplate the next chapter of my life and realized that I wanted to enrich people’s lives not only through healthcare but also via technology. 
                                    Interestingly, as I pursued self-study in IT, I found a surprising connection between the healthcare and tech industries: logical thinking. 
                                    Both fields require a methodical approach to problem-solving. 
                                    My skills and experiences in these areas have greatly supported my transition into the tech industry. 
                                    Although the starting point was different, I believe this career path was a natural choice for me.
                                </p>    
                            </div>
                        </div>    
                    </div>
                </div>
            </section>
        </div>
            
        <div class="content ja" style="display: none;">        
            <section id="about-js" class="p-4">
                <div class="about-profile-parent">
                
                    <div class="about-profile mt-8">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portrait.png" alt="portrait" class="rounded-image">
                        <h2 class="text-2xl font-bold mt-8">SHO MAEKAWA</h2>
                        <h2 class="text-2xl font-bold">JAPAN</h2>    
                    </div>
                    <div class="skills mt-8">
                        <h2 class="text-2xl font-bold underline">使用技術</h2>
                        <div class="skills-category">
                            <h3 class="text-2xl font-bold">フロントエンド</h3>
                            <ul>
                                <li>HTML5, CSS3, JavaScript</li>
                                <li>フレームワーク : Bootstrap 5, Tailwind CSS</li>
                            </ul>
                            <h3 class="text-2xl font-bold">バックエンド</h3>
                            <ul>
                                <li>PHP, Laravel</li>
                                <li>データベース : SQLite, MySQL</li>
                            </ul>
                            <h3 class="text-2xl font-bold">ツール</h3>
                            <ul>
                                <li>Git, GitHub, Visual Studio Code</li>
                                <li>デプロイメント : GitHub Pages, WordPress</li>
                            </ul>
                            <h3 class="text-2xl font-bold">API</h3>
                            <ul>
                                <li>Google Maps API</li>
                            </ul>
                            <h3 class="text-2xl font-bold">デザインライブラリ</h3>
                            <ul>
                                <li>Bootstrap Icons, FontAwesome 6</li>
                            </ul>
                        </div>
                    </div>
                </div>
    
                <div class="about-container-parent mt-8">
                    <div class="about-container">
                        <h3 class="text-2xl font-bold">自己紹介</h3>
                        <div class="about-details">
                            <p> こんにちは。 SHOと申します。
                                私は医療業界で14年間勤めたのちに、ウェブ開発の分野にキャリアチェンジしました。
                                現在は海外を拠点に、英語×ITの可能性を追求し、自身の経験を活かして将来のビジョンを実現するためにこの挑戦を決断しました。
                                HTMLやCSSから学び始め、JavaScriptやPHPなどのウェブ開発の基礎を習得しました。
                                現在はLaravelを活用した実践的なプロジェクトを通じて、バックエンドおよびフロントエンドのスキルを磨いています。
                                困難な状況にも柔軟に対応する決断力や、迅速に学び挑戦する積極的な姿勢は、自身の強みであり、日々成長を実感しています。
                                キャリアチェンジを決意した背景には、テクノロジーの力を通じて多くの人々に手を差し伸べたいという願いがありました。
                                近い将来にはフルスタックデベロッパーになることを目指し、これからも学び続け、開発者として成長していくことを楽しみにしています。
                            </p>    
                        </div>
                        
                        <p class="text-white mt-8 font-bold hover:underline cursor-pointer" onclick="toggleContent(this)">Learn More</p>
                        
                        <div  class="toggle-content hidden">
                            <h3 class="text-2xl font-bold mt-4">過去の経験</h3>
                            <div class="about-details">
                                <p> 鍼灸師として日本から海外へ活動を移し、世界でトップシェアを誇るOne Spa Worldのメンバーとして豪華客船で鍼灸師として働いていました。
                                    トップ20鍼灸師にノミネートされた経験があり、医療分野だけでなく、プロダクトの販売やセミナーからの集客、新規顧客の獲得にも成功しました。
                                    治療家でありながら、ビジネスにおいても高い評価を受け、世界の最前線で成果を上げてきました。
                                    また、チームメンバーに対して治療技術やセミナー・プロダクト販売のスキル、さらに心理学を用いた顧客満足度向上の方法を指導した経験もあります。
                                    これらの知識やコミュニケーションスキルは、今のキャリアの成長にも大いに寄与しています。                         
                                </p>     
                            </div>
            
                            <h3 class="text-2xl font-bold">なぜこのキャリアを選んだのか？</h3>
                            <div class="about-details">
                                <p> 日本で鍼灸師をしている時から、個人でさまざまなビジネスを行う際にこの業界にも興味を持っていました。
                                    5年ほど世界の最前線で活躍する中で、次の人生について考え、何がこれからの人生において大切なのかを模索した結果、医療分野だけでなくIT分野からもアプローチして人々の生活を豊かにすることが次の人生プランになりました。
                                    興味深いことに、この分野を自己学習していく中で、IT業界と医療業界には非常に似ている点があることに気づいたことです。
                                    それは、論理的思考です。技術的な作業と治療は非常に似ている部分も多く、どちらの分野も問題解決には特にこの思考が必須だと思います。
                                    これらの知識や経験は、現在のキャリア構築にも役立っていて、スタート地点は異なるものの、この道を選択したのは必然だったと感じています。                          
                                </p>    
                            </div>
                        </div>    
                    </div>
                </div>
            </section>    
        </div>
    </main>

<?php get_footer(); ?>    