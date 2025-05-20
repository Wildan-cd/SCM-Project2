const filterButtons = document.querySelectorAll(".filter-buttons button");
const serviceItems = document.querySelectorAll(".layanan-item");

filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
        // Remove 'active' class from all buttons
        filterButtons.forEach((btn) => btn.classList.remove("active"));
        button.classList.add("active");

        const filter = button.getAttribute("data-filter");

        serviceItems.forEach((item) => {
            const category = item.getAttribute("data-category");
            if (filter === "all" || category === filter) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    });
});
