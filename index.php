<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>UMAK OPAC</title>
</head>
<body>
    <?php
        include 'navbar.php';
    ?>

    <section class="banner-one">
        <div class="outerbox">
            <div class="header-container">
                <header>UMAK LIBRARY OPAC</header>
            </div>
        </div>
    </section>
    <section class="banner-two">
        <div class="opac-info">
            <p>OPAC (Online Public Access Catalogue) is the Library's search tool used to locate printed  books and journals available

                in the library. You can search for physical books and other reading materials through OPAC by author, title, ISBN, 

                publisher, keyword and year of publication. The library uses Koha to catalogue the books.</p>
        </div>
        <div class="button-container">
            <button>Click to Redirect to Catalog</button>
        </div>
    </section>
    <section class="banner-three">
        <div class="image-overlay">
            <div class="container">
                <div class="about-us">
                    <div class="about-us-header">About Us</div>
                    <div class="about-us-desc">The University of Makati Library Management System is designed to provide an

                        efficient and modern way for students, faculty, and staff to search, borrow, and 

                        manage books. This system enhances accessibility to the library’s vast collection

                        while ensuring a seamless borrowing and returning process.</div>
                </div>
                <div class="side-photo">
                    <img src="images/SIR-KYLE-5.png" alt="" id="landing-page-pic">
                </div>
            </div>
        </div>
    </section>
    <section class="banner-four">
        <div class="banner-four-overlay">
            <div class="banner-four-photo">
                <input type="image" src="images/SHELF-3.png" alt="" id="banner-four-pic">
            </div>
            <div class="offers">
                <header>What We Offer</header>
                <div class="offer-list">
                    <li><strong>Advanced Book Search</strong> - Quickly find books using ISBN, call number, title, author, category</li>
                    <li><strong>User-Friendly Experience</strong> - A seamless and intuitive interface for students and faculty.</li>
                    <li><strong>Real-Time Availability</strong> - Check book status instantly and reduce wait times.</li>
                </div>
            </div>
        </div>
    </section>
    <?php
        include 'footer.php';
    ?>
</body>
</html>