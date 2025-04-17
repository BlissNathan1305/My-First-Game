def get_single_digit_input(prompt):
    """Gets valid single-digit input from the user."""
    while True:
        user_input = input(prompt)
        # Check if input is exactly one character AND if that character is a digit
        if len(user_input) == 1 and user_input.isdigit():
            return int(user_input) # Convert to integer and return
        else:
            print("Invalid input. Please enter exactly one digit (0-9).")

# --- Main part of the script ---
print("--- Add Two Digits ---")

# Get the first valid digit
digit1 = get_single_digit_input("Enter the first digit (0-9): ")

# Get the second valid digit
digit2 = get_single_digit_input("Enter the second digit (0-9): ")

# Calculate the sum (we know they are valid integers now)
total_sum = digit1 + digit2

# Print the result
print(f"\nThe sum of {digit1} and {digit2} is: {total_sum}")