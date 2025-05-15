const { useReducer } = require("react");

document.getElementById("registerForm").addEventListener("submit", async function (e) {
    e.preventDefault();
    const username = document.getElementById("username").value.trim();
    const email = document.getElementById("email").value.trim();
    const phoneNumber = document.getElementById("phoneNumber").value.trim().replace(/\D/g, '');
    const password = document.getElementById("password").value.trim();

    const registerMap = [
        {value: "username", validate: val => val.length >= 3, errorMsg: "Username must be at least 3 characters."},
        {value: "email", validate: val => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val), errorMsg: "Phone number must be exactly 10 digits."},
        {value: "phoneNumber", validate: val => val.length === 10, errorMsg: "Phone number must be exactly 10 digits."},
        {value: "password", validate: val => /^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/.test(val), errorMsg: "Password must be at least 8 characters and include uppercase, lowercase, and a special symbol."},
    ]
    const errors = [];
    const errorDiv = document.getElementById("registerErrors");
    errorDiv.innerHTML = "";

    registerMap.forEach(x => {
        if (!x.validate(x.value)) {
            errors.push(x.errorMsg);
        }
    })
    
    if (errors.length > 0) {
        errorDiv.innerHTML = errors.join("<br>");
    }
})