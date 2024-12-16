document.addEventListener("DOMContentLoaded", function() {
    // Get references to sign-up and sign-in buttons and forms
    const signUpButton = document.getElementById("signUpButton");
    const signInButton = document.getElementById("signInButton");
    const signUpForm = document.getElementById("signup");
    const signInForm = document.getElementById("signIn");

    // Add event listener for sign-up button
    signUpButton.addEventListener("click", function() {
        signUpForm.style.display = "block";
        signInForm.style.display = "none";
    });

    // Add event listener for sign-in button
    signInButton.addEventListener("click", function() {

        // Show sign-in form and hide sign-up form
        signUpForm.style.display = "none";
        signInForm.style.display = "block";
    });
});
