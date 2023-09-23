import java.util.Scanner;

public class multiplyThenSubtract
{
    public static void main(String[] args)
    {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Enter a: ");
        int a = scanner.nextInt();

        System.out.print("Enter b: ");
        int b = scanner.nextInt();

        int process = b*5 - a;

        System.out.println("Result: " + process);
        scanner.close();
    }
}