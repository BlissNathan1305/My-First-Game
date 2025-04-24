#include <iostream>
using namespace std;

int main() {
    double num1, num2;
    char op;
    char choice;

    do {
        cout << "\nEnter first number: ";
        cin >> num1;

        cout << "Enter operator (+, -, *, /, %): ";
        cin >> op;

        cout << "Enter second number: ";
        cin >> num2;

        switch (op) {
            case '+':
                cout << "Result: " << num1 + num2 << endl;
                break;
            case '-':
                cout << "Result: " << num1 - num2 << endl;
                break;
            case '*':
                cout << "Result: " << num1 * num2 << endl;
                break;
            case '/':
                if (num2 == 0)
                    cout << "Error: Cannot divide by zero!" << endl;
                else
                    cout << "Result: " << num1 / num2 << endl;
                break;
            case '%':
                if (static_cast<int>(num2) == 0)
                    cout << "Error: Cannot modulus by zero!" << endl;
                else
                    cout << "Result: " << static_cast<int>(num1) % static_cast<int>(num2) << endl;
                break;
            default:
                cout << "Invalid operator!" << endl;
        }

        cout << "Do you want to perform another operation? (y/n): ";
        cin >> choice;

    } while (choice == 'y' || choice == 'Y');

    cout << "Thanks for using the calculator!" << endl;
    return 0;
}
