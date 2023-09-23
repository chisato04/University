import java.util.Scanner;

public class quotient
{
    public static void main(String[] args)
    {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Enter first number: ");
        float num1 = scanner.nextFloat();

        System.out.print("Enter second number: ");
        float num2 = scanner.nextFloat();

        float quo = num1 / num2;

        System.out.print(String.format("Quotient: %.2f", quo));
        scanner.close();
    }
}