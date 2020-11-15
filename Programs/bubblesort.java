import java.util.Scanner;
class BubbleSort{
	public static void main(String args[]){
		Scanner sc = new Scanner(System.in);
		System.out.print("Enter Number Of Element : ");
		int n = sc.nextInt();
		int a[] = new int[n];
		System.out.print("Enter n Elements\n");
		for(int i = 0; i < n; i++){
			a[i] = sc.nextInt();
		}
		for(int i = 0; i < n; i++){
			for(int j = 0; j < n - i - 1; j++){
				if(a[j] > a[j+1]){
					int temp = a[j];
					a[j] = a[j+1];
					a[j+1] = temp;
				}
			}
		}
		System.out.print("Sorted Array\n");
		for(int i = 0; i < n; i++){
			System.out.print(" "+a[i]);
		}
	}
}