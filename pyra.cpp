#include <iostream>

void printPyramid(int height) {
    // Loop through each row
    for (int i = 0; i < height; ++i) {
        // Print leading spaces
        for (int j = 0; j < height - i - 1; ++j) {
            std::cout << " ";
        }
        // Print asterisks
        for (int k = 0; k < 2 * i + 1; ++k) {
            std::cout << "*";
        }
        // Move to next line after each row
        std::cout << std::endl;
    }
}

int main() {
    int height = 5; // Change this to adjust pyramid height
    if (height <= 0) {
        std::cout << "Height must be positive" << std::endl;
        return 1;
    }
    printPyramid(height);
    return 0;
}
