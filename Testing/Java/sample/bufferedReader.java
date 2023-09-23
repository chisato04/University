import java.io.*;
public class bufferedReader
{
    public static void main(String[] args)throws IOException
    {
        BufferedReader input = new BufferedReader(new InputStreamReader(System.in));

        String num1,num2;
        int n1,n2,sum, difference, product, quotient;

        System.out.print("Enter your first number: ");
        num1 = input.readLine();

        System.out.print("Enter 2nd number: ");
        num2 = input.readLine();

        n1 = Integer.parseInt(num1);
        n2 = Integer.parseInt(num2);
        
        sum = n1 + n2;
        difference = n1 - n2;
        product = n1 * n2;
        quotient = n1 / n2;

        System.out.println("sum = " + sum);
        System.out.println("diff = " + difference);
        System.out.println("prod = " + product);
        System.out.println("quo = " + quotient);
    }
}
