document.getElementById("form").addEventListener("submit", function(event) {
    event.preventDefault();

    document.getElementById("namaError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("feedbackError").textContent = "";

    let isValid = true;

    const nama = document.getElementById("nama").value.trim();
    if (nama === "") {
        document.getElementById("namaError").textContent = "Nama harus diisi.";
        isValid = false;
    }

    const email = document.getElementById("email").value.trim();
    if (email === "") {
        document.getElementById("emailError").textContent = "Email harus diisi.";
        isValid = false;
    } else if (!email.includes("@")) {
        document.getElementById("emailError").textContent = "Masukkan alamat email yang valid.";
        isValid = false;
    }

    const feedback = document.getElementById("feedback").value.trim();
    if (feedback === "") {
        document.getElementById("feedbackError").textContent = "Feedback harus diisi.";
        isValid = false;
    }

    if (isValid) {
        const successMessage = document.getElementById("success-message");
        successMessage.style.display = "block";

        setTimeout(() => {
            successMessage.style.display = "none";
            document.getElementById("form").reset(); 
        }, 3000);
    }
});
