import java.util.Scanner;

public class favoriteColor
    {
        public static void main(String[] args)
        {
            Scanner scanner = new Scanner(System.in);

            System.out.print("Enter your favorite color: ");
            String color = scanner.nextLine();
            System.out.print("Your favorite color is " + color + ". That's a great choice!");

            scanner.close();
        }
    }