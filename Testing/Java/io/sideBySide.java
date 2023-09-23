import java.util.Scanner;

public class sideBySide
    {
        public static void main(String[] args)
        {
            Scanner scanner = new Scanner(System.in);

            System.out.print("Enter first integer: ");
            int num1 = scanner.nextInt();

            System.out.print("Enter second integer: ");
            int num2 = scanner.nextInt();

            System.out.println(num1 +" "+ num2);

            scanner.close();
        }
    }