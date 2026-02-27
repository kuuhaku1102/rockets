<?php
/*
Template Name: Strengths
*/
get_header(); ?>

<!-- WebGL Canvas Background -->
<canvas id="bg-canvas" class="webgl-bg-canvas"></canvas>

<main id="content" class="home-tcg-theme relative z-10 overflow-hidden">

    <!-- Sub Page Header -->
    <section class="page-header relative z-10" style="height: 50vh; min-height: 400px; display: flex; align-items: center; justify-content: center;">
        <div class="hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_tcg.png" alt="Rockets Strengths" class="hero-image-bg" style="opacity: 0.3; filter: hue-rotate(90deg);">
        </div>
        <div class="hero-overlay-cyber"></div>
        <div class="container text-center relative z-10 pt-5">
            <div class="cyber-badge reveal" style="border-color: #4ade80; color: #4ade80; background: rgba(74,222,128,0.1);">Our Strengths</div>
            <h1 class="hero-title cyber-glitch reveal" style="font-size: 3.5rem; margin-bottom: 20px; text-shadow: 0 0 20px rgba(74,222,128,0.5);">Rocketsの強み</h1>
            <p class="hero-subtitle reveal" style="max-width: 800px; margin: 0 auto;">なぜ秋葉原Rocketsが、結果を出し続けられるのか。<br>私たちがトレカ業界のグロースハックで選ばれる5つの理由。</p>
        </div>
    </section>

    <!-- Animated SVG Data Link Overlay -->
    <svg class="svg-line absolute top-[50vh] left-0 w-full pointer-events-none z-0" style="height: 3500px;" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M50,0 L30,20 L30,35 L70,55 L70,75 L50,90 L50,100" fill="transparent" stroke="rgba(74,222,128,0.3)" stroke-width="0.3" stroke-dasharray="2 2" vector-effect="non-scaling-stroke"></path>
    </svg>

    <!-- Strengths Content -->
    <section class="section-padding relative z-10">
        <div class="container">
            
            <div class="nodes-layout" style="display: flex; flex-direction: column; gap: 80px; position: relative;">
                
                <!-- Central pulsing line (CSS) -->
                <div class="core-line" style="position: absolute; top: 0; bottom: 0; left: 50%; width: 2px; background: linear-gradient(to bottom, transparent, rgba(74,222,128,0.5), transparent); transform: translateX(-50%); z-index: -1;"></div>

                <!-- Strength 01 -->
                <div class="strength-node reveal" style="display: flex; justify-content: space-between; align-items: center; gap: 40px; position: relative;">
                    <!-- Node Point -->
                    <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 24px; height: 24px; background: var(--tcg-bg); border: 4px solid #4ade80; border-radius: 50%; box-shadow: 0 0 20px rgba(74,222,128,0.8); z-index: 2;"></div>
                    
                    <div class="half-block text-right" style="flex: 1; text-align: right; padding-right: 50px;">
                        <span class="neon-text" style="font-size: 4rem; font-weight: 900; opacity: 0.2; position: absolute; top: -20px; left: 30%;">01</span>
                        <h3 style="color: #fff; font-size: 2rem; margin-bottom: 15px;">なぜトレカ特化なのか</h3>
                        <p style="color: #cbd5e1; line-height: 1.8;">
                            汎用的なコンサルタントや制作会社では、カードゲーム業界特有の「相場変動の激しさ」「独特なユーザー心理」「パックとシングルの歪な関係性」を理解できません。<br>
                            私たちは、全てのリソースをトレカ領域に全振りすることで、そのエコシステムを完全に解明しています。だからこそ、表面的なデザインではなく、<strong>根底から利益を生み出すロジック</strong>を提供できるのです。
                        </p>
                    </div>
                    <div class="half-block img-block" style="flex: 1; padding-left: 50px;">
                        <div class="cyber-panel" style="border-color: rgba(74,222,128,0.3); background: rgba(74,222,128,0.05); text-align: center; padding: 40px;">
                            <i class="fas fa-bullseye" style="font-size: 4rem; color: #4ade80;"></i>
                            <h4 style="color: #4ade80; margin-top: 20px;">Focus</h4>
                        </div>
                    </div>
                </div>

                <!-- Strength 02 -->
                <div class="strength-node reverse reveal" style="display: flex; flex-direction: row-reverse; justify-content: space-between; align-items: center; gap: 40px; position: relative;">
                    <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 24px; height: 24px; background: var(--tcg-bg); border: 4px solid #00f0ff; border-radius: 50%; box-shadow: 0 0 20px rgba(0,240,255,0.8); z-index: 2;"></div>
                    
                    <div class="half-block text-left" style="flex: 1; text-align: left; padding-left: 50px;">
                        <span class="neon-text" style="font-size: 4rem; font-weight: 900; opacity: 0.2; position: absolute; top: -20px; right: 30%; color: #00f0ff;">02</span>
                        <h3 style="color: #fff; font-size: 2rem; margin-bottom: 15px;">秋葉原拠点の意味</h3>
                        <p style="color: #cbd5e1; line-height: 1.8;">
                            日本のポップカルチャーの中心であり、世界有数のカードショップ密集地「秋葉原」。<br>
                            この地には毎日、国内外から膨大なコレクターとプレイヤー、そして億単位の資金が押し寄せます。Rocketsが秋葉原に拠点を置く理由は、<strong>市場の熱狂とトレンドの発生源に直接触れ、誰よりも早く一次情報を獲得する</strong>ためです。ネットの二次情報ではない、リアルな温度感を戦略に活かします。
                        </p>
                    </div>
                    <div class="half-block img-block" style="flex: 1; padding-right: 50px;">
                        <div class="cyber-panel" style="border-color: rgba(0,240,255,0.3); background: rgba(0,240,255,0.05); text-align: center; padding: 40px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/akiba_neon.png" alt="Akihabara" style="width: 100%; border-radius: 8px; filter: contrast(1.2);">
                        </div>
                    </div>
                </div>

                <!-- Strength 03 -->
                <div class="strength-node reveal" style="display: flex; justify-content: space-between; align-items: center; gap: 40px; position: relative;">
                    <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 24px; height: 24px; background: var(--tcg-bg); border: 4px solid #f000ff; border-radius: 50%; box-shadow: 0 0 20px rgba(240,0,255,0.8); z-index: 2;"></div>
                    
                    <div class="half-block text-right" style="flex: 1; text-align: right; padding-right: 50px;">
                        <span class="neon-text" style="font-size: 4rem; font-weight: 900; opacity: 0.2; position: absolute; top: -20px; left: 30%; color: #f000ff;">03</span>
                        <h3 style="color: #fff; font-size: 2rem; margin-bottom: 15px;">独自スクレイピングと相場データ</h3>
                        <p style="color: #cbd5e1; line-height: 1.8;">
                            私たちは経験や勘だけでアドバイスすることはありません。<br>
                            国内外の膨大な取引履歴、フリマアプリの成約データ、競合店の実売価格を24時間監視する<strong>独自の相場スクレイピングシステム</strong>を保有しています。精緻なデータ分析に基づき、「どのカードをいつ買い、いつ売るべきか」というデータドリブンな意思決定をクライアントに提供します。
                        </p>
                    </div>
                    <div class="half-block img-block" style="flex: 1; padding-left: 50px;">
                        <div class="cyber-panel" style="border-color: rgba(240,0,255,0.3); background: rgba(240,0,255,0.05); text-align: center; padding: 40px;">
                            <i class="fas fa-chart-network" style="font-size: 4rem; color: #f000ff;"></i><i class="fas fa-database" style="font-size: 4rem; color: #f000ff;"></i>
                            <h4 style="color: #f000ff; margin-top: 20px;">Data Driven</h4>
                        </div>
                    </div>
                </div>

                <!-- Strength 04 -->
                <div class="strength-node reverse reveal" style="display: flex; flex-direction: row-reverse; justify-content: space-between; align-items: center; gap: 40px; position: relative;">
                    <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 24px; height: 24px; background: var(--tcg-bg); border: 4px solid #fbbc05; border-radius: 50%; box-shadow: 0 0 20px rgba(251,188,5,0.8); z-index: 2;"></div>
                    
                    <div class="half-block text-left" style="flex: 1; text-align: left; padding-left: 50px;">
                        <span class="neon-text" style="font-size: 4rem; font-weight: 900; opacity: 0.2; position: absolute; top: -20px; right: 30%; color: #fbbc05;">04</span>
                        <h3 style="color: #fff; font-size: 2rem; margin-bottom: 15px;">業界を熟知した「実務経験」</h3>
                        <p style="color: #cbd5e1; line-height: 1.8;">
                            口を出すだけのコンサルではありません。<br>
                            私たち自身が実店舗の運営支援、イベントの開催、オンラインオリパの立ち上げにおいて泥臭い第一線を経験しています。スタッフの人材育成、陳列のコツ、炎上しないレギュレーション作成に至るまで、<strong>現場で血肉となった「生きているノウハウ」</strong>だけを提供し、クライアントと共に汗を流します。
                        </p>
                    </div>
                    <div class="half-block img-block" style="flex: 1; padding-right: 50px;">
                        <div class="cyber-panel" style="border-color: rgba(251,188,5,0.3); background: rgba(251,188,5,0.05); text-align: center; padding: 40px;">
                            <i class="fas fa-hands-helping" style="font-size: 4rem; color: #fbbc05;"></i>
                            <h4 style="color: #fbbc05; margin-top: 20px;">Hands-on</h4>
                        </div>
                    </div>
                </div>

                <!-- Strength 05 -->
                <div class="strength-node reveal" style="display: flex; justify-content: space-between; align-items: center; gap: 40px; position: relative;">
                    <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 24px; height: 24px; background: var(--tcg-bg); border: 4px solid #ea4335; border-radius: 50%; box-shadow: 0 0 20px rgba(234,67,53,0.8); z-index: 2;"></div>
                    
                    <div class="half-block text-right" style="flex: 1; text-align: right; padding-right: 50px;">
                        <span class="neon-text" style="font-size: 4rem; font-weight: 900; opacity: 0.2; position: absolute; top: -20px; left: 30%; color: #ea4335;">05</span>
                        <h3 style="color: #fff; font-size: 2rem; margin-bottom: 15px;">フルスピードの内製化体制</h3>
                        <p style="color: #cbd5e1; line-height: 1.8;">
                            経営戦略、WEBデザイン、システム構築、広告運用、そして在庫の調達。<br>
                            通常であれば数社の外注先を束ねる必要があるこれらの工程を、Rocketsは<strong>すべて自社内で一気通貫して完結</strong>させます。中間マージンや連携ラグを徹底的に排除した「圧倒的スピード」こそが、変化の激しいトレカ業界で勝ち残る最大の武器となります。
                        </p>
                    </div>
                    <div class="half-block img-block" style="flex: 1; padding-left: 50px;">
                        <div class="cyber-panel" style="border-color: rgba(234,67,53,0.3); background: rgba(234,67,53,0.05); text-align: center; padding: 40px;">
                            <i class="fas fa-microchip" style="font-size: 4rem; color: #ea4335;"></i>
                            <h4 style="color: #ea4335; margin-top: 20px;">In-House</h4>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="text-center mt-5 pt-5 reveal" style="position: relative; z-index: 3;">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary cyber-btn hover-glow" style="padding: 15px 40px; font-size: 1.1rem; background: linear-gradient(90deg, #4ade80, #00f0ff);"><i class="fas fa-rocket"></i> Rocketsに事業相談をする</a>
            </div>
        </div>
    </section>

</main>

<style>
/* Adjust responsive for the connected nodes */
@media (max-width: 900px) {
    .core-line { left: 20px !important; transform: none !important; }
    .strength-node { flex-direction: column !important; gap: 20px; text-align: left !important; padding-left: 60px !important; padding-right: 0 !important; }
    .strength-node > div[style*="position: absolute"] { left: 20px !important; transform: translate(-50%, -50%) !important; }
    .half-block { text-align: left !important; padding: 0 !important; width: 100%; }
    .half-block > span { right: 10px !important; left: auto !important; }
}
</style>

<?php get_footer(); ?>
