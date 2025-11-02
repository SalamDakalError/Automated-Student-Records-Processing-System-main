<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adviser Dashboard</title>
  <link rel="stylesheet" href="stylePrincipalDashboard.css">
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
      <div class="sidebar-header">
        <h2>Adviser</h2>
      </div>

      <nav class="menu">
        <a href="#" class="active"><img src="icons/dashboard.png" alt="">Dashboard</a>
        <a href="#"><img src="icons/files.png" alt="">Files</a>
      </nav>

      <div class="sidebar-footer">
        <div class="user-info">
          <div class="avatar"></div>
          <div>
            <strong>Mamaril Khian Kervy</strong><br>
            <span>Principal</span>
          </div>
        </div>

        <!-- Sign Out -->
        <form action="loginBJLBB.php" method="post" style="margin:0;">
          <button type="submit" class="signout">
            <img src="icons/logout.png" alt="">Sign Out
          </button>
        </form>
      </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">
      <div class="topbar">
        <h3>Dashboard</h3>
        <p>Overview of Students</p>
      </div>

      <!-- STATS CARDS -->
      <div class="stats">
        <div class="card">
          <div class="dot green"></div>
          <p>Total Enrolled Students</p>
          <h2>2304</h2>
        </div>
        <div class="card">
          <div class="dot green"></div>
          <p>Total Pending</p>
          <h2>15</h2>
        </div>
        <div class="card">
          <div class="dot green"></div>
          <p>Total Files</p>
          <h2>12</h2>
        </div>
      </div>

      <!-- FILES TABLE -->
      <div class="files-section">
        <h3>FILES</h3>
        <table>
          <thead>
            <tr>
              <th>Filename</th>
              <th>Teacher</th>
              <th>Submitted Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>ESP-5-Magsaysay</td>
              <td>John Paul Manarang</td>
              <td>January 25, 2025</td>
              <td><span class="status approve">Approve</span></td>
            </tr>
            <tr>
              <td>ESP-5-Quezon</td>
              <td>Fyodor Dostoyevsky</td>
              <td></td>
              <td><span class="status pending">Pending</span></td>
            </tr>
            <tr>
              <td>ESP-VI-Earth</td>
              <td>Bea Barroa</td>
              <td>January 25, 2025</td>
              <td><span class="status approve">Approve</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>
