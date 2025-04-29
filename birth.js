function
 calculateAge(birthDateString) {
    const today = new Date();
    const birthDate = new Date(birthDateString);
    
    let age = today.getFullYear() - birthDate.getFullYear();
    
    const m = today.getMonth() - birthDate.getMonth();
    const d = today.getDate() - birthDate.getDate();

    // Adjust if birthday hasn't occurred yet this year
    if (m < 0 || (m === 0 && d < 0)) {
        age--;
    }

    return age;
}

// Ask for date of birth
const input = prompt("Enter your date of birth (YYYY-MM-DD):");

if (input) {
    const age = calculateAge(input);
    alert("You are " + age + " years old.");
} else {
    alert("No date of birth entered.");
}
