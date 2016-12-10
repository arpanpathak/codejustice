import java.io.*;
public class Code{
	public static void main(String[] args) throws Exception
	{
		BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
		String temp[]=br.readLine().split(" ");
		System.out.println(Integer.parseInt(temp[0])+Integer.parseInt(temp[1]));
	}
}