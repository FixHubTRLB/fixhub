<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/png" href="static/favicon.ico">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FixHub - Report a Vulnerability</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="report-section">
        <h1>Report a Vulnerability</h1>
        <form action="submit_report.php" method="post">
            <div class="form-group">
                <label for="repo-url">GitHub Repository URL</label>
                <input type="url" id="repo-url" name="repo_url" placeholder="https://github.com/user/repository" required>
            </div>
            <div class="form-group">
                <label for="type">Vulnerability Type</label>
                <select id="type" name="type" required>
                    <option value="">Select Type</option>
                    <option value="XSS-R">Cross-Site Scripting (XSS) - Reflected</option>
                    <option value="XSS-S">Cross-Site Scripting (XSS) - Stored</option>
                    <option value="XSS-D">Cross-Site Scripting (XSS) - Dom-Based</option>
                    <option value="SQLi">SQL Injection (SQLi)</option>
                    <option value="LFI">Local File Inclusion (LFI)</option>
                    <option value="RFI">Remote File Inclusion (RFI)</option>
                    <option value="DoS">Denial Of Service (DoS)</option>
                    <option value="CSRF">Cross-Site Request Forgery (CSRF)</option>
                    <option value="RCE">Remote Code Execution (RCE)</option>
                    <option value="IDOR">Insecure Direct Object Reference (IDOR)</option>
                    <option value="SSRF">Server-side Request Forgery (SSRF)</option>
                    <option value="OSI">OS Command Injection</option>
                    <option value="Buffer-Overflow">Buffer Overflow</option>
                    <option value="Buffer-Overflow-SB">Buffer Overflow - Stack-Based</option>
                    <option value="Buffer-Overflow-HB">Buffer Overflow - Heap-Based</option>
                    <option value="CWE-200">Exposure of Sensitive Information</option>
                    <option value="CWE-284">Improper Access Control</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="details">Vulnerability Details</label>
                <div class="details-container">
                    <button type="button" class="toggle-btn" onclick="togglePreview()">Preview</button>
                    <textarea id="details" name="details" required>
**Summary:**



**PoC (Proof of Concept):** 



**Remediation:** 


                    </textarea>
                    <div id="preview" class="preview-section"></div>
                </div>
            </div>
            <button type="submit" class="submit-btn">Submit Report</button>
        </form>
    </section>

    <footer>
        &copy; <?php echo date("Y"); ?> FixHub. All rights reserved.
    </footer>

    <!-- Include marked.js library from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script>
        let previewVisible = false;
        const detailsInput = document.getElementById('details');
        const previewDiv = document.getElementById('preview');

        function togglePreview() {
            previewVisible = !previewVisible;
            if (previewVisible) {
                previewDiv.style.display = 'block';
                detailsInput.style.display = 'none';
                previewDiv.innerHTML = marked.parse(detailsInput.value);
            } else {
                previewDiv.style.display = 'none';
                detailsInput.style.display = 'block';
            }
        }
    </script>
</body>
</html>
