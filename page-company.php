<?php
/*
Template Name: Company
*/
get_header(); ?>

<!-- WebGL Canvas Background -->
<canvas id="bg-canvas" class="webgl-bg-canvas"></canvas>

<main id="content" class="home-tcg-theme relative z-10 overflow-hidden">

    <!-- Sub Page Header -->
    <section class="page-header relative z-10" style="height: 50vh; min-height: 400px; display: flex; align-items: center; justify-content: center;">
        <div class="hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hologram_card.png" alt="Company Profile" class="hero-image-bg" style="opacity: 0.2; filter: hue-rotate(150deg);">
        </div>
        <div class="hero-overlay-cyber"></div>
        <div class="container text-center relative z-10 pt-5">
            <div class="cyber-badge reveal" style="border-color: #3b82f6; color: #3b82f6; background: rgba(59,130,246,0.1);">Who We Are</div>
            <h1 class="hero-title cyber-glitch reveal" style="font-size: 3.5rem; margin-bottom: 20px; text-shadow: 0 0 20px rgba(59,130,246,0.5);">会社概要</h1>
            <p class="hero-subtitle reveal" style="max-width: 800px; margin: 0 auto;">熱狂的な市場に、確かなロジックを。<br>私たちはトレカビジネスのインフラを構築する実行集団です。</p>
        </div>
    </section>

    <!-- Animated SVG Geometric Overlay -->
    <svg class="svg-line absolute top-[50vh] left-0 w-full pointer-events-none z-0" style="height: 2500px;" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0,20 L100,50 M0,80 L100,30" fill="transparent" stroke="rgba(59,130,246,0.2)" stroke-width="0.3" stroke-dasharray="1 3" vector-effect="non-scaling-stroke"></path>
        <circle cx="50" cy="50" r="30" fill="transparent" stroke="rgba(59,130,246,0.1)" stroke-width="0.1" vector-effect="non-scaling-stroke"></circle>
    </svg>

    <section class="section-padding relative z-10">
        <div class="container">
            
            <!-- Vision Section -->
            <div class="vision-section text-center reveal" style="margin-bottom: 100px;">
                <h2 style="font-size: 1.5rem; color: #3b82f6; letter-spacing: 3px; font-weight: bold; margin-bottom: 20px;">OUR VISION</h2>
                <h3 style="font-size: 3rem; color: #fff; line-height: 1.4; margin-bottom: 30px; font-weight: 900; filter: drop-shadow(0 0 10px rgba(255,255,255,0.2));">
                    トレカ業界の「非効率」を破壊し、<br>
                    世界水準のビジネスエコシステムを創る。
                </h3>
                <p style="color: #cbd5e1; font-size: 1.1rem; line-height: 2; max-width: 800px; margin: 0 auto;">
                    カードゲーム市場は今や世界中で数兆円規模の超巨大エンターテインメントへと成長しました。<br>
                    しかし、その裏側にある店舗運営やECのシステム、在庫管理のアナログさには深刻な課題が山積しています。<br>
                    私たちはテクノロジーと独自のアナリスト視点をもって、薄利多売・重労働な「ショップの常識」を根本から書き換え、<br>
                    すべての事業者が「利益」と「ユーザーへの価値提供」に集中できるインフラを提供します。
                </p>
            </div>

            <!-- CEO Message Section -->
            <div class="message-section reveal" style="display: flex; flex-wrap: wrap; gap: 50px; margin-bottom: 100px; align-items: stretch;">
                <div class="message-image" style="flex: 1; min-width: 300px; position: relative;">
                    <div class="cyber-panel" style="height: 100%; border-color: rgba(59,130,246,0.5); background: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero_tcg.png') center/cover; position: relative; overflow: hidden; min-height: 400px; border-radius: 8px;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to right, rgba(11,28,62,0.9), rgba(11,28,62,0.4));"></div>
                        <div style="position: absolute; bottom: 30px; left: 30px; z-index: 2;">
                            <h4 style="color: #3b82f6; font-size: 1rem; letter-spacing: 2px; margin-bottom: 5px;">CEO / FOUNDER</h4>
                            <h3 style="color: #fff; font-size: 2rem; margin: 0;">本田 純一</h3>
                        </div>
                        <div class="card-glow" style="background: radial-gradient(circle at center, rgba(59,130,246,0.4) 0%, transparent 70%);"></div>
                    </div>
                </div>
                
                <div class="message-content" style="flex: 1.2; min-width: 320px; display: flex; flex-direction: column; justify-content: center;">
                    <h2 class="neon-text" style="font-size: 2.2rem; color: #fff; margin-bottom: 30px; line-height: 1.4;">
                        「好き」だけでは生き残れない。<br>
                        情熱を、圧倒的な「利益」に変えるために。
                    </h2>
                    <div style="color: #cbd5e1; font-size: 1rem; line-height: 1.9;">
                        <p style="margin-bottom: 20px;">
                            トレカショップの開業は、すべてのコレクターやカードゲーマーにとっての「夢」です。しかし現実には、相場の暴落、不良在庫の山、過酷な査定業務に忙殺され、夢半ばで撤退を余儀なくされる店舗をいくつも見てきました。
                        </p>
                        <p style="margin-bottom: 20px;">
                            秋葉原の最前線で私たちが痛感したのは、<strong>「情熱だけでは事業は継続できない。緻密な数字の計算と、自動化されたシステムが絶対に必要である」</strong>という冷酷な事実です。
                        </p>
                        <p style="margin-bottom: 20px;">
                            Rocketsは、無駄な労働をテクノロジーで代替し、ブラックボックス化した相場データを透明化します。そして「どうすれば利益が出るのか」という道筋を明確に提示します。<br>
                            私たちは単なるコンサルタントではありません。クライアントと同じ船に乗り、時には泥臭い現場の作業までも共にし、事業を黒字化させる「伴走者」です。
                        </p>
                        <p>
                            トレカを愛するすべてのプレイヤーと事業者のために、私たちが全力でバックアップいたします。
                        </p>
                    </div>
                </div>
            </div>

            <!-- Profile Overview Section -->
            <div class="profile-section reveal" style="max-width: 900px; margin: 0 auto;">
                <div class="section-title text-center mb-5">
                    <h2 style="font-size: 2.5rem; color: #fff;">Company Profile</h2>
                    <p style="color: #3b82f6;">会社概要</p>
                </div>
                
                <div class="cyber-terminal-box" style="background: rgba(15,23,42,0.8); border: 1px solid rgba(59,130,246,0.3); border-left: 5px solid #3b82f6; border-radius: 4px; padding: 40px; position: relative; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                    <!-- Terminal decoration -->
                    <div style="position: absolute; top: 10px; right: 15px; display: flex; gap: 8px;">
                        <span style="width: 10px; height: 10px; border-radius: 50%; background: #ef4444;"></span>
                        <span style="width: 10px; height: 10px; border-radius: 50%; background: #f59e0b;"></span>
                        <span style="width: 10px; height: 10px; border-radius: 50%; background: #10b981;"></span>
                    </div>
                    
                    <dl class="company-info-list" style="margin: 0;">
                        <div class="info-row" style="display: flex; border-bottom: 1px dashed rgba(255,255,255,0.1); padding: 20px 0;">
                            <dt style="width: 30%; color: #3b82f6; font-weight: bold; font-family: 'Share Tech Mono', monospace, sans-serif; letter-spacing: 1px;">Company Name</dt>
                            <dd style="width: 70%; color: #fff; margin: 0; font-size: 1.1rem;">秋葉原Rockets</dd>
                        </div>
                        <div class="info-row" style="display: flex; border-bottom: 1px dashed rgba(255,255,255,0.1); padding: 20px 0;">
                            <dt style="width: 30%; color: #3b82f6; font-weight: bold; font-family: 'Share Tech Mono', monospace, sans-serif; letter-spacing: 1px;">CEO</dt>
                            <dd style="width: 70%; color: #fff; margin: 0; font-size: 1.1rem;">代表取締役 <span style="margin-left: 10px;">本田 純一</span></dd>
                        </div>
                        <div class="info-row" style="display: flex; border-bottom: 1px dashed rgba(255,255,255,0.1); padding: 20px 0;">
                            <dt style="width: 30%; color: #3b82f6; font-weight: bold; font-family: 'Share Tech Mono', monospace, sans-serif; letter-spacing: 1px;">Established</dt>
                            <dd style="width: 70%; color: #cbd5e1; margin: 0;">2026年2月16日</dd>
                        </div>
                        <div class="info-row" style="display: flex; border-bottom: 1px dashed rgba(255,255,255,0.1); padding: 20px 0;">
                            <dt style="width: 30%; color: #3b82f6; font-weight: bold; font-family: 'Share Tech Mono', monospace, sans-serif; letter-spacing: 1px;">Capital</dt>
                            <dd style="width: 70%; color: #cbd5e1; margin: 0;">1,000,000円</dd>
                        </div>
                        <div class="info-row" style="display: flex; border-bottom: 1px dashed rgba(255,255,255,0.1); padding: 20px 0;">
                            <dt style="width: 30%; color: #3b82f6; font-weight: bold; font-family: 'Share Tech Mono', monospace, sans-serif; letter-spacing: 1px;">Address</dt>
                            <dd style="width: 70%; color: #cbd5e1; margin: 0; line-height: 1.6;">
                                〒744-0028<br>
                                山口県下松市藤光町
                            </dd>
                        </div>
                        <div class="info-row" style="display: flex; padding: 20px 0 0 0;">
                            <dt style="width: 30%; color: #3b82f6; font-weight: bold; font-family: 'Share Tech Mono', monospace, sans-serif; letter-spacing: 1px;">Business</dt>
                            <dd style="width: 70%; color: #cbd5e1; margin: 0; line-height: 1.8;">
                                <ul style="padding-left: 20px; margin: 0;">
                                    <li>トレーディングカードゲーム(TCG)業務特化型経営コンサルティング</li>
                                    <li>トレカECサイト・オンラインオリパシステムの企画・開発・運営</li>
                                    <li>在庫・買取価格自動化システムの開発等WEB周辺事業</li>
                                    <li>マーケティング支援・SNS運用・広告運用代行</li>
                                    <li>PSA等高額カード・専用商材の国内外仕入れ代行</li>
                                </ul>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

        </div>
    </section>

</main>

<style>
/* Responsive layout for Company page */
@media (max-width: 768px) {
    .info-row { flex-direction: column; }
    .info-row dt { width: 100% !important; margin-bottom: 5px; font-size: 0.9rem; }
    .info-row dd { width: 100% !important; margin-left: 0; }
    .vision-section h3 { font-size: 2rem !important; }
}
</style>

<?php get_footer(); ?>
