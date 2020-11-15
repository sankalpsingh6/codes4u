#include <stdio.h>
#include <conio.h>

void main(){
int *arr,n;
int i,j,t;
clrscr();
printf("Enter Number Of Element : ");
scanf("%d",&n);
arr = (int*)malloc(n * sizeof(int));
printf("Enter n Elements\n");
for(i = 0; i < n; i++){
scanf("%d",(arr+i));
}
//Sorting Array
for(i = 0; i < n; i++){
for(j = 0; j < n - i - 1; j++){
if(*(arr+j) > *(arr+j+1)){
t = *(arr+j);
*(arr+j) = *(arr+j+1);
*(arr+j+1) = t;
}
}
}
printf("Sorted Array\n");
for(i = 0; i < n; i++){
printf("%d ",*(arr+i));
}
getch();
}