<!-- app/Views/login/login.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Particle.js CSS -->
    <style>
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #000;
        }

        .login-container {
            z-index: 1;
            position: relative;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <!-- Particle.js Background -->
    <div id="particles-js"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="login-container">
                    <h2 class="mb-4" style="color: red;">Login</h2>

                    <!-- Your login form goes here -->
                    <form action="<?= base_url('login/create') ?>" method="post">
                        <!-- Form fields here -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Particle.js Script -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS('particles-js', {
            particles: {
                color: '#ff0000',
                shape: 'circle',
                opacity: 0.6,
                size: 4,
                size_random: true,
                nb: 150,
                line_linked: {
                    enable_auto: true,
                    distance: 100,
                    color: '#ff0000',
                    opacity: 0.5,
                    width: 2,
                    condensed_mode: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 600
                    }
                },
                anim: {
                    enable: true,
                    speed: 2
                }
            },
            interactivity: {
                enable: true,
                mouse: {
                    distance: 250
                },
                detect_on: 'canvas', // "canvas" or "window"
                mode: 'grab',
                line_linked: {
                    opacity: 0.3
                },
                events: {
                    onclick: {
                        enable: true,
                        mode: 'push', // "push" or "remove"
                        nb: 4
                    }
                }
            },
            retina_detect: true
        });
    </script>
</body>
</html>
