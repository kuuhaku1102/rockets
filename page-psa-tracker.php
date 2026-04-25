<?php
/*
Template Name: PSA Tracker
*/
if ( !is_user_logged_in() ) {
    wp_redirect( wp_login_url( get_permalink() ) );
    exit;
}
get_header(); 
$db_data_json = get_option('rockets_psa_tracker_data', '{"deposits":0,"cards":[]}');
?>

<main id="content" class="tracker-light-theme relative z-10" style="min-height: 100vh; background-color: #f8fafc; color: #334155; padding-bottom: 50px;">

    <!-- Header Section -->
    <section class="page-header relative z-10" style="padding: 50px 0 20px;">
        <div class="container text-center">
            <h1 style="font-size: 2.2rem; margin-bottom: 5px; color: #1e293b; font-weight: bold; font-family: 'Share Tech Mono', sans-serif;">PSA ROI Tracker<span style="font-size: 1rem; color:#8b5cf6; margin-left:10px;">PRO</span></h1>
            <p style="color: #64748b; font-size: 0.9rem;">クラウド同期 / 現金出納 / CSVエクスポート機能搭載</p>
        </div>
    </section>

    <!-- Tracker App Interface -->
    <section class="section-padding relative z-10 pt-0">
        <div class="container text-center">
            
            <!-- Dashboard / Summary (Light Theme) -->
            <div class="dashboard-summary" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 20px; max-width: 1200px; margin-left: auto; margin-right: auto; text-align: left;">
                
                <!-- Cash Flow Ledger Box -->
                <div style="flex: 2; min-width: 280px; background: #fff; border: 1px solid #e2e8f0; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                        <span style="color: #64748b; font-size: 0.9rem; font-weight: bold;"><i class="fas fa-wallet" style="color: #10b981;"></i> 出納帳・現金機能</span>
                    </div>
                    <div style="display: flex; gap: 20px; align-items: flex-end;">
                        <div style="flex: 1;">
                            <label style="display: block; font-size: 0.75rem; color: #94a3b8; margin-bottom: 5px;">現金を追加 (円)</label>
                            <div style="display: flex; gap: 5px;">
                                <input type="number" id="ipt-add-cash" class="light-input" placeholder="100000" style="flex: 1; font-size: 1rem; padding: 5px 10px; border: 1px solid #cbd5e1; background: #fff; border-radius: 4px;">
                                <button id="btn-add-cash" style="background: #10b981; color: white; border: none; padding: 5px 15px; border-radius: 4px; font-weight: bold; font-size: 0.85rem; cursor: pointer; white-space: nowrap; transition: 0.2s;" onmouseover="this.style.background='#059669'" onmouseout="this.style.background='#10b981'"><i class="fas fa-plus"></i> 追加</button>
                            </div>
                            <div style="margin-top: 5px; font-size: 0.75rem; color: #64748b;">入金総累計: <span id="display-total-deposits" style="font-family: 'Share Tech Mono', monospace; font-weight: bold;">¥0</span></div>
                        </div>
                        <div style="flex: 1;">
                            <label style="display: block; font-size: 0.75rem; color: #94a3b8; margin-bottom: 5px;">現在の現金残高</label>
                            <div id="current-cash" style="font-size: 1.8rem; font-weight: bold; color: #10b981; font-family: 'Share Tech Mono', monospace;">¥0</div>
                        </div>
                    </div>
                    <p style="font-size: 0.7rem; color: #94a3b8; margin-top: 8px; line-height: 1.4;">※「現金」設定での仕入れ・鑑定料で減算され、販売完了で販売額が加算されます（クレジット決済分は現金から引き落とされません）。</p>
                </div>

                <!-- Stats Box -->
                <div style="flex: 3; display: flex; gap: 15px;">
                    <div style="flex: 1; min-width: 120px; background: #fff; border: 1px solid #e2e8f0; padding: 15px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                        <div style="color: #64748b; font-size: 0.8rem; margin-bottom: 5px;">総仕入額</div>
                        <div id="total-buy" style="font-size: 1.4rem; font-weight: bold; color: #334155; font-family: 'Share Tech Mono', monospace;">¥0</div>
                    </div>
                    <div style="flex: 1; min-width: 120px; background: #fff; border: 1px solid #e2e8f0; padding: 15px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                        <div style="color: #64748b; font-size: 0.8rem; margin-bottom: 5px;">総販売額</div>
                        <div id="total-sell" style="font-size: 1.4rem; font-weight: bold; color: #334155; font-family: 'Share Tech Mono', monospace;">¥0</div>
                    </div>
                    <div style="flex: 1; min-width: 120px; background: #fff; border: 1px solid #8b5cf6; padding: 15px; border-radius: 8px; box-shadow: 0 4px 10px rgba(139,92,246,0.1);">
                        <div style="color: #8b5cf6; font-size: 0.8rem; margin-bottom: 5px; font-weight: bold;">純利益 (予測含む)</div>
                        <div id="total-profit" style="font-size: 1.6rem; font-weight: bold; color: #334155; font-family: 'Share Tech Mono', monospace;">¥0</div>
                    </div>
                </div>
            </div>

            <!-- Input Form Area -->
            <div style="background: #fff; border: 1px solid #e2e8f0; padding: 25px; border-radius: 8px; margin-bottom: 30px; text-align: left; max-width: 1200px; margin-left: auto; margin-right: auto; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                <h3 style="color: #1e293b; font-size: 1.1rem; margin-bottom: 15px; border-bottom: 1px solid #f1f5f9; padding-bottom: 10px; font-weight: bold;">
                    <i class="fas fa-cart-plus" style="color:#8b5cf6; margin-right:5px;"></i> 新規カード仕入登録
                </h3>
                
                <form id="tracker-form" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(130px, 1fr)); gap: 15px; align-items: end;">
                    
                    <div class="form-group">
                        <label class="form-label">仕入日</label>
                        <input type="date" id="ipt-date" required class="light-input">
                    </div>

                    <div class="form-group" style="grid-column: span 2;">
                        <label class="form-label">カード名</label>
                        <input type="text" id="ipt-name" required placeholder="例: ピカチュウAR" class="light-input">
                    </div>

                    <div class="form-group">
                        <label class="form-label">支払方法</label>
                        <select id="ipt-payment" class="light-input" style="cursor:pointer; appearance: auto;">
                            <option value="cash">💵 現金</option>
                            <option value="credit">💳 クレジット</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">仕入額 (円)</label>
                        <input type="number" id="ipt-buy" required min="0" placeholder="5000" class="light-input">
                    </div>
                    
                    <div class="form-group" style="display: flex; align-items: center; height: 38px; margin-bottom: 2px;">
                        <label style="cursor: pointer; color: #475569; font-size: 0.85rem; display: flex; align-items: center; background: #eff6ff; padding: 5px 10px; border-radius: 4px; border: 1px solid #bfdbfe; font-weight: bold;">
                            <input type="checkbox" id="ipt-psa-check" style="margin-right: 8px; transform: scale(1.2);">
                            PSA提出
                        </label>
                    </div>
                    
                    <div class="form-group psa-details" style="opacity: 0.4; pointer-events: none; transition: 0.3s;">
                        <label class="form-label">鑑定料 (現金)</label>
                        <input type="number" id="ipt-psa-fee" min="0" value="3300" class="light-input">
                    </div>

                    <div class="form-group psa-details" style="opacity: 0.4; pointer-events: none; transition: 0.3s;">
                        <label class="form-label">送料 (現金)</label>
                        <input type="number" id="ipt-psa-shipping" min="0" value="0" class="light-input">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn" style="width: 100%; padding: 10px; background: #8b5cf6; border: none; color: white; cursor: pointer; border-radius: 4px; font-weight: bold; font-size:0.9rem; transition: 0.2s;" onmouseover="this.style.background='#7c3aed'" onmouseout="this.style.background='#8b5cf6'">
                            <i class="fas fa-plus"></i> 登録
                        </button>
                    </div>
                </form>
            </div>

            <!-- Table & Filter Area -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; max-width: 1200px; margin: 0 auto; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                
                <!-- Filter bar -->
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 10px;">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <div style="background: #f1f5f9; padding: 6px 12px; border-radius: 6px; border: 1px solid #cbd5e1; display:flex; align-items:center; gap:10px;">
                            <i class="fas fa-calendar-alt" style="color: #64748b;"></i>
                            <input type="date" id="filter-start" class="light-input filter-input" style="padding: 2px; width: 120px;">
                            <span style="color: #64748b;">〜</span>
                            <input type="date" id="filter-end" class="light-input filter-input" style="padding: 2px; width: 120px;">
                            <button id="btn-filter" style="background: #3b82f6; color: white; border: none; padding: 4px 10px; border-radius: 4px; cursor: pointer; font-size: 0.8rem;">絞込</button>
                            <button id="btn-reset-filter" style="background: transparent; color: #64748b; border: 1px solid #94a3b8; padding: 4px 10px; border-radius: 4px; cursor: pointer; font-size: 0.8rem;">解除</button>
                        </div>
                        <button id="btn-export-csv" style="background: #10b981; color: white; border: none; padding: 7px 15px; border-radius: 4px; cursor: pointer; font-size: 0.85rem; font-weight: bold; margin-left: 10px;">
                            <i class="fas fa-file-excel"></i> CSV出力
                        </button>
                    </div>
                    
                    <button id="btn-clear-all" style="background: transparent; border: 1px solid #ef4444; color: #ef4444; padding: 5px 15px; border-radius: 4px; cursor: pointer; font-size: 0.8rem;">
                        <i class="fas fa-trash-alt"></i> 全データクリア
                    </button>
                </div>

                <div style="overflow-x: auto; text-align: left;">
                    <table style="width: 100%; border-collapse: collapse; min-width: 950px; font-size: 0.85rem;">
                        <thead>
                            <tr style="background: #f8fafc; border-bottom: 2px solid #e2e8f0;">
                                <th class="ths">仕入日</th>
                                <th class="ths">カード名</th>
                                <th class="ths text-center">支払</th>
                                <th class="ths text-right">仕入額</th>
                                <th class="ths text-center">PSA</th>
                                <th class="ths text-right">鑑定料</th>
                                <th class="ths text-right">送料</th>
                                <th class="ths text-right" style="background: #f3e8ff;">販売額 (入力)</th>
                                <th class="ths text-right">粗利益</th>
                                <th class="ths text-right">利益率</th>
                                <th class="ths text-center" style="width: 40px;">-</th>
                            </tr>
                        </thead>
                        <tbody id="tracker-tbody">
                            <!-- JS Will populate this -->
                        </tbody>
                    </table>
                    
                    <div id="empty-state" style="padding: 40px 20px; text-align: center; color: #94a3b8;">
                        <i class="fas fa-folder-open" style="font-size: 2rem; margin-bottom: 10px; opacity:0.3;"></i><br>
                        データがありません。
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<style>
/* Light Theme CSS Adjustments */
.form-label {
    display: block; font-size: 0.75rem; color: #475569; margin-bottom: 5px; font-weight: bold;
}
.light-input {
    width: 100%;
    background: #fff;
    border: 1px solid #cbd5e1;
    padding: 8px 12px;
    border-radius: 4px;
    color: #1e293b;
    font-size: 0.9rem;
    box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);
}
.light-input:focus {
    outline: none;
    border-color: #8b5cf6;
    box-shadow: 0 0 0 2px rgba(139,92,246,0.2);
}
.filter-input {
    background: transparent;
    border: none;
    border-bottom: 1px solid #cbd5e1;
    border-radius: 0;
    box-shadow: none;
}
.filter-input:focus { box-shadow: none; border-bottom-color: #3b82f6; }
.ths {
    padding: 12px 10px; color: #475569; font-weight: bold;
}
.text-right { text-align: right; }
.text-center { text-align: center; }

.tracker-row {
    border-bottom: 1px solid #f1f5f9;
}
.tracker-row:nth-child(even) {
    background: #f8fafc;
}
.tracker-row:hover {
    background: #f1f5f9;
}
.tracker-row td {
    padding: 10px;
    vertical-align: middle;
    color: #334155;
}
.sell-input-field {
    width: 100px;
    text-align: right;
    padding: 4px 8px;
    background: #fff;
    border: 1px solid #cbd5e1;
    border-radius: 4px;
    color: #1e293b;
    font-family: 'Share Tech Mono', monospace;
    font-weight: bold;
}
.sell-input-field:focus {
    border-color: #8b5cf6;
    outline: none;
    box-shadow: 0 0 0 2px rgba(139,92,246,0.2);
}
.btn-delete {
    background: transparent;
    color: #cbd5e1;
    border: none;
    cursor: pointer;
    font-size: 0.9rem;
}
.btn-delete:hover { color: #ef4444; }
.profit-pos { color: #10b981; }
.profit-neg { color: #ef4444; }
.badge-pay {
    font-size: 0.7rem; padding: 2px 6px; border-radius: 4px;
}
.badge-cash { background: #dcfce7; color: #166534; border: 1px solid #bbf7d0; }
.badge-credit { background: #e0e7ff; color: #3730a3; border: 1px solid #c7d2fe; }
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    
    const adminAjaxUrl = '<?php echo admin_url("admin-ajax.php"); ?>';
    
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
    let appState = { deposits: 0, cards: [] };
    let currentFilter = { start: null, end: null };
    
    // Load data from WP DB 
    const dbDataRaw = <?php echo json_encode($db_data_json); ?>;
    
    if (dbDataRaw && dbDataRaw !== '[]' && dbDataRaw !== '{}') {
        try { 
            const parsed = JSON.parse(dbDataRaw); 
            // Legacy conversion
            if (Array.isArray(parsed)) {
                appState.cards = parsed;
            } else if (parsed && parsed.cards) {
                appState = parsed;
            }
        } catch(e) { console.error(e); }
    } else {
        // Fallback to local storage migration
        const local = localStorage.getItem('rockets_psa_tracker');
        if (local) {
            try { 
                const lp = JSON.parse(local); 
                if(Array.isArray(lp)) appState.cards = lp;
            } catch(e) {}
        }
    }

    // Clean structural upgrades
    appState.cards = appState.cards.map(c => ({
        id: c.id,
        date: c.date || today,
        name: c.name || '',
        paymentMethod: c.paymentMethod || 'cash',
        buy: c.buy || 0,
        isPsa: !!c.isPsa,
        psaFee: c.psaFee !== undefined ? c.psaFee : (c.fee || 0),
        shippingFee: c.shippingFee || 0,
        sell: c.sell || 0
    }));

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

    // Save Logic
    let saveTimeout = null;
    const saveToServer = () => {
        clearTimeout(saveTimeout);
        saveTimeout = setTimeout(() => {
            const formData = new FormData();
            formData.append('action', 'psa_tracker_save');
            formData.append('data', JSON.stringify(appState));
            fetch(adminAjaxUrl, {
                method: 'POST',
                body: formData
            }).catch(e => console.error("DB Sync failed", e));
        }, 500);
    };

    // Cash Addition Logic
    document.getElementById('btn-add-cash').addEventListener('click', () => {
        const amount = parseInt(document.getElementById('ipt-add-cash').value) || 0;
        if (amount !== 0) {
            appState.deposits = (appState.deposits || 0) + amount;
            document.getElementById('ipt-add-cash').value = '';
            renderTable();
        }
    });

    // Render Table
    const renderTable = () => {
        tbody.innerHTML = '';
        let totalBuy = 0; let totalSell = 0; let totalFee = 0;
        
        let currentCash = appState.deposits || 0;

        let filteredData = appState.cards;
        if(currentFilter.start) filteredData = filteredData.filter(c => c.date >= currentFilter.start);
        if(currentFilter.end) filteredData = filteredData.filter(c => c.date <= currentFilter.end);

        if (filteredData.length === 0) emptyState.style.display = 'block';
        else emptyState.style.display = 'none';

        // Cash calculations run on ALL data, not just filtered
        appState.cards.forEach(c => {
            if (c.paymentMethod === 'cash') currentCash -= c.buy;
            if (c.isPsa) currentCash -= (c.psaFee + c.shippingFee); // Assume fees are cash
            if (c.sell > 0) currentCash += c.sell;
        });

        // Loop for UI
        filteredData.sort((a,b) => new Date(b.date) - new Date(a.date)).forEach((item) => {
            totalBuy += item.buy;
            totalSell += item.sell;
            if(item.isPsa) totalFee += item.psaFee + item.shippingFee;

            const totalCost = item.buy + (item.isPsa ? (item.psaFee + item.shippingFee) : 0);
            const profitNum = item.sell === 0 ? 0 : (item.sell - totalCost);
            const isProfit = profitNum >= 0;
            const profitClass = item.sell === 0 ? '' : (isProfit ? 'profit-pos' : 'profit-neg');
            const margin = item.sell > 0 ? ((profitNum / item.sell) * 100).toFixed(1) + '%' : '-';
            
            const payBadge = item.paymentMethod === 'credit' 
                ? '<span class="badge-pay badge-credit">💳</span>' 
                : '<span class="badge-pay badge-cash">💵</span>';

            const tr = document.createElement('tr');
            tr.className = 'tracker-row';
            tr.innerHTML = `
                <td style="color: #64748b;">${item.date}</td>
                <td style="font-weight: bold;">${item.name}</td>
                <td class="text-center">${payBadge}</td>
                <td class="text-right" style="font-family: 'Share Tech Mono', monospace;">¥${formatJPY(item.buy)}</td>
                <td class="text-center">
                    ${item.isPsa ? '<i class="fas fa-check-circle" style="color:#8b5cf6;" title="PSA提出"></i>' : '-'}
                </td>
                <td class="text-right" style="color: #64748b; font-family: 'Share Tech Mono', monospace;">${item.isPsa ? '¥'+formatJPY(item.psaFee) : '-'}</td>
                <td class="text-right" style="color: #64748b; font-family: 'Share Tech Mono', monospace;">${item.isPsa ? '¥'+formatJPY(item.shippingFee) : '-'}</td>
                <td class="text-right" style="background: rgba(139,92,246,0.03);">
                    ¥ <input type="number" class="sell-input-field" data-id="${item.id}" value="${item.sell || ''}" placeholder="未売">
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
        elProfit.style.color = grandProfit >= 0 ? '#8b5cf6' : '#ef4444'; // Purple positive

        const elCash = document.getElementById('current-cash');
        elCash.innerText = '¥' + formatJPY(currentCash);
        elCash.style.color = currentCash >= 0 ? '#10b981' : '#ef4444';

        const elTotalDeposits = document.getElementById('display-total-deposits');
        elTotalDeposits.innerText = '¥' + formatJPY(appState.deposits || 0);

        saveToServer();
    };

    // Add Card Form Submit
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        appState.cards.push({
            id: Date.now().toString(),
            date: document.getElementById('ipt-date').value,
            name: document.getElementById('ipt-name').value,
            paymentMethod: document.getElementById('ipt-payment').value,
            buy: parseInt(document.getElementById('ipt-buy').value) || 0,
            isPsa: iptPsaCheck.checked,
            psaFee: iptPsaCheck.checked ? (parseInt(document.getElementById('ipt-psa-fee').value) || 0) : 0,
            shippingFee: iptPsaCheck.checked ? (parseInt(document.getElementById('ipt-psa-shipping').value) || 0) : 0,
            sell: 0 
        });

        document.getElementById('ipt-name').value = '';
        document.getElementById('ipt-buy').value = '';
        renderTable();
    });

    // Handle Inline Sell Update & Delete
    tbody.addEventListener('change', (e) => {
        if (e.target.classList.contains('sell-input-field')) {
            const id = e.target.getAttribute('data-id');
            const card = appState.cards.find(c => String(c.id) === String(id));
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
                appState.cards = appState.cards.filter(c => String(c.id) !== String(id));
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
        if(appState.cards.length > 0 && confirm('現在表示されている全てのカードデータを削除しますか？')) {
            appState.cards = [];
            renderTable();
        }
    });

    // CSV Export Function
    document.getElementById('btn-export-csv').addEventListener('click', () => {
        if(appState.cards.length === 0) {
            alert('エクスポートするデータがありません。');
            return;
        }
        
        // Output BOM and headers
        let csvContent = "\uFEFF"; 
        csvContent += "仕入日,カード名,支払方法,仕入額,PSA提出,鑑定料,送料,販売額,粗利益,利益率\n";

        appState.cards.forEach(c => {
            const totalCost = c.buy + (c.isPsa ? (c.psaFee + c.shippingFee) : 0);
            const profit = c.sell === 0 ? 0 : (c.sell - totalCost);
            const margin = c.sell > 0 ? ((profit / c.sell) * 100).toFixed(1) + '%' : '';
            const paymentStr = c.paymentMethod === 'credit' ? 'クレジット' : '現金';
            const psaStr = c.isPsa ? '提出' : '未提出';
            
            const row = [
                c.date,
                `"${c.name.replace(/"/g, '""')}"`, // escape quotes
                paymentStr,
                c.buy,
                psaStr,
                c.psaFee,
                c.shippingFee,
                c.sell,
                c.sell === 0 ? '' : profit,
                margin
            ];
            csvContent += row.join(",") + "\n";
        });

        const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
        const url = URL.createObjectURL(blob);
        const link = document.createElement("a");
        link.setAttribute("href", url);
        link.setAttribute("download", `psa_tracker_${new Date().getTime()}.csv`);
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });

    renderTable();
});
</script>

<?php get_footer(); ?>
