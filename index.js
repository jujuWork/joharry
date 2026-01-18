function loadComponent(filePath, targetId) {
  return fetch(filePath)
    .then((response) => response.text())
    .then((htmlContent) => {
      document.getElementById(targetId).innerHTML = htmlContent;
    })
    .catch((error) => {
      console.error("Cound not load Components" + filePath);
    });
}

// Execution - wait for header.html to load before loading the script
loadComponent("/pages/header.html", "header").then(() => {
  const script = document.createElement("script"); //asynchronous javascript
  script.src = "/assets/js/header/header.js";
  document.body.appendChild(script);
});
// Execution for content.html
// loadComponent("assets/pages/content.html", "content-container").then(() => {
//   const script = document.createElement("script"); //asynchronous javascript
//   script.src = "/assets/js/content-js/content.js";
//   document.body.appendChild(script);
// });
