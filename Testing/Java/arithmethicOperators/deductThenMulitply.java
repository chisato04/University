package arithmethicOperators;
import java.util.Scanner;

public class deductThenMulitply
{
    public static void main(String[] args)
    {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Enter a: ");
        int a = scanner.nextInt();

        System.out.print("Enter b: ");
        int b = scanner.nextInt();

        System.out.print("Enter c: ");
        int c = scanner.nextInt();

        int asd = (a-b)*c;

        System.out.println("Result: " + asd);

        scanner.close();
    }
}