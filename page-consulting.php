<?php
/*
Template Name: Service - Consulting
*/
get_header(); ?>

<!-- WebGL Canvas Background -->
<canvas id="bg-canvas" class="webgl-bg-canvas"></canvas>

<main id="content" class="home-tcg-theme relative z-10">

    <!-- Sub Page Header -->
    <section class="page-header relative z-10" style="height: 60vh; min-height: 400px; display: flex; align-items: center; justify-content: center; overflow: hidden;">
        <div class="hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/akiba_neon.png" alt="Consulting" class="hero-image-bg" style="opacity: 0.3;">
        </div>
        <div class="hero-overlay-cyber"></div>
        <div class="container text-center relative z-10 pt-5">
            <div class="cyber-badge reveal">01. Consulting</div>
            <h1 class="hero-title cyber-glitch reveal" style="font-size: 3.5rem; margin-bottom: 20px;">経営コンサルティング</h1>
            <p class="hero-subtitle reveal" style="max-width: 800px; margin: 0 auto;">トレカ業界の特殊なエコシステムと秋葉原の最前線データを駆使し、<br>店舗やECの「利益率」と「在庫回転率」を劇的に改善する専門コンサルティング。</p>
        </div>
    </section>

    <!-- Animated SVG Grid Line Overlay -->
    <svg class="svg-line absolute top-[60vh] left-0 w-full pointer-events-none z-0" style="height: 2000px;" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M50,0 Q60,30 20,70 T40,100" fill="transparent" stroke="rgba(0,240,255,0.4)" stroke-width="0.2" vector-effect="non-scaling-stroke"></path>
    </svg>

    <!-- Strengths / Overview -->
    <section class="section-padding relative z-10">
        <div class="container">
            <div class="cyber-panel reveal" style="margin-bottom: 60px; border-color: rgba(240,0,255,0.5); box-shadow: 0 0 30px rgba(240,0,255,0.1);">
                <div class="row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 40px;">
                    <div class="col" style="flex: 1; min-width: 300px;">
                        <h3 class="neon-text mb-3" style="font-size: 1.8rem; margin-bottom: 20px;">トレカ業界特化の圧倒的な強み</h3>
                        <p style="color: #cbd5e1; line-height: 1.8;">
                            汎用的なコンサルタントでは絶対に理解できない、「各タイトルの相場変動」「PSA鑑定の価値構造」「オリパ（オリジナルパック）の法的・倫理的かつ収益性の高い設計」「プレイヤー層とコレクター層の違い」など、現場のリアルな解像度を持って支援します。私たちは秋葉原という聖地で日々動くデータを見ています。
                        </p>
                    </div>
                    <div class="col text-center" style="flex: 0.8; min-width: 300px;">
                        <div style="font-size: 5rem; color: var(--tcg-glow-alt); filter: drop-shadow(0 0 20px rgba(240,0,255,0.8));">
                            <i class="fas fa-chess-knight"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detailed Services -->
            <div class="section-title reveal mt-5">
                <h2 style="font-size: 2.5rem;">Services Breakdown</h2>
                <p>支援内容</p>
            </div>

            <div class="cases-slider mt-5">
                <!-- item -->
                <div class="cyber-panel reveal">
                    <div class="step-icon"><i class="fas fa-chart-line"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">利益改善支援</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        薄利多売からの脱却を図ります。買取価格の最適化、高単価商材へのリソース集中、オリパの期待値と利益率の緻密な計算を行い、全体のキャッシュフローを改善します。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.1s;">
                    <div class="step-icon"><i class="fas fa-boxes"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">在庫最適化</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        不良在庫の現金化戦略と、回転率の高い「商材の選び方」を指導。独自の相場システムを併用し、損切りと投資のボーダーラインを明確に引きます。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.2s;">
                    <div class="step-icon"><i class="fas fa-search-dollar"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">相場分析</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        新弾発売時や海外の大会結果など、マクロな変動からミクロなカード1枚の相場推移までを分析し、仕入れのベストタイミングをアドバイスします。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.3s;">
                    <div class="step-icon"><i class="fas fa-store-alt"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">出店支援・FC支援</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        新規店舗の立ち上げ（立地選定、内装、ショーケース設計）からフランチャイズ展開のパッケージ化まで、実店舗ビジネスの横展開を強烈にサポートします。
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
