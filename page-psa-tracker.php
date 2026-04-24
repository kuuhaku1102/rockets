<?php
/*
Template Name: PSA Tracker
*/
get_header(); ?>

<main id="content" class="home-tcg-theme relative z-10" style="min-height: 100vh; background-color: #030712;">

    <!-- Header Section (Simplified, no moving background) -->
    <section class="page-header relative z-10" style="padding: 60px 0 20px;">
        <div class="container text-center">
            <h1 style="font-size: 2.2rem; margin-bottom: 5px; color: #fff; font-family: 'Share Tech Mono', monospace;">PSA ROI Tracker</h1>
            <p style="color: #64748b; font-size: 0.9rem;">実務用データトラッカー（データはブラウザに保存されます）</p>
        </div>
    </section>

    <!-- Tracker App Interface -->
    <section class="section-padding relative z-10 pt-0">
        <div class="container text-center">
            
            <!-- Dashboard / Summary -->
            <div class="dashboard-summary" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 20px; max-width: 1200px; margin-left: auto; margin-right: auto;">
                <div style="flex: 1; min-width: 150px; background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.1); padding: 15px; border-radius: 6px;">
                    <div style="color: #94a3b8; font-size: 0.8rem; margin-bottom: 5px;">総仕入額</div>
                    <div id="total-buy" style="font-size: 1.5rem; font-weight: bold; color: #fff; font-family: 'Share Tech Mono', monospace;">¥0</div>
                </div>
                <div style="flex: 1; min-width: 150px; background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.1); padding: 15px; border-radius: 6px;">
                    <div style="color: #94a3b8; font-size: 0.8rem; margin-bottom: 5px;">総販売額</div>
                    <div id="total-sell" style="font-size: 1.5rem; font-weight: bold; color: #fff; font-family: 'Share Tech Mono', monospace;">¥0</div>
                </div>
                <div style="flex: 1; min-width: 150px; background: rgba(168,85,247,0.1); border: 1px solid rgba(168,85,247,0.3); padding: 15px; border-radius: 6px;">
                    <div style="color: #a855f7; font-size: 0.8rem; margin-bottom: 5px;">純利益 (予測含む)</div>
                    <div id="total-profit" style="font-size: 1.8rem; font-weight: bold; color: #fff; font-family: 'Share Tech Mono', monospace;">¥0</div>
                </div>
            </div>

            <!-- Input Form Area -->
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.1); padding: 20px; border-radius: 8px; margin-bottom: 30px; text-align: left; max-width: 1200px; margin-left: auto; margin-right: auto;">
                <h3 style="color: #fff; font-size: 1.1rem; margin-bottom: 15px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px;">
                    <i class="fas fa-plus-square" style="color:#a855f7; margin-right:5px;"></i> 新规カード追加
                </h3>
                
                <form id="tracker-form" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: 15px; align-items: end;">
                    
                    <div class="form-group">
                        <label class="form-label">仕入日</label>
                        <input type="date" id="ipt-date" required class="cyber-input">
                    </div>

                    <div class="form-group" style="grid-column: span 2;">
                        <label class="form-label">カード名</label>
                        <input type="text" id="ipt-name" required placeholder="例: ピカチュウAR" class="cyber-input">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">仕入額 (円)</label>
                        <input type="number" id="ipt-buy" required min="0" placeholder="5000" class="cyber-input">
                    </div>
                    
                    <div class="form-group" style="display: flex; align-items: center; height: 40px; margin-bottom: 2px;">
                        <label style="cursor: pointer; color: #cbd5e1; font-size: 0.9rem; display: flex; align-items: center; background: rgba(59,130,246,0.1); padding: 5px 10px; border-radius: 4px; border: 1px solid rgba(59,130,246,0.3);">
                            <input type="checkbox" id="ipt-psa-check" style="margin-right: 8px; transform: scale(1.2);">
                            PSA提出
                        </label>
                    </div>
                    
                    <div class="form-group psa-details" style="opacity: 0.4; pointer-events: none; transition: 0.3s;">
                        <label class="form-label">鑑定料 (円)</label>
                        <input type="number" id="ipt-psa-fee" min="0" value="3300" class="cyber-input">
                    </div>

                    <div class="form-group psa-details" style="opacity: 0.4; pointer-events: none; transition: 0.3s;">
                        <label class="form-label">送料・その他 (円)</label>
                        <input type="number" id="ipt-psa-shipping" min="0" value="0" class="cyber-input">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn cyberpunk-btn" style="width: 100%; padding: 10px; background: #a855f7; border: none; color: white; cursor: pointer; border-radius: 4px; font-weight: bold;">
                            <i class="fas fa-plus"></i> 追加
                        </button>
                    </div>
                </form>
            </div>

            <!-- Table & Filter Area -->
            <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 20px; max-width: 1200px; margin: 0 auto;">
                
                <!-- Filter bar -->
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 10px;">
                    <div style="display: flex; align-items: center; gap: 10px; background: rgba(0,0,0,0.3); padding: 5px 15px; border-radius: 6px; border: 1px solid rgba(255,255,255,0.05);">
                        <i class="fas fa-filter" style="color: #64748b;"></i>
                        <input type="date" id="filter-start" class="cyber-input filter-input" style="padding: 5px; width: 130px; font-size: 0.85rem;">
                        <span style="color: #64748b;">〜</span>
                        <input type="date" id="filter-end" class="cyber-input filter-input" style="padding: 5px; width: 130px; font-size: 0.85rem;">
                        <button id="btn-filter" style="background: #3b82f6; color: white; border: none; padding: 5px 12px; border-radius: 4px; cursor: pointer; font-size: 0.8rem;">絞り込み</button>
                        <button id="btn-reset-filter" style="background: transparent; color: #94a3b8; border: 1px solid #475569; padding: 5px 12px; border-radius: 4px; cursor: pointer; font-size: 0.8rem;">リセット</button>
                    </div>
                    <button id="btn-clear-all" style="background: transparent; border: 1px solid #ef4444; color: #ef4444; padding: 5px 15px; border-radius: 4px; cursor: pointer; font-size: 0.8rem;">
                        <i class="fas fa-trash-alt"></i> 全データクリア
                    </button>
                </div>

                <div style="overflow-x: auto; text-align: left;">
                    <table style="width: 100%; border-collapse: collapse; min-width: 900px; font-size: 0.9rem;">
                        <thead>
                            <tr style="background: rgba(0,0,0,0.4); border-bottom: 1px solid rgba(255,255,255,0.2);">
                                <th class="ths">仕入日</th>
                                <th class="ths">カード名</th>
                                <th class="ths text-right">仕入額</th>
                                <th class="ths text-center" style="width: 60px;">PSA</th>
                                <th class="ths text-right">鑑定料</th>
                                <th class="ths text-right">送料</th>
                                <th class="ths text-right" style="background: rgba(168,85,247,0.15);">販売額 (後から入力)</th>
                                <th class="ths text-right">粗利益</th>
                                <th class="ths text-right">利益率</th>
                                <th class="ths text-center" style="width: 40px;"></th>
                            </tr>
                        </thead>
                        <tbody id="tracker-tbody">
                            <!-- JS Will populate this -->
                        </tbody>
                    </table>
                    
                    <div id="empty-state" style="padding: 40px 20px; text-align: center; color: #475569;">
                        データがありません。
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<style>
.form-label {
    display: block; font-size: 0.8rem; color: #94a3b8; margin-bottom: 4px; font-weight: bold;
}
.cyber-input {
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    border: 1px solid rgba(255, 255, 255, 0.15);
    padding: 8px 12px;
    border-radius: 4px;
    color: #fff;
    font-size: 0.95rem;
}
.cyber-input:focus {
    outline: none;
    border-color: #a855f7;
    background: rgba(0,0,0,0.8);
}
.filter-input {
    background: transparent;
    border: none;
    border-bottom: 1px solid #475569;
    border-radius: 0;
}
.ths {
    padding: 12px 10px; color: #cbd5e1; font-weight: normal;
}
.text-right { text-align: right; }
.text-center { text-align: center; }

.tracker-row {
    border-bottom: 1px solid rgba(255,255,255,0.05);
}
.tracker-row:hover {
    background: rgba(255,255,255,0.03);
}
.tracker-row td {
    padding: 10px;
    vertical-align: middle;
}
.sell-input-field {
    width: 100px;
    text-align: right;
    padding: 4px 8px;
    background: rgba(168,85,247,0.05);
    border: 1px solid rgba(168,85,247,0.4);
    border-radius: 4px;
    color: #fff;
    font-family: 'Share Tech Mono', monospace;
}
.sell-input-field:focus {
    border-color: #a855f7;
    outline: none;
    background: rgba(168,85,247,0.15);
}
.btn-delete {
    background: transparent;
    color: #64748b;
    border: none;
    cursor: pointer;
}
.btn-delete:hover { color: #ef4444; }
.profit-pos { color: #4ade80; }
.profit-neg { color: #ef4444; }
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    
    // --- Elements ---
    const form = document.getElementById('tracker-form');
    const iptDate = document.getElementById('ipt-date');
    const iptPsaCheck = document.getElementById('ipt-psa-check');
    const psaDetails = document.querySelectorAll('.psa-details');
    const tbody = document.getElementById('tracker-tbody');
    const emptyState = document.getElementById('empty-state');
    
    const filterStart = document.getElementById('filter-start');
    const filterEnd = document.getElementById('filter-end');

    // Default dates
    const today = new Date().toISOString().split('T')[0];
    iptDate.value = today;

    // --- State ---
    let cardsData = [];
    let currentFilter = { start: null, end: null };
    
    // Load data
    const savedData = localStorage.getItem('rockets_psa_tracker');
    if (savedData) {
        try { 
            const parsed = JSON.parse(savedData); 
            cardsData = parsed.map(c => ({
                id: c.id,
                date: c.date || new Date().toISOString().split('T')[0],
                name: c.name || '',
                buy: c.buy || 0,
                isPsa: !!c.isPsa,
                psaFee: c.psaFee !== undefined ? c.psaFee : (c.fee || 0),
                shippingFee: c.shippingFee || 0,
                sell: c.sell || 0
            }));
        } catch(e) {}
    }

    // Toggle PSA inputs
    iptPsaCheck.addEventListener('change', (e) => {
        psaDetails.forEach(el => {
            if(e.target.checked) {
                el.style.opacity = '1';
                el.style.pointerEvents = 'auto';
            } else {
                el.style.opacity = '0.4';
                el.style.pointerEvents = 'none';
            }
        });
    });

    const formatJPY = (num) => new Intl.NumberFormat('ja-JP').format(num || 0);

    // Render Table
    const renderTable = () => {
        tbody.innerHTML = '';
        let totalBuy = 0; let totalSell = 0; let totalFee = 0;
        
        let filteredData = cardsData;
        if(currentFilter.start) {
            filteredData = filteredData.filter(c => c.date >= currentFilter.start);
        }
        if(currentFilter.end) {
            filteredData = filteredData.filter(c => c.date <= currentFilter.end);
        }

        if (filteredData.length === 0) {
            emptyState.style.display = 'block';
        } else {
            emptyState.style.display = 'none';
        }

        // Sort by date desc
        filteredData.sort((a,b) => new Date(b.date) - new Date(a.date)).forEach((item) => {
            totalBuy += item.buy;
            totalSell += item.sell;
            if(item.isPsa) {
                totalFee += item.psaFee + item.shippingFee;
            }

            const totalCost = item.buy + (item.isPsa ? (item.psaFee + item.shippingFee) : 0);
            const profitNum = item.sell === 0 ? 0 : (item.sell - totalCost);
            const isProfit = profitNum >= 0;
            const profitClass = item.sell === 0 ? '' : (isProfit ? 'profit-pos' : 'profit-neg');
            const margin = item.sell > 0 ? ((profitNum / item.sell) * 100).toFixed(1) + '%' : '-';

            const tr = document.createElement('tr');
            tr.className = 'tracker-row';
            tr.innerHTML = `
                <td style="color: #94a3b8;">${item.date}</td>
                <td style="font-weight: bold; color: #fff;">${item.name}</td>
                <td class="text-right" style="font-family: 'Share Tech Mono', monospace;">¥${formatJPY(item.buy)}</td>
                <td class="text-center">
                    ${item.isPsa ? '<i class="fas fa-check-circle" style="color:#3b82f6;" title="PSA提出済み"></i>' : '-'}
                </td>
                <td class="text-right" style="color: #94a3b8; font-family: 'Share Tech Mono', monospace;">${item.isPsa ? '¥'+formatJPY(item.psaFee) : '-'}</td>
                <td class="text-right" style="color: #94a3b8; font-family: 'Share Tech Mono', monospace;">${item.isPsa ? '¥'+formatJPY(item.shippingFee) : '-'}</td>
                
                <td class="text-right" style="background: rgba(168,85,247,0.05);">
                    ¥ <input type="number" class="sell-input-field" data-id="${item.id}" value="${item.sell || ''}" placeholder="未販売">
                </td>
                
                <td class="text-right ${profitClass}" style="font-family: 'Share Tech Mono', monospace; font-weight: bold;">
                    ${item.sell === 0 ? '-' : (isProfit ? '+' : '') + formatJPY(profitNum)}
                </td>
                <td class="text-right ${profitClass}" style="font-family: 'Share Tech Mono', monospace;">${margin}</td>
                <td class="text-center">
                    <button class="btn-delete" data-id="${item.id}" title="削除"><i class="fas fa-trash"></i></button>
                </td>
            `;
            tbody.appendChild(tr);
        });

        const grandProfit = totalSell > 0 ? (totalSell - totalBuy - totalFee) : 0;
        document.getElementById('total-buy').innerText = '¥' + formatJPY(totalBuy + totalFee);
        document.getElementById('total-sell').innerText = '¥' + formatJPY(totalSell);
        const elProfit = document.getElementById('total-profit');
        elProfit.innerText = '¥' + formatJPY(grandProfit);
        elProfit.style.color = grandProfit >= 0 ? '#4ade80' : '#ef4444';

        localStorage.setItem('rockets_psa_tracker', JSON.stringify(cardsData));
    };

    // Add Card Form Submit
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        cardsData.push({
            id: Date.now().toString(),
            date: document.getElementById('ipt-date').value,
            name: document.getElementById('ipt-name').value,
            buy: parseInt(document.getElementById('ipt-buy').value) || 0,
            isPsa: iptPsaCheck.checked,
            psaFee: iptPsaCheck.checked ? (parseInt(document.getElementById('ipt-psa-fee').value) || 0) : 0,
            shippingFee: iptPsaCheck.checked ? (parseInt(document.getElementById('ipt-psa-shipping').value) || 0) : 0,
            sell: 0 // Always 0 initially
        });

        // Reset text fields only, keep dates and basic config if wanted
        document.getElementById('ipt-name').value = '';
        document.getElementById('ipt-buy').value = '';
        renderTable();
    });

    // Handle Inline Sell Update & Delete
    tbody.addEventListener('change', (e) => {
        if (e.target.classList.contains('sell-input-field')) {
            const id = e.target.getAttribute('data-id');
            const card = cardsData.find(c => String(c.id) === String(id));
            if (card) {
                card.sell = parseInt(e.target.value) || 0;
                renderTable();
            }
        }
    });

    tbody.addEventListener('click', (e) => {
        const btn = e.target.closest('.btn-delete');
        if (btn) {
            const id = btn.getAttribute('data-id');
            if(confirm('このデータを削除しますか？')) {
                cardsData = cardsData.filter(c => String(c.id) !== String(id));
                renderTable();
            }
        }
    });

    // Filters
    document.getElementById('btn-filter').addEventListener('click', () => {
        currentFilter.start = filterStart.value || null;
        currentFilter.end = filterEnd.value || null;
        renderTable();
    });

    document.getElementById('btn-reset-filter').addEventListener('click', () => {
        filterStart.value = '';
        filterEnd.value = '';
        currentFilter = { start: null, end: null };
        renderTable();
    });

    document.getElementById('btn-clear-all').addEventListener('click', () => {
        if(cardsData.length > 0 && confirm('現在表示されている全てのデータを削除しますか？')) {
            // Keep items not in current filter if we only want to wipe filtered out, but for simplicity let's wipe all
            cardsData = [];
            renderTable();
        }
    });

    renderTable();
});
</script>

<?php get_footer(); ?>
