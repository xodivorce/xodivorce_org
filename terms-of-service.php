<!DOCTYPE html>
<html>
<head>
	<title>Terms of Service Section In HTML and CSS</title>
	<link rel="stylesheet" type="text/css" href="css/terms-of-service.css">
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>

<div class="wrapper flex_align_justify">
  <div class="terms_service">
      <div class="tc_item tc_head flex_align_justify">
        <div class="icon flex_align_justify">
          <ion-icon name="terminal-outline"></ion-icon>
        </div>
        <div class="text">
          <h2>TERMS OF SERVICE</h2>
          <p>Last updated on October 13, 2023</p>
        </div>
      </div>
      <div class="tc_item tc_body">
        <ol>
          <li>
            <h3>Terms of use</h3>
            <p>By accessing and using this website, you agree to abide by these terms and conditions. If you do not agree with any of these terms, you are prohibited from using or accessing this site.</p>
          </li>
          <li>
            <h3>Intellectual property rights</h3>
            <p>All materials, including but not limited to text, graphics, logos, images, and software, provided on this website are owned or licensed by the university and are protected by intellectual property laws.</p>
          </li>
          <li>
            <h3>Prohibited activities</h3>
            <p>Users are prohibited from engaging in any unlawful, abusive, or harmful activities on this website. This includes but is not limited to spamming, hacking, distributing malware, or violating the privacy of others.</p>
          </li>
          <li>
            <h3>Termination clause</h3>
            <p>The university reserves the right to terminate or suspend access to the website at any time without prior notice for any reason, including but not limited to violation of these terms of service.</p>
          </li>
          <li>
            <h3>Governing law</h3>
            <p>These terms of service shall be governed by and construed in accordance with the laws of the jurisdiction in which the university is located, without regard to its conflict of law provisions.</p>
          </li>
        </ol>
      </div>
      <div class="tc_item tc_foot flex_align">
          <button class="decline_btn"onclick="declineTerms()">Decline</button>
          <button class="accept_btn"onclick="acceptTerms()">Accept</button>
      </div>
  </div>
</div>
</body>
</html>