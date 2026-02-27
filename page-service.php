<?php
/*
Template Name: Service Hub
*/
get_header(); ?>

<!-- WebGL Canvas Background -->
<canvas id="bg-canvas" class="webgl-bg-canvas"></canvas>

<main id="content" class="home-tcg-theme relative z-10">

    <!-- Sub Page Header -->
    <section class="page-header relative z-10" style="height: 50vh; min-height: 400px; display: flex; align-items: center; justify-content: center;">
        <div class="hero-overlay-cyber"></div>
        <div class="container text-center relative z-10 pt-5">
            <div class="cyber-badge reveal">Our Services</div>
            <h1 class="hero-title cyber-glitch reveal" style="font-size: 3rem; margin-bottom: 10px;">提供サービス</h1>
            <p class="hero-subtitle reveal" style="margin-bottom: 0;">トレカビジネスのすべての課題を解決する、5つのソリューション。</p>
        </div>
    </section>

    <!-- Animated SVG Grid Line Overlay -->
    <svg class="svg-line absolute top-0 left-0 w-full pointer-events-none z-0" style="height: 1500px;" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M10,0 Q30,50 10,100 M90,0 Q70,50 90,100" fill="transparent" stroke="rgba(0,240,255,0.4)" stroke-width="0.2" vector-effect="non-scaling-stroke"></path>
    </svg>

    <!-- Services List -->
    <section class="section-padding services-section relative z-10">
        <div class="container">
            
            <div class="services-3d-grid" style="grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px;">
                
                <!-- Service 1 -->
                <a href="<?php echo home_url('/consulting/'); ?>" class="service-tcg-card reveal">
                    <div class="card-inner">
                        <div class="card-front" style="background-image: linear-gradient(rgba(11,28,62,0.8), rgba(0,0,0,0.9)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hologram_card.png');">
                            <i class="fas fa-chess-knight card-icon"></i>
                            <h3>経営コンサルティング</h3>
                            <div class="card-glow"></div>
                        </div>
                        <div class="card-back">
                            <h4 class="neon-text mb-3" style="font-size: 1.1rem; margin-bottom: 15px;">トレカ業界特化の知見</h4>
                            <p>利益改善支援、在庫最適化、相場分析、出店支援など、トレカ業界特有の仕組みを熟知した専門家が直接コンサルティングします。</p>
                            <span class="read-more">Detail <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
                
                <!-- Service 2 -->
                <a href="<?php echo home_url('/web/'); ?>" class="service-tcg-card reveal" style="transition-delay: 0.1s;">
                    <div class="card-inner">
                        <div class="card-front" style="background-image: linear-gradient(rgba(11,28,62,0.8), rgba(0,0,0,0.9)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hero_tcg.png');">
                            <i class="fas fa-desktop card-icon"></i>
                            <h3>WEB制作</h3>
                            <div class="card-glow"></div>
                        </div>
                        <div class="card-back">
                            <h4 class="neon-text mb-3" style="font-size: 1.1rem; margin-bottom: 15px;">売れるWEBを創る</h4>
                            <p>ECサイト、店舗サイト、LP制作、オリパポータル構築。トレカ特有の検索意図やユーザー体験(UX)に合わせたSEO対策済みのWEBサイトを制作。</p>
                            <span class="read-more">Detail <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>

                <!-- Service 3 -->
                <a href="<?php echo home_url('/sourcing/'); ?>" class="service-tcg-card reveal" style="transition-delay: 0.2s;">
                    <div class="card-inner">
                        <div class="card-front" style="background-image: linear-gradient(rgba(11,28,62,0.8), rgba(0,0,0,0.9)), url('<?php echo get_template_directory_uri(); ?>/assets/images/akiba_neon.png');">
                            <i class="fas fa-box-open card-icon"></i>
                            <h3>カード仕入れ代行</h3>
                            <div class="card-glow"></div>
                        </div>
                        <div class="card-back">
                            <h4 class="neon-text mb-3" style="font-size: 1.1rem; margin-bottom: 15px;">独自の卸ネットワーク</h4>
                            <p>PSAや高額カード仕入れの海外ルートを活用し、最適な在庫・利益率設計をサポート。店舗に不足している在庫を安定的かつ迅速に調達します。</p>
                            <span class="read-more">Detail <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>

                <!-- Service 4 -->
                <a href="<?php echo home_url('/marketing/'); ?>" class="service-tcg-card reveal" style="transition-delay: 0.3s;">
                    <div class="card-inner">
                        <div class="card-front" style="background-image: linear-gradient(rgba(11,28,62,0.8), rgba(0,0,0,0.9)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hologram_card.png');">
                            <i class="fas fa-bullseye card-icon"></i>
                            <h3>マーケティング支援</h3>
                            <div class="card-glow"></div>
                        </div>
                        <div class="card-back">
                            <h4 class="neon-text mb-3" style="font-size: 1.1rem; margin-bottom: 15px;">集客とリピーター獲得</h4>
                            <p>Google広告、SNS運用を通じたオリパ集客設計やLINE導線設計をデータ分析基盤から構築し、LTVを最大化させます。</p>
                            <span class="read-more">Detail <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>

                <!-- Service 5 -->
                <a href="<?php echo home_url('/system/'); ?>" class="service-tcg-card reveal" style="transition-delay: 0.4s;">
                    <div class="card-inner">
                        <div class="card-front" style="background-image: linear-gradient(rgba(11,28,62,0.8), rgba(0,0,0,0.9)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hero_tcg.png');">
                            <i class="fas fa-microchip card-icon"></i>
                            <h3>システム開発</h3>
                            <div class="card-glow"></div>
                        </div>
                        <div class="card-back">
                            <h4 class="neon-text mb-3" style="font-size: 1.1rem; margin-bottom: 15px;">ITによる業務自動化</h4>
                            <p>バーコード在庫管理、オリパ自動システム、買取自動化システム、相場取得スクレイピングなど、業務効率を劇的に向上させます。</p>
                            <span class="read-more">Detail <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="bottom-cta section-padding relative">
        <div class="cta-overlay glass"></div>
        <div class="container relative z-10 text-center">
            <h2 class="reveal" style="font-size: 2.5rem; color: #fff; margin-bottom: 15px;">どのサービスが最適か迷ったら？</h2>
            <p class="reveal" style="color: rgba(255,255,255,0.8);">私たちはお客様の現在の課題を分析し、最適なサービスを組み合わせて提案いたします。<br>まずはお気軽にご相談ください。</p>
            <div class="cta-actions reveal" style="margin-top: 30px;">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary cyber-btn hover-glow" style="padding: 15px 40px; font-size: 1.1rem;"><i class="fas fa-envelope"></i> 無料ヒアリングを申し込む</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
