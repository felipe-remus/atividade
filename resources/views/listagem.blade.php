<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despensa ONG — Listagem</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Source+Sans+3:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --clay:       #C65D2A;
            --clay-dark:  #A0451C;
            --clay-light: rgba(198,93,42,.09);
            --green:      #3D6B4F;
            --green-dark: #2D5038;
            --green-light:rgba(61,107,79,.10);
            --red:        #B83232;
            --red-light:  rgba(184,50,50,.09);
            --cream:      #FDF6EC;
            --brown:      #2C1A0E;
            --muted:      #7A6050;
            --border:     #EDE0D0;
            --row-hover:  #FBF4EA;
            --white:      #FFFFFF;
            --shadow:     rgba(44,26,14,.10);
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
        .topbar-icon  { font-size: 26px; }
        .topbar-title { font-family: 'Playfair Display', serif; color: var(--brown); font-size: 20px; }
        .topbar-actions { display: flex; align-items: center; gap: 10px; }
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

        /* ── Conteúdo ── */
        .page-content {
            max-width: 1080px;
            margin: 0 auto;
            padding: 56px 24px 80px;
        }

        /* ── Cabeçalho ── */
        .page-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        .page-header-meta {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--green);
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .10em;
            text-transform: uppercase;
            margin-bottom: 10px;
        }
        .page-header-meta span { font-size: 16px; }
        .page-header h1 {
            font-family: 'Playfair Display', serif;
            color: var(--brown);
            font-size: 32px;
            line-height: 1.2;
        }
        .page-header p {
            color: var(--muted);
            font-size: 15px;
            margin-top: 8px;
        }

        .btn-new {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 13px 26px;
            background: var(--clay);
            color: var(--white);
            border: none;
            border-radius: 10px;
            font-family: 'Source Sans 3', sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            white-space: nowrap;
            transition: background .2s, transform .15s, box-shadow .2s;
            box-shadow: 0 4px 16px rgba(198,93,42,.28);
        }
        .btn-new:hover  { background: var(--clay-dark); transform: translateY(-1px); box-shadow: 0 6px 20px rgba(198,93,42,.38); }
        .btn-new:active { transform: translateY(0); }

        /* ── Tabela ── */
        .table-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 24px var(--shadow);
        }

        .table-wrap { overflow-x: auto; }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        thead {
            background: #FAF3EA;
            border-bottom: 2px solid var(--border);
        }
        thead th {
            padding: 14px 20px;
            text-align: left;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--muted);
            white-space: nowrap;
        }
        thead th:last-child { text-align: center; }

        tbody tr {
            border-bottom: 1px solid var(--border);
            transition: background .15s;
        }
        tbody tr:last-child { border-bottom: none; }
        tbody tr:hover { background: var(--row-hover); }

        tbody td {
            padding: 16px 20px;
            font-size: 14.5px;
            color: var(--brown);
            vertical-align: middle;
        }

        /* ── Nome (célula especial) ── */
        .td-name {
            font-weight: 600;
            color: var(--brown);
        }

        /* ── Badge de categoria ── */
        .badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            background: var(--clay-light);
            color: var(--clay-dark);
        }

        /* ── Validade ── */
        .validity { display: flex; align-items: center; gap: 6px; }
        
        /* ── Preço ── */
        .td-price { color: var(--muted); font-size: 14px; }

        /* ── Ações ── */
        td.td-actions { text-align: center; }
        .actions-wrap { display: inline-flex; gap: 6px; }
        .btn-action {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            border-radius: 8px;
            font-size: 16px;
            text-decoration: none;
            border: 1.5px solid transparent;
            cursor: pointer;
            transition: background .15s, border-color .15s, transform .1s;
        }
        .btn-action:active { transform: scale(.93); }
        .btn-edit  { background: var(--clay-light); border-color: rgba(198,93,42,.18); }
        .btn-edit:hover  { background: rgba(198,93,42,.16); border-color: var(--clay); }
        .btn-delete { background: var(--red-light); border-color: rgba(184,50,50,.15); }
        .btn-delete:hover { background: rgba(184,50,50,.17); border-color: var(--red); }
        .btn-delete form { display: contents; }
        .btn-delete button {
            background: none; border: none; cursor: pointer;
            width: 100%; height: 100%;
            display: flex; align-items: center; justify-content: center;
            font-size: 16px;
        }

        /* ── Rodapé ── */
        .page-footer {
            text-align: center;
            color: var(--muted);
            font-size: 12px;
            margin-top: 48px;
            opacity: .7;
        }

        @media (max-width: 640px) {
            .topbar { padding: 0 20px; }
            .page-header { flex-direction: column; align-items: flex-start; }
        }
    </style>
</head>
<body>

    <header class="topbar">
        <a href="{{ url('/menu') }}" class="topbar-brand">
            <span class="topbar-icon">🌾</span>
            <span class="topbar-title">Despensa ONG</span>
        </a>
        <div class="topbar-actions">
            <a href="{{ url('/cadastro') }}" class="topbar-link">📦 Cadastrar</a>
            <a href="{{ url('/menu') }}" class="topbar-link">Sair</a>
        </div>
    </header>

    <main class="page-content">

        <div class="page-header">
            <div class="page-header-left">
                <div class="page-header-meta">
                    <span>📋</span> Estoque
                </div>
                <h1>Listagem de Alimentos</h1>
                <p>Todos os itens cadastrados na despensa.</p>
            </div>
            <a href="{{ url('/cadastro') }}" class="btn-new">
                <span>+</span> Novo alimento
            </a>
        </div>

        <div class="table-card">
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Quantidade</th>
                            <th>Validade</th>
                            <th>Preço estimado</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="td-name">Arroz</td>
                            <td><span class="badge">Alimento Perecivel</span></td>
                            <td>5</td>
                            <td><span class="validity">29/04/2026</span></td>
                            <td><span class="td-price">R$ 8,0</span></td>
                            <td class="td-actions">
                                <div class="actions-wrap">
                                    <a href="{{ url('/editar/')}}" class="btn-action btn-edit" title="Editar">✏️</a>
                                    <span class="btn-action btn-delete" title="Excluir">
                                        <form action="{{ url('/delete/') }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">🗑️</button>
                                        </form>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <footer class="page-footer">
        <p>Despensa ONG &mdash; Sistema de gestão solidária de alimentos</p>
    </footer>
</body>
</html>