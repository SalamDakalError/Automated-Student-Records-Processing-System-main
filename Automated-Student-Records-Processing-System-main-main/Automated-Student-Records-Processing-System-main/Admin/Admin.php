<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="styleAdmin.css">
</head>
<body>
  <!-- ===== HEADER ===== -->
  <header class="header">
    <img src="OIP.png" alt="Logo">
    <h1>Admin Dashboard</h1>
  </header>

  <!-- ===== DASHBOARD CONTAINER ===== -->
  <div class="dashboard-container">
    <!-- SIDEBAR -->
    <aside class="sidebar">
      <div class="menu">
        <a href="#" id="userTab" class="active">
          <img src="dashboard.png" alt="Dashboard">
          Users
        </a>
        <a href="#" id="logsTab">
          <img src="User.png" alt="Logs">
          Logs
        </a>
      </div>

      <div class="sidebar-footer">
        <button class="signout">
          <img src="out.png" alt="Sign Out">
          Logout
        </button>
      </div>
    </aside>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="main-content">

      <!-- ===== USERS SECTION ===== -->
      <section id="userSection" class="content-box active">
        <div class="section-header">

          <!-- SEARCH BAR -->
          <div class="search-container">
            <input type="text" placeholder="Search users...">
            <button>Search</button>
          </div>
        </div>

        <!-- USERS TABLE -->
        <table class="data-table">
          <thead>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Role</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <!-- Data rows will be added here dynamically -->
          </tbody>
        </table>
      </section>

      <!-- ===== LOGS SECTION ===== -->
      <section id="logsSection" class="content-box">
        <div class="section-header">

          <!-- SEARCH BAR -->
          <div class="search-container">
            <input type="text" placeholder="Search logs...">
            <button>Search</button>
          </div>
        </div>

        <!-- LOGS TABLE -->
        <table class="data-table">
          <thead>
            <tr>
              <th>No.</th>
              <th>Filename</th>
              <th>Status</th>
              <th>Submitted Date</th>
              <th>Teacher Name</th>
              <th>Approved Date</th>
            </tr>
          </thead>
          <tbody>
            <!-- Log rows will be added here dynamically -->
          </tbody>
        </table>
      </section>

    </main>
  </div>

  <script src="scriptAdmin.js"></script>
</body>
</html>
