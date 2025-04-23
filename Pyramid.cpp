#include <iostream>
using namespace std;

int main() {
    int rows;
    
    // Get the number of rows from the user
    cout << "Enter the number of rows for the pyramid: ";
    cin >> rows;
    
    // Check if input is valid
    if (rows <= 0) {
        cout << "Please enter a positive number." << endl;
        return 1;
    }
    
    // Loop to print the pyramid pattern
    for (int i = 1; i <= rows; i++) {
        // Print spaces before the asterisks
        for (int j = 1; j <= rows - i; j++) {
            cout << " ";
        }
        
        // Print asterisks
        for (int k = 1; k <= 2 * i - 1; k++) {
            cout << "*";
        }
        
        // Move to the next line
        cout << endl;
    }
    
    return 0;
}
