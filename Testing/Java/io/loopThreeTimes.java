import java.util.Scanner;

public class loopThreeTimes
    {
        public static void main(String[] args)
        {
            Scanner scanner = new Scanner(System.in);

            System.out.print("Enter your favorite number: ");
            int num = scanner.nextInt();
            System.out.println(num);

            for(int i = 0;i < 2; i++){
                System.out.println(num);
            }
            scanner.close();
        }
    }