<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shorthandcss@1.1.1/dist/shorthand.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Muli:200,300,400,500,600,700,800,900&display=swap" />
    <style>
        body {
            background-color: #f5f5f5;
            color: #333;
            font-family: 'Muli', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header {
            background: #6a1b9a;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .header h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        .header .back-logo {
            position: absolute;
            top: 15px;
            left: 15px;
            width: 40px;
            height: 40px;
            fill: #fff;
            transition: fill 0.3s ease;
        }

        .header .back-logo:hover {
            fill: #e0e0e0;
        }

        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
        }

        .about-content {
            text-align: center;
            padding: 50px 0;
        }

        .about-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .about-content p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #555;
        }

        .team-member {
            margin-bottom: 30px;
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        .team-member h5 {
            margin-top: 15px;
            font-size: 1.5rem;
            color: #6a1b9a;
        }

        .team-member p {
            font-size: 1rem;
            color: #888;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <a href="/" class="back-logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                    d="M421.47,25.7L296.24,4.3a56.59,56.59,0,0,0-22.47,0L90.53,25.7A56.79,56.79,0,0,0,40.12,65.21L5.08,239.78A56.77,56.77,0,0,0,13.25,297L134.78,454.69a56.78,56.78,0,0,0,46.9,24.31H330.32a56.77,56.77,0,0,0,46.9-24.31L498.75,297a56.77,56.77,0,0,0,8.17-57.19L471.88,65.21A56.79,56.79,0,0,0,421.47,25.7ZM296.24,0a72.88,72.88,0,0,1,24,2.34L445.06,24.11a72.8,72.8,0,0,1,47.83,31.3L520,229.63a72.73,72.73,0,0,1-10.35,68.66L390.8,468.8a72.77,72.77,0,0,1-57.62,29.93H150.82a72.77,72.77,0,0,1-57.62-29.93L2.36,298.29A72.75,72.75,0,0,1-8,229.63L38.11,55.41a72.8,72.8,0,0,1,47.83-31.3L191.8,2.34a72.88,72.88,0,0,1,24-2.34ZM231.45,326.2,116.25,210.45a14.53,14.53,0,0,1,20.55-20.55L250.28,291.66l113.48-101.76a14.53,14.53,0,0,1,20.55,20.55L280.55,326.2a14.54,14.54,0,0,1-20.54,0Z" />
            </svg>
        </a>
        <h1>About Us</h1>
    </div>

    <!-- About Content Wrapper -->
    <div class="content-wrapper">
        <div class="about-content">
            <div class="row">
                <div class="col-md-6">
                    <h2>Welcome to Our Company</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non urna vitae tortor vulputate
                        fringilla. Curabitur auctor sapien a risus facilisis, at venenatis nisl facilisis. Proin sed
                        magna ligula. Nam pharetra, augue vel sodales convallis, erat tortor dapibus purus, nec
                        tincidunt elit lacus sed lorem. Nullam congue semper libero, sed tincidunt nulla dignissim id.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x300" class="img-fluid br-8" alt="About Us Image">
                </div>
            </div>

            <!-- Team Section -->
            <div class="container mt-5">
                <h2 class="text-center" style="color: #6a1b9a;">Meet Our Team</h2>
                <div class="row justify-content-center">
                    <div class="text-center col-md-4 team-member">
                        <img src="https://via.placeholder.com/150" alt="Team Member">
                        <h5>John Doe</h5>
                        <p>CEO</p>
                    </div>
                    <div class="text-center col-md-4 team-member">
                        <img src="https://via.placeholder.com/150" alt="Team Member">
                        <h5>Jane Smith</h5>
                        <p>CTO</p>
                    </div>
                    <div class="text-center col-md-4 team-member">
                        <img src="https://via.placeholder.com/150" alt="Team Member">
                        <h5>Bob Johnson</h5>
                        <p>CFO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
