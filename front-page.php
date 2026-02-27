<?php get_header(); ?>

<main id="content" class="home-tcg-theme relative z-10">

    <!-- WebGL Canvas Background -->
    <canvas id="bg-canvas" class="webgl-bg-canvas"></canvas>

    <!-- Animated SVG Grid Line Overlay -->
    <svg class="svg-line absolute top-0 left-0 w-full h-[1000px] pointer-events-none z-0" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M50,0 Q60,30 50,70 T40,100" fill="transparent" stroke="rgba(0,240,255,0.4)" stroke-width="0.2" vector-effect="non-scaling-stroke"></path>
    </svg>

    <!-- Hero Section -->
    <section class="hero tcg-hero relative z-10" id="home">
        <div class="hero-overlay-cyber"></div>
        <div class="hero-content">
            <div class="cyber-badge reveal">TCG Shop Specialist Group</div>
            <h1 class="hero-title cyber-glitch reveal" data-text="トレカショップの利益を、設計する。">トレカショップの利益を、<br>設計する。</h1>
            <p class="hero-subtitle reveal">秋葉原Rocketsはデータとテクノロジーを駆使し、<br>トレカ事業の「在庫回転率」と「利益率」を最大化します。</p>
            <div class="hero-buttons reveal">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary cyber-btn hover-glow"><i class="fas fa-comment-dots"></i> 無料相談</a>
                <a href="<?php echo home_url('/document/'); ?>" class="btn btn-secondary cyber-btn outline-glow"><i class="fas fa-file-download"></i> サービス資料DL</a>
            </div>
        </div>
        
        <div class="scroll-down-indicator">
            <span>SCROLL</span>
            <div class="mouse"><div class="wheel"></div></div>
        </div>
    </section>

    <!-- Rocketsとは？ -->
    <section class="section-padding about-rockets-section relative z-10">
        <!-- Connecting Line animation -->
        <svg class="svg-line absolute top-[-50px] left-[50%] w-[10px] h-[150px] pointer-events-none z-0" viewBox="0 0 10 100" preserveAspectRatio="none">
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
        <svg class="svg-line absolute right-0 top-0 w-full h-[200px] pointer-events-none z-0" viewBox="0 0 1000 200" preserveAspectRatio="none">
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

<?php get_footer(); ?>
