import java.util.Scanner;
public class scanner{
    public static void main(String[] args){
        String name;
        int age;

        try (Scanner my_scan = new Scanner(System.in)) {
            System.out.print("Name: ");
            name = my_scan.nextLine();

            System.out.print("Age: ");
            age = my_scan.nextInt();
        }

        System.out.print("Your name is " + name + " and you are " + age + " years old\n");
    }

    public static void close() {
    }
}