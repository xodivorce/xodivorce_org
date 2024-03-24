<!DOCTYPE html>
<html>
<head>
	<title>Terms of Service Section In HTML and CSS</title>
	<link rel="stylesheet" type="text/css" href="terms-of-service.css">
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
          <p>Last updated on September 12 2022</p>
        </div>
      </div>
      <div class="tc_item tc_body">
        <ol>
          <li>
            <h3>Terms of use</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem doloribus cumque vero, culpa voluptates dolorum reprehenderit nihil nisi odit necessitatibus voluptate voluptatibus magni ducimus sed accusamus illo nobis veniam.</p>
          </li>
          <li>
            <h3>Intellectual property rights</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem doloribus cumque vero, culpa voluptates dolorum reprehenderit nihil nisi odit necessitatibus voluptate voluptatibus magni ducimus sed accusamus illo nobis veniam.</p>
          </li>
          <li>
            <h3>Prohibited activities</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem doloribus cumque vero, culpa voluptates dolorum reprehenderit nihil nisi odit necessitatibus voluptate voluptatibus magni ducimus sed accusamus illo nobis veniam.</p>
          </li>
          <li>
            <h3>Termination clause</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem doloribus cumque vero, culpa voluptates dolorum reprehenderit nihil nisi odit necessitatibus voluptate voluptatibus magni ducimus sed accusamus illo nobis veniam.</p>
          </li>
          <li>
            <h3>Governing law</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, quidem doloribus cumque vero, culpa voluptates dolorum reprehenderit nihil nisi odit necessitatibus voluptate voluptatibus magni ducimus sed accusamus illo nobis veniam.</p>
          </li>
        </ol>
      </div>
      <div class="tc_item tc_foot flex_align">
          <button class="decline_btn"onclick="declineTerms()">Decline</button>
          <button class="accept_btn"onclick="acceptTerms()">Accept</button>
      </div>
  </div>
</div>
<script>
        function showTerms() {
            document.getElementById('terms-of-service').style.display = 'block'; 
        }

        function acceptTerms() {
            document.getElementById('terms_conditions').checked = true;
            document.getElementById('terms-of-service').style.display = 'none';
        }
        
        function declineTerms() {
            document.getElementById('terms_conditions').checked = false; 
            document.getElementById('terms-of-service').style.display = 'none';
        }
    </script>

</body>
</html>