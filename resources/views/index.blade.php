<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despensa ONG — Acesso</title>
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
            --white:      #FFFFFF;
            --shadow:     rgba(44,26,14,.15);
        }

        body {
            font-family: 'Source Sans 3', sans-serif;
            background-color: var(--cream);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image:
                radial-gradient(circle at 15% 85%, rgba(198,93,42,.12) 0%, transparent 50%),
                radial-gradient(circle at 85% 10%, rgba(61,107,79,.10) 0%, transparent 50%),
                url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23C65D2A' fill-opacity='0.04'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/svg%3E");
        }

        .login-wrapper {
            display: flex;
            width: min(900px, 96vw);
            min-height: 540px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 24px 64px var(--shadow), 0 2px 8px var(--shadow);
        }

        /* ── Painel lateral ── */
        .login-side {
            background: linear-gradient(160deg, var(--clay) 0%, #8B3B15 100%);
            width: 42%;
            padding: 48px 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }
        .login-side::before {
            content: '';
            position: absolute;
            width: 320px; height: 320px;
            border-radius: 50%;
            background: rgba(255,255,255,.06);
            top: -80px; right: -100px;
        }
        .login-side::after {
            content: '';
            position: absolute;
            width: 200px; height: 200px;
            border-radius: 50%;
            background: rgba(255,255,255,.05);
            bottom: -60px; left: -60px;
        }
        .brand-icon   { font-size: 52px; line-height: 1; }
        .brand-name   { font-family: 'Playfair Display', serif; color: var(--white); font-size: 28px; line-height: 1.2; margin-top: 16px; position: relative; z-index: 1; }
        .brand-tagline{ color: rgba(255,255,255,.72); font-size: 14px; margin-top: 8px; line-height: 1.6; position: relative; z-index: 1; }
        .side-stats   { display: flex; flex-direction: column; gap: 16px; position: relative; z-index: 1; }
        .stat-item    { display: flex; align-items: center; gap: 12px; color: rgba(255,255,255,.85); font-size: 13.5px; }
        .stat-item span:first-child { font-size: 20px; }

        /* ── Painel do formulário ── */
        .login-form-panel {
            background: var(--white);
            flex: 1;
            padding: 56px 48px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .form-heading { font-family: 'Playfair Display', serif; color: var(--brown); font-size: 28px; margin-bottom: 6px; }
        .form-sub     { color: var(--muted); font-size: 14px; margin-bottom: 36px; }
        .field-group  { display: flex; flex-direction: column; gap: 20px; margin-bottom: 28px; }
        .field-label  { display: block; font-size: 11px; font-weight: 600; letter-spacing: .08em; text-transform: uppercase; color: var(--muted); margin-bottom: 6px; }

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
        }
        .field-input::placeholder { color: #BBA899; }
        .field-input:focus {
            border-color: var(--clay);
            background: var(--white);
            box-shadow: 0 0 0 4px rgba(198,93,42,.10);
        }

        .btn-login {
            width: 100%;
            padding: 15px;
            background: var(--clay);
            color: var(--white);
            border: none;
            border-radius: 10px;
            font-family: 'Source Sans 3', sans-serif;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .04em;
            cursor: pointer;
            transition: background .2s, transform .15s, box-shadow .2s;
            box-shadow: 0 4px 16px rgba(198,93,42,.30);
        }
        .btn-login:hover  { background: var(--clay-dark); transform: translateY(-1px); box-shadow: 0 6px 20px rgba(198,93,42,.40); }
        .btn-login:active { transform: translateY(0); }

        .form-footer { margin-top: 24px; text-align: center; color: var(--muted); font-size: 13px; }

        @media (max-width: 640px) {
            .login-side { display: none; }
            .login-form-panel { padding: 40px 28px; }
        }
    </style>
</head>
<body>
    <div class="login-wrapper">

        <aside class="login-side">
            <div>
                <div class="brand-icon">🌾</div>
                <h1 class="brand-name">Despensa<br>ONG</h1>
                <p class="brand-tagline">Gestão solidária de alimentos para quem mais precisa.</p>
            </div>
            <div class="side-stats">
                <div class="stat-item"><span>📦</span><span>Controle de estoque simplificado</span></div>
                <div class="stat-item"><span>📋</span><span>Registro e listagem de itens</span></div>
                <div class="stat-item"><span>🤝</span><span>Distribuição com transparência</span></div>
            </div>
        </aside>

        <section class="login-form-panel">
            <h2 class="form-heading">Bem-vindo de volta</h2>
            <p class="form-sub">Acesse o painel de controle da despensa</p>

            <form action="{{ '/menu' }}" method="post">
                @csrf
                <div class="field-group">
                    <div>
                        <label for="input_email" class="field-label">E-mail</label>
                        <input id="input_email" name="input_email"
                            placeholder="Digite seu Email" aria-required="true" required
                            class="field-input">
                    </div>
                    <div>
                        <label for="input_senha" class="field-label">Senha</label>
                        <input type="password" id="input_senha" name="input_senha"
                            placeholder="Digite sua Senha" aria-required="true" required
                            class="field-input">
                    </div>
                </div>
                <button type="submit" class="btn-login">Entrar na Despensa</button>
            </form>
        </section>
    </div>
</body>
</html>