<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Awesome E-Commerce</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .result-item {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-size: cover;
            background-position: center;
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#" style=''>My E-Commerce</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" onsubmit="search(event)">
                    <input id="searchInput" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container mt-5" id="searchResultsContainer" style="display: none;">
        <div class="row" id="searchResults"></div>
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">© <?php echo date("Y"); ?> My Awesome E-Commerce</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        function search(event) {
            event.preventDefault();
            var searchQuery = document.getElementById('searchInput').value;
            // Simulated search results
            var searchResults = [
                { title: 'Product 1', image: 'https://via.placeholder.com/300' },
                { title: 'Product 2', image: 'https://via.placeholder.com/300' },
                { title: 'Product 3', image: 'https://via.placeholder.com/300' },
                { title: 'Product 4', image: 'https://via.placeholder.com/300' }
            ];
            var searchResultsContainer = document.getElementById('searchResultsContainer');
            var searchResultsElement = document.getElementById('searchResults');
            searchResultsElement.innerHTML = ""; // Clear previous results
            searchResults.forEach(function(result) {
                var resultItem = document.createElement('div');
                resultItem.classList.add('col-lg-4', 'col-md-6', 'mb-4');
                resultItem.innerHTML = "<div class='result-item' style='background-image: url(" + result.image + ");'><h3>" + result.title + "</h3></div>";
                searchResultsElement.appendChild(resultItem);
            });
            searchResultsContainer.style.display = 'block';
        }
    </script>
</body>
</html>
