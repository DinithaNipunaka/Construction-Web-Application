<?php include "db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../../css/view.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">


    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" media="screen">


<!-- Bootstrap Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="screen" />

    <title>ADMIN DASHBOARD</title>
    <style>
        /* Custom CSS Variables */
:root {
  --primary: #2c3e50;
  --secondary: #34495e;
  --accent: #3498db;
  --success: #2ecc71;
  --danger: #e74c3c;
  --light: #ecf0f1;
  --dark: #2c3e50;
}

/* Main Container Styles */
.main-container {
  background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  min-height: 100vh;
  transition: all 0.3s ease;
}

/* Navbar Styles */
.navc {
  background: var(--primary);
  box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.navbar-brand {
  font-weight: 600;
  transition: transform 0.3s ease;
}

.navbar-brand:hover {
  transform: translateY(-2px);
}

.navbar-brand img {
  transition: transform 0.3s ease;
}

.navbar-brand img:hover {
  transform: rotate(360deg);
  transition: transform 0.8s ease;
}

/* Navigation Links */
.nav-link {
  position: relative;
  padding: 0.5rem 1rem;
  transition: color 0.3s ease;
}

.nav-link::after {
  content: '';
  position: absolute;
  width: 0;
  height: 2px;
  bottom: 0;
  left: 50%;
  background-color: var(--accent);
  transition: all 0.3s ease;
}

.nav-link:hover::after {
  width: 100%;
  left: 0;
}

/* Profile Button */
.btnprofile {
  background-color: var(--accent);
  color: white;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.btnprofile:hover {
  background-color: #2980b9;
  transform: translateY(-2px);
  box-shadow: 0 4px 15px rgba(52, 152, 219, 0.2);
}

/* Profile Dropdown */
.btnprofiledropdown {
  background-color: white;
  border-radius: 5px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.dropdown-item {
  transition: all 0.3s ease;
}

.dropdown-item:hover {
  background-color: var(--light);
  transform: translateX(5px);
}

/* Tables */
.tablerole, .tabledata {
  background: white;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  overflow: hidden;
  transition: all 0.3s ease;
}

.tablebg1 {
  background-color: var(--primary);
  color: white;
}

.tablebg2 {
  transition: all 0.3s ease;
}

.tablebg2:hover {
  background-color: var(--light);
  transform: translateX(5px);
}

/* Table Buttons */
.btn-outline-secondary,
.btn-outline-dark,
.btn-outline-danger {
  transition: all 0.3s ease;
}

.btn-outline-secondary:hover,
.btn-outline-warning:hover,
.btn-outline-danger:hover {
  transform: translateY(-2px);
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

/* Modal Styles */
.modi {
  border: none;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.modal-header {
  background-color: var(--primary);
  color: white;
}

.modalcost {
  background-color: var(--accent);
  padding: 1rem;
  margin-top: 1rem;
  transition: all 0.3s ease;
}

.btnclose {
  background-color: var(--danger);
  color: white;
  transition: all 0.3s ease;
}

.btnclose:hover {
  background-color: #c0392b;
  transform: translateY(-2px);
}

/* Animations */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.table {
  animation: fadeIn 0.5s ease;
}

/* Responsive Design */
@media (max-width: 768px) {
  .table {
    font-size: 0.9rem;
  }
  
  .btn-sm {
    padding: 0.2rem 0.4rem;
  }
}
    </style>
</head>
<body>
    
