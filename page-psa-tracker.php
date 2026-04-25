<?php
/*
Template Name: PSA Tracker
*/
if ( !is_user_logged_in() ) {
    wp_redirect( wp_login_url( get_permalink() ) );
    exit;
}
get_header(); 
$db_data_json = get_option('rockets_psa_tracker_data', '{"deposits":0,"cards":[],"cashLogs":[],"psaLogs":[]}');
?>

<main id="content" class="tracker-light-theme relative z-10" style="min-height: 100vh; background-color: #f8fafc; color: #334155; padding-bottom: 80px;">

    <!-- Header Section -->
    <section class="page-header relative z-10" style="padding: 50px 0 20px;">
        <div class="container text-center">
            <h1 style="font-size: 2.2rem; margin-bottom: 5px; color: #1e293b; font-weight: bold; font-family: 'Share Tech Mono', sans-serif;">PSA ROI Tracker<span style="font-size: 1rem; color:#8b5cf6; margin-left:10px;">PRO</span></h1>
            <p style="color: #64748b; font-size: 0.9rem;">クラウド同期 / 月別表示 / 現金出納・PSA経費管理</p>
        </div>
    </section>

    <!-- Tracker App Interface -->
    <section class="section-padding relative z-10 pt-0">
        <div class="container text-center">
            
            <!-- Dashboard / Summary -->
            <div class="dashboard-summary" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 20px; max-width: 1200px; margin-left: auto; margin-right: auto; text-align: left;">
                
                <!-- Cash Balance Box -->
                <div style="flex: 1; min-width: 250px; background: #fff; border: 1px solid #e2e8f0; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                        <span style="color: #64748b; font-size: 0.9rem; font-weight: bold;"><i class="fas fa-wallet" style="color: #10b981;"></i> 現在の現金残高</span>
                    </div>
                    <div id="current-cash" style="font-size: 2.2rem; font-weight: bold; color: #10b981; font-family: 'Share Tech Mono', monospace; margin-bottom: 10px;">¥0</div>
                    <div style="font-size: 0.75rem; color: #94a3b8; line-height: 1.4;">
                        ※全ての入金・現金仕入・PSA経費・販売売上が合算された<br><span style="color:#ef4444;">総合計残高</span>です（月別タブの影響を受けません）。
                    </div>
                </div>

                <!-- Stats Box -->
                <div style="flex: 3; display: flex; gap: 15px; flex-wrap: wrap;">
                    <div style="flex: 1; min-width: 120px; background: #fff; border: 1px solid #e2e8f0; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                        <div style="color: #64748b; font-size: 0.8rem; margin-bottom: 5px;">総仕入額 <span class="stat-label" style="font-size:0.7rem; background:#f1f5f9; padding:2px 6px; border-radius:10px; margin-left:5px;">全期間</span></div>
                        <div id="total-buy" style="font-size: 1.6rem; font-weight: bold; color: #334155; font-family: 'Share Tech Mono', monospace;">¥0</div>
                    </div>
                    <div style="flex: 1; min-width: 120px; background: #fff; border: 1px solid #e2e8f0; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                        <div style="color: #64748b; font-size: 0.8rem; margin-bottom: 5px;">総販売額 <span class="stat-label" style="font-size:0.7rem; background:#f1f5f9; padding:2px 6px; border-radius:10px; margin-left:5px;">全期間</span></div>
                        <div id="total-sell" style="font-size: 1.6rem; font-weight: bold; color: #334155; font-family: 'Share Tech Mono', monospace;">¥0</div>
                    </div>
                    <div style="flex: 1; min-width: 120px; background: #fff; border: 1px solid #8b5cf6; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(139,92,246,0.1);">
                        <div style="color: #8b5cf6; font-size: 0.8rem; margin-bottom: 5px; font-weight: bold;">純利益 (予測含) <span class="stat-label" style="font-size:0.7rem; background:#ede9fe; padding:2px 6px; border-radius:10px; margin-left:5px;">全期間</span></div>
                        <div id="total-profit" style="font-size: 1.8rem; font-weight: bold; color: #334155; font-family: 'Share Tech Mono', monospace;">¥0</div>
                    </div>
                </div>
            </div>

            <!-- Input Form Area -->
            <div style="background: #fff; border: 1px solid #e2e8f0; padding: 25px; border-radius: 8px; margin-bottom: 30px; text-align: left; max-width: 1200px; margin-left: auto; margin-right: auto; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                <h3 style="color: #1e293b; font-size: 1.1rem; margin-bottom: 15px; border-bottom: 1px solid #f1f5f9; padding-bottom: 10px; font-weight: bold;">
                    <i class="fas fa-cart-plus" style="color:#8b5cf6; margin-right:5px;"></i> 新規カード仕入登録
                </h3>
                
                <form id="tracker-form" style="display: flex; flex-wrap: wrap; gap: 15px; align-items: end;">
                    <div class="form-group" style="flex: 1; min-width: 120px;">
                        <label class="form-label">仕入日</label>
                        <input type="date" id="ipt-date" required class="light-input">
                    </div>
                    <div class="form-group" style="flex: 2; min-width: 200px;">
                        <label class="form-label">カード名</label>
                        <input type="text" id="ipt-name" required placeholder="例: ピカチュウAR" class="light-input">
                    </div>
                    <div class="form-group" style="flex: 1; min-width: 120px;">
                        <label class="form-label">支払方法</label>
                        <select id="ipt-payment" class="light-input" style="cursor:pointer; appearance: auto;">
                            <option value="cash">💵 現金</option>
                            <option value="credit">💳 クレジット</option>
                        </select>
                    </div>
                    <div class="form-group" style="flex: 1; min-width: 120px;">
                        <label class="form-label">仕入額 (円)</label>
                        <input type="number" id="ipt-buy" required min="0" placeholder="5000" class="light-input">
                    </div>
                    <div class="form-group" style="flex: 0 0 auto;">
                        <label style="cursor: pointer; color: #475569; font-size: 0.85rem; display: flex; align-items: center; background: #eff6ff; padding: 8px 12px; border-radius: 4px; border: 1px solid #bfdbfe; font-weight: bold;">
                            <input type="checkbox" id="ipt-psa-check" style="margin-right: 8px; transform: scale(1.2);">
                            PSA鑑定中/予定
                        </label>
                    </div>
                    <div class="form-group" style="flex: 1; min-width: 100px;">
                        <button type="submit" class="btn" style="width: 100%; padding: 10px; background: #8b5cf6; border: none; color: white; cursor: pointer; border-radius: 4px; font-weight: bold; font-size:0.9rem; transition: 0.2s;" onmouseover="this.style.background='#7c3aed'" onmouseout="this.style.background='#8b5cf6'">
                            <i class="fas fa-plus"></i> 登録
                        </button>
                    </div>
                </form>
            </div>

            <!-- Global Monthly Tabs (Controls all tables below) -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 15px 20px; max-width: 1200px; margin: 0 auto 20px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                <div style="display: flex; gap: 5px; align-items: center; overflow-x: auto; white-space: nowrap;">
                    <div style="color: #1e293b; font-weight: bold; margin-right: 10px; font-size: 0.95rem;">
                        <i class="fas fa-calendar-check" style="color:#f59e0b; margin-right:5px;"></i> 月別データ表示
                    </div>
                    <select id="tab-year" class="light-input" style="width: 90px; padding: 4px 8px; border-color:#cbd5e1; font-weight:bold; margin-right:10px; height: 32px;"></select>
                    
                    <button class="tab-btn active" data-month="all">全期間</button>
                    <button class="tab-btn" data-month="1">1月</button>
                    <button class="tab-btn" data-month="2">2月</button>
                    <button class="tab-btn" data-month="3">3月</button>
                    <button class="tab-btn" data-month="4">4月</button>
                    <button class="tab-btn" data-month="5">5月</button>
                    <button class="tab-btn" data-month="6">6月</button>
                    <button class="tab-btn" data-month="7">7月</button>
                    <button class="tab-btn" data-month="8">8月</button>
                    <button class="tab-btn" data-month="9">9月</button>
                    <button class="tab-btn" data-month="10">10月</button>
                    <button class="tab-btn" data-month="11">11月</button>
                    <button class="tab-btn" data-month="12">12月</button>
                </div>
            </div>

            <!-- Card Tracker Table Area -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; max-width: 1200px; margin: 0 auto; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                    <h3 style="color: #1e293b; font-size: 1.1rem; font-weight: bold; margin:0;">
                        <i class="fas fa-box" style="color:#3b82f6; margin-right:5px;"></i> カード在庫一覧 <span class="table-title-suffix" style="font-size:0.8rem; color:#64748b; margin-left:10px;">(全期間)</span>
                    </h3>
                    <button id="btn-export-csv" style="background: #10b981; color: white; border: none; padding: 5px 12px; border-radius: 4px; cursor: pointer; font-size: 0.8rem; font-weight: bold;">
                        <i class="fas fa-file-excel"></i> CSV出力
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
                                <th class="ths text-right" style="background: #f3e8ff;">販売額 (未売は0)</th>
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
                        該当するカードデータがありません。
                    </div>
                </div>
            </div>

            <!-- Two Column Layout for Logs -->
            <div style="display: flex; flex-wrap: wrap; gap: 20px; margin: 20px auto 0; max-width: 1200px;">

                <!-- Cash Logs Area -->
                <div style="flex: 1; min-width: 350px; background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); text-align: left;">
                    <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #f1f5f9; padding-bottom: 10px; margin-bottom: 15px;">
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <h3 style="color: #1e293b; font-size: 1.1rem; font-weight: bold; margin:0;">
                                <i class="fas fa-history" style="color:#10b981;"></i> 資金追加ログ
                            </h3>
                            <span class="table-title-suffix" style="font-size:0.75rem; color:#64748b; background:#f1f5f9; padding:2px 6px; border-radius:4px;">全期間</span>
                        </div>
                        <button id="btn-export-cash" style="background: #10b981; color: white; border: none; padding: 4px 10px; border-radius: 4px; cursor: pointer; font-size: 0.75rem; font-weight: bold;">
                            <i class="fas fa-file-excel"></i> 出力
                        </button>
                    </div>
                    
                    <div style="background: #f8fafc; padding: 15px; border-radius: 6px; border: 1px solid #e2e8f0; margin-bottom: 15px;">
                        <div style="display: flex; gap: 10px; margin-bottom: 10px;">
                            <input type="date" id="ipt-cash-date" class="light-input" style="flex: 1; padding: 6px;">
                            <input type="number" id="ipt-add-cash" class="light-input" placeholder="金額(円)" style="flex: 2; padding: 6px; font-weight: bold;">
                        </div>
                        <div style="display: flex; gap: 10px;">
                            <input type="text" id="ipt-cash-memo" class="light-input" placeholder="メモ(任意)" style="flex: 1; padding: 6px;">
                            <button id="btn-add-cash" style="background: #10b981; color: white; border: none; padding: 6px 15px; border-radius: 4px; font-weight: bold; cursor: pointer; white-space: nowrap;"><i class="fas fa-plus"></i> 追加</button>
                        </div>
                    </div>

                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; font-size: 0.85rem;">
                            <thead>
                                <tr style="background: #f8fafc; border-bottom: 2px solid #e2e8f0;">
                                    <th class="ths">日付</th>
                                    <th class="ths text-right">入金額</th>
                                    <th class="ths" style="padding-left: 10px;">メモ</th>
                                    <th class="ths text-center" style="width: 40px;">-</th>
                                </tr>
                            </thead>
                            <tbody id="cash-log-tbody"></tbody>
                        </table>
                        <div id="cash-empty-state" style="padding: 15px; text-align: center; color: #94a3b8; display:none;">履歴なし</div>
                    </div>
                </div>

                <!-- PSA Submission Logs Area -->
                <div style="flex: 1; min-width: 350px; background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); text-align: left;">
                    <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #f1f5f9; padding-bottom: 10px; margin-bottom: 15px;">
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <h3 style="color: #1e293b; font-size: 1.1rem; font-weight: bold; margin:0;">
                                <i class="fas fa-certificate" style="color:#ef4444;"></i> PSA経費ログ
                            </h3>
                            <span class="table-title-suffix" style="font-size:0.75rem; color:#64748b; background:#f1f5f9; padding:2px 6px; border-radius:4px;">全期間</span>
                        </div>
                        <button id="btn-export-psa" style="background: #ef4444; color: white; border: none; padding: 4px 10px; border-radius: 4px; cursor: pointer; font-size: 0.75rem; font-weight: bold;">
                            <i class="fas fa-file-excel"></i> 出力
                        </button>
                    </div>
                    
                    <div style="background: #fff1f2; padding: 15px; border-radius: 6px; border: 1px solid #fecdd3; margin-bottom: 15px;">
                        <div style="display: flex; gap: 10px; margin-bottom: 10px;">
                            <input type="date" id="ipt-psa-date" class="light-input" style="flex: 1; padding: 6px; border-color:#fecdd3;">
                            <input type="number" id="ipt-psa-fee" class="light-input" placeholder="鑑定料(円)" style="flex: 1; padding: 6px; border-color:#fecdd3;">
                            <input type="number" id="ipt-psa-ship" class="light-input" placeholder="送料(円)" style="flex: 1; padding: 6px; border-color:#fecdd3;">
                        </div>
                        <div style="display: flex; gap: 10px;">
                            <input type="text" id="ipt-psa-memo" class="light-input" placeholder="第○回PSA提出分 など" style="flex: 1; padding: 6px; border-color:#fecdd3;">
                            <button id="btn-add-psalog" style="background: #ef4444; color: white; border: none; padding: 6px 15px; border-radius: 4px; font-weight: bold; cursor: pointer; white-space: nowrap;"><i class="fas fa-plus"></i> 追加</button>
                        </div>
                    </div>

                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; font-size: 0.85rem;">
                            <thead>
                                <tr style="background: #f8fafc; border-bottom: 2px solid #e2e8f0;">
                                    <th class="ths">日付</th>
                                    <th class="ths text-right">経費計</th>
                                    <th class="ths" style="padding-left: 10px;">メモ (内訳)</th>
                                    <th class="ths text-center" style="width: 40px;">-</th>
                                </tr>
                            </thead>
                            <tbody id="psa-log-tbody"></tbody>
                        </table>
                        <div id="psa-empty-state" style="padding: 15px; text-align: center; color: #94a3b8; display:none;">履歴なし</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<style>
/* Light Theme CSS Adjustments */
.form-label { display: block; font-size: 0.75rem; color: #475569; margin-bottom: 5px; font-weight: bold; }
.light-input {
    width: 100%; background: #fff; border: 1px solid #cbd5e1; padding: 8px 12px;
    border-radius: 4px; color: #1e293b; font-size: 0.9rem; box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);
}
.light-input:focus { outline: none; border-color: #8b5cf6; box-shadow: 0 0 0 2px rgba(139,92,246,0.2); }
.ths { padding: 12px 10px; color: #475569; font-weight: bold; }
.text-right { text-align: right; }
.text-center { text-align: center; }

.tracker-row { border-bottom: 1px solid #f1f5f9; }
.tracker-row:nth-child(even) { background: #f8fafc; }
.tracker-row:hover { background: #f1f5f9; }
.tracker-row td { padding: 10px; vertical-align: middle; color: #334155; }

.sell-input-field {
    width: 100px; text-align: right; padding: 4px 8px; background: #fff;
    border: 1px solid #cbd5e1; border-radius: 4px; color: #1e293b;
    font-family: 'Share Tech Mono', monospace; font-weight: bold;
}
.sell-input-field:focus { border-color: #8b5cf6; outline: none; box-shadow: 0 0 0 2px rgba(139,92,246,0.2); }

.btn-delete { background: transparent; color: #cbd5e1; border: none; cursor: pointer; font-size: 0.9rem; }
.btn-delete:hover { color: #ef4444; }
.profit-pos { color: #10b981; }
.profit-neg { color: #ef4444; }

.badge-pay { font-size: 0.7rem; padding: 2px 6px; border-radius: 4px; }
.badge-cash { background: #dcfce7; color: #166534; border: 1px solid #bbf7d0; }
.badge-credit { background: #e0e7ff; color: #3730a3; border: 1px solid #c7d2fe; }

/* Tabs */
.tab-btn {
    background: transparent; border: 1px solid #cbd5e1; padding: 6px 14px;
    border-radius: 20px; font-size: 0.8rem; color: #64748b; cursor: pointer;
    font-weight: bold; transition: 0.2s;
}
.tab-btn:hover { background: #f1f5f9; }
.tab-btn.active { background: #1e293b; color: #fff; border-color: #1e293b; }
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    
    const adminAjaxUrl = '<?php echo admin_url("admin-ajax.php"); ?>';
    
    // Default dates
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('ipt-date').value = today;
    document.getElementById('ipt-cash-date').value = today;
    document.getElementById('ipt-psa-date').value = today;

    // --- State ---
    let appState = { cards: [], cashLogs: [], psaLogs: [] };
    
    // Load data from WP DB 
    const dbDataRaw = <?php echo json_encode($db_data_json); ?>;
    if (dbDataRaw && dbDataRaw !== '[]' && dbDataRaw !== '{}') {
        try { 
            const parsed = JSON.parse(dbDataRaw); 
            if (Array.isArray(parsed)) appState.cards = parsed;
            else if (parsed.cards) appState = { ...appState, ...parsed };
        } catch(e) { console.error(e); }
    }

    // Ensure arrays
    if (!appState.cashLogs) appState.cashLogs = [];
    if (!appState.psaLogs) appState.psaLogs = [];
    if (!appState.cards) appState.cards = [];

    // Legacy Data Migrations
    if (appState.deposits > 0 && appState.cashLogs.length === 0) {
        appState.cashLogs.push({ id: 'leg-cash', date: today, amount: appState.deposits, memo: '過去の設定額からの移行分' });
        appState.deposits = 0;
    }

    appState.cards = appState.cards.map(c => {
        let psaConvertFee = c.psaFee !== undefined ? c.psaFee : (c.fee || 0);
        let shipConvertFee = c.shippingFee || 0;
        if (psaConvertFee > 0 || shipConvertFee > 0) {
            appState.psaLogs.push({
                id: 'leg-psa-' + c.id, date: c.date || today,
                appraisal: psaConvertFee, shipping: shipConvertFee,
                memo: (c.name || '不明なカード') + ' の個別経費(移行)'
            });
        }
        return {
            id: c.id, date: c.date || today, name: c.name || '',
            paymentMethod: c.paymentMethod || 'cash', buy: c.buy || 0,
            isPsa: !!c.isPsa, sell: c.sell || 0
        };
    });

    // Year Dropdown
    const currYear = new Date().getFullYear();
    const tabYearSelect = document.getElementById('tab-year');
    for(let y = currYear - 2; y <= currYear + 2; y++) {
        const opt = document.createElement('option');
        opt.value = y; opt.innerText = y + '年';
        if(y === currYear) opt.selected = true;
        tabYearSelect.appendChild(opt);
    }

    let activeTabMonth = 'all';
    const formatJPY = (num) => new Intl.NumberFormat('ja-JP').format(num || 0);

    // Filter Function Helper
    const filterByActiveTab = (arr, dateField) => {
        if (activeTabMonth === 'all') return [...arr];
        const selectedYear = parseInt(tabYearSelect.value);
        return [...arr].filter(item => {
            const d = new Date(item[dateField]);
            return d.getFullYear() === selectedYear && (d.getMonth() + 1) === parseInt(activeTabMonth);
        });
    };

    // Auto-update Tab Labels based on selection
    const updateHeaderLabels = () => {
        const labelStr = activeTabMonth === 'all' ? '全期間' : `${tabYearSelect.value} ${activeTabMonth}月`;
        document.querySelectorAll('.table-title-suffix').forEach(el => el.innerText = `(${labelStr})`);
        document.querySelectorAll('.stat-label').forEach(el => el.innerText = labelStr);
    };

    // Auto-switch Tab Logic when inserting new record
    const ensureDateVisible = (dateStr) => {
        if (activeTabMonth === 'all') return;
        const d = new Date(dateStr);
        const y = d.getFullYear();
        const m = d.getMonth() + 1;
        tabYearSelect.value = y;
        activeTabMonth = m.toString();
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.toggle('active', btn.getAttribute('data-month') === activeTabMonth);
        });
    };

    let saveTimeout = null;
    const saveToServer = () => {
        clearTimeout(saveTimeout);
        saveTimeout = setTimeout(() => {
            const formData = new FormData();
            formData.append('action', 'psa_tracker_save');
            formData.append('data', JSON.stringify(appState));
            fetch(adminAjaxUrl, { method: 'POST', body: formData }).catch(e => console.error(e));
        }, 500);
    };

    // Render 
    const renderAll = () => {
        updateHeaderLabels();

        // 1. Calculate GLOBAL Cash Balance (Unaffected by Month Tabs!)
        let globalDeposits = 0;
        let globalPsaCosts = 0;
        appState.cashLogs.forEach(l => globalDeposits += l.amount);
        appState.psaLogs.forEach(l => globalPsaCosts += (l.appraisal || 0) + (l.shipping || 0));
        
        let currentCash = globalDeposits - globalPsaCosts;
        appState.cards.forEach(c => {
            if (c.paymentMethod === 'cash') currentCash -= c.buy;
            if (c.sell > 0) currentCash += c.sell;
        });

        // 2. Filter Lists based on selected Tab
        const filteredCards = filterByActiveTab(appState.cards, 'date');
        const filteredCash = filterByActiveTab(appState.cashLogs, 'date');
        const filteredPsa = filterByActiveTab(appState.psaLogs, 'date');

        // Render Cash Logs
        const cTbody = document.getElementById('cash-log-tbody');
        cTbody.innerHTML = '';
        if(filteredCash.length === 0) document.getElementById('cash-empty-state').style.display='block';
        else document.getElementById('cash-empty-state').style.display='none';

        filteredCash.sort((a,b) => new Date(b.date) - new Date(a.date)).forEach(log => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td style="color: #64748b;">${log.date}</td>
                <td class="text-right" style="font-weight: bold; color: ${log.amount < 0 ? '#ef4444' : '#1e293b'};">${log.amount >= 0 ? '+' : ''}${formatJPY(log.amount)}</td>
                <td style="padding-left:10px; color:#64748b; font-size:0.8rem;">${log.memo || '-'}</td>
                <td class="text-center"><button class="btn-delete-log" data-type="cash" data-id="${log.id}"><i class="fas fa-trash"></i></button></td>
            `;
            cTbody.appendChild(tr);
        });

        // Render PSA Logs
        const pTbody = document.getElementById('psa-log-tbody');
        pTbody.innerHTML = '';
        let tabPsaCost = 0; // Sum of PSA costs for the visible tab
        
        if(filteredPsa.length === 0) document.getElementById('psa-empty-state').style.display='block';
        else document.getElementById('psa-empty-state').style.display='none';

        filteredPsa.sort((a,b) => new Date(b.date) - new Date(a.date)).forEach(log => {
            const tCost = (log.appraisal || 0) + (log.shipping || 0);
            tabPsaCost += tCost;
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td style="color: #64748b;">${log.date}</td>
                <td class="text-right" style="font-weight: bold; color: #ef4444;">-¥${formatJPY(tCost)}</td>
                <td style="padding-left:10px; color:#64748b; font-size:0.75rem;">${log.memo || '-'}<br><span style="opacity:0.6">鑑定:¥${formatJPY(log.appraisal)} 送料:¥${formatJPY(log.shipping)}</span></td>
                <td class="text-center"><button class="btn-delete-log" data-type="psa" data-id="${log.id}"><i class="fas fa-trash"></i></button></td>
            `;
            pTbody.appendChild(tr);
        });

        // Render Cards Tracker
        const tbody = document.getElementById('tracker-tbody');
        tbody.innerHTML = '';
        let tabBuy = 0; let tabSell = 0; 
        
        if(filteredCards.length === 0) document.getElementById('empty-state').style.display='block';
        else document.getElementById('empty-state').style.display='none';

        filteredCards.sort((a,b) => new Date(b.date) - new Date(a.date)).forEach((item) => {
            tabBuy += item.buy;
            tabSell += item.sell;
            const profitNum = item.sell === 0 ? 0 : (item.sell - item.buy);
            const isProfit = profitNum >= 0;
            const profitClass = item.sell === 0 ? '' : (isProfit ? 'profit-pos' : 'profit-neg');
            const margin = item.sell > 0 ? ((profitNum / item.sell) * 100).toFixed(1) + '%' : '-';
            const payBadge = item.paymentMethod === 'credit' ? '<span class="badge-pay badge-credit">💳</span>' : '<span class="badge-pay badge-cash">💵</span>';

            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td style="color: #64748b;">${item.date}</td>
                <td style="font-weight: bold;">${item.name}</td>
                <td class="text-center">${payBadge}</td>
                <td class="text-right" style="font-family: 'Share Tech Mono', monospace;">¥${formatJPY(item.buy)}</td>
                <td class="text-center">${item.isPsa ? '<i class="fas fa-check-circle" style="color:#8b5cf6;" title="PSA完了/予定"></i>' : '-'}</td>
                <td class="text-right" style="background: rgba(139,92,246,0.03);">
                    ¥ <input type="number" class="sell-input-field" data-id="${item.id}" value="${item.sell || ''}" placeholder="未売">
                </td>
                <td class="text-right ${profitClass}" style="font-family: 'Share Tech Mono', monospace; font-weight: bold;">
                    ${item.sell === 0 ? '-' : (isProfit ? '+' : '') + formatJPY(profitNum)}
                </td>
                <td class="text-right ${profitClass}" style="font-family: 'Share Tech Mono', monospace;">${margin}</td>
                <td class="text-center"><button class="btn-delete" data-id="${item.id}"><i class="fas fa-trash"></i></button></td>
            `;
            tbody.appendChild(tr);
        });

        // 3. Tab-based Summaries for Dashboard
        const tabProfit = (tabSell > 0) ? (tabSell - tabBuy - tabPsaCost) : 0;
        
        document.getElementById('total-buy').innerText = '¥' + formatJPY(tabBuy);
        document.getElementById('total-sell').innerText = '¥' + formatJPY(tabSell);
        
        const elProfit = document.getElementById('total-profit');
        elProfit.innerText = '¥' + formatJPY(tabProfit);
        elProfit.style.color = tabProfit >= 0 ? '#8b5cf6' : '#ef4444';

        // Current Cash is ALWAYS global
        const elCash = document.getElementById('current-cash');
        elCash.innerText = '¥' + formatJPY(currentCash);
        elCash.style.color = currentCash >= 0 ? '#10b981' : '#ef4444';

        saveToServer();
    };

    // Tab Interface Logic
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            e.target.classList.add('active');
            activeTabMonth = e.target.getAttribute('data-month');
            renderAll();
        });
    });
    tabYearSelect.addEventListener('change', renderAll);

    // form submissions
    document.getElementById('tracker-form').addEventListener('submit', (e) => {
        e.preventDefault();
        const d = document.getElementById('ipt-date').value;
        appState.cards.push({
            id: Date.now().toString(),
            date: d,
            name: document.getElementById('ipt-name').value,
            paymentMethod: document.getElementById('ipt-payment').value,
            buy: parseInt(document.getElementById('ipt-buy').value) || 0,
            isPsa: document.getElementById('ipt-psa-check').checked,
            sell: 0 
        });
        document.getElementById('ipt-name').value = '';
        document.getElementById('ipt-buy').value = '';
        ensureDateVisible(d);
        renderAll();
    });

    document.getElementById('btn-add-cash').addEventListener('click', () => {
        const amount = parseInt(document.getElementById('ipt-add-cash').value) || 0;
        const d = document.getElementById('ipt-cash-date').value || today;
        if (amount !== 0) {
            appState.cashLogs.push({
                id: Date.now().toString(), date: d, amount: amount, memo: document.getElementById('ipt-cash-memo').value
            });
            document.getElementById('ipt-add-cash').value = '';
            document.getElementById('ipt-cash-memo').value = '';
            ensureDateVisible(d);
            renderAll();
        }
    });

    document.getElementById('btn-add-psalog').addEventListener('click', () => {
        const appraisal = parseInt(document.getElementById('ipt-psa-fee').value) || 0;
        const shipping = parseInt(document.getElementById('ipt-psa-ship').value) || 0;
        const d = document.getElementById('ipt-psa-date').value || today;
        
        if (appraisal > 0 || shipping > 0) {
            appState.psaLogs.push({
                id: Date.now().toString(), date: d,
                appraisal: appraisal, shipping: shipping, memo: document.getElementById('ipt-psa-memo').value
            });
            document.getElementById('ipt-psa-fee').value = '';
            document.getElementById('ipt-psa-ship').value = '';
            document.getElementById('ipt-psa-memo').value = '';
            ensureDateVisible(d);
            renderAll();
        }
    });

    // Delegated UI actions
    document.body.addEventListener('change', (e) => {
        if (e.target.classList.contains('sell-input-field')) {
            const id = e.target.getAttribute('data-id');
            const card = appState.cards.find(c => String(c.id) === String(id));
            if (card) { card.sell = parseInt(e.target.value) || 0; renderAll(); }
        }
    });

    document.body.addEventListener('click', (e) => {
        const btnDeleteCard = e.target.closest('.btn-delete');
        if (btnDeleteCard) {
            if(confirm('このデータを削除しますか？')) {
                appState.cards = appState.cards.filter(c => String(c.id) !== String(btnDeleteCard.getAttribute('data-id')));
                renderAll();
            }
        }
        
        const btnDeleteLog = e.target.closest('.btn-delete-log');
        if (btnDeleteLog) {
            const id = btnDeleteLog.getAttribute('data-id');
            const type = btnDeleteLog.getAttribute('data-type');
            if(confirm('この経費・ログを削除しますか？')) {
                if(type === 'cash') appState.cashLogs = appState.cashLogs.filter(L => String(L.id) !== String(id));
                if(type === 'psa') appState.psaLogs = appState.psaLogs.filter(L => String(L.id) !== String(id));
                renderAll();
            }
        }
    });

    // CSV Exports
    const exportCSV = (filename, headers, rows) => {
        if(rows.length === 0) { alert('エクスポートするデータがありません。'); return; }
        const csvContent = "\uFEFF" + headers.join(",") + "\n" + rows.map(r => r.join(",")).join("\n");
        const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
        const link = document.createElement("a");
        link.setAttribute("href", URL.createObjectURL(blob));
        link.setAttribute("download", `${filename}_${new Date().getTime()}.csv`);
        link.click();
    };

    document.getElementById('btn-export-csv').addEventListener('click', () => {
        const data = filterByActiveTab(appState.cards, 'date');
        exportCSV('cards', ['仕入日','カード名','支払方法','仕入額','PSA','販売額','粗利益','利益率'], 
            data.map(c => {
                const profit = c.sell === 0 ? 0 : (c.sell - c.buy);
                const margin = c.sell > 0 ? ((profit / c.sell) * 100).toFixed(1) + '%' : '';
                return [
                    c.date, `"${(c.name||'').replace(/"/g, '""')}"`,
                    c.paymentMethod === 'credit' ? 'クレジット' : '現金',
                    c.buy, c.isPsa ? '有' : '無', c.sell,
                    c.sell === 0 ? '' : profit, margin
                ];
            })
        );
    });

    document.getElementById('btn-export-cash').addEventListener('click', () => {
        const data = filterByActiveTab(appState.cashLogs, 'date');
        exportCSV('cash_logs', ['日付','入金額','メモ'], 
            data.map(L => [
                L.date, L.amount, `"${(L.memo || '').replace(/"/g, '""')}"`
            ])
        );
    });

    document.getElementById('btn-export-psa').addEventListener('click', () => {
        const data = filterByActiveTab(appState.psaLogs, 'date');
        exportCSV('psa_logs', ['日付','鑑定料','送料','経費計','メモ'], 
            data.map(L => [
                L.date, L.appraisal || 0, L.shipping || 0, (L.appraisal || 0) + (L.shipping || 0), `"${(L.memo || '').replace(/"/g, '""')}"`
            ])
        );
    });

    renderAll();
});
</script>

<?php get_footer(); ?>
