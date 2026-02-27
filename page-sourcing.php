<?php
/*
Template Name: Service - Sourcing
*/
get_header(); ?>

<!-- WebGL Canvas Background -->
<canvas id="bg-canvas" class="webgl-bg-canvas"></canvas>

<main id="content" class="home-tcg-theme relative z-10">

    <!-- Sub Page Header -->
    <section class="page-header relative z-10" style="height: 60vh; min-height: 400px; display: flex; align-items: center; justify-content: center; overflow: hidden;">
        <div class="hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/akiba_neon.png" alt="Sourcing" class="hero-image-bg" style="opacity: 0.3;">
        </div>
        <div class="hero-overlay-cyber"></div>
        <div class="container text-center relative z-10 pt-5">
            <div class="cyber-badge reveal">03. Card Sourcing</div>
            <h1 class="hero-title cyber-glitch reveal" style="font-size: 3.5rem; margin-bottom: 20px;">カード仕入れ代行</h1>
            <p class="hero-subtitle reveal" style="max-width: 800px; margin: 0 auto;">安定した供給ラインは、すべての事業の根幹。<br>独自ルートと卸ネットワークで「売れる在庫」をお届けします。</p>
        </div>
    </section>

    <!-- Animated SVG Grid Line Overlay -->
    <svg class="svg-line absolute top-[60vh] left-0 w-full pointer-events-none z-0" style="height: 2000px;" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M50,0 Q60,30 20,70 T40,100" fill="transparent" stroke="rgba(0,240,255,0.4)" stroke-width="0.2" vector-effect="non-scaling-stroke"></path>
    </svg>

    <section class="section-padding relative z-10">
        <div class="container">
            
            <div class="section-title reveal">
                <h2 style="font-size: 2.5rem;">Services Breakdown</h2>
                <p>支援内容</p>
            </div>

            <div class="cases-slider mt-5">
                <!-- item -->
                <div class="cyber-panel reveal">
                    <div class="step-icon"><i class="fas fa-network-wired"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">卸ネットワーク</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        秋葉原に拠点を置くRocketsならではの業界ネットワーク。一般流通では確保が難しい新品ボックスや優良バルクの安定供給ルートを提供します。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.1s;">
                    <div class="step-icon"><i class="fas fa-gem"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">PSA/高額カード仕入れ</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        話題の人気PSA10カードやコレクター向け超高額プロモカードの市場買い付け代行。オリパの大当たり枠に必要な目玉商材を用意します。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.2s;">
                    <div class="step-icon"><i class="fas fa-globe"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">海外ルート開拓</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        海外代理店やバイヤーとの直接取引による、英語版、中国語版、その他海外限定商品の買い付け代行。品揃えの圧倒的な差別化を図ります。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.3s;">
                    <div class="step-icon"><i class="fas fa-boxes"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">在庫戦略設計</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        闇雲に仕入れるのではなく、店舗の立地や客層、ECのターゲットに合わせた「最適な陳列」「売れ筋の比率」を算出し、予算分配を設計します。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal">
                    <div class="step-icon"><i class="fas fa-percent"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">利益率設計</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        「この仕入れ値であれば、オリパの還元のうち◯枠に入れれば最終利益が◯%残る」といった、商品到着後の出口戦略と利益率まで設計した状態で納品します。
                    </p>
                </div>
            </div>
            
            <div class="text-center mt-5 pt-5 reveal">
                <a href="<?php echo home_url('/service/'); ?>" class="btn btn-secondary outline-glow" style="padding: 12px 30px;"><i class="fas fa-arrow-left"></i> サービス一覧に戻る</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
