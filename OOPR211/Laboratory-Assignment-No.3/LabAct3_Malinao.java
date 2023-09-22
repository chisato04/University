import java.util.Scanner;

public class LabAct3_Malinao
{
    public static void main(String[] args)
    {
        // initializing variables
        byte num1, num2, num3;

        // creating a scanner
        try(Scanner scanner = new Scanner(System.in))

        { // take user input
        System.out.print("Number 1: ");
        num1 = scanner.nextByte();
        System.out.print("Number 2: ");
        num2 = scanner.nextByte();
        System.out.print("Number 3: ");
        num3 = scanner.nextByte();
        }

        // use ternary operator to find the largest integer from user input
        byte highestNum = (num1 > num2) ? (num1 > num3 ? num1 : num3) : (num2 > num3 ? num2 : num3);

        // display largest number
        System.out.println("The highest number is: " + highestNum);

        
    }
}
