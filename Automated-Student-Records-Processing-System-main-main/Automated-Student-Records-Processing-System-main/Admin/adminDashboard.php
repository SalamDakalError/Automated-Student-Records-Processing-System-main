<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="styleAdmin.css">
</head>
<body>
  <!-- HEADER -->
  <header class="header">
    <img src="OIP.png" alt="Logo">
    <h1>Admin</h1>
  </header>

  <div class="dashboard-container">
    <!-- SIDEBAR -->
    <aside class="sidebar">
      <nav class="menu">
        <a href="#" id="userTab" class="active"><img src="icons/users.png" alt="">User</a>
        <a href="#" id="logsTab"><img src="icons/logs.png" alt="">Logs</a>
      </nav>

      <div class="sidebar-footer">
        <div class="user-info">
          <div class="avatar"></div>
          <div>
            <strong>Manarang John Paul</strong><br>
            <span>Admin</span>
          </div>
        </div>
        <form action="login.php" method="post" style="margin:0;">
          <button type="submit" class="signout">
            <img src="icons/logout.png" alt="">Sign Out
          </button>
        </form>
      </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">
      <div class="content-box active" id="userSection">
        <div class="search-bar">
          <label>Search</label>
          <input type="text" placeholder="Search users...">
        </div>
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Role</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>1</td><td>Example User</td><td>Principal</td><td>user1@email.com</td></tr>
            <tr><td>2</td><td>Another User</td><td>Adviser</td><td>user2@email.com</td></tr>
            <tr><td>3</td><td>Sample User</td><td>Subject Teacher</td><td>user3@email.com</td></tr>
          </tbody>
        </table>
      </div>

      <div class="content-box" id="logsSection">
        <div class="search-bar">
          <label>Search</label>
          <input type="text" placeholder="Search logs...">
        </div>
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>File Name</th>
              <th>Status</th>
              <th>Submitted Date</th>
              <th>Teacher Name</th>
              <th>Approved Date</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>1</td><td>ESP-5-Magsaysay</td><td><span class="status approve">Approve</span></td><td>Jan 13, 2025</td><td>Raul Magsay</td><td>Jan 14, 2025</td></tr>
            <tr><td>2</td><td>ESP-6-Quezon</td><td><span class="status pending">Pending</span></td><td>Jan 14, 2025</td><td>Raul Magsay</td><td></td></tr>
            <tr><td>3</td><td>ESP-6-Earth</td><td><span class="status approve">Approve</span></td><td>Jan 13, 2025</td><td>Raul Magsay</td><td>Jan 14, 2025</td></tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <script src="script.js"></script>
</body>
</html>
