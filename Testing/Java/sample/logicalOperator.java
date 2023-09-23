import java.util.Scanner;

public class logicalOperator {
    public static void main(String[] args){
        int grade;
        String status="";

        try (Scanner input = new Scanner(System.in)) {
            System.out.print("Enter grade: ");
            grade = input.nextInt();
        }

        status = (grade >= 75?"Pass":"Fail");

        System.out.println(status);
        scanner.close();
    }
    
}
