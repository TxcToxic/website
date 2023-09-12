const colors = ["#ff0000", "#510000", "#ff00ea", "#9f0f3f", "#d46d06"];

function getRandomColor() {
  const randomIndex = Math.floor(Math.random() * colors.length);
  return colors[randomIndex];
}

function changeSpanColor() {
  const colorSpan = document.getElementById("c-s");
  if (colorSpan.innerHTML !== "Not Found") {
    colorSpan.innerHTML = "Not Found"
  }
  const randomColor = getRandomColor();
  colorSpan.style.color = randomColor;
}