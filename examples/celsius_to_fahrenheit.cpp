#include <iostream>

void celsiusToFahrenheit() {
    double celsius;
    std::cout << "Enter temperature in Celsius: ";
    std::cin >> celsius;
    double fahrenheit = (celsius * 9.0/5.0) + 32.0;
    std::cout << "Temperature in Fahrenheit: " << fahrenheit << "°F" << std::endl;
}

void fahrenheitToCelsius() {
    double fahrenheit;
    std::cout << "Enter temperature in Fahrenheit: ";
    std::cin >> fahrenheit;
    double celsius = (fahrenheit - 32.0) * 5.0/9.0;
    std::cout << "Temperature in Celsius: " << celsius << "°C" << std::endl;
}

int main() {
    int choice;
    std::cout << "Temperature Conversion Tool\n";
    std::cout << "1. Convert Celsius to Fahrenheit\n";
    std::cout << "2. Convert Fahrenheit to Celsius\n";
    std::cout << "Choose an option (1 or 2): ";
    std::cin >> choice;

    switch (choice) {
        case 1:
            celsiusToFahrenheit();
            break;
        case 2:
            fahrenheitToCelsius();
            break;
        default:
            std::cout << "Invalid choice. Please run the program again and select 1 or 2.\n";
    }

    return 0;
}
