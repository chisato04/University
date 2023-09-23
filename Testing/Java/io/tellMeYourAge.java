import java.util.Scanner;

public class tellMeYourAge
{
    public static void main(String[] args)
    {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Enter age: ");
        int age = scanner.nextInt();
        System.out.println("Your age is " + age);

        scanner.close();
    }
}