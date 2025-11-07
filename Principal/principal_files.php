<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Principal - Files</title>
  <link rel="stylesheet" href="stylePrincipalDashboard.css">
  <link rel="stylesheet" href="principal_files.css">
</head>
<body>

  <!-- HEADER BAR -->
  <header class="header">
    <img src="OIP.png" alt="DepEd Logo">
    <h1>Principal</h1>
  </header>

  <div class="dashboard-container">

    <!-- SIDEBAR -->
    <aside class="sidebar">
      <nav class="menu">
        <a href="principalDashboard.php">
          <img src="dashboard.png" alt="Dashboard Icon">
          Dashboard
        </a>
        <a href="principal_files.php" class="active">
          <img src="google-docs.png" alt="Files Icon">
          Files
        </a>
      </nav>

      <!-- SIDEBAR FOOTER -->
      <div class="sidebar-footer">
        <div class="user-info">
          <?php
            if (!empty($_SESSION['name'])) {
              echo '<p class="user-name">' . htmlspecialchars($_SESSION['name']) . '</p>';
            } else {
              echo '<p class="user-name">Not logged in</p>';
            }
          ?>
        </div>
        <button class="signout" id="signoutBtn">
          <img src="out.png" alt="Logout Icon">
          Sign Out
        </button>
      </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">
      <div class="topbar">
        <h3>Files</h3>
        <p>Manage and review submitted files</p>
      </div>

      <!-- FILES TABLE -->
      <div class="files-section">
        <h3>FILES</h3>
        <table class="files-table">
          <thead>
            <tr>
              <th>Filename</th>
              <th>Teacher</th>
              <th>Submitted Date</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>ESP-5-Magsaysay</td>
              <td>Raul Magsaysay</td>
              <td>January 13, 2025</td>
              <td><span class="status approve">Approved</span></td>
              <td class="actions-cell">
                <span class="no-action">—</span>
              </td>
            </tr>
            <tr>
              <td>ESP-5-Quezon</td>
              <td>Raul Magsaysay</td>
              <td>January 13, 2025</td>
              <td><span class="status pending">Pending</span></td>
              <td class="actions-cell">
                <button class="action-btn approve-btn" title="Approve">✓</button>
                <button class="action-btn reject-btn" title="Reject">✕</button>
              </td>
            </tr>
            <tr>
              <td>ESP-6-Earth</td>
              <td>Raul Magsaysay</td>
              <td>January 13, 2025</td>
              <td><span class="status approve">Approved</span></td>
              <td class="actions-cell">
                <span class="no-action">—</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <script>
    // Sign out functionality
    document.addEventListener('DOMContentLoaded', function() {
      const signoutBtn = document.getElementById('signoutBtn');
      if (signoutBtn) {
        signoutBtn.addEventListener('click', function() {
          if (confirm('Are you sure you want to sign out?')) {
            window.location.href = '../Login/logout.php';
          }
        });
      }
    });

    // Approve/Reject functionality
    document.querySelectorAll('.approve-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        if(confirm('Are you sure you want to approve this file?')) {
          // Add your approval logic here
          const row = this.closest('tr');
          const statusCell = row.querySelector('.status');
          statusCell.textContent = 'Approved';
          statusCell.classList.remove('pending');
          statusCell.classList.add('approve');
          
          // Remove action buttons
          this.closest('.actions-cell').innerHTML = '<span class="no-action">—</span>';
        }
      });
    });

    document.querySelectorAll('.reject-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        if(confirm('Are you sure you want to reject this file?')) {
          // Add your rejection logic here
          const row = this.closest('tr');
          row.remove(); // Or update status to rejected
        }
      });
    });
  </script>

</body>
</html>