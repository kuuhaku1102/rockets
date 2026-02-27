<?php get_header(); ?>

<!-- Secret Hideout Corridor Background (CSS/GSAP Animation) -->
<div class="hideout-corridor">
    <div class="corridor-tunnel">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
    </div>
    <div class="fog-overlay"></div>
</div>

<main id="content" class="home-tcg-theme relative z-10">

    <!-- Animated SVG Grid Line Overlay -->
    <svg class="svg-line absolute top-0 left-0 w-full pointer-events-none z-0" style="height: 1000px;" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M50,0 Q60,30 50,70 T40,100" fill="transparent" stroke="rgba(0,240,255,0.4)" stroke-width="0.2" vector-effect="non-scaling-stroke"></path>
    </svg>

    <!-- Hero Section (Team Rocket / Villain Vibe) -->
    <section class="hero tcg-hero relative z-10" id="home" style="overflow: hidden;">
        
        <!-- Giant Team Rocket background 'R' SVG (GSAP animation target) -->
        <svg id="rocket-r-bg" class="absolute z-0 pointer-events-none" style="top: 50%; right: -5%; transform: translateY(-50%); width: 60vw; height: auto; max-width: 800px; filter: drop-shadow(0 0 20px rgba(150, 150, 150, 0.5));" viewBox="0 0 200 250">
            <!-- R letterform path -->
            <path class="draw-r-path" d="M 40 20 L 140 20 C 180 20 180 100 140 100 L 40 100 M 40 20 L 40 230 M 100 100 L 160 230" fill="transparent" stroke="#e2e8f0" stroke-width="25" stroke-linecap="square" stroke-linejoin="miter"></path>
        </svg>

        <div class="hero-overlay-cyber" style="background: radial-gradient(circle at center, transparent 0%, rgba(5,0,2,0.8) 100%);"></div>
        
        <div class="hero-content relative z-10">
            <div class="cyber-badge reveal" style="border-color: #cbd5e1; color: #cbd5e1; background: rgba(203, 213, 225, 0.1); text-shadow: 0 0 10px rgba(203, 213, 225, 0.5);">なんだかんだと課題があれば、解決するのが世の情け。</div>
            <h1 class="hero-title cyber-glitch reveal" data-text="トレカ業界の利益を、支配する。" style="text-shadow: 2px 2px 0px rgba(255,0,51,0.5), -2px -2px 0px rgba(100,100,100,0.8);">トレカ業界の利益を、<br>支配する。</h1>
            <p class="hero-subtitle reveal" style="font-weight: bold; text-shadow: 0 0 10px #000; color: #f1f5f9;">秋葉原Rocketsはデータとテクノロジーを駆使し、<br>トレカ事業の「在庫回転率」と「利益率」を最大化します。</p>
            <div class="hero-buttons reveal">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary cyber-btn hover-glow" style="background: linear-gradient(90deg, #475569, #1e293b); border: 1px solid #94a3b8; box-shadow: 0 0 15px rgba(255,255,255,0.2);"><i class="fas fa-comment-dots"></i> 無料相談</a>
                <a href="<?php echo home_url('/document/'); ?>" class="btn btn-secondary cyber-btn outline-glow" style="border-color: #cbd5e1; color: #cbd5e1;"><i class="fas fa-file-download"></i> サービス資料DL</a>
            </div>
        </div>
        
        <div class="scroll-down-indicator">
            <span style="color: #ff0033;">SCROLL</span>
            <div class="mouse" style="border-color: #ff0033;"><div class="wheel" style="background: #ff0033;"></div></div>
        </div>
    </section>

    <!-- Rocketsとは？ -->
    <section class="section-padding about-rockets-section relative z-10">
        <!-- Connecting Line animation -->
        <svg class="svg-line absolute top-[-50px] pointer-events-none z-0" style="left:50%; transform:translateX(-50%); width:10px; height:150px;" viewBox="0 0 10 100" preserveAspectRatio="none">
            <path d="M5,0 L5,100" fill="transparent" stroke="rgba(240,0,255,0.6)" stroke-width="2" stroke-dasharray="5 5" vector-effect="non-scaling-stroke"></path>
        </svg>
        <div class="container">
            <div class="section-title reveal">
                <h2>Why Rockets?</h2>
                <p>Rocketsとは？</p>
            </div>
            
            <div class="about-rockets-grid">
                <div class="about-rockets-text reveal">
                    <h3>秋葉原から、トレカビジネスの最前線をハックする。</h3>
                    <p class="mb-4">私たちは、世界有数のカードゲームの聖地「秋葉原」を拠点にするトレカ専門のコンサルティング＆開発チームです。</p>
                    <ul class="check-list">
                        <li><i class="fas fa-check-circle neon-text"></i> <strong>トレカ専門コンサルである理由</strong>：最新の相場変動や独自のエコシステムを深く理解。</li>
                        <li><i class="fas fa-check-circle neon-text"></i> <strong>秋葉原拠点の信頼性</strong>：聖地の最新トレンドとリアルな熱量を常にキャッチアップ。</li>
                        <li><i class="fas fa-check-circle neon-text"></i> <strong>確かな実績</strong>：多数の実店舗・ECサイトの利益水準を数百％改善した豊富なデータ。</li>
                    </ul>
                </div>
                <div class="about-rockets-image relative reveal">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/akiba_neon.png" alt="Akihabara Base" class="cyber-frame-img">
                    <div class="floating-hologram">
                        <i class="fas fa-chart-line"></i>
                        <span>Profit +320%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 提供サービス一覧 -->
    <section class="section-padding services-section relative">
        <div class="container">
            <div class="section-title reveal">
                <h2>Our Services</h2>
                <p>提供サービス一覧</p>
            </div>
            
            <div class="services-3d-grid">
                <!-- Service 1 -->
                <a href="<?php echo home_url('/service/consulting/'); ?>" class="service-tcg-card reveal">
                    <div class="card-inner">
                        <div class="card-front" style="background-image: linear-gradient(rgba(11,28,62,0.8), rgba(0,0,0,0.9)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hologram_card.png');">
                            <i class="fas fa-chess-knight card-icon"></i>
                            <h3>経営コンサル</h3>
                            <div class="card-glow"></div>
                        </div>
                        <div class="card-back">
                            <p>利益改善支援、在庫最適化、相場分析、出店支援など、トレカ業界特化の戦略を提供。</p>
                            <span class="read-more">Detail <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
                
                <!-- Service 2 -->
                <a href="<?php echo home_url('/service/web/'); ?>" class="service-tcg-card reveal" style="transition-delay: 0.1s;">
                    <div class="card-inner">
                        <div class="card-front" style="background-image: linear-gradient(rgba(11,28,62,0.8), rgba(0,0,0,0.9)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hero_tcg.png');">
                            <i class="fas fa-desktop card-icon"></i>
                            <h3>WEB制作</h3>
                            <div class="card-glow"></div>
                        </div>
                        <div class="card-back">
                            <p>ECサイト、店舗サイト、LP、オリパポータル構築。SEO対策を含めた強いWEB基盤を。</p>
                            <span class="read-more">Detail <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>

                <!-- Service 3 -->
                <a href="<?php echo home_url('/service/sourcing/'); ?>" class="service-tcg-card reveal" style="transition-delay: 0.2s;">
                    <div class="card-inner">
                        <div class="card-front" style="background-image: linear-gradient(rgba(11,28,62,0.8), rgba(0,0,0,0.9)), url('<?php echo get_template_directory_uri(); ?>/assets/images/akiba_neon.png');">
                            <i class="fas fa-box-open card-icon"></i>
                            <h3>カード仕入れ代行</h3>
                            <div class="card-glow"></div>
                        </div>
                        <div class="card-back">
                            <p>PSA/高額カード、海外ルート等独自の卸ネットワークを駆使した最適な在庫確保。</p>
                            <span class="read-more">Detail <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>

                <!-- Service 4 -->
                <a href="<?php echo home_url('/service/marketing/'); ?>" class="service-tcg-card reveal" style="transition-delay: 0.3s;">
                    <div class="card-inner">
                        <div class="card-front" style="background-image: linear-gradient(rgba(11,28,62,0.8), rgba(0,0,0,0.9)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hologram_card.png');">
                            <i class="fas fa-bullseye card-icon"></i>
                            <h3>マーケティング支援</h3>
                            <div class="card-glow"></div>
                        </div>
                        <div class="card-back">
                            <p>オリパ集客設計、LINE導線、SNS運用。デジタルでのリピーター獲得戦略。</p>
                            <span class="read-more">Detail <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>

                <!-- Service 5 -->
                <a href="<?php echo home_url('/service/system/'); ?>" class="service-tcg-card reveal" style="transition-delay: 0.4s;">
                    <div class="card-inner">
                        <div class="card-front" style="background-image: linear-gradient(rgba(11,28,62,0.8), rgba(0,0,0,0.9)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hero_tcg.png');">
                            <i class="fas fa-microchip card-icon"></i>
                            <h3>システム開発</h3>
                            <div class="card-glow"></div>
                        </div>
                        <div class="card-back">
                            <p>在庫管理、オリパシステム作成、相場スクレイピングなど専用システムの開発・導入。</p>
                            <span class="read-more">Detail <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="text-center mt-5 reveal">
                <a href="<?php echo home_url('/service/'); ?>" class="btn btn-secondary cyber-btn outline-glow">全サービスを見る</a>
            </div>
        </div>
    </section>

    <!-- 導入事例 -->
    <section class="section-padding cases-section relative z-10">
        <!-- SVG Circuit line for case items -->
        <svg class="svg-line absolute right-0 top-0 w-full pointer-events-none z-0" style="height:200px;" viewBox="0 0 1000 200" preserveAspectRatio="none">
            <path d="M0,100 L300,100 L350,150 L800,150 L900,50 L1000,50" fill="transparent" stroke="rgba(0,240,255,0.2)" stroke-width="2" vector-effect="non-scaling-stroke"></path>
        </svg>
        <div class="container">
            <div class="section-title reveal">
                <h2>Case Studies</h2>
                <p>導入事例</p>
            </div>
            
            <div class="cases-slider">
                <div class="case-item cyber-panel reveal">
                    <div class="case-header">
                        <span class="badge neon-badge">売上改善</span>
                        <h4>A社様（大手トレカショップ）</h4>
                    </div>
                    <div class="case-body">
                        <div class="data-row">
                            <span class="label">Before</span>
                            <span class="val bad">月商1,000万</span>
                        </div>
                        <div class="data-row">
                            <span class="label">After</span>
                            <span class="val good">月商2,500万 (2.5倍)</span>
                        </div>
                        <p class="case-desc">独自の相場データ分析による買取強化と、オンラインオリパの導線改善を実施。</p>
                    </div>
                </div>

                <div class="case-item cyber-panel reveal" style="transition-delay:0.1s;">
                    <div class="case-header">
                        <span class="badge neon-badge">在庫最適化</span>
                        <h4>B社様（FC店舗）</h4>
                    </div>
                    <div class="case-body">
                        <div class="data-row">
                            <span class="label">Before</span>
                            <span class="val bad">不良在庫30%</span>
                        </div>
                        <div class="data-row">
                            <span class="label">After</span>
                            <span class="val good">不良在庫5%未満へ</span>
                        </div>
                        <p class="case-desc">在庫管理システムの導入と仕入れルートの見直しにより、回転率が劇的に向上。</p>
                    </div>
                </div>

                <div class="case-item cyber-panel reveal" style="transition-delay:0.2s;">
                    <div class="case-header">
                        <span class="badge neon-badge">新規立ち上げ</span>
                        <h4>C社様（新規参入EC）</h4>
                    </div>
                    <div class="case-body">
                        <div class="data-row">
                            <span class="label">実績</span>
                            <span class="val good">初月黒字化達成</span>
                        </div>
                        <p class="case-desc"><br>WEB制作から商材仕入れ、広告運用までをワンストップで支援。</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- ご相談の流れ -->
    <section class="section-padding flow-section relative">
        <div class="container">
            <div class="section-title reveal">
                <h2>Our Flow</h2>
                <p>ご相談の流れ</p>
            </div>
            
            <div class="flow-steps">
                <div class="step cyber-panel reveal">
                    <div class="step-num">01</div>
                    <div class="step-icon"><i class="fas fa-comments"></i></div>
                    <h4>ヒアリング</h4>
                    <p>現状の課題、目標、予算などを詳細にお伺いします。</p>
                </div>
                <!-- Connector -->
                <div class="step-connector reveal"><i class="fas fa-chevron-right"></i></div>
                
                <div class="step cyber-panel reveal" style="transition-delay: 0.1s">
                    <div class="step-num">02</div>
                    <div class="step-icon"><i class="fas fa-search-dollar"></i></div>
                    <h4>分析・プラン提案</h4>
                    <p>相場データと競合分析を基に、最短で利益が出るプランを提示。</p>
                </div>
                <!-- Connector -->
                <div class="step-connector reveal" style="transition-delay: 0.1s"><i class="fas fa-chevron-right"></i></div>
                
                <div class="step cyber-panel reveal" style="transition-delay: 0.2s">
                    <div class="step-num">03</div>
                    <div class="step-icon"><i class="fas fa-rocket"></i></div>
                    <h4>施策実行</h4>
                    <p>WEB制作、システム導入、仕入れなどを一気に実行します。</p>
                </div>
                <!-- Connector -->
                <div class="step-connector reveal" style="transition-delay: 0.2s"><i class="fas fa-chevron-right"></i></div>
                
                <div class="step cyber-panel reveal" style="transition-delay: 0.3s">
                    <div class="step-num">04</div>
                    <div class="step-icon"><i class="fas fa-sync-alt"></i></div>
                    <h4>継続改善</h4>
                    <p>データを見ながらPDCAを回し、継続的な成長をサポート。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="bottom-cta section-padding relative">
        <div class="cta-bg-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hologram_card.png" alt="Hologram Background">
        </div>
        <div class="cta-overlay glass"></div>
        <div class="container relative z-10 text-center">
            <h2 class="reveal">Next Turn Is Yours.</h2>
            <p class="reveal">トレカビジネスの常識を覆す準備はできましたか？</p>
            <div class="cta-actions reveal mt-4">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary cyber-btn hover-glow"><i class="fas fa-envelope"></i> 無料相談・お問い合わせ</a>
            </div>
        </div>
    </section>

</main>

<!-- Custom Corridor GSAP Interactive Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    // GSAP Walkthrough Corridor Twist and Dive on Scroll
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.to('.corridor-tunnel', {
            rotationZ: 10,
            rotationX: 5,
            y: 80, // slight sinking feeling
            scrollTrigger: {
                trigger: "body",
                start: "top top",
                end: "bottom bottom",
                scrub: 1.5
            }
        });
    }
});
</script>

<?php get_footer(); ?>
