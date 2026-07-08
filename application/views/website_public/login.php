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
            background-color: #f4f7f6;
            background-image: radial-gradient(#f7941d 0.5px, transparent 0.5px), radial-gradient(#f7941d 0.5px, #f4f7f6 0.5px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 400px;
            padding: 40px;
            position: relative;
            border-top: 5px solid #f7941d;
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo {
            font-size: 32px;
            font-weight: bold;
            color: #222;
            font-family: "Times New Roman", serif;
            margin-bottom: 5px;
        }

        .logo span {
            color: #f7941d;
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
            color: #444;
            font-weight: 500;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
            background-color: #fafafa;
        }

        .form-group input:focus {
            outline: none;
            border-color: #f7941d;
            background-color: #fff;
            box-shadow: 0 0 0 3px rgba(247, 148, 29, 0.15);
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background: #f7941d;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s, box-shadow 0.2s;
        }

        .login-btn:hover {
            background: #e67e00;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(247, 148, 29, 0.3);
        }

        .alert {
            margin-bottom: 20px;
            padding: 12px;
            border-radius: 8px;
            font-size: 14px;
            text-align: center;
        }

        .alert-error {
            background-color: #fdf2f2;
            color: #c33;
            border: 1px solid #fcc;
        }

        .alert-success {
            background-color: #f2fdf4;
            color: #28a745;
            border: 1px solid #c3e6cb;
        }

        .social-login {
            margin-top: 25px;
            text-align: center;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }

        .social-login p {
            color: #777;
            margin-bottom: 15px;
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
            border-radius: 8px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: opacity 0.2s, transform 0.2s;
        }

        .btn-google {
            background: #db4437;
        }

        .btn-facebook {
            background: #4267b2;
        }

        .btn-social:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        .login-footer {
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
            color: #666;
        }

        .login-footer a {
            color: #f7941d;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .login-footer a:hover {
            color: #e67e00;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-header">
            <div class="logo">
                <span>Pantai</span> Pecaron
            </div>
            <p>Silakan masuk ke akun Anda</p>
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
                <p style="font-size: 12px; color: #999;">Login Google dan Facebook belum dikonfigurasi.</p>
            </div>
        <?php endif; ?>

        <div class="login-footer">
            Belum punya akun? <a href="<?= base_url('website') ?>">Kembali ke beranda</a>
        </div>
    </div>
</body>

</html>