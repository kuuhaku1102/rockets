<?php
/*
Template Name: Cases
*/
get_header(); ?>

<!-- WebGL Canvas Background -->
<canvas id="bg-canvas" class="webgl-bg-canvas"></canvas>

<main id="content" class="home-tcg-theme relative z-10">

    <!-- Sub Page Header -->
    <section class="page-header relative z-10" style="height: 50vh; min-height: 400px; display: flex; align-items: center; justify-content: center; overflow: hidden;">
        <div class="hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hologram_card.png" alt="Case Studies" class="hero-image-bg" style="opacity: 0.3;">
        </div>
        <div class="hero-overlay-cyber"></div>
        <div class="container text-center relative z-10 pt-5">
            <div class="cyber-badge reveal">Case Studies</div>
            <h1 class="hero-title cyber-glitch reveal" style="font-size: 3.5rem; margin-bottom: 20px;">実績・事例</h1>
            <p class="hero-subtitle reveal" style="max-width: 800px; margin: 0 auto;">私たちの施策は「数字」で証明されます。<br>トレカ事業における圧倒的なグロース事例の一部をご紹介します。</p>
        </div>
    </section>

    <!-- Animated SVG Grid Line Overlay -->
    <svg class="svg-line absolute top-[50vh] left-0 w-full pointer-events-none z-0" style="height: 2500px;" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M50,0 Q60,30 20,70 T80,100" fill="transparent" stroke="rgba(0,240,255,0.4)" stroke-width="0.2" vector-effect="non-scaling-stroke"></path>
    </svg>

    <!-- Case Studies Section -->
    <section class="section-padding relative z-10">
        <div class="container">
            
            <div class="cases-vertical-list">
                
                <!-- Case 01 -->
                <div class="case-detail-panel cyber-panel reveal mb-5" style="border-left: 4px solid var(--tcg-glow); padding: 40px;">
                    <div class="case-header flex justify-between align-start" style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 20px;">
                        <div>
                            <span class="neon-badge">実店舗・EC統合</span>
                            <h3 style="font-size: 2rem; color: #fff; margin-top: 10px;">A社様（大手トレカショップ）</h3>
                        </div>
                        <div class="text-right">
                            <span style="color: var(--tcg-glow); font-weight: bold; font-size: 1.2rem;">支援期間：8ヶ月</span>
                        </div>
                    </div>
                    
                    <div class="case-metrics" style="display: flex; gap: 30px; margin-bottom: 40px; background: rgba(0,240,255,0.05); padding: 20px; border-radius: 8px;">
                        <div style="flex: 1; text-align: center;">
                            <p style="color: #94a3b8; margin-bottom: 5px;">【課題】 月商</p>
                            <span style="font-size: 1.5rem; color: #f87171; text-decoration: line-through;">1,000万円</span>
                        </div>
                        <div style="display: flex; align-items: center; color: var(--tcg-glow);"><i class="fas fa-arrow-right"></i></div>
                        <div style="flex: 1; text-align: center;">
                            <p style="color: #94a3b8; margin-bottom: 5px;">【改善後】 月商</p>
                            <span style="font-size: 2.2rem; font-weight: bold; color: #4ade80; text-shadow: 0 0 10px rgba(74, 222, 128, 0.4);">2,500万円</span>
                            <span style="color: #4ade80; font-weight: bold;"> (2.5倍)</span>
                        </div>
                    </div>

                    <div class="case-content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                        <div>
                            <h4 style="color: var(--tcg-glow); margin-bottom: 15px;"><i class="fas fa-tools"></i> 実施施策</h4>
                            <ul class="check-list" style="color: #cbd5e1;">
                                <li>在庫一元管理システムの導入（店頭とECの二重管理解消）</li>
                                <li>独自の相場データ分析による買取強化タイトルの選定</li>
                                <li>オンラインオリパの導線改善とガチャ演出の実装</li>
                                <li>公式LINEを用いたリピーター向けクローズド販売の構築</li>
                            </ul>
                        </div>
                        <div style="background: rgba(15,23,42,0.8); border: 1px dashed rgba(0,240,255,0.2); padding: 25px; border-radius: 8px;">
                            <h4 style="color: #fff; margin-bottom: 15px;"><i class="fas fa-comment"></i> クライアントの声</h4>
                            <p style="font-style: italic; color: #94a3b8; line-height: 1.8;">
                                「ツールを導入しただけでなく、”どのカードをいくらで買い、どういうオリパに封入すれば利益が出るか”という生々しい運用レイヤーまで並走してもらえたのが最大の勝因です。スタッフの査定残業も無くなり、売上は2.5倍になりました。」
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Case 02 -->
                <div class="case-detail-panel cyber-panel reveal mb-5" style="border-left: 4px solid var(--tcg-glow-alt); padding: 40px;">
                    <div class="case-header flex justify-between align-start" style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 20px;">
                        <div>
                            <span class="neon-badge" style="color: var(--tcg-glow-alt); border-color: var(--tcg-glow-alt);">FC店舗改善</span>
                            <h3 style="font-size: 2rem; color: #fff; margin-top: 10px;">B社様（FC店舗）</h3>
                        </div>
                        <div class="text-right">
                            <span style="color: var(--tcg-glow-alt); font-weight: bold; font-size: 1.2rem;">支援期間：6ヶ月</span>
                        </div>
                    </div>
                    
                    <div class="case-metrics" style="display: flex; gap: 30px; margin-bottom: 40px; background: rgba(240,0,255,0.05); padding: 20px; border-radius: 8px;">
                        <div style="flex: 1; text-align: center;">
                            <p style="color: #94a3b8; margin-bottom: 5px;">【課題】 不良在庫率</p>
                            <span style="font-size: 1.5rem; color: #f87171; text-decoration: line-through;">30% (資金ショート寸前)</span>
                        </div>
                        <div style="display: flex; align-items: center; color: var(--tcg-glow-alt);"><i class="fas fa-arrow-right"></i></div>
                        <div style="flex: 1; text-align: center;">
                            <p style="color: #94a3b8; margin-bottom: 5px;">【改善後】 不良在庫率</p>
                            <span style="font-size: 2.2rem; font-weight: bold; color: #4ade80; text-shadow: 0 0 10px rgba(74, 222, 128, 0.4);">5%未満</span>
                        </div>
                    </div>

                    <div class="case-content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                        <div>
                            <h4 style="color: var(--tcg-glow-alt); margin-bottom: 15px;"><i class="fas fa-tools"></i> 実施施策</h4>
                            <ul class="check-list" style="color: #cbd5e1;">
                                <li>徹底した在庫棚卸しと損切りルールの策定（マニュアル化）</li>
                                <li>PSA/高額カードの委託仕入れルート提供</li>
                                <li>商圏に合わせたショーケースの陳列最適化設計</li>
                                <li>X(Twitter)でのバズを狙った買取告知クリエイティブ作成</li>
                            </ul>
                        </div>
                        <div style="background: rgba(15,23,42,0.8); border: 1px dashed rgba(240,0,255,0.2); padding: 25px; border-radius: 8px;">
                            <h4 style="color: #fff; margin-bottom: 15px;"><i class="fas fa-comment"></i> クライアントの声</h4>
                            <p style="font-style: italic; color: #94a3b8; line-height: 1.8;">
                                「FC本部からのバルク在庫が捌けず黒字倒産しそうでした。Rocketsさんに在庫のボーダーラインを再設計してもらい、高回転の商材へ資金を移したことで、一気にキャッシュフローが健全化しました。仕入れルートの提供も非常に助かっています。」
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Case 03 -->
                <div class="case-detail-panel cyber-panel reveal mb-5" style="border-left: 4px solid #fff; padding: 40px;">
                    <div class="case-header flex justify-between align-start" style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 20px;">
                        <div>
                            <span class="neon-badge" style="color: #fff; border-color: #fff;">新規立ち上げ</span>
                            <h3 style="font-size: 2rem; color: #fff; margin-top: 10px;">C社様（新規参入オンラインオリパ）</h3>
                        </div>
                        <div class="text-right">
                            <span style="color: #fff; font-weight: bold; font-size: 1.2rem;">支援期間：3ヶ月（立ち上げ〜）</span>
                        </div>
                    </div>
                    
                    <div class="case-metrics" style="display: flex; gap: 30px; margin-bottom: 40px; background: rgba(255,255,255,0.05); padding: 20px; border-radius: 8px;">
                        <div style="flex: 1; text-align: center;">
                            <p style="color: #94a3b8; margin-bottom: 5px;">【課題】</p>
                            <span style="font-size: 1.2rem; color: #fff;">業界未経験・システム無し</span>
                        </div>
                        <div style="display: flex; align-items: center; color: #fff;"><i class="fas fa-arrow-right"></i></div>
                        <div style="flex: 1; text-align: center;">
                            <p style="color: #94a3b8; margin-bottom: 5px;">【実績】</p>
                            <span style="font-size: 2.2rem; font-weight: bold; color: #4ade80; text-shadow: 0 0 10px rgba(74, 222, 128, 0.4);">初月黒字化達成</span>
                        </div>
                    </div>

                    <div class="case-content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                        <div>
                            <h4 style="color: #fff; margin-bottom: 15px;"><i class="fas fa-tools"></i> 実施施策</h4>
                            <ul class="check-list" style="color: #cbd5e1;">
                                <li>完全フルスクラッチのオンラインオリパシステム開発</li>
                                <li>初回オープニング用の大当たりカード仕入れ代行</li>
                                <li>Google広告およびインフルエンサーを活用した集客設計</li>
                                <li>法的リスクをクリアした特商法・景表法ガイドライン作成</li>
                            </ul>
                        </div>
                        <div style="background: rgba(15,23,42,0.8); border: 1px dashed rgba(255,255,255,0.2); padding: 25px; border-radius: 8px;">
                            <h4 style="color: #fff; margin-bottom: 15px;"><i class="fas fa-comment"></i> クライアントの声</h4>
                            <p style="font-style: italic; color: #94a3b8; line-height: 1.8;">
                                「異業種からの参入で右も左も分からない状態でした。システムの構築だけでなく、商材の仕入れから広告の掛け方、法律面までワンストップで支援していただき、見事に初月から黒字でスタートを切ることができました。」
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="text-center mt-5 pt-5 reveal">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary cyber-btn hover-glow" style="padding: 15px 40px; font-size: 1.1rem;"><i class="fas fa-rocket"></i> 自社の課題を相談する</a>
            </div>
        </div>
    </section>

</main>

<style>
/* Adjust responsive grid for cases */
@media (max-width: 900px) {
    .case-header.flex { flex-direction: column; }
    .case-header.flex > div.text-right { margin-top: 10px; text-align: left !important; }
    .case-metrics { flex-direction: column; width: 100%; }
    .case-metrics .fa-arrow-right { transform: rotate(90deg); }
    .case-content-grid { grid-template-columns: 1fr; }
}
.mb-5 { margin-bottom: 3rem; }
</style>

<?php get_footer(); ?>
