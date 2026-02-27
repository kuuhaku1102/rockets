<?php
/*
Template Name: Service - Web
*/
get_header(); ?>

<!-- WebGL Canvas Background -->
<canvas id="bg-canvas" class="webgl-bg-canvas"></canvas>

<main id="content" class="home-tcg-theme relative z-10">

    <!-- Sub Page Header -->
    <section class="page-header relative z-10" style="height: 60vh; min-height: 400px; display: flex; align-items: center; justify-content: center; overflow: hidden;">
        <div class="hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_tcg.png" alt="WEB Production" class="hero-image-bg" style="opacity: 0.3;">
        </div>
        <div class="hero-overlay-cyber"></div>
        <div class="container text-center relative z-10 pt-5">
            <div class="cyber-badge reveal">02. Web Design</div>
            <h1 class="hero-title cyber-glitch reveal" style="font-size: 3.5rem; margin-bottom: 20px;">WEB制作</h1>
            <p class="hero-subtitle reveal" style="max-width: 800px; margin: 0 auto;">オリパポータルからフルスクラッチECまで。<br>「トレカファンの心理」を刺激し、売上に直結するUXを構築します。</p>
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
                    <div class="step-icon"><i class="fas fa-shopping-cart"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">ECサイト制作</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        シングルカードの細かい状態設定（微キズ・美品）からの検索機能、テーマ別の特設カテゴリ、会員ランクなど、購入意欲を高めるトレカ最強ECを構築。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.1s;">
                    <div class="step-icon"><i class="fas fa-store"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">店舗サイト制作</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        実店舗の大会カレンダー、最新の買取チラシ掲示板、アクセス情報など。店舗への足を運ばせるローカル集客用のオフィシャルサイトを作ります。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.2s;">
                    <div class="step-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">LP(ランディングページ)制作</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        特定の高額買取プロモーションや、大型オリパ完売のための集中的なLPを作成し、広告から流れてきたユーザーを逃さずコンバージョンさせます。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.3s;">
                    <div class="step-icon"><i class="fas fa-search"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">SEO対策</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        「ポケカ 買取 秋葉原」「ワンピース 〇〇 相場」といった購入・売却に直結するキーワードでの上位表示を狙い、オウンドメディアのSEO戦略を立案実行します。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal">
                    <div class="step-icon"><i class="fas fa-layer-group"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">オリパポータル構築</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        独自の演出（ガチャ演出、パック開封エフェクト）を実装したオンラインオリパを完全に自社のプラットフォームで実現し、高い利益率を確保します。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.1s;">
                    <div class="step-icon"><i class="fas fa-hand-holding-usd"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">買取サイト制作</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        郵送買取、LINE査定機能、リアルタイムの買取表システムの実装。在庫を増やすための強力な「買取専門入り口」を構築します。
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
