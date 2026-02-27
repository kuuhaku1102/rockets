<?php
/*
Template Name: About Page
*/
get_header(); ?>

<main id="content">
    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-bg">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" alt="Strategy Header">
        </div>
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>About Us</h1>
            <p>私たちについて</p>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="section-padding" style="background: #fff;">
        <div class="container">
            <div class="about-grid intro-grid">
                <div class="about-text reveal">
                    <h2 style="font-size: 2rem; margin-bottom: 30px; line-height: 1.4;">
                        私たちは、事業を創り、<br>伸ばし、拡張する会社です。
                    </h2>
                    <p style="margin-bottom: 20px;">
                        古物営業からWeb制作、システム開発、経営コンサルティング、中小企業投資まで。<br>
                        領域に縛られず、「伸びる事業」を創出することを目的に活動しています。
                    </p>
                    <p style="font-weight: 700; color: var(--primary-color); font-size: 1.1rem;">
                        私たちは制作会社でも、投資会社でもありません。<br>
                        事業をグロースさせる実行組織です。
                    </p>
                </div>
                <div class="about-image reveal">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=2070&auto=format&fit=crop" alt="Team Execution" style="border-radius: 10px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section class="section-padding" style="background: var(--bg-light); text-align: center;">
        <div class="container reveal">
            <h2 style="font-size: 3.5rem; color: var(--primary-color); letter-spacing: -1px; margin-bottom: 20px;">Build. Scale. Reinvent.</h2>
            <div style="max-width: 800px; margin: 0 auto; text-align: left;">
                <p style="font-size: 1.1rem; margin-bottom: 30px; text-align: center;">
                    市場の変化は速い。<br>
                    だからこそ、意思決定も実行も速くなければならない。
                </p>
                <div class="philosophy-grid">
                    <div class="philosophy-item">
                         <h3 style="font-size: 1.2rem; margin-bottom: 15px; color: var(--accent-color);">Web Site</h3>
                         <p>Webサイトは“作って終わり”ではなく、<br>データをもとに改善を繰り返し、収益装置へと進化させる。</p>
                    </div>
                    <div class="philosophy-item">
                         <h3 style="font-size: 1.2rem; margin-bottom: 15px; color: var(--accent-color);">System</h3>
                         <p>システムは“便利なツール”ではなく、<br>事業を拡張させるエンジンであるべきだと考えています。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title reveal">
                <h2>What We Do</h2>
                <p>事業領域</p>
            </div>
            
            <div class="services-grid">
                <!-- 1 -->
                <div class="service-card reveal">
                    <div class="service-icon"><i class="fas fa-box-open"></i></div>
                    <h3>古物営業</h3>
                    <p>市場価格を読み、価値を再流通させる。<br>資産を眠らせない。</p>
                </div>
                <!-- 2 -->
                <div class="service-card reveal">
                    <div class="service-icon"><i class="fas fa-paint-brush"></i></div>
                    <h3>Web制作・デザイン・運営</h3>
                    <p>ブランドを構築し、集客を生み、売上を最大化する。<br>成果に直結する設計を行います。</p>
                </div>
                <!-- 3 -->
                <div class="service-card reveal">
                     <div class="service-icon"><i class="fas fa-server"></i></div>
                     <h3>Webシステム開発</h3>
                     <p>自動化・効率化・スケール設計。<br>成長に耐えうるインフラを構築します。</p>
                </div>
                 <!-- 4 -->
                <div class="service-card reveal">
                     <div class="service-icon"><i class="fas fa-chart-line"></i></div>
                     <h3>経営コンサルティング</h3>
                     <p>数字と構造を見直し、利益体質へと変革。</p>
                </div>
                 <!-- 5 -->
                <div class="service-card reveal">
                     <div class="service-icon"><i class="fas fa-hand-holding-dollar"></i></div>
                     <h3>中小企業投資</h3>
                     <p>資金だけではなく、戦略・マーケティング・実行力を投下。<br>伴走型で企業価値を引き上げます。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Strength -->
    <section class="section-padding" style="position: relative; color: #fff; overflow: hidden;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop" style="width: 100%; height: 100%; object-fit: cover;" alt="Strength BG">
        </div>
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(11,28,62,0.9); z-index: 2;"></div>
        
        <div class="container" style="position: relative; z-index: 3;">
            <div class="section-title reveal">
                <h2 style="color: #fff;">Our Strength</h2>
                <p>私たちの強み</p>
            </div>
            
            <div class="strength-grid reveal">
                <div>
                     <div style="font-size: 2.5rem; color: var(--accent-color); margin-bottom: 20px;"><i class="fas fa-bolt"></i></div>
                     <h3 style="font-size: 1.1rem; color: #fff;">スピード感のある<br>意思決定</h3>
                </div>
                <div>
                     <div style="font-size: 2.5rem; color: var(--accent-color); margin-bottom: 20px;"><i class="fas fa-flask"></i></div>
                     <h3 style="font-size: 1.1rem; color: #fff;">マーケティング ×<br>テクノロジーの融合</h3>
                </div>
                 <div>
                     <div style="font-size: 2.5rem; color: var(--accent-color); margin-bottom: 20px;"><i class="fas fa-users"></i></div>
                     <h3 style="font-size: 1.1rem; color: #fff;">実行まで踏み込む<br>支援体制</h3>
                </div>
                 <div>
                     <div style="font-size: 2.5rem; color: var(--accent-color); margin-bottom: 20px;"><i class="fas fa-eye"></i></div>
                     <h3 style="font-size: 1.1rem; color: #fff;">事業を「作る側」の<br>視点</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Message -->
    <section class="section-padding" style="text-align: center; background: #fff;">
        <div class="container reveal">
            <h2 style="font-size: 2rem; margin-bottom: 40px; line-height: 1.5; color: var(--primary-color);">
                私たちは挑戦を止めない。<br>
                変化を恐れない。<br>
                既存の枠組みに収まらない。
            </h2>
            <p style="font-size: 1.5rem; font-weight: 800; color: var(--accent-color); letter-spacing: 2px;">
                次の成長を、共に創る。
            </p>
            <div style="margin-top: 50px;">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary">お問い合わせ</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
