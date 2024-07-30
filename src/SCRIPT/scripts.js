function updateLabel() {
    var roleSelect = document.getElementById("role");
    var rmLabel = document.getElementById("rm-label");

    if (roleSelect.value === "professor") {
        rmLabel.textContent = "Login:";
    } else {
        rmLabel.textContent = "RM:";
    }
}
