document.getElementById("login-btn").addEventListener("mouseover", function() {
  document.getElementById("dropdown-menu").style.display = "block";
});

document.getElementById("login-btn").addEventListener("mouseout", function() {
  document.getElementById("dropdown-menu").style.display = "none";
});

document
  .getElementById("dropdown-menu")
  .addEventListener("mouseover", function() {
    document.getElementById("dropdown-menu").style.display = "block";
  });

document
  .getElementById("dropdown-menu")
  .addEventListener("mouseout", function() {
    document.getElementById("dropdown-menu").style.display = "none";
  });
