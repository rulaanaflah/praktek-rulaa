<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            height: 100vh;
            font-family: Arial, sans-serif;
        }

/* efek lingkaran kayak molekul */
        body::before {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            top: 10%;
            left: 10%;
        }

        body::after {
            content: "";
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            bottom: 10%;
            right: 10%;
        }

/* card login */
        .card {
            border-radius: 15px;
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.9);
        }

/* tombol login */
        .btn-primary {
            background: linear-gradient(45deg, #00c6ff, #0072ff);
            border: none;
        }
</style>

</head>
<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-4">

            <div class="card p-4 shadow">

            <div class="text-center mb-3">
                    <img src="assets/logo-smk2.jpeg" alt="Logo Sekolah" width="80">
                </div>

                <h3 class="text-center mb-4">
                    LOGIN ADMIN
                </h3>

                <form action="proses_login.php" method="POST">

                    <div class="mb-3">

                        <label>Username</label>

                        <input
                        type="text"
                        name="username"
                        class="form-control"
                        required>

                    </div>

                    <div class="mb-3">

                        <label>Password</label>

                        <input
                        type="password"
                        name="password"
                        class="form-control"
                        required>

                    </div>

                    <button
                    type="submit"
                    class="btn btn-primary w-100">

                        Login

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>