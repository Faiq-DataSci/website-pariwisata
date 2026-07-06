<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pantai Pecaron</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 18px 50px rgba(0, 0, 0, 0.18);
            width: 100%;
            max-width: 420px;
            padding: 44px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .login-header {
            text-align: center;
            margin-bottom: 32px;
        }

        .login-header h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 10px;
        }

        .login-header p {
            color: #666;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            background: #1a73e8;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s, background-color 0.2s;
        }

        .login-btn:hover {
            background: #1667c2;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(26, 115, 232, 0.25);
        }

        .alert {
            margin-bottom: 20px;
            padding: 12px;
            border-radius: 5px;
            font-size: 14px;
        }

        .alert-error {
            background-color: #fee;
            color: #c33;
            border: 1px solid #fcc;
        }

        .alert-success {
            background-color: #efe;
            color: #3c3;
            border: 1px solid #cfc;
        }

        .social-login {
            margin-top: 20px;
            text-align: center;
        }

        .social-login p {
            color: #555;
            margin-bottom: 14px;
            font-size: 13px;
        }

        .social-buttons {
            display: grid;
            gap: 12px;
        }

        .btn-social {
            display: inline-block;
            width: 100%;
            padding: 12px 0;
            border-radius: 10px;
            color: white;
            text-decoration: none;
            font-weight: 700;
            transition: transform 0.2s, box-shadow 0.2s, opacity 0.2s;
        }

        .btn-google {
            background: #db4437;
        }

        .btn-facebook {
            background: #4267b2;
        }

        .btn-social:hover {
            opacity: 0.95;
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .login-footer {
            text-align: center;
            margin-top: 24px;
            font-size: 13px;
            color: #7a7a7a;
        }

        .login-footer a {
            color: #1a73e8;
            text-decoration: none;
            font-weight: 600;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Masuk</h1>
            <p>Masuk ke akun Pantai Pecaron Anda</p>
        </div>

        <?php if ($this->session->flashdata('error')) : ?>
            <div class="alert alert-error">
                <?= $this->session->flashdata('error') ?>
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success">
                <?= $this->session->flashdata('success') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('userauth/proses_login') ?>" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="Masukkan username Anda">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Masukkan password Anda">
            </div>

            <button type="submit" class="login-btn">Masuk</button>
        </form>

        <?php if (!empty($social_login_enabled)) : ?>
            <div class="social-login">
                <p>Atau masuk dengan</p>
                <div class="social-buttons">
                    <?php if (!empty($google_login_url)) : ?>
                        <a href="<?= $google_login_url ?>" class="btn-social btn-google">Masuk dengan Google</a>
                    <?php endif; ?>
                    <?php if (!empty($facebook_login_url)) : ?>
                        <a href="<?= $facebook_login_url ?>" class="btn-social btn-facebook">Masuk dengan Facebook</a>
                    <?php endif; ?>
                </div>
            </div>
        <?php else : ?>
            <div class="social-login">
                <p>Login Google dan Facebook belum dikonfigurasi. Silakan hubungi administrator untuk mengaktifkannya.</p>
            </div>
        <?php endif; ?>

        <div class="login-footer">
            Belum punya akun? <a href="<?= base_url('website') ?>">Kembali ke beranda</a>
        </div>
    </div>
</body>

</html>