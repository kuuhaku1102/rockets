<?php
/*
Template Name: Service - Marketing
*/
get_header(); ?>

<!-- WebGL Canvas Background -->
<canvas id="bg-canvas" class="webgl-bg-canvas"></canvas>

<main id="content" class="home-tcg-theme relative z-10">

    <!-- Sub Page Header -->
    <section class="page-header relative z-10" style="height: 60vh; min-height: 400px; display: flex; align-items: center; justify-content: center; overflow: hidden;">
        <div class="hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hologram_card.png" alt="Marketing" class="hero-image-bg" style="opacity: 0.3;">
        </div>
        <div class="hero-overlay-cyber"></div>
        <div class="container text-center relative z-10 pt-5">
            <div class="cyber-badge reveal">04. Marketing</div>
            <h1 class="hero-title cyber-glitch reveal" style="font-size: 3.5rem; margin-bottom: 20px;">マーケティング支援</h1>
            <p class="hero-subtitle reveal" style="max-width: 800px; margin: 0 auto;">一度の購買で終わらせない。<br>「認知」から「熱狂的リピーター」へ育てる精緻なデジタル導線。</p>
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
                    <div class="step-icon"><i class="fab fa-google"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">Google広告(リスティング)</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        CPA（顧客獲得単価）を厳密に管理。「ポケカ 買取」「〇〇 発売日」など顕在層の検索キーワードを抑え、買取強化と高額商品の直販を加速させます。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.1s;">
                    <div class="step-icon"><i class="fab fa-twitter"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">SNS運用（X/Instagram他）</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        トレカ層と圧倒的に相性の良いX（旧Twitter）でのプレ企画、開封報告のUGC（口コミ）創出、炎上リスクを避けたバズ戦略とアカウント育成を代行します。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.2s;">
                    <div class="step-icon"><i class="fas fa-gift"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">オリパ集客設計</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        話題性のある「演出入りオリパ」「アド確定枠」のティザー設計から、発売日のトラフィック急増を利用したサイトへの流入・リスト獲得の導線を設計します。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.3s;">
                    <div class="step-icon"><i class="fab fa-line"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">LINE構築・導線設計</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        公式LINEのLステップ構築。オンラインくじの事前告知や、買取査定の自動化、ポイントカード連携など、ファンを囲い込むクローズドなコミュニティを設計。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal">
                    <div class="step-icon"><i class="fas fa-users"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">リピーター(LTV)設計</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        購入後のフォローアップメール、ランクに応じた限定シークレット販売への招待。一回買って終わりではなく継続的に還元される仕組みをマーケティングに乗せます。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.1s;">
                    <div class="step-icon"><i class="fas fa-chart-pie"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">データ分析基盤</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        GA4やヒートマップツールを用いた詳細なユーザー動向分析を実施し、LPの離脱率改善や「カゴ落ち」の解消など、データドリブンな改善案を継続的に提示します。
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
