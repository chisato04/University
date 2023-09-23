import java.util.Scanner;

public class onlyTheHundredths
    {
        public static void main(String[] args)
        {
            Scanner scanner = new Scanner(System.in);

            System.out.print("Enter a decimal number: ");
            float num = scanner.nextFloat();
            System.out.println(String.format("%.2f", num));

            scanner.close();
        }
    }