document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    const nome = document.getElementById('name').value.trim();
    const surname = document.getElementById('surname').value.trim();
    const email = document.getElementById('email').value.trim();
    let valid = true;

    if (nome === "") {
        document.getElementById('nameError').style.display = 'block';
        valid = false;
    } else {
        document.getElementById('nameError').style.display = 'none';
    }

    if (surname === "") {
        document.getElementById('surnameError').style.display = 'block';
        valid = false;
    } else {
        document.getElementById('surnameError').style.display = 'none';
    }

    if (!validateEmail(email)) {
        document.getElementById('emailError').style.display = 'block';
        valid = false;
    } else {
        document.getElementById('emailError').style.display = 'none';
    }

    if (valid) {
        alert("Dati salvati e scaricati con successo!");
        location.href = 'newPage.html';
    }
});
