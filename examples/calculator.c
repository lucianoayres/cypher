#include <stdio.h>

int main() {
    double num1, num2;
    char operator;

    printf("Simple Calculator\n");
    printf("Enter an operation in the format: number1 operator number2 (e.g., 5 + 3)\n");
    printf("Supported operators: +, -, *, /\n");

    // Take user input
    printf("Enter your calculation: ");
    scanf("%lf %c %lf", &num1, &operator, &num2);

    // Perform the operation
    switch (operator) {
        case '+':
            printf("%.2lf + %.2lf = %.2lf\n", num1, num2, num1 + num2);
            break;
        case '-':
            printf("%.2lf - %.2lf = %.2lf\n", num1, num2, num1 - num2);
            break;
        case '*':
            printf("%.2lf * %.2lf = %.2lf\n", num1, num2, num1 * num2);
            break;
        case '/':
            if (num2 != 0) {
                printf("%.2lf / %.2lf = %.2lf\n", num1, num2, num1 / num2);
            } else {
                printf("Error: Division by zero is not allowed.\n");
            }
            break;
        default:
            printf("Error: Unsupported operator.\n");
            break;
    }

    return 0;
}
