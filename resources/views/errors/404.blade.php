<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despensa ONG — Página não encontrada</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Source+Sans+3:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --clay:       #C65D2A;
            --clay-dark:  #A0451C;
            --green:      #3D6B4F;
            --cream:      #FDF6EC;
            --brown:      #2C1A0E;
            --muted:      #7A6050;
            --border:     #EDE0D0;
            --white:      #FFFFFF;
            --shadow:     rgba(44,26,14,.10);
        }

        body {
            font-family: 'Source Sans 3', sans-serif;
            background-color: var(--cream);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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
        .topbar-icon  { font-size: 26px; }
        .topbar-title { font-family: 'Playfair Display', serif; color: var(--brown); font-size: 20px; }
        .topbar-link {
            color: var(--muted);
            font-size: 13px;
            text-decoration: none;
            padding: 6px 14px;
            border: 1px solid var(--border);
            border-radius: 8px;
            transition: color .2s, border-color .2s;
        }
        .topbar-link:hover { color: var(--clay); border-color: var(--clay); }

        /* ── Área central ── */
        .page-center {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px 24px;
        }

        .error-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 64px 56px;
            text-align: center;
            max-width: 520px;
            width: 100%;
            box-shadow: 0 8px 32px var(--shadow);
            position: relative;
            overflow: hidden;
        }
        .error-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--clay), #E8892A);
            border-radius: 20px 20px 0 0;
        }

        .error-number {
            font-family: 'Playfair Display', serif;
            font-size: 96px;
            line-height: 1;
            color: var(--clay);
            opacity: .15;
            letter-spacing: -.02em;
            position: absolute;
            top: 24px;
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
            pointer-events: none;
            user-select: none;
        }

        .error-icon {
            font-size: 64px;
            line-height: 1;
            margin-bottom: 24px;
            position: relative;
        }

        .error-title {
            font-family: 'Playfair Display', serif;
            color: var(--brown);
            font-size: 28px;
            margin-bottom: 12px;
            position: relative;
        }

        .error-desc {
            color: var(--muted);
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 40px;
            position: relative;
        }

        .error-actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
            position: relative;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 13px 28px;
            background: var(--clay);
            color: var(--white);
            border: none;
            border-radius: 10px;
            font-family: 'Source Sans 3', sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: background .2s, transform .15s, box-shadow .2s;
            box-shadow: 0 4px 16px rgba(198,93,42,.28);
        }
        .btn-primary:hover  { background: var(--clay-dark); transform: translateY(-1px); box-shadow: 0 6px 20px rgba(198,93,42,.38); }
        .btn-primary:active { transform: translateY(0); }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 13px 28px;
            background: transparent;
            color: var(--muted);
            border: 1.5px solid var(--border);
            border-radius: 10px;
            font-family: 'Source Sans 3', sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: color .2s, border-color .2s;
        }
        .btn-secondary:hover { color: var(--brown); border-color: #C4B0A0; }

        /* ── Rodapé ── */
        .page-footer {
            text-align: center;
            color: var(--muted);
            font-size: 12px;
            padding: 24px;
            opacity: .7;
        }

        @media (max-width: 480px) {
            .error-card { padding: 48px 28px; }
            .topbar { padding: 0 20px; }
        }
    </style>
</head>
<body>

    <header class="topbar">
        <a href="{{ url('/menu') }}" class="topbar-brand">
            <span class="topbar-icon">🌾</span>
            <span class="topbar-title">Despensa ONG</span>
        </a>
        <a href="{{ url('/') }}" class="topbar-link">Sair</a>
    </header>

    <main class="page-center">
        <div class="error-card">
            <div class="error-number">404</div>

            <div class="error-icon">🥡</div>

            <h1 class="error-title">Prateleira vazia por aqui</h1>
            <p class="error-desc">
                A página que você procura não foi encontrada.<br>
                Ela pode ter sido movida ou nunca ter existido.
            </p>

            <div class="error-actions">
                <a href="{{ url('/menu') }}" class="btn-primary">
                    🏠 Voltar ao menu
                </a>
                <a href="{{ url('/listagem') }}" class="btn-secondary">
                    📋 Ver listagem
                </a>
            </div>
        </div>
    </main>

    <footer class="page-footer">
        <p>Despensa ONG &mdash; Sistema de gestão solidária de alimentos</p>
    </footer>

</body>
</html>