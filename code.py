# Get input for the first digit (as a string)
digit_str1 = input("Enter the first digit: ")

# Get input for the second digit (as a string)
digit_str2 = input("Enter the second digit: ")

try:
    # Convert the input strings to integers
    num1 = int(digit_str1)
    num2 = int(digit_str2)

    # Check if they are actually single digits (0-9)
    # This check is optional based on how strict you want to be
    if 0 <= num1 <= 9 and 0 <= num2 <= 9:
        # Calculate the sum
        total_sum = num1 + num2

        # Print the result
        print(f"The sum of {num1} and {num2} is: {total_sum}")
    else:
        print("Error: Please enter single digits between 0 and 9.")

except ValueError:
    print("Invalid input. Please enter numeric digits only.")