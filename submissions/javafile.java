import java.util.Scanner;
public class javafile
{
	public static void main(String[] args)
	{
		Scanner ip=new Scanner(System.in);
		System.out.println("Please Enter number of elements");
		int n=ip.nextInt();
		int arr[]=new int[n];
		System.out.println("Enter elements : ");
		for(int i=0;i<n;i++)
			arr[i]=ip.nextInt();
		System.out.println("Entered Elements=");
		for(int i: arr)
			System.out.print(i+" ");
	}
}