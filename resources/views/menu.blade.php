<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despensa ONG — Menu</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Source+Sans+3:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --clay:       #C65D2A;
            --clay-dark:  #A0451C;
            --green:      #3D6B4F;
            --green-dark: #2D5038;
            --cream:      #FDF6EC;
            --wheat:      #E8C98A;
            --brown:      #2C1A0E;
            --muted:      #7A6050;
            --border:     #EDE0D0;
            --white:      #FFFFFF;
        }

        body {
            font-family: 'Source Sans 3', sans-serif;
            background-color: var(--cream);
            min-height: 100vh;
            background-image:
                radial-gradient(ellipse at 5% 0%, rgba(198,93,42,.08) 0%, transparent 40%),
                radial-gradient(ellipse at 95% 100%, rgba(61,107,79,.08) 0%, transparent 40%);
        }

        /* ── Topbar ── */
        .topbar {
            background: var(--white);
            border-bottom: 1px solid var(--border);
            padding: 0 40px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 1px 8px rgba(44,26,14,.06);
        }
        .topbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        .topbar-icon   { font-size: 26px; }
        .topbar-title  { font-family: 'Playfair Display', serif; color: var(--brown); font-size: 20px; }
        .topbar-logout {
            color: var(--muted);
            font-size: 13px;
            text-decoration: none;
            padding: 6px 14px;
            border: 1px solid var(--border);
            border-radius: 8px;
            transition: color .2s, border-color .2s;
        }
        .topbar-logout:hover { color: var(--clay); border-color: var(--clay); }

        /* ── Conteúdo principal ── */
        .page-content {
            max-width: 960px;
            margin: 0 auto;
            padding: 56px 24px 80px;
        }

        .page-greeting {
            margin-bottom: 48px;
        }
        .page-greeting h1 {
            font-family: 'Playfair Display', serif;
            color: var(--brown);
            font-size: 36px;
            line-height: 1.2;
        }
        .page-greeting p {
            color: var(--muted);
            font-size: 16px;
            margin-top: 8px;
        }

        /* ── Cards de navegação ── */
        .nav-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
        }

        .nav-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 36px 32px;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            gap: 16px;
            transition: transform .22s, box-shadow .22s, border-color .22s;
            position: relative;
            overflow: hidden;
        }
        .nav-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            border-radius: 16px 16px 0 0;
            transition: opacity .22s;
            opacity: 0;
        }
        .nav-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 40px rgba(44,26,14,.12);
        }
        .nav-card:hover::before { opacity: 1; }

        .nav-card--clay::before  { background: var(--clay); }
        .nav-card--green::before { background: var(--green); }

        .card-icon {
            font-size: 40px;
            line-height: 1;
        }
        .card-title {
            font-family: 'Playfair Display', serif;
            color: var(--brown);
            font-size: 20px;
            margin-bottom: 6px;
        }
        .card-desc {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.6;
        }
        .card-arrow {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .04em;
            margin-top: 8px;
            transition: gap .2s;
        }
        .nav-card--clay  .card-arrow { color: var(--clay); }
        .nav-card--green .card-arrow { color: var(--green); }
        .nav-card:hover .card-arrow  { gap: 10px; }

        /* ── Rodapé ── */
        .page-footer {
            text-align: center;
            color: var(--muted);
            font-size: 12px;
            margin-top: 64px;
            opacity: .7;
        }
    </style>
</head>
<body>

    <header class="topbar">
        <a href="{{ url('/menu') }}" class="topbar-brand">
            <span class="topbar-icon">🌾</span>
            <span class="topbar-title">Despensa ONG</span>
        </a>
        <a href="{{ url('/') }}" class="topbar-logout">Sair</a>
    </header>

    <main class="page-content">

        <div class="page-greeting">
            <h1>O que deseja fazer hoje?</h1>
            <p>Selecione uma das opções abaixo para gerenciar a despensa.</p>
        </div>

        <div class="nav-grid">

            <a href="{{ url('/listagem') }}" class="nav-card nav-card--green">
                <div class="card-icon">📋</div>
                <div class="card-body">
                    <h2 class="card-title">Listar Alimentos</h2>
                    <p class="card-desc">Visualize todos os itens cadastrados na despensa, com informações completas de estoque.</p>
                </div>
                <span class="card-arrow">Ver listagem →</span>
            </a>

            <a href="{{ url('/cadastro') }}" class="nav-card nav-card--clay">
                <div class="card-icon">📦</div>
                <div class="card-body">
                    <h2 class="card-title">Cadastrar Alimento</h2>
                    <p class="card-desc">Registre novos itens informando nome, quantidade, validade, categoria e preço estimado.</p>
                </div>
                <span class="card-arrow">Ir para cadastro →</span>
            </a>

        </div>

    </main>

    <footer class="page-footer">
        <p>Despensa ONG &mdash; Sistema de gestão solidária de alimentos</p>
    </footer>
</body>
</html>