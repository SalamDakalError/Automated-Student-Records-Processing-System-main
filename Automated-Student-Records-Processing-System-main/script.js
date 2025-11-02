const userTab = document.getElementById("userTab");
const logsTab = document.getElementById("logsTab");
const userSection = document.getElementById("userSection");
const logsSection = document.getElementById("logsSection");

userTab.addEventListener("click", () => {
  userTab.classList.add("active");
  logsTab.classList.remove("active");
  userSection.classList.add("active");
  logsSection.classList.remove("active");
});

logsTab.addEventListener("click", () => {
  logsTab.classList.add("active");
  userTab.classList.remove("active");
  logsSection.classList.add("active");
  userSection.classList.remove("active");
});
