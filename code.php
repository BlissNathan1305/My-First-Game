<?php
    // --- Configuration Variables ---
    // You can easily change the content by modifying these variables
    $pageTitle = "Single File PHP Landing Page";
    $headline = "Welcome to Our Amazing Service!";
    $subHeadline = "The simplest solution for your complex needs.";
    $bodyText = "We provide top-tier services designed to boost your productivity and success. Discover how we can help you achieve your goals faster and more efficiently than ever before. Get started today!";
    $ctaButtonText = "Learn More Now";
    $ctaButtonLink = "#features"; // Link to a section on the page, or an external URL
    $footerText = "© " . date("Y") . " Your Company Name. All rights reserved.";

    // Note: Using htmlspecialchars() when echoing variables into HTML
    // is a good security practice to prevent Cross-Site Scripting (XSS),
    // especially if the variable content could ever come from user input.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <style>
        /* --- Embedded CSS --- */

        /* Basic Reset / Defaults */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            height: 100%; /* Ensure html takes full height */
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa; /* Light grey background */
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure body takes at least full viewport height */
        }

        /* Header Styles */
        .page-header {
            background-color: #4a90e2; /* Nice blue */
            color: #ffffff;
            padding: 3rem 1rem;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .page-header h1 {
            margin-bottom: 0.5rem;
            font-size: 2.8em;
            font-weight: 300;
        }

         .page-header p { /* Optional: Style the subheadline differently if needed */
            font-size: 1.2em;
            color: #e0e0e0; /* Lighter text for subheadline */
        }

        /* Main Content Styles */
        main {
            flex: 1; /* Allows main content to grow and push footer down */
            padding: 2.5rem 1rem; /* Padding top/bottom and left/right */
            text-align: center;
        }

        .container {
             max-width: 800px; /* Limit content width */
             margin: 0 auto; /* Center the container */
        }

        main h2 { /* Use h2 for the subHeadline if it's in main, or style differently */
             color: #3478c8; /* Darker blue */
             margin-bottom: 1.5rem;
             font-size: 2em;
             font-weight: 400;
        }

        main p {
            margin-bottom: 2rem;
            font-size: 1.1em;
            color: #555;
            max-width: 650px; /* Limit paragraph width for readability */
            margin-left: auto;
            margin-right: auto;
        }

        /* Call to Action Button */
        .cta-button {
            display: inline-block;
            background-color: #5cb85c; /* Green */
            color: #fff;
            padding: 14px 30px;
            text-decoration: none;
            font-size: 1.2em;
            font-weight: bold;
            border-radius: 30px; /* Rounded button */
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .cta-button:hover {
            background-color: #4cae4c; /* Darker green */
            transform: translateY(-2px); /* Slight lift effect */
            box-shadow: 0 6px 8px rgba(0,0,0,0.15);
        }

        /* Features Section Placeholder (if using internal link) */
        #features {
            padding-top: 60px; /* Offset for fixed header if you add one */
            margin-top: -60px; /* Negative margin to counteract padding */
        }

        /* Footer Styles */
        .page-footer {
            background-color: #343a40; /* Dark grey */
            color: #f8f9fa; /* Light text */
            text-align: center;
            padding: 1.5rem 1rem;
            margin-top: auto; /* Pushes footer to bottom */
        }

         .page-footer p {
             font-size: 0.9em;
             color: #adb5bd; /* Medium grey */
         }

    </style>
</head>
<body>

    <header class="page-header">
        <h1><?php echo htmlspecialchars($headline); ?></h1>
         <!-- You could put the subHeadline here too if preferred -->
         <!-- <p><?php echo htmlspecialchars($subHeadline); ?></p> -->
    </header>

    <main>
       <div class="container">
            <!-- Or put the subHeadline here -->
             <h2><?php echo htmlspecialchars($subHeadline); ?></h2>

            <p><?php echo htmlspecialchars($bodyText); ?></p>

            <a href="<?php echo htmlspecialchars($ctaButtonLink); ?>" class="cta-button">
                <?php echo htmlspecialchars($ctaButtonText); ?>
            </a>

            <!-- Placeholder for feature section if using internal link -->
            <div id="features">
                <!-- You could add more content here later -->
            </div>
       </div>
    </main>

    <footer class="page-footer">
       <div class="container">
            <p><?php echo htmlspecialchars($footerText); ?></p>
        </div>
    </footer>

</body>
</html>