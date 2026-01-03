// confirm delete (future use)
function confirmDelete() {
    return confirm("Are you sure you want to delete?");
}

// auto hide alerts
setTimeout(() => {
    let alertBox = document.querySelector(".alert");
    if (alertBox) {
        alertBox.style.display = "none";
    }
}, 3000);
