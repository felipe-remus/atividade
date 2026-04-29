<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despensa ONG — Cadastro</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Source+Sans+3:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --clay:       #C65D2A;
            --clay-dark:  #A0451C;
            --clay-light: rgba(198,93,42,.08);
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
            max-width: 680px;
            margin: 0 auto;
            padding: 56px 24px 80px;
        }

        /* ── Cabeçalho da página ── */
        .page-header {
            margin-bottom: 40px;
        }
        .page-header-meta {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--clay);
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

        /* ── Card do formulário ── */
        .form-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 48px;
            box-shadow: 0 8px 32px var(--shadow);
            position: relative;
            overflow: hidden;
        }
        .form-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--clay), #E8892A);
            border-radius: 20px 20px 0 0;
        }

        /* ── Campos ── */
        .field-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px 28px;
            margin-bottom: 32px;
        }
        .field-full { grid-column: 1 / -1; }

        .field-label {
            display: block;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 7px;
        }
        .field-required { color: var(--clay); margin-left: 2px; }

        .field-input {
            width: 100%;
            border: 1.5px solid #E2D8CF;
            border-radius: 10px;
            padding: 13px 16px;
            font-family: 'Source Sans 3', sans-serif;
            font-size: 15px;
            color: var(--brown);
            background: #FDFAF7;
            transition: border-color .2s, box-shadow .2s, background .2s;
            outline: none;
            appearance: none;
        }
        .field-input::placeholder { color: #BBA899; }
        .field-input:focus {
            border-color: var(--clay);
            background: var(--white);
            box-shadow: 0 0 0 4px rgba(198,93,42,.10);
        }

        /* ── Hint de erro / ajuda ── */
        .field-hint {
            display: block;
            font-size: 11.5px;
            color: var(--muted);
            margin-top: 5px;
        }

        /* ── Divisor ── */
        .form-divider {
            border: none;
            border-top: 1px solid var(--border);
            margin: 4px 0 32px;
        }

        /* ── Ações ── */
        .form-actions {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 12px;
        }

        .btn-cancel {
            padding: 13px 24px;
            color: var(--muted);
            background: transparent;
            border: 1.5px solid var(--border);
            border-radius: 10px;
            font-family: 'Source Sans 3', sans-serif;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: color .2s, border-color .2s;
        }
        .btn-cancel:hover { color: var(--brown); border-color: #C4B0A0; }

        .btn-submit {
            padding: 13px 32px;
            background: var(--clay);
            color: var(--white);
            border: none;
            border-radius: 10px;
            font-family: 'Source Sans 3', sans-serif;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .04em;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background .2s, transform .15s, box-shadow .2s;
            box-shadow: 0 4px 16px rgba(198,93,42,.28);
        }
        .btn-submit:hover  { background: var(--clay-dark); transform: translateY(-1px); box-shadow: 0 6px 20px rgba(198,93,42,.38); }
        .btn-submit:active { transform: translateY(0); }

        /* ── Rodapé ── */
        .page-footer {
            text-align: center;
            color: var(--muted);
            font-size: 12px;
            margin-top: 48px;
            opacity: .7;
        }

        @media (max-width: 560px) {
            .form-card { padding: 32px 24px; }
            .field-grid { grid-template-columns: 1fr; }
            .field-full { grid-column: 1; }
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
        <div class="topbar-actions">
            <a href="{{ url('/listagem') }}" class="topbar-link">📋 Ver listagem</a>
            <a href="{{ url('/') }}" class="topbar-link">Sair</a>
        </div>
    </header>

    <main class="page-content">

        <div class="page-header">
            <div class="page-header-meta">
                <span>📦</span> Estoque
            </div>
            <h1>Editar Alimento</h1>
            <p>Atualize as informações do item abaixo.</p>
        </div>

        <div class="form-card">
            <form action="{{ isset($alimento) ? url('/alimento/'.$alimento->id) : url('/alimento') }}" method="POST">
                @csrf
                @if(isset($alimento))
                    @method('PUT')
                @endif

                <div class="field-grid">

                    {{-- Nome --}}
                    <div class="field-wrap field-full">
                        <label for="nome" class="field-label">Nome do alimento<span class="field-required">*</span></label>
                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            class="field-input"
                            placeholder="Ex.: Arroz integral"
                            value="{{ old('nome', $alimento->nome ?? '') }}"
                            required>
                    </div>

                    {{-- Quantidade --}}
                    <div class="field-wrap">
                        <label for="quantidade" class="field-label">Quantidade<span class="field-required">*</span></label>
                        <input
                            type="number"
                            id="quantidade"
                            name="quantidade"
                            class="field-input"
                            placeholder="Ex.: 50"
                            min="0"
                            value="{{ old('quantidade', $alimento->quantidade ?? '') }}"
                            required>
                        <span class="field-hint">Unidades em estoque</span>
                    </div>

                    {{-- Categoria --}}
                    <div class="field-wrap">
                        <label for="categoria" class="field-label">Categoria<span class="field-required">*</span></label>
                        <input
                            type="text"
                            id="categoria"
                            name="categoria"
                            class="field-input"
                            placeholder="Ex.: Grãos, Frutas, Enlatados, Bebidas"
                            value="{{ old('nome', $alimento->nome ?? '') }}"
                            required>
                    </div>

                    {{-- Data de validade --}}
                    <div class="field-wrap">
                        <label for="validade" class="field-label">Data de validade<span class="field-required">*</span></label>
                        <input
                            type="date"
                            id="validade"
                            name="validade"
                            class="field-input"
                            value="{{ old('validade', isset($alimento) ? \Carbon\Carbon::parse($alimento->validade)->format('Y-m-d') : '') }}"
                            required>
                    </div>

                    {{-- Preço estimado --}}
                    <div class="field-wrap">
                        <label for="preco" class="field-label">Preço estimado (R$)</label>
                        <input
                            type="number"
                            id="preco"
                            name="preco"
                            class="field-input"
                            placeholder="Ex.: 8.90"
                            step="0.01"
                            min="0"
                            value="{{ old('preco', $alimento->preco ?? '') }}">
                        <span class="field-hint">Opcional — valor unitário</span>
                    </div>

                </div>

                <hr class="form-divider">

                <div class="form-actions">
                    <a href="{{ url('/menu') }}" class="btn-cancel">Cancelar</a>
                    <button type="submit" class="btn-submit">
                        <span>💾</span>
                        Salvar alterações
                    </button>
                </div>

            </form>
        </div>

    </main>

    <footer class="page-footer">
        <p>Despensa ONG &mdash; Sistema de gestão solidária de alimentos</p>
    </footer>

</body>
</html>