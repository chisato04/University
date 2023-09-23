import java.util.Scanner;

public class multiply
{
    public static void main(String[] args)
    {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Enter first number: ");
        float num1 = scanner.nextFloat();

        System.out.print("Enter second number: ");
        float num2 = scanner.nextFloat();

        System.out.print("Enter third number: ");
        float num3 = scanner.nextFloat();

        float product = num1 * num2 * num3;

        System.out.println(String.format("Product: %.2f", product));

        scanner.close();
    }
}