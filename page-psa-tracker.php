<?php
/*
Template Name: PSA Tracker
*/
get_header(); ?>

<!-- WebGL Canvas Background (Inherited from theme) -->
<canvas id="bg-canvas" class="webgl-bg-canvas"></canvas>

<main id="content" class="home-tcg-theme relative z-10 overflow-hidden" style="min-height: 100vh;">

    <!-- Sub Page Header -->
    <section class="page-header relative z-10" style="height: 30vh; min-height: 300px; display: flex; align-items: center; justify-content: center;">
        <div class="hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hologram_card.png" alt="Tracker Background" class="hero-image-bg" style="opacity: 0.2; filter: hue-rotate(280deg);">
        </div>
        <div class="hero-overlay-cyber"></div>
        <div class="container text-center relative z-10 pt-5">
            <div class="cyber-badge reveal" style="border-color: #a855f7; color: #a855f7; background: rgba(168,85,247,0.1);">Tool / Simulator</div>
            <h1 class="hero-title cyber-glitch reveal" style="font-size: 3rem; margin-bottom: 10px; text-shadow: 0 0 20px rgba(168,85,247,0.5);">PSA ROI Tracker</h1>
            <p class="hero-subtitle reveal" style="max-width: 800px; margin: 0 auto; color: #cbd5e1;">カードの仕入れから鑑定・販売までの利益・利回りを可視化するシミュレーター。※データはお使いのブラウザに保存されます。</p>
        </div>
    </section>

    <!-- Tracker App Interface -->
    <section class="section-padding relative z-10 pt-0">
        <div class="container text-center reveal">
            <!-- App Container -->
            <div class="cyber-panel" style="border-color: rgba(168, 85, 247, 0.4); background: rgba(15, 23, 42, 0.9); padding: 30px; border-radius: 10px; max-width: 1200px; margin: 0 auto; box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
                
                <!-- Dashboard / Summary -->
                <div class="dashboard-summary" style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
                    <div class="summary-card" style="flex: 1; min-width: 200px; background: rgba(0,0,0,0.4); border: 1px solid rgba(255,255,255,0.1); padding: 20px; border-radius: 8px; border-top: 3px solid #3b82f6;">
                        <div style="color: #94a3b8; font-size: 0.9rem; margin-bottom: 5px;">総仕入額</div>
                        <div id="total-buy" style="font-size: 1.8rem; font-weight: bold; color: #fff; font-family: 'Share Tech Mono', monospace;">¥0</div>
                    </div>
                    <div class="summary-card" style="flex: 1; min-width: 200px; background: rgba(0,0,0,0.4); border: 1px solid rgba(255,255,255,0.1); padding: 20px; border-radius: 8px; border-top: 3px solid #f59e0b;">
                        <div style="color: #94a3b8; font-size: 0.9rem; margin-bottom: 5px;">総販売額</div>
                        <div id="total-sell" style="font-size: 1.8rem; font-weight: bold; color: #fff; font-family: 'Share Tech Mono', monospace;">¥0</div>
                    </div>
                    <div class="summary-card" style="flex: 1; min-width: 200px; background: rgba(0,0,0,0.4); border: 1px solid rgba(168,85,247,0.3); padding: 20px; border-radius: 8px; border-top: 3px solid #a855f7; box-shadow: 0 0 15px rgba(168,85,247,0.1) inset;">
                        <div style="color: #a855f7; font-size: 0.9rem; margin-bottom: 5px;">純利益 (予測含む)</div>
                        <div id="total-profit" style="font-size: 2.2rem; font-weight: bold; color: #fff; text-shadow: 0 0 10px rgba(168,85,247,0.5); font-family: 'Share Tech Mono', monospace;">¥0</div>
                    </div>
                </div>

                <!-- Input Form -->
                <div class="input-form-area" style="background: rgba(255,255,255,0.03); border: 1px dashed rgba(168,85,247,0.3); padding: 25px; border-radius: 8px; margin-bottom: 40px; text-align: left;">
                    <h3 style="color: #a855f7; font-size: 1.2rem; margin-bottom: 20px;"><i class="fas fa-plus-circle"></i> 新規カード登録</h3>
                    <form id="tracker-form" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px; align-items: end;">
                        
                        <div class="form-group">
                            <label style="display: block; font-size: 0.85rem; color: #cbd5e1; margin-bottom: 5px;">カード名 (状態)</label>
                            <input type="text" id="ipt-name" required placeholder="例: ピカチュウAR" class="cyber-input">
                        </div>
                        
                        <div class="form-group">
                            <label style="display: block; font-size: 0.85rem; color: #cbd5e1; margin-bottom: 5px;">仕入額 (円)</label>
                            <input type="number" id="ipt-buy" required min="0" placeholder="5000" class="cyber-input">
                        </div>
                        
                        <div class="form-group" style="display: flex; flex-direction: column; justify-content: center; height: 100%;">
                            <label style="display: flex; align-items: center; cursor: pointer; color: #cbd5e1; font-size: 0.9rem;">
                                <input type="checkbox" id="ipt-psa-check" style="margin-right: 8px; transform: scale(1.2); accent-color: #a855f7;">
                                PSAへ提出する
                            </label>
                        </div>
                        
                        <div class="form-group psa-details" id="psa-details-group" style="opacity: 0.5; pointer-events: none; transition: 0.3s;">
                            <label style="display: block; font-size: 0.85rem; color: #cbd5e1; margin-bottom: 5px;">鑑定料＋送料等 (円)</label>
                            <input type="number" id="ipt-psa-fee" min="0" value="3300" class="cyber-input" style="color: #94a3b8;">
                        </div>
                        
                        <div class="form-group">
                            <label style="display: block; font-size: 0.85rem; color: #cbd5e1; margin-bottom: 5px;">販売・着地見込額 (円)</label>
                            <input type="number" id="ipt-sell" min="0" placeholder="15000" class="cyber-input">
                        </div>

                        <div class="form-group" style="text-align: right;">
                            <button type="submit" class="btn btn-primary cyber-btn hover-glow" style="background: #a855f7; border: none; width: 100%; box-shadow: 0 0 15px rgba(168,85,247,0.4); padding: 12px;"><i class="fas fa-plus"></i> 追加</button>
                        </div>
                        
                    </form>
                </div>

                <!-- Data Table -->
                <div style="overflow-x: auto; text-align: left;">
                    <table style="width: 100%; border-collapse: collapse; min-width: 800px;">
                        <thead>
                            <tr style="background: rgba(0,0,0,0.5); border-bottom: 2px solid rgba(168,85,247,0.5);">
                                <th style="padding: 15px; color: #a855f7; font-size: 0.9rem; text-align: left;">カード情報</th>
                                <th style="padding: 15px; color: #cbd5e1; font-size: 0.9rem; text-align: right;">仕入額</th>
                                <th style="padding: 15px; color: #cbd5e1; font-size: 0.9rem; text-align: center;">PSA提出</th>
                                <th style="padding: 15px; color: #cbd5e1; font-size: 0.9rem; text-align: right;">販売(見込)額</th>
                                <th style="padding: 15px; color: #cbd5e1; font-size: 0.9rem; text-align: right;">粗利益</th>
                                <th style="padding: 15px; color: #cbd5e1; font-size: 0.9rem; text-align: right;">利益率</th>
                                <th style="padding: 15px; color: #cbd5e1; font-size: 0.9rem; text-align: center;">操作</th>
                            </tr>
                        </thead>
                        <tbody id="tracker-tbody">
                            <!-- JS Will populate this -->
                        </tbody>
                    </table>
                    
                    <div id="empty-state" style="padding: 60px 20px; text-align: center; color: #64748b; display: none;">
                        <i class="fas fa-inbox" style="font-size: 3rem; margin-bottom: 15px; opacity: 0.5;"></i>
                        <p>データがありません。上のフォームからカードを登録してください。</p>
                    </div>
                </div>
                
                <div style="margin-top: 20px; text-align: right;">
                    <button id="btn-clear-all" style="background: none; border: 1px solid #ef4444; color: #ef4444; padding: 8px 15px; border-radius: 4px; cursor: pointer; font-size: 0.8rem; transition: 0.3s;"><i class="fas fa-trash-alt"></i> 全データクリア</button>
                </div>

            </div>
        </div>
    </section>

</main>

<style>
/* Tracker Specific CSS */
.cyber-input {
    width: 100%;
    background: rgba(0, 0, 0, 0.4);
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 10px 15px;
    border-radius: 4px;
    color: #fff;
    font-size: 1rem;
    transition: 0.3s;
}
.cyber-input:focus {
    outline: none;
    border-color: #a855f7;
    box-shadow: 0 0 10px rgba(168,85,247,0.3);
}
.tracker-row {
    border-bottom: 1px solid rgba(255,255,255,0.05);
    transition: background 0.3s;
}
.tracker-row:hover {
    background: rgba(255,255,255,0.02);
}
.tracker-row td {
    padding: 15px;
    vertical-align: middle;
}
.status-badge {
    display: inline-block;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: bold;
}
.status-psa {
    background: rgba(59,130,246,0.1);
    color: #3b82f6;
    border: 1px solid #3b82f6;
}
.status-no-psa {
    background: rgba(100,116,139,0.1);
    color: #94a3b8;
    border: 1px solid #64748b;
}
.text-profit {
    color: #4ade80;
}
.text-loss {
    color: #ef4444;
}
.btn-delete {
    background: rgba(239, 68, 68, 0.1);
    color: #ef4444;
    border: none;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    cursor: pointer;
    transition: 0.2s;
}
.btn-delete:hover {
    background: #ef4444;
    color: #fff;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    // --- UI Elements ---
    const form = document.getElementById('tracker-form');
    const iptPsaCheck = document.getElementById('ipt-psa-check');
    const psaDetailsGroup = document.getElementById('psa-details-group');
    const iptPsaFee = document.getElementById('ipt-psa-fee');
    const tbody = document.getElementById('tracker-tbody');
    const emptyState = document.getElementById('empty-state');
    
    const uiTotalBuy = document.getElementById('total-buy');
    const uiTotalSell = document.getElementById('total-sell');
    const uiTotalProfit = document.getElementById('total-profit');
    
    // --- State / Data ---
    let cardsData = [];
    
    // Load from LocalStorage
    const savedData = localStorage.getItem('rockets_psa_tracker');
    if (savedData) {
        try {
            cardsData = JSON.parse(savedData);
        } catch(e) {}
    }

    // Toggle PSA inputs
    iptPsaCheck.addEventListener('change', (e) => {
        if(e.target.checked) {
            psaDetailsGroup.style.opacity = '1';
            psaDetailsGroup.style.pointerEvents = 'auto';
            iptPsaFee.style.color = '#fff';
        } else {
            psaDetailsGroup.style.opacity = '0.5';
            psaDetailsGroup.style.pointerEvents = 'none';
            iptPsaFee.style.color = '#94a3b8';
        }
    });

    // Formatting JS Utility
    const formatJPY = (num) => {
        return new Intl.NumberFormat('ja-JP', { style: 'currency', currency: 'JPY' }).format(num || 0);
    };

    // Render Table
    const renderTable = () => {
        tbody.innerHTML = '';
        
        let totalBuy = 0;
        let totalSell = 0;
        let totalFee = 0;

        if (cardsData.length === 0) {
            emptyState.style.display = 'block';
        } else {
            emptyState.style.display = 'none';
        }

        cardsData.forEach((item, index) => {
            totalBuy += item.buy;
            totalSell += item.sell;
            if(item.isPsa) {
                totalFee += item.fee;
            }

            const tr = document.createElement('tr');
            tr.className = 'tracker-row';
            
            // Calculate row profit
            const totalCost = item.buy + (item.isPsa ? item.fee : 0);
            const profitStr = item.sell === 0 ? '-' : (item.sell - totalCost);
            const profitNum = item.sell === 0 ? 0 : (item.sell - totalCost);
            const isProfit = profitNum >= 0;
            const profitClass = item.sell === 0 ? '' : (isProfit ? 'text-profit' : 'text-loss');
            
            const margin = item.sell > 0 ? ((profitNum / item.sell) * 100).toFixed(1) + '%' : '-';

            tr.innerHTML = `
                <td style="font-weight: bold; color: #fff;">${item.name}</td>
                <td style="text-align: right; font-family: 'Share Tech Mono', monospace;">${formatJPY(item.buy)}</td>
                <td style="text-align: center;">
                    <span class="status-badge ${item.isPsa ? 'status-psa' : 'status-no-psa'}">
                        ${item.isPsa ? `PSA有<br><small style="font-size:0.7rem;">(${formatJPY(item.fee)})</small>` : '未提出'}
                    </span>
                </td>
                <td style="text-align: right; font-family: 'Share Tech Mono', monospace; font-weight: bold;">${item.sell === 0 ? '未定' : formatJPY(item.sell)}</td>
                <td style="text-align: right; font-family: 'Share Tech Mono', monospace; font-weight: bold;" class="${profitClass}">
                    ${item.sell === 0 ? '-' : (isProfit ? '+' : '') + formatJPY(profitNum)}
                </td>
                <td style="text-align: right; font-family: 'Share Tech Mono', monospace;" class="${profitClass}">${margin}</td>
                <td style="text-align: center;">
                    <button class="btn-delete" data-index="${index}" title="削除"><i class="fas fa-times"></i></button>
                </td>
            `;
            tbody.appendChild(tr);
        });

        // Update Dashboard Summary
        const grandProfit = totalSell > 0 ? (totalSell - totalBuy - totalFee) : 0;
        uiTotalBuy.innerText = formatJPY(totalBuy + totalFee); // Cost includes fee
        uiTotalSell.innerText = formatJPY(totalSell);
        uiTotalProfit.innerText = formatJPY(grandProfit);
        
        if (grandProfit >= 0) {
            uiTotalProfit.style.color = '#4ade80';
            uiTotalProfit.style.textShadow = '0 0 10px rgba(74,222,128,0.5)';
        } else {
            uiTotalProfit.style.color = '#ef4444';
            uiTotalProfit.style.textShadow = '0 0 10px rgba(239,68,68,0.5)';
        }

        // Save to local storage
        localStorage.setItem('rockets_psa_tracker', JSON.stringify(cardsData));
    };

    // Form Submit (Add Card)
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const name = document.getElementById('ipt-name').value;
        const buy = parseInt(document.getElementById('ipt-buy').value) || 0;
        const isPsa = iptPsaCheck.checked;
        const fee = isPsa ? (parseInt(document.getElementById('ipt-psa-fee').value) || 0) : 0;
        const sellStr = document.getElementById('ipt-sell').value;
        const sell = sellStr === '' ? 0 : (parseInt(sellStr) || 0); // 0 conceptually means unsold yet

        cardsData.push({
            name,
            buy,
            isPsa,
            fee,
            sell,
            id: Date.now()
        });

        // Reset form
        form.reset();
        iptPsaCheck.checked = false;
        iptPsaCheck.dispatchEvent(new Event('change'));
        document.getElementById('ipt-name').focus();

        renderTable();
    });

    // Delete Row
    tbody.addEventListener('click', (e) => {
        const btn = e.target.closest('.btn-delete');
        if (btn) {
            const index = btn.getAttribute('data-index');
            if(confirm('このデータを削除しますか？')) {
                cardsData.splice(index, 1);
                renderTable();
            }
        }
    });

    // Clear All
    document.getElementById('btn-clear-all').addEventListener('click', () => {
        if(cardsData.length > 0 && confirm('すべてのデータを削除してもよろしいですか？（※復元できません）')) {
            cardsData = [];
            renderTable();
        }
    });

    // Initial render
    renderTable();
});
</script>

<?php get_footer(); ?>
