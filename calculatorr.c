#include <stdio.h>

int main() {

  char operator;
  double first_no, second_no;
  
  printf("Enter an operator (+, -, *, /): ");
  scanf("%c", &operator);
  
  printf("Enter two operands: ");
  scanf("%lf %lf", &first_no, &second_no);

  switch (operator) {
    case '+':
      printf("%.1lf + %.1lf = %.1lf", first_no, second_no, first_no + second_no);
      break;
    case '-':
      printf("%.1lf - %.1lf = %.1lf", first_no, second_no, first_no - second_no);
      break;
    case '*':
      printf("%.1lf * %.1lf = %.1lf",first_no, second_no, first_no * second_no);
      break;
    case '/':
      printf("%.1lf / %.1lf = %.1lf",first_no, second_no, first_no / second_no);
      break;
    
    default:
      printf("Please enter correct operator: ");
  }

  return 0;
}