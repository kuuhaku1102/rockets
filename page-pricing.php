<?php
/*
Template Name: Pricing
*/
get_header(); ?>

<!-- WebGL Canvas Background -->
<canvas id="bg-canvas" class="webgl-bg-canvas"></canvas>

<main id="content" class="home-tcg-theme relative z-10 overflow-hidden">

    <!-- Sub Page Header -->
    <section class="page-header relative z-10" style="height: 50vh; min-height: 400px; display: flex; align-items: center; justify-content: center;">
        <div class="hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hologram_card.png" alt="Pricing background" class="hero-image-bg" style="opacity: 0.3; filter: hue-rotate(240deg);">
        </div>
        <div class="hero-overlay-cyber"></div>
        <div class="container text-center relative z-10 pt-5">
            <div class="cyber-badge reveal" style="border-color: #fbbc05; color: #fbbc05; background: rgba(251,188,5,0.1);">Pricing & Plans</div>
            <h1 class="hero-title cyber-glitch reveal" style="font-size: 3.5rem; margin-bottom: 20px; text-shadow: 0 0 20px rgba(251,188,5,0.5);">料金プラン</h1>
            <p class="hero-subtitle reveal" style="max-width: 800px; margin: 0 auto;">投資効果（ROI）にコミットする、明確なプライシング。<br>自社のフェーズや課題に合わせて最適な「パック」をお選びください。</p>
        </div>
    </section>

    <!-- Animated SVG Hexagon Grid Overlay -->
    <svg class="svg-line absolute top-[50vh] left-0 w-full pointer-events-none z-0" style="height: 2500px;" viewBox="0 0 100 100" preserveAspectRatio="none">
        <!-- Abstract circuit/hex patterns -->
        <path d="M10,10 L30,10 L40,20 L30,30 L10,30 Z M70,40 L90,40 L100,50 L90,60 L70,60 Z" fill="transparent" stroke="rgba(251,188,5,0.15)" stroke-width="0.5" vector-effect="non-scaling-stroke"></path>
        <path d="M40,20 L70,40 M30,30 L50,80 L70,60" fill="transparent" stroke="rgba(251,188,5,0.3)" stroke-width="0.2" stroke-dasharray="2 2" vector-effect="non-scaling-stroke"></path>
    </svg>

    <section class="section-padding relative z-10">
        <div class="container">
            
            <div class="section-title text-center reveal">
                <h2 style="font-size: 2.5rem; color: #fff;">Consulting & Support Plans</h2>
                <p style="color: #fbbc05;">コンサルティング・運用支援プラン</p>
            </div>

            <!-- Pricing Tier Cards -->
            <div class="pricing-grid mt-5" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-bottom: 60px;">
                
                <!-- Tier 1 -->
                <div class="pricing-card cyber-panel reveal" style="border-top: 5px solid #94a3b8; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="font-size: 0.9rem; color: #94a3b8; font-weight: bold; letter-spacing: 2px;">STARTER DECK</div>
                        <h3 style="font-size: 1.8rem; margin: 10px 0 20px; color: #fff;">スポットコンサル</h3>
                        <div class="price" style="font-size: 2.5rem; font-weight: 800; color: #fff; margin-bottom: 20px;">
                            ¥50,000<span style="font-size: 1rem; color: #94a3b8; font-weight: normal;"> / 2時間</span>
                        </div>
                        <p style="color: #cbd5e1; font-size: 0.95rem; margin-bottom: 25px; line-height: 1.6;">
                            「特定のカードの相場感が知りたい」「在庫の損切りの判断基準を作りたい」など、短時間でピンポイントに課題を解決する単発の壁打ちプラン。
                        </p>
                        <ul class="pricing-features" style="list-style: none; padding: 0; margin: 0 0 30px 0; color: #cbd5e1; font-size: 0.9rem;">
                            <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>オンラインMTG (2時間)</li>
                            <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>現在のアカウント・EC簡易診断</li>
                            <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>質疑応答無制限（時間内）</li>
                            <li style="margin-bottom: 10px; color: rgba(255,255,255,0.3);"><i class="fas fa-times" style="margin-right: 10px;"></i>チャットサポート</li>
                        </ul>
                    </div>
                </div>

                <!-- Tier 2 -->
                <div class="pricing-card cyber-panel reveal" style="border-top: 5px solid #4ade80; border-color: rgba(74,222,128,0.5); transform: scale(1.05); z-index: 2; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 0 30px rgba(74,222,128,0.15);">
                    <div class="popular-tag" style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: #4ade80; color: #000; padding: 5px 15px; font-size: 0.8rem; font-weight: bold; border-radius: 20px; box-shadow: 0 0 10px rgba(74,222,128,0.8);">RECOMMENDED</div>
                    <div>
                        <div style="font-size: 0.9rem; color: #4ade80; font-weight: bold; letter-spacing: 2px;">BOOSTER PACK</div>
                        <h3 style="font-size: 1.8rem; margin: 10px 0 20px; color: #fff;">月額顧問プラン</h3>
                        <div class="price" style="font-size: 2.5rem; font-weight: 800; color: #fff; margin-bottom: 20px;">
                            ¥300,000<span style="font-size: 1rem; color: #94a3b8; font-weight: normal;"> / 月</span>
                        </div>
                        <p style="color: #cbd5e1; font-size: 0.95rem; margin-bottom: 25px; line-height: 1.6;">
                            中長期的な戦略パートナーとして伴走します。日々の相場変動に応じた仕入れのアドバイスや、広告運用のディレクションを行います。
                        </p>
                        <ul class="pricing-features" style="list-style: none; padding: 0; margin: 0 0 30px 0; color: #cbd5e1; font-size: 0.9rem;">
                            <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>定例MTG（月2回・各2h）</li>
                            <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>専用チャットでの随時相談</li>
                            <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>相場データ（月次レポート提供）</li>
                            <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>広告・SNS運用ディレクション</li>
                        </ul>
                    </div>
                </div>

                <!-- Tier 3 -->
                <div class="pricing-card cyber-panel reveal" style="border-top: 5px solid #00f0ff; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="font-size: 0.9rem; color: #00f0ff; font-weight: bold; letter-spacing: 2px;">PREMIUM BOX</div>
                        <h3 style="font-size: 1.8rem; margin: 10px 0 20px; color: #fff;">フル支援パック</h3>
                        <div class="price" style="font-size: 2.5rem; font-weight: 800; color: #fff; margin-bottom: 20px;">
                            ¥800,000<span style="font-size: 1rem; color: #94a3b8; font-weight: normal;"> / 月</span>
                        </div>
                        <p style="color: #cbd5e1; font-size: 0.95rem; margin-bottom: 25px; line-height: 1.6;">
                            実務部隊がいない法人のための「丸投げ」プラン。広告入稿、SNS運用代行、ブログ記事作成、実際の仕入れ代行まで、ハンズオンで実行網を担います。
                        </p>
                        <ul class="pricing-features" style="list-style: none; padding: 0; margin: 0 0 30px 0; color: #cbd5e1; font-size: 0.9rem;">
                            <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>月額顧問プランの全内容</li>
                            <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>リスティング・X広告 運用「代行」</li>
                            <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>公式LINE運用「代行」（月4配信）</li>
                            <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: #4ade80; margin-right: 10px;"></i>高額カード(PSA等)仕入れ代行</li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Standalone Packages -->
            <div class="section-title text-center reveal mt-5 pt-5">
                <h2 style="font-size: 2.5rem; color: #fff;">Project Based Packages</h2>
                <p style="color: #fbbc05;">プロジェクト型パッケージ（買い切り型）</p>
            </div>

            <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px; margin-top: 40px;">
                
                <!-- Package 1: 立ち上げ -->
                <div class="col cyber-panel reveal" style="flex: 1; min-width: 320px; border-left: 4px solid #f000ff; padding: 40px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px;">
                        <div>
                            <h3 style="font-size: 1.8rem; color: #fff; margin-bottom: 5px;">新規立ち上げパッケージ</h3>
                            <p style="color: #94a3b8; font-size: 0.9rem;">NEW BUSINESS LAUNCH</p>
                        </div>
                        <div style="text-align: right;">
                            <span style="font-size: 2rem; font-weight: bold; color: #f000ff;">¥1,500,000<span style="font-size: 1.2rem;">〜</span></span><br>
                            <span style="font-size: 0.8rem; color: #94a3b8;">(規模により変動)</span>
                        </div>
                    </div>
                    <p style="color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
                        異業種からのトレカ業界への新規参入を完全プロデュース。失敗しないための基礎を全て整えた状態で納品します。
                    </p>
                    <div style="background: rgba(240,0,255,0.05); padding: 20px; border-radius: 8px; border: 1px dashed rgba(240,0,255,0.3);">
                        <h4 style="color: #f000ff; font-size: 1.1rem; margin-bottom: 10px;"><i class="fas fa-box-open"></i> パッケージ内容</h4>
                        <ul style="color: #cbd5e1; font-size: 0.95rem; margin-left: 20px; padding-left: 0; line-height: 1.8;">
                            <li>立地選定アドバイス・店舗導線設計コンサルティング（実店舗ありの場合）</li>
                            <li>初期オープニング用の目玉商材（高額PSA等）の調達代行</li>
                            <li>自社ECサイト構築（Shopifyベース、トレカ最適化テーマ使用）</li>
                            <li>古物商許可などの関連法規・景表法に関するガイドライン共有</li>
                            <li>オープン告知用LP制作および初回集客プロモーション設計</li>
                        </ul>
                    </div>
                </div>

                <!-- Package 2: システム開発 -->
                <div class="col cyber-panel reveal" style="flex: 1; min-width: 320px; border-left: 4px solid #ea4335; padding: 40px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px;">
                        <div>
                            <h3 style="font-size: 1.8rem; color: #fff; margin-bottom: 5px;">システム開発費目安</h3>
                            <p style="color: #94a3b8; font-size: 0.9rem;">SYSTEM DEVELOPMENT (CUSTOM)</p>
                        </div>
                        <div style="text-align: right;">
                            <span style="font-size: 2rem; font-weight: bold; color: #ea4335;">¥2,000,000<span style="font-size: 1.2rem;">〜</span></span><br>
                            <span style="font-size: 0.8rem; color: #94a3b8;">(要件定義後に正式見積り)</span>
                        </div>
                    </div>
                    <p style="color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
                        属人化した業務を撲滅し、自社の利益を独占するための独自プラットフォームを、システム要件の洗い出しからスクラッチで開発します。
                    </p>
                    <div style="background: rgba(234,67,53,0.05); padding: 20px; border-radius: 8px; border: 1px dashed rgba(234,67,53,0.3);">
                        <h4 style="color: #ea4335; font-size: 1.1rem; margin-bottom: 10px;"><i class="fas fa-laptop-code"></i> 開発スコープの例</h4>
                        <ul style="color: #cbd5e1; font-size: 0.95rem; margin-left: 20px; padding-left: 0; line-height: 1.8;">
                            <li><strong style="color:#fff;">オンラインオリパシステム構築：</strong> <span style="font-size:0.85rem;">自前のガチャ演出付きシステム。決済連携からポイント管理までフルパッケージ。（※目安¥300万〜）</span></li>
                            <li><strong style="color:#fff;">複数店舗・EC在庫一元管理：</strong> <span style="font-size:0.85rem;">スマレジ等と連携し、POSとShopify等の在庫をリアルタイム同期。（※目安¥200万〜）</span></li>
                            <li><strong style="color:#fff;">買取価格自動スキャンツール：</strong> <span style="font-size:0.85rem;">競合他社の最新買取価格をスクレイピングし、自社の買取データベースを自動更新。（※目安¥150万〜）</span></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="text-center mt-5 pt-5 reveal">
                <p style="color: #94a3b8; margin-bottom: 20px;">※上記は目安となり、実際の課題や支援規模に応じて柔軟にお見積りを作成いたします。</p>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary cyber-btn hover-glow" style="padding: 15px 40px; font-size: 1.1rem;"><i class="fas fa-calculator"></i> 無料相談・概算見積りを依頼する</a>
            </div>

        </div>
    </section>

</main>

<style>
/* Adjust responsive specific for pricing */
@media (max-width: 900px) {
    .pricing-card.reveal[style*="transform"] { transform: none !important; z-index: 1 !important; }
}
</style>

<?php get_footer(); ?>
