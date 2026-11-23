const sidebar = document.querySelector(".sidebar");


    const btn = document.createElement("button");
    btn.textContent = "Dark Mode";
    btn.style.marginTop = "auto";
    btn.style.marginBottom = "20px";
    btn.style.padding = "8px 12px";
    btn.style.cursor = "pointer";

    btn.onclick = () => {
        document.body.classList.toggle("dark");
        btn.textContent = document.body.classList.contains("dark")
            ? "Light Mode"
            : "Dark Mode";
    };

    sidebar.appendChild(btn);


const search = document.createElement("input");
const grid = document.getElementById("courses-grid");

if (grid) {
    search.placeholder = "Filter courses...";
    search.style.marginBottom = "15px";
    search.style.padding = "6px 10px";
    grid.before(search);

    search.oninput = () => {
        const val = search.value.toLowerCase();
        document.querySelectorAll(".course-card").forEach((card) => {
            card.style.display = card.textContent.toLowerCase().includes(val) ? "" : "none";
        });
    };
}