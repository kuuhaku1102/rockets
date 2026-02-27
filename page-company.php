<?php
/*
Template Name: Company Page
*/
get_header(); ?>

<main id="content">
    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-bg">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop" alt="Company Header">
        </div>
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1>Company Profile</h1>
            <p>会社概要</p>
        </div>
    </section>

    <!-- Company Info -->
    <section class="company-section section-padding">
        <div class="container">
            <div class="company-content reveal" style="background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <dl class="company-list" style="color: #333;">
                    <div class="list-item">
                        <dt>会社名</dt>
                        <dd>株式会社秋葉原Rockets</dd>
                    </div>
                    <div class="list-item">
                        <dt>フリガナ</dt>
                        <dd>アキハバラロケッツ</dd>
                    </div>
                    <div class="list-item">
                        <dt>法人番号</dt>
                        <dd>9250001021540</dd>
                    </div>
                    <div class="list-item">
                        <dt>所在地</dt>
                        <dd>山口県下松市藤光町１丁目２番８号 ＭａｉｓｏｎＮｏａｈＣ</dd>
                    </div>
                    <div class="list-item">
                        <dt>設立</dt>
                        <dd>202X年X月X日</dd>
                    </div>
                    <div class="list-item">
                        <dt>代表者</dt>
                        <dd>代表取締役 本田 純一</dd>
                    </div>
                    <div class="list-item">
                        <dt>資本金</dt>
                        <dd>X,XXX万円</dd>
                    </div>
                    <div class="list-item">
                        <dt>取引銀行</dt>
                        <dd>三菱UFJ銀行、みずほ銀行、...</dd>
                    </div>
                    <div class="list-item">
                        <dt>事業内容</dt>
                        <dd>
                            古物営業<br>
                            Webサイトの制作・運営・デザイン<br>
                            経営コンサルティング<br>
                            Webコンテンツの制作<br>
                            Webシステムの開発<br>
                            中小企業への投資
                        </dd>
                    </div>
                </dl>
            </div>
            
            <div class="access-map reveal" style="margin-top: 60px;">
                <h3 style="margin-bottom: 20px;">Access</h3>
                <!-- Placeholder for Google Map -->
                <div style="background: #eee; height: 400px; width: 100%; display: flex; align-items: center; justify-content: center; color: #666;">
                    [ Google Map Area ]
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
