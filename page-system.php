<?php
/*
Template Name: Service - System
*/
get_header(); ?>

<!-- WebGL Canvas Background -->
<canvas id="bg-canvas" class="webgl-bg-canvas"></canvas>

<main id="content" class="home-tcg-theme relative z-10">

    <!-- Sub Page Header -->
    <section class="page-header relative z-10" style="height: 60vh; min-height: 400px; display: flex; align-items: center; justify-content: center; overflow: hidden;">
        <div class="hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_tcg.png" alt="System Development" class="hero-image-bg" style="opacity: 0.3;">
        </div>
        <div class="hero-overlay-cyber"></div>
        <div class="container text-center relative z-10 pt-5">
            <div class="cyber-badge reveal">05. System Dev</div>
            <h1 class="hero-title cyber-glitch reveal" style="font-size: 3.5rem; margin-bottom: 20px;">システム開発</h1>
            <p class="hero-subtitle reveal" style="max-width: 800px; margin: 0 auto;">属人化からの解放と圧倒的スピードアップ。<br>トレカ事業の「作業」をすべて自動化する専用システムを開発。</p>
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
                    <div class="step-icon"><i class="fas fa-barcode"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">在庫一元管理システム</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        実店舗のショーケース在庫、自社EC、モール（フリマ等）の出品を完全に同期。売れ違い（二重販売）を防ぎ、数万枚のシングルカードをバーコードで瞬時に管理。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.1s;">
                    <div class="step-icon"><i class="fas fa-magic"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">オンクレ/オンラインオリパシステム</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        WEB上でカードを引くガチャ演出付きシステム、ポイントのチャージ機能、発送依頼管理画面などをフルスクラッチで開発。プラットフォーム利用料を取られない自社完結型。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.2s;">
                    <div class="step-icon"><i class="fas fa-robot"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">買取自動化システム</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        顧客がスマホのカメラでカードをスキャンするか名前検索するだけで、データベースの買取価格を即座に提示。スタッフの査定時間を大幅に削減し、均一の査定結果を担保。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.3s;">
                    <div class="step-icon"><i class="fas fa-spider"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">相場スクレイピング・ツール</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        秋葉原の主要店舗の買取表や、フリマアプリの成約履歴をリアルタイムで自動取得（スクレイピング）。自社の買取・販売価格設定を競合優位に保つための武器を提供します。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal">
                    <div class="step-icon"><i class="fas fa-id-card"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">会員管理・ポイントシステム</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        リアルの「磁気・バーコード会員証」とオンラインの会員ステータスを統合させるO2Oシステム。来店履歴や購買単価に応じて動的にポイント還元率を変動させます。
                    </p>
                </div>
                <!-- item -->
                <div class="cyber-panel reveal" style="transition-delay: 0.1s;">
                    <div class="step-icon"><i class="fas fa-project-diagram"></i></div>
                    <h4 class="mb-3" style="color: #fff; font-size: 1.3rem;">API連携・独自開発</h4>
                    <p class="case-desc" style="border: none; padding: 0; margin-top: 10px;">
                        既存のPOSレジ（スマレジ等）との連携、各種決済ゲートウェイ（Stripe/PayPay等）の導入。企業の既存アセットを無駄にしないセキュアで柔軟なAPI開発。
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
