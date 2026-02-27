<?php
/*
Template Name: Service Page
*/
get_header(); ?>

<main id="content">
    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-bg">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" alt="Service Header">
        </div>
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Our Business</h1>
            <p>事業内容</p>
        </div>
    </section>

    <!-- Services List -->
    <section class="services section-padding">
        <div class="container">
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card reveal">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?q=80&w=2070&auto=format&fit=crop" alt="Antiques">
                    </div>
                    <div class="service-content">
                        <div class="service-icon"><i class="fas fa-box-open"></i></div>
                        <h3>古物営業</h3>
                        <p>古物営業法に基づく適正な古物売買、リユース事業を展開。市場価値を見極め、適切な流動化を支援します。</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-card reveal">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?q=80&w=2064&auto=format&fit=crop" alt="Web Production">
                    </div>
                    <div class="service-content">
                        <div class="service-icon"><i class="fas fa-laptop-code"></i></div>
                        <h3>Web制作・運営</h3>
                        <p>コーポレートサイトからECサイトまで、ウェブサイトの制作・構築を一貫して行います。公開後の運営・保守もサポート。</p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-card reveal">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=2070&auto=format&fit=crop" alt="Web Design">
                    </div>
                    <div class="service-content">
                        <div class="service-icon"><i class="fas fa-paint-brush"></i></div>
                        <h3>Webデザイン</h3>
                        <p>UI/UXに基づいた使いやすく美しいデザインを提供。ブランドイメージを向上させるクリエイティブを実現します。</p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="service-card reveal">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1664575602276-acd073f104c1?q=80&w=2070&auto=format&fit=crop" alt="Consulting">
                    </div>
                    <div class="service-content">
                        <div class="service-icon"><i class="fas fa-chart-line"></i></div>
                        <h3>経営コンサルティング</h3>
                        <p>ITを活用した業務効率化や、新規事業立ち上げの支援など、経営課題に対する実践的なコンサルティングを行います。</p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="service-card reveal">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" alt="Content">
                    </div>
                    <div class="service-content">
                        <div class="service-icon"><i class="fas fa-pen-nib"></i></div>
                        <h3>Webコンテンツ制作</h3>
                        <p>SEO記事作成、動画コンテンツ制作、SNS運用素材など、集客に直結する高品質なコンテンツを制作します。</p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="service-card reveal">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop" alt="System Development">
                    </div>
                    <div class="service-content">
                        <div class="service-icon"><i class="fas fa-server"></i></div>
                        <h3>システム開発</h3>
                        <p>Webアプリケーション、独自CMS、業務システムなど、スケーラビリティの高いシステム開発を提供します。</p>
                    </div>
                </div>

                <!-- Service 7 -->
                <div class="service-card reveal">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1579532537598-459ecdaf39cc?q=80&w=2070&auto=format&fit=crop" alt="Investment">
                    </div>
                    <div class="service-content">
                        <div class="service-icon"><i class="fas fa-hand-holding-dollar"></i></div>
                        <h3>投資事業</h3>
                        <p>成長性の高い中小企業やスタートアップへの投資を行い、資金提供とともにハンズオンでの経営支援を実施します。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
