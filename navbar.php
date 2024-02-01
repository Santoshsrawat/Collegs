<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap CDN link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- style start here -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header-section {
            background-color: #000;
        }

        .header-section .container .navbar-brand {
            color: #fff;
        }

        .container .navbar-nav li a {
            color: #fff;
            font-size: 1.4rem;
        }
    </style>
</head>

<body>

    <!-- header-section -->
    <header>
        <section class="header-section">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand fs-2 fw-bold" href="#">CRUD</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0  w-100 justify-content-center gap-5 text-capitalize">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">add</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="allData.php">all data</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
    </header>


    <!-- bootstrap JavaScript CDN link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- custome java script -->
    <script>
        let header = document.querySelector(".header-section");
        window.addEventListener('scroll', () => {
            if (window.scrollY >120) {
                header.classList.add("position-fixed","top-0","w-100");
            } else {
                header.classList.remove("position-fixed","top-0","w-100");
            }
        });
    </script>
</body>b

</html>