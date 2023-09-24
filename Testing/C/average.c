#include<stdio.h>

int main()
{
    double average, sum, quiz1, quiz2, quiz3;

    printf("Enter quiz 1 score: ");
    scanf("%lf", &quiz1);

    printf("Enter quiz 2 score: ");
    scanf("%lf", &quiz2);

    printf("Enter quiz 3 score: ");
    scanf("%lf", &quiz3);

    sum = quiz1 + quiz2 + quiz3;
    average = sum/3;

    printf("Average: %.2lf", average);

    return 0;
}

