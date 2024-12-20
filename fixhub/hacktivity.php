<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/png" href="static/favicon.ico">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FixHub - Hacktivity</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <section class="hacktivity-section">
        <h1>Recent Vulnerabilities</h1>
        <div class="search-container">
            <input type="text" placeholder="Search vulnerabilities...">
            <button title="Search"><img class="search-icon" src="static/search-icon.svg"></button>
            <a href="report.php" class="goto-submit-btn">Submit</a>
        </div>
        <ul class="vuln-list">
            <li class="vuln-item">
                <div class="vuln-title">SQL Injection in ProjectX</div>
                <div class="vuln-meta">Reported by Alice | March 25, 2024</div>
                <div class="vuln-description">
                    A SQL Injection vulnerability was discovered in the login module of ProjectX. Attackers can manipulate database queries, potentially exposing sensitive data.
                </div>
            </li>
            <li class="vuln-item">
                <div class="vuln-title">XSS in OpenForum</div>
                <div class="vuln-meta">Reported by Bob | March 20, 2024</div>
                <div class="vuln-description">
                    An XSS vulnerability allows attackers to inject malicious scripts into forum posts, potentially compromising user sessions.
                </div>
            </li>
            <li class="vuln-item">
                <div class="vuln-title">Remote Code Execution in CMSPro</div>
                <div class="vuln-meta">Reported by Charlie | March 18, 2024</div>
                <div class="vuln-description">
                    A critical RCE vulnerability in CMSPro's file upload feature allows attackers to execute arbitrary code on the server.
                </div>
            </li>
        </ul>
    </section>

    <footer>
        &copy; <?php echo date("Y"); ?> FixHub. All rights reserved.
    </footer>

</body>
</html>
