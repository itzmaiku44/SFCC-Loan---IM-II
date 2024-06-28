document.addEventListener("DOMContentLoaded", function () {
    const signInButton = document.getElementById("signInButton");
    const signUpButton = document.getElementById("signUpButton");
    const signInForm = document.getElementById("signIn");
    const signUpForm = document.getElementById("signup");

    // Initially hide the sign-up form and show the sign-in form
    signInForm.style.display = "block";
    signUpForm.style.display = "none";

    // Add event listener to the sign-in button
    signInButton.addEventListener("click", function () {
        signInForm.style.display = "block";
        signUpForm.style.display = "none";
    });

    // Add event listener to the sign-up button
    signUpButton.addEventListener("click", function () {
        signUpForm.style.display = "block";
        signInForm.style.display = "none";
    });
});