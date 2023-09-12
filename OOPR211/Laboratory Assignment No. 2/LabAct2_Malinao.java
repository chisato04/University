public class LabAct2_Malinao
{
    public static void main(String[] args)
    {
        int n1=5, n2=20, swap; //defining variables
        System.out.println("Values before exchange");
        System.out.println("value of n1: " + n1);
        System.out.println("value of n2: " + n2);

        swap=n1; //defining process
        n1=n2;
        n2=swap;
        System.out.println("Values after exchange");
        System.out.println("value of n1: " + n1);
        System.out.println("value of n2: " + swap);
    }
}